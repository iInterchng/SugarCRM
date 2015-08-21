<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');
class ViewExportcustomizations extends SugarView
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
 		global $current_user, $mod_strings;
 		$smarty = new Sugar_Smarty();
 		$mb = new MBPackage("packageCustom");
 		$mod=$mb->getCustomModules();
 		foreach($mod as $key => $value){
 		    $modules[]=$key;
 		    $custom[]=$value;
 		}
 		$nb_mod = count($modules);
 		$smarty->assign('mod_strings', $mod_strings);
 		$smarty->assign('modules', $mod);
 		$smarty->assign('custom', $custom);
 		$smarty->assign('nb_mod', $nb_mod);
 		$smarty->assign('defaultHelp', 'exportHelp');
 		$smarty->assign('moduleList',$GLOBALS['app_list_strings']['moduleList']);  
 		$smarty->assign('moduleList',$GLOBALS['app_list_strings']['moduleList']);  
		$ajax = new AjaxCompose();
		$ajax->addCrumb($mod_strings['LBL_STUDIO'], 'ModuleBuilder.getContent("module=ModuleBuilder&action=wizard")');
		$ajax->addSection('center', $mod_strings['LBL_EC_TITLE'],$smarty->fetch('modules/ModuleBuilder/tpls/exportcustomizations.tpl'));
		echo $ajax->getJavascript();
 	}
}