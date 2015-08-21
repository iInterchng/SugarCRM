<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/SugarView.php');
require_once('include/connectors/sources/SourceFactory.php');

class ViewModifyMapping extends SugarView 
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
    	   $mod_strings['LBL_MODIFY_MAPPING_TITLE']
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
		require_once('include/connectors/utils/ConnectorUtils.php');
		require_once('include/connectors/sources/SourceFactory.php');
		global $mod_strings, $app_strings;
		$this->ss->assign('mod', $mod_strings);
		$this->ss->assign('APP', $app_strings);
		$connectors = ConnectorUtils::getConnectors(true);
        foreach($connectors as $id=>$source) {
            $s = SourceFactory::getSource($id);
            $mapping = $s->getMapping();
			if(empty($mapping)) {
			    unset($connectors[$id]);
			}
		}

		$this->ss->assign('SOURCES', $connectors);
	    echo $this->getModuleTitle();
		$this->ss->display('modules/Connectors/tpls/modify_mapping.tpl');	
    }
}