<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('modules/Schedulers/Job.php');

$header_text = '';
global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user;

$focus = new Job();
$focus->retrieve();
$focus->get_list_view_data();

//_pp($_REQUEST);
$where = '';
$limit = 20;
$varName = $focus->object_name;
$allowByOverride = true;
if(!empty($_REQUEST['Schedulers_'.$varName.'_ORDER_BY'])) {
	$orderBy = $_REQUEST['Schedulers_'.$varName.'_ORDER_BY'];
} else {
	$orderBy = $focus->order_by;
}

$listView = new ListView();
$listView->initNewXTemplate('modules/Schedulers/Scheduled.html', $mod_strings);
$listView->setHeaderTitle($mod_strings['LBL_LIST_TITLE']);
$listView->setQuery($where, $limit, $orderBy, $varName, $allowByOverride);
$listView->xTemplateAssign("REMOVE_INLINE_PNG", SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" alt="'.$app_strings['LNK_REMOVE'].'" border="0"')); 
$listView->processListView($focus, "main", "JOB");

?>