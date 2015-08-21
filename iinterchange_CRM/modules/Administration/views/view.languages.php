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

class ViewLanguages extends SugarView
{
    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;

    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".$mod_strings['LBL_MODULE_NAME']."</a>",
    	   $mod_strings['LBL_MANAGE_LANGUAGES']
    	   );
    }

    /**
	 * @see SugarView::preDisplay()
	 */
	public function preDisplay()
	{
	    global $current_user;

	    if (!is_admin($current_user)) {
	        sugar_die("Unauthorized access to administration.");
        }
	}

    /**
	 * @see SugarView::display()
	 */
	public function display()
	{
        global $mod_strings;
        global $app_list_strings;
        global $app_strings;
        global $sugar_config;
        
        $disabled = array();
        $disabled_list = array();
        if ( isset($sugar_config['disabled_languages'])) {
            if(!is_array($sugar_config['disabled_languages'])){
                $disabled_list = array_flip(explode(',', $sugar_config['disabled_languages']));
            }else{
                 $disabled_list = array_flip($sugar_config['disabled_languages']);
            }
        }
        foreach ($sugar_config['languages'] as $key=>$value)
        {
            if(isset($disabled_list[$key])) {
                $disabled[] = array("module" => $key, 'label' => $value);
            } else {
                $enabled[] = array("module" => $key, 'label' => $value);
            }
        }

        $this->ss->assign('APP', $GLOBALS['app_strings']);
        $this->ss->assign('MOD', $GLOBALS['mod_strings']);
        $this->ss->assign('enabled_langs', json_encode($enabled));
        $this->ss->assign('disabled_langs', json_encode($disabled));
        $this->ss->assign('title',$this->getModuleTitle(false));

        echo $this->ss->fetch('modules/Administration/templates/Languages.tpl');
    }
}
