<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');

class ViewDropdowns extends SugarView
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
		$smarty = new Sugar_Smarty();
		
 		if (isset($_REQUEST['refreshTree']))
		{
			require_once ('modules/ModuleBuilder/Module/DropDownTree.php');
			$mbt = new DropDownTree();
			$ajax->addSection('west', $mbt->getName(), $mbt->fetchNodes());
			$smarty->assign('refreshTree',true);
		}
                
        global $mod_strings;
        $ajax->addCrumb($mod_strings['LBL_DROPDOWNEDITOR'], 'ModuleBuilder.main("dropdowns")');
        
        require_once('modules/ModuleBuilder/Module/DropDownBrowser.php');
        $dd = new DropDownBrowser();
        
        $smarty->assign('LBL_BTN_ADDDROPDOWN',translate('LBL_BTN_ADDDROPDOWN'));
        $smarty->assign('dropdowns', $dd->getNodes());
		$smarty->assign('deleteImage', SugarThemeRegistry::current()->getImage( 'delete_inline', ''));
		$smarty->assign('editImage', SugarThemeRegistry::current()->getImage( 'edit_inline', ''));
		$smarty->assign('action', 'savedropdown');
		

		$ajax->addSection('center', $GLOBALS['mod_strings']['LBL_DROPDOWNEDITOR'], $smarty->fetch('modules/ModuleBuilder/tpls/MBModule/dropdowns.tpl') );
 		echo $ajax->getJavascript();
 	}
}