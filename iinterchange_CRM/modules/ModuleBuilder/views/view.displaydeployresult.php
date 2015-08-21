<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');

class ViewDisplaydeployresult extends SugarView 
{	
	function ViewDisplaydeployresult(){
		$this->show_header = false;
		$this->show_title = false;
 		$this->show_subpanels = false;
 		$this->show_search = false;
 		$this->show_footer = true;
 		$this->show_javascript = true;
 		$this->view_print = false;
	}
	
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
		$message = $this->view_object_map['message'];
		echo $message."<script type='text/javascript' src='include/javascript/sugar_grp1_yui.js?s=".$GLOBALS['sugar_version']."&c=".$GLOBALS['sugar_config']['js_custom_version']."'></script><script type='text/javascript' language='Javascript'>YAHOO.util.Connect.asyncRequest('GET', 'index.php?module=Administration&action=RebuildRelationship&silent=true');</script>";	
	}
}
