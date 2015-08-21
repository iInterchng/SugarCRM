<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('modules/Administration/Forms.php');
require_once('modules/Configurator/Configurator.php');
require_once('include/MVC/View/SugarView.php');
        
class AdministrationViewThemesettings extends SugarView 
{	
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".$mod_strings['LBL_MODULE_NAME']."</a>",
    	   $mod_strings['LBL_THEME_SETTINGS']
    	   );
    }
    
	/**
     * @see SugarView::process()
     */
    public function process()
    {
        global $current_user;
        if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");
        
        if (isset($_REQUEST['disabled_themes']) ) {
            $toDecode = html_entity_decode  ($_REQUEST['disabled_themes'], ENT_QUOTES);
			$disabledThemes = json_decode($toDecode, true);
			if ( ($key = array_search(SugarThemeRegistry::current()->__toString(),$disabledThemes)) !== FALSE ) {
                unset($disabledThemes[$key]);
            }
            $_REQUEST['disabled_themes'] = implode(',',$disabledThemes);
            $configurator = new Configurator();
            $configurator->config['disabled_themes'] = $_REQUEST['disabled_themes'];
            $configurator->config['default_theme'] = $_REQUEST['default_theme'];
            $configurator->handleOverride();
            echo "true";
        } else {
        	parent::process();
        }
    }
    
 	/** 
     * display the form
     */
 	public function display()
    {
        global $mod_strings, $app_strings, $current_user;
        
        if ( !is_admin($current_user) )
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 
            
        $enabled = array();
        foreach(SugarThemeRegistry::availableThemes() as $dir => $theme)
        {
        	$enabled[] = array("theme" => $theme, "dir" => $dir);
        }
    	$disabled = array();
        foreach(SugarThemeRegistry::unAvailableThemes() as $dir => $theme)
        {
        	$disabled[] = array("theme" => $theme, "dir" => $dir);
        }
        $this->ss->assign("THEMES", get_select_options_with_id(SugarThemeRegistry::allThemes(), $GLOBALS['sugar_config']['default_theme']));
        $this->ss->assign('enabled_modules', json_encode($enabled));
        $this->ss->assign('disabled_modules', json_encode($disabled));
        $this->ss->assign('mod', $mod_strings);
        $this->ss->assign('APP', $app_strings);
        $this->ss->assign('currentTheme', SugarThemeRegistry::current());
        
        echo $this->getModuleTitle(false);
        echo $this->ss->fetch('modules/Administration/templates/themeSettings.tpl');
    }
}
