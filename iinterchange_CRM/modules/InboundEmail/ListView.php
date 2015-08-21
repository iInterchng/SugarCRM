<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $theme;
global $mod_strings;
global $app_list_strings;
global $current_user;

$focus = new InboundEmail();
$focus->checkImap();

///////////////////////////////////////////////////////////////////////////////
////	I-E SYSTEM SETTINGS
////	handle saving settings
if(isset($_REQUEST['save']) && $_REQUEST['save'] == 'true') {
	$focus->saveInboundEmailSystemSettings('Case', $_REQUEST['inbound_email_case_macro']);
}
////	END I-E SYSTEM SETTINGS
///////////////////////////////////////////////////////////////////////////////

if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
	$ListView->setHeaderText("<a href='index.php?action=index&module=DynamicLayout&from_action=ListView&from_module=".$_REQUEST['module'] ."'>".SugarThemeRegistry::current()->getImage("EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>" );
}

$where = '';
$limit = '0';
$orderBy = 'date_entered';
$varName = $focus->object_name;
$allowByOverride = true;

$listView = new ListView();
$listView->initNewXTemplate('modules/InboundEmail/ListView.html', $mod_strings);
$listView->setHeaderTitle($mod_strings['LBL_MODULE_TITLE']);

echo $focus->getSystemSettingsForm();
$listView->show_export_button = false;
$listView->ignorePopulateOnly = TRUE; //Always show all records, ignore save_query performance setting.
$listView->setQuery($where, $limit, $orderBy, 'InboundEmail', $allowByOverride);
$listView->xTemplateAssign("EDIT_INLINE_IMG", SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"')); 
$listView->processListView($focus, "main", "InboundEmail");

