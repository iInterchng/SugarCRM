<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');

class ViewModule extends SugarView
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
 		$smarty = new Sugar_Smarty();

		require_once('modules/ModuleBuilder/MB/ModuleBuilder.php');
		$mb = new ModuleBuilder();
		$mb->getPackage($_REQUEST['view_package']);
		$package = $mb->packages[$_REQUEST['view_package']];
		$module_name = (!empty($_REQUEST['view_module']))?$_REQUEST['view_module']:'';
		$package->getModule($module_name);
		$this->module = $package->modules[$module_name];
		$this->loadPackageHelp($module_name);
		
		// set up the list of either available types for a new module, or implemented types for an existing one
        $types = (empty($module_name)) ? MBModule::getTypes() : $this->module->mbvardefs->templates ;
        
        foreach( $types as $type=>$definition)
        {
            $translated_type[$type]=translate('LBL_TYPE_'.strtoupper($type),'ModuleBuilder');
        }
        natcasesort($translated_type);
        $smarty->assign('types',$translated_type);
		
		$smarty->assign('package', $package);
		$smarty->assign('module', $this->module);
		$smarty->assign('mod_strings', $mod_strings);

		$ajax = new AjaxCompose();
		$ajax->addCrumb($GLOBALS['mod_strings']['LBL_MODULEBUILDER'], 'ModuleBuilder.main("mb")');
		$ajax->addCrumb(' '. $package->name,'ModuleBuilder.getContent("module=ModuleBuilder&action=package&package='.$package->name.'")');
		if(empty($module_name))$module_name = translate('LBL_NEW_MODULE', 'ModuleBuilder');
		$ajax->addCrumb($module_name, '');
		$html=$smarty->fetch('modules/ModuleBuilder/tpls/MBModule/module.tpl');
		if(!empty($_REQUEST['action']) && $_REQUEST['action']=='SaveModule')
			$html .="<script>ModuleBuilder.treeRefresh('ModuleBuilder')</script>";
		$ajax->addSection('center', translate('LBL_SECTION_MODULE', 'ModuleBuilder'), $html);
		
		echo $ajax->getJavascript();
 	}
 	
 	function loadPackageHelp(
 	    $name
 	    )
 	{
        $this->module->help['default'] = (empty($name))?'create':'modify';
        $this->module->help['group'] = 'module';
 	}
}