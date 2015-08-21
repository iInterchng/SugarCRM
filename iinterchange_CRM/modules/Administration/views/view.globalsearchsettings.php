<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class AdministrationViewGlobalsearchsettings extends SugarView 
{
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   $mod_strings['LBL_GLOBAL_SEARCH_SETTINGS']
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
    	global $mod_strings;
    	
        echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr><td colspan="100"><h2>' . $this->getModuleTitle(false) . 
        '</h2></td></tr><tr><td colspan="100">' .
		$mod_strings['LBL_GLOBAL_SEARCH_SETTINGS_TITLE'] .
		'</td></tr><tr><td><br></td></tr><tr><td colspan="100">';
			
		//echo $this->getModuleTitle();
    	require_once('modules/Home/UnifiedSearchAdvanced.php');
		$usa = new UnifiedSearchAdvanced();
		
		
		
		echo $usa->modifyGlobalSearchSettings();
    }
}
?>