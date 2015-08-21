<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class AdministrationViewEnablewirelessmodules extends SugarView 
{	
 	/**
	 * @see SugarView::preDisplay()
	 */
	public function preDisplay()
    {
        if(!is_admin($GLOBALS['current_user']))
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 
    }
    
    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".$mod_strings['LBL_MODULE_NAME']."</a>",
    	   translate('LBL_WIRELESS_MODULES_ENABLE')
    	   );
    }
    
    /**
	 * @see SugarView::display()
	 */
	public function display()
	{
        require_once('modules/Administration/Forms.php');
        
        global $mod_strings;
        global $app_list_strings;
        global $app_strings;
        global $current_user;
        global $theme;
        global $currentModule;
        
        $configurator = new Configurator();
        $this->ss->assign('config', $configurator->config);
        
        $enabled_modules = array();
        $disabled_modules = array();
        
        // replicate the essential part of the behavior of the private loadMapping() method in SugarController
        foreach ( array ( '','custom/') as $prefix)
        {
            if(file_exists($prefix.'include/MVC/Controller/wireless_module_registry.php')){
                require $prefix.'include/MVC/Controller/wireless_module_registry.php' ;
            }
        }
        
        foreach ( $wireless_module_registry as $e => $def )
        {
            $enabled_modules [ $e ] = empty($app_list_strings['moduleList'][$e]) ? (($e == "Employees") ? $app_strings['LBL_EMPLOYEES'] : $e) : ($app_list_strings['moduleList'][$e]);
        }
        require_once('modules/ModuleBuilder/Module/StudioBrowser.php');
        $browser = new StudioBrowser();
        $browser->loadModules();
        
        foreach ( $browser->modules as $e => $def)
        {
            if ( empty ( $enabled_modules [ $e ]))
                $disabled_modules [ $e ] = empty($app_list_strings['moduleList'][$e]) ? (($e == "Employees") ? $app_strings['LBL_EMPLOYEES'] : $e) : ($app_list_strings['moduleList'][$e]);
        }
        
        natcasesort($enabled_modules);
        natcasesort($disabled_modules);
        
        $json_enabled = array();
        foreach($enabled_modules as $mod => $label)
        {
            $json_enabled[] = array("module" => $mod, 'label' => $label);
        }
        
        $json_disabled = array();
        foreach($disabled_modules as $mod => $label)
        {
            $json_disabled[] = array("module" => $mod, 'label' => $label);
        }
        
        $this->ss->assign('enabled_modules', json_encode($json_enabled));
        $this->ss->assign('disabled_modules', json_encode($json_disabled));
        $this->ss->assign('mod', $GLOBALS['mod_strings']);
        $this->ss->assign('APP', $GLOBALS['app_strings']);
        $this->ss->assign('theme', $GLOBALS['theme']);
        
        echo getClassicModuleTitle(
                "Administration", 
                array(
                    "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
                   translate('LBL_WIRELESS_MODULES_ENABLE')
                   ), 
                false
                );
        echo $this->ss->fetch('modules/Administration/templates/enableWirelessModules.tpl');
    }
}