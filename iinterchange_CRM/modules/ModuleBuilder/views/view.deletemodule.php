<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');
require_once('modules/ModuleBuilder/MB/ModuleBuilder.php');
 
class Viewdeletemodule extends SugarView
{
/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   translate('LBL_MODULE_NAME','Administration'),
    	   ModuleBuilderController::getModuleTitle(),
    	   );
    }

	function display()
	{
 		$ajax = new AjaxCompose();
		$ajax->addSection('center', 'Module Deleted', $_REQUEST['module'] . ' was deleted from ' . $_REQUEST['package']);
		echo $ajax->getJavascript(); 
 	}
}