<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





$header_text = '';
global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user;
global $current_language;
$current_module_strings = return_module_language($current_language, 'Schedulers');

$focus = new Scheduler();
$focus->checkCurl();

$where = '';
$limit = '0';
$varName = $focus->object_name; //'Scheduler'
if(!empty($_REQUEST['Schedulers_SCHEDULER_ORDER_BY'])) {
	$orderBy = $_REQUEST['Schedulers_SCHEDULER_ORDER_BY'];
} else {
	$orderBy = $focus->order_by;
}
$allowByOverride = true;

$listView = new ListView();
$listView->show_mass_update = false;  // don't want to mass delete all Schedules
$listView->force_mass_update = true;  // show checkboxes
$listView->show_mass_update_form = false; // don't want the mass update
$listView->initNewXTemplate('modules/Schedulers/ListView.html', $current_module_strings);
$listView->setHeaderTitle($current_module_strings['LBL_LIST_TITLE']);
$listView->setQuery($where, $limit, $orderBy, $varName, $allowByOverride);
$listView->xTemplateAssign("REMOVE_INLINE_PNG", SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" alt="'.$app_strings['LNK_REMOVE'].'" border="0"'));
$listView->processListView($focus, "main", "SCHEDULER");

$focus->displayCronInstructions(); 
?>
