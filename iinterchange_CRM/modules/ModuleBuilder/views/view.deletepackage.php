<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');
require_once('modules/ModuleBuilder/MB/ModuleBuilder.php');

class Viewdeletepackage extends SugarView
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
        global $mod_strings;
        
        $ajax = new AjaxCompose();
        $ajax->addSection('center', $mod_strings['LBL_PACKAGE_DELETED'], 
            str_replace('[[package]]',$_REQUEST['package'],$mod_strings['LBL_PACKAGE_WAS_DELETED']));
        echo $ajax->getJavascript();
 	}
}