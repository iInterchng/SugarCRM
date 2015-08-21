<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/

global $theme;










////////////////////Maybe move to seperate function////////////////////
include_once('modules/WorkFlowTriggerShells/MetaArray.php');
///////////////////////////////////////////////////////////////////////

global $app_strings;
global $app_list_strings;
global $mod_strings;
global $sugar_version, $sugar_config;

global $urlPrefix;
global $currentModule;


$workflow_object = new WorkFlow();
if(isset($_REQUEST['workflow_id']) && isset($_REQUEST['workflow_id'])) {
    $workflow_object->retrieve($_REQUEST['workflow_id']);
} else {
	sugar_die("You shouldn't be here");
}

$focus = new WorkFlowTriggerShell();

if(isset($_REQUEST['record']) && isset($_REQUEST['record'])) {
    $focus->retrieve($_REQUEST['record']);
}




////////////////////////////////////////////////////////
// Start the output
////////////////////////////////////////////////////////
	$form =new XTemplate ('modules/WorkFlowTriggerShells/CreateStep1.html');
	$GLOBALS['log']->debug("using file modules/WorkFlowTriggerShells/CreateStep1.html");
//Bug 12335: We need to include the javascript language file first. 
        if(!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $GLOBALS['current_language'] . '.js')) {
            require_once('include/language/jsLanguage.php');
            jsLanguage::createAppStringsCache($GLOBALS['current_language']);
        }
        $javascript_language_files = '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['sugar_version'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
        if(!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $this->module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once('include/language/jsLanguage.php');
                jsLanguage::createModuleStringsCache($this->module, $GLOBALS['current_language']);
        }
        $javascript_language_files .= '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $this->module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['sugar_version'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';

	
        $the_javascript  = "<script type='text/javascript' language='JavaScript'>\n";
        $the_javascript .= "function set_return() {\n";
        $the_javascript .= "    window.opener.document.EditView.submit();";
        $the_javascript .= "}\n";
        $the_javascript .= "</script>\n";	
//BEGIN - WFLOW PLUGINS INFORMATION//////
global $process_dictionary;
$plugin_array = get_plugin("workflow", "trigger_createstep1", $focus);
if(!empty($plugin_array)){
	$form->assign("PLUGIN_JAVASCRIPT1", $plugin_array['jscript_part1']);
	$form->assign("PLUGIN_JAVASCRIPT2", $plugin_array['jscript_part2']);
}
//END - WFLOW PLUGINS INFORMATION//////	
	
	$form->assign("MOD", $mod_strings);
	$form->assign("APP", $app_strings);
	$form->assign("JAVASCRIPT_LANGUAGE_FILES", $javascript_language_files);
	$form->assign("MODULE_NAME", $currentModule);
	$form->assign("GRIDLINE", $gridline);
	$form->assign("SET_RETURN_JS", $the_javascript);	
 
	$form->assign("SUGAR_VERSION", $sugar_version);
	$form->assign("JS_CUSTOM_VERSION", $sugar_config['js_custom_version']);

	$form->assign("BASE_MODULE", $workflow_object->base_module);
	$form->assign("WORKFLOW_ID", $workflow_object->id);
	$form->assign("PARENT_ID", $workflow_object->id);
	$form->assign("ID", $focus->id);
	$form->assign("FIELD", $focus->field);
	$form->assign("REL_MODULE", $focus->rel_module);
	
	
	if(!empty($workflow_object->type) && $workflow_object->type=="Normal"){
		$meta_array_type = "normal_trigger";
	} else {
		$meta_array_type = "time_trigger";
	}		
	$form->assign("META_FILTER_NAME", $meta_array_type);


 	
insert_popup_header($theme);

$form->parse("embeded");
$form->out("embeded");


//////////New way of processing page	
	require_once('include/ListView/ProcessView.php');
	$ProcessView = new ProcessView($workflow_object, $focus);
	
	//Check multi_trigger filter conditions
	if(!empty($_REQUEST['frame_type']) && $_REQUEST['frame_type']=="Secondary"){
		$ProcessView->add_filter = true;
		$form->assign("FRAME_TYPE", $_REQUEST['frame_type']);
	} else {
		$form->assign("FRAME_TYPE", "Primary");
	}		

	$ProcessView->write("TriggersCreateStep1");
	
	$form->assign("TOP_BLOCK", $ProcessView->top_block);
	$form->assign("BOTTOM_BLOCK", $ProcessView->bottom_block);


//close window and refresh parent if needed

if(!empty($_REQUEST['special_action']) && $_REQUEST['special_action'] == "refresh"){
	
	$special_javascript = "window.opener.document.DetailView.action.value = 'DetailView'; \n";
	$special_javascript .= "window.opener.document.DetailView.submit(); \n";
	$special_javascript .= "window.close();";
	$form->assign("SPECIAL_JAVASCRIPT", $special_javascript);
}	
if(!empty($_REQUEST['frame_type']) && $_REQUEST['frame_type']=="Secondary"){
			echo getClassicModuleTitle($mod_strings['LBL_FILTER_FORM_TITLE'], array($mod_strings['LBL_FILTER_FORM_TITLE'],$mod_strings['LBL_FILTER_FORM_TITLE']), false);
		} else {
			echo getClassicModuleTitle($mod_strings['LBL_TRIGGER_FORM_TITLE'], array($mod_strings['LBL_TRIGGER_FORM_TITLE'],$mod_strings['LBL_TRIGGER_FORM_TITLE']), false);
		}		
$form->parse("main");
$form->out("main");

?>

<?php insert_popup_footer(); ?>
