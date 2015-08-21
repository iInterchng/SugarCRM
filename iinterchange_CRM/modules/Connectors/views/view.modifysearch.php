<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



require_once('include/MVC/View/SugarView.php');
require_once('include/connectors/sources/SourceFactory.php');

class ViewModifySearch extends SugarView 
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
    	   $mod_strings['LBL_MODIFY_SEARCH_TITLE']
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
		global $mod_strings, $app_strings;
		$sugar_smarty	= new Sugar_Smarty();
		$this->ss->assign('mod', $mod_strings);
		$this->ss->assign('APP', $app_strings);
		$connectors = ConnectorUtils::getConnectors();
		foreach($connectors as $id=>$source) {
			    $s = SourceFactory::getSource($id);
			    if(!$s->isEnabledInWizard()) {
			       unset($connectors[$id]);
			    }
		}		

		$this->ss->assign('SOURCES', $connectors);
	    echo $this->getModuleTitle();  	
		$this->ss->display('modules/Connectors/tpls/modify_search.tpl');	
    }
}