<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $theme;










class Popup_Picker
{
	/*
	 * 
	 */
	function Popup_Picker()
	{}
	
	function process_page()
	{
		global $theme;
		global $mod_strings;
		global $app_strings;
		global $currentModule;
		global $current_language;
		global $current_module_strings;
		if(!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/WorkFLow/' . $GLOBALS['current_language'] . '.js')) {
            require_once('include/language/jsLanguage.php');
            jsLanguage::createModuleStringsCache('WorkFlow', $GLOBALS['current_language']);
        }
        $javascript_language_files = '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/WorkFlow/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['sugar_version'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
		$current_module_strings = return_module_language($current_language, 'WorkFlowAlertShells');
		
		
		$ListView = new ListView();
		$header_text = '';
		
		if(isset($_REQUEST['workflow_id']))
		{
			$workflow = new WorkFlow();
			$workflow->retrieve($_REQUEST['workflow_id']);
			//TODO GET ALL ALERTS HERE
			//$focus_alerts_list = $workflow->get_linked_beans('wf_alerts','WorkFlowAlertShell');
			$alerts = new WorkFlowAlertShell();

			$current_module_strings = return_module_language($current_language, $alerts->module_dir);
			insert_popup_header($theme);
			$ListView->initNewXTemplate('modules/WorkFlowAlertShells/Popup_picker.html', $current_module_strings);
			$ListView->xTemplateAssign("WORKFLOW_ID", $workflow->id);
			$ListView->xTemplateAssign("JAVASCRIPT_LANGUAGE_FILES", $javascript_language_files);
			$ListView->xTemplateAssign("RETURN_URL", "&return_module=".$currentModule."&return_action=DetailView&return_id={$workflow->id}");
			$ListView->xTemplateAssign("EDIT_INLINE_PNG",  SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"'));
			$ListView->xTemplateAssign("DELETE_INLINE_PNG",  SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" alt="'.$app_strings['LNK_REMOVE'].'" border="0"'));
			$ListView->setHeaderTitle($current_module_strings['LBL_MODULE_NAME_COMBO'] . $header_text);
			//$ListView->setHeaderText($button);
			//$ListView->setQuery("workflow_alertshells.alert_type = 'Email'","","", "ALERT");
			
			$list = $alerts->get_list("", "workflow_alertshells.alert_type = 'Email'"); 
			$display_list = $this->cullFromList($list['list'], $workflow->base_module, $workflow->type);
			$ListView->processListViewTwo($display_list, "main", "ALERT");
			insert_popup_footer();
		}
	}
	
	function cullFromList($list, $base_module, $type)
	{
		$return_list = array();
		foreach($list as $alert)
		{
			if($alert->parent_base_module == $base_module && $alert->parent_type == $type)
			{
				$return_list[] = $alert;
			}
		}
		return $return_list;
	}
}

?>