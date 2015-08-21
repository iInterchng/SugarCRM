<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class ViewConnectorSettings extends SugarView 
{
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   $mod_strings['LBL_ADMINISTRATION_MAIN']
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
		
		echo $this->getModuleTitle(false);
		
		$this->ss->assign('mod', $mod_strings);
		$this->ss->assign('app', $app_strings);
		$this->ss->assign('IMG', 'themes/default/images/');
		$this->ss->display('modules/Connectors/tpls/administration.tpl');
    }
}