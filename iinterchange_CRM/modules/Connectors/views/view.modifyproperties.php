<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/SugarView.php');

class ViewModifyProperties extends SugarView 
{   
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   "<a href='index.php?module=Connectors&action=ConnectorSettings'>".$mod_strings['LBL_ADMINISTRATION_MAIN']."</a>",
    	   $mod_strings['LBL_MODIFY_PROPERTIES_TITLE']
    	   );
    }
    
    /**
	 * @see SugarView::_getModuleTab()
	 */
	protected function _getModuleTab()
    {
        return 'Administration';
    }
    
    /**
	 * @see SugarView::display()
	 */
	public function display() 
	{
    	global $mod_strings, $app_strings;
		
		require_once('include/connectors/utils/ConnectorUtils.php');
		require_once('include/connectors/sources/SourceFactory.php');
		
		$this->ss->assign('mod', $mod_strings);
		$this->ss->assign('APP', $app_strings);
		$connectors = ConnectorUtils::getConnectors(true);
		$required_fields = array();
    	//Get required fields for first connector only

        $connectorsToShow = $connectors;
		foreach($connectors as $id=>$entry) {
			$s = SourceFactory::getSource($id);
			$connector_strings = ConnectorUtils::getConnectorStrings($id);
			$fields = $s->getRequiredConfigFields();
            
            if(empty($fields)){
                unset($connectorsToShow[$id]);
            }else{
                if(empty($required_fields)){
                    foreach($fields as $field_id) {
                        $label = isset($connector_strings[$field_id]) ? $connector_strings[$field_id] : $field_id;
                        $required_fields[$id][$field_id]=$label;
                    }
                }
            }
		}
		$this->ss->assign('SOURCES', $connectorsToShow);
		$this->ss->assign('REQUIRED_FIELDS', $required_fields);
	    echo $this->getModuleTitle();
		$this->ss->display('modules/Connectors/tpls/modify_properties.tpl');
    }
}