<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');
require_once('include/connectors/sources/SourceFactory.php');

class ViewDisplayProperties extends ViewList
{
 	/**
	 * @see SugarView::process()
	 */
	public function process()
	{
 		$this->options['show_all'] = false;
 		$this->options['show_javascript'] = true;
 		$this->options['show_footer'] = false;
 		$this->options['show_header'] = false;
 	    parent::process();
 	}

    /**
	 * @see SugarView::display()
	 */
	public function display()
	{
    	require_once('include/connectors/utils/ConnectorUtils.php');
    	$source = $_REQUEST['source_id'];
        $sources = ConnectorUtils::getConnectors();
        $modules_sources = ConnectorUtils::getDisplayConfig();
    	//$json = getJSONobj();

    	$enabled_modules = array();
    	$disabled_modules = array();

    	//Find all modules this source has been enabled for
    	foreach($modules_sources as $module=>$mapping) {
    		foreach($modules_sources[$module] as $entry) {
    			if($entry == $source) {
    			   $enabled_modules[$module] = $module;
    			}
    		}
   		}


    	global $moduleList, $beanList;
    	//Do filtering here?
    	$count = 0;
   		global $current_user;
		$access = get_admin_modules_for_user($current_user);
	    $d = dir('modules');
		while($e = $d->read()){
			if(substr($e, 0, 1) == '.' || !is_dir('modules/' . $e))continue;
			if(empty($enabled_modules[$e]) && file_exists('modules/' . $e . '/metadata/studio.php') && file_exists('modules/' . $e . '/metadata/detailviewdefs.php') && isset($GLOBALS [ 'beanList' ][$e]) && (in_array($e, $access) || is_admin($current_user))) // installed modules must also exist in the beanList
			{
				$disabled_modules[$e] = $e;
			}
		}

		asort($enabled_modules);
    	asort($disabled_modules);

    	//$enabled = $json->encode($enabled_modules);
    	//$disabled = $json->encode($disabled_modules);
    	//$script = "addTable('{$module}', '{$enabled}', '{$disabled}', '{$source}', '{$GLOBALS['theme']}');\n";
    	//$this->ss->assign('new_modules_sources', $modules_sources);
    	//$this->ss->assign('dynamic_script', $script);

    	$this->ss->assign('enabled_modules', $enabled_modules);
    	$this->ss->assign('disabled_modules', $disabled_modules);
    	$this->ss->assign('source_id', $source);
    	$this->ss->assign('mod', $GLOBALS['mod_strings']);
    	$this->ss->assign('APP', $GLOBALS['app_strings']);
    	$this->ss->assign('theme', $GLOBALS['theme']);
   	    $this->ss->assign('external', !empty($sources[$source]['eapm']));
   	    $this->ss->assign('externalOnly', !empty($sources[$source]['eapm']['only']));

        // We don't want to tell the user to set the properties of the connector if there aren't any
        $s = SourceFactory::getSource($source);
        $fields = $s->getRequiredConfigFields();
   	    $this->ss->assign('externalHasProperties', !empty($fields));

   	    $this->ss->assign('externalChecked', !empty($sources[$source]['eapm']['enabled'])?" checked":"");
   	    echo $this->ss->fetch('modules/Connectors/tpls/display_properties.tpl');
    }
}