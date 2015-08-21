<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/






global $mod_strings;
global $app_strings;
global $app_list_strings;
global $focus, $support_coming_due, $support_expired;
$focus = new WorkFlow();
if(!empty($_REQUEST['record'])) {
    $result = $focus->retrieve($_REQUEST['record']);
    if($result == null)
    {
    sugar_die($app_strings['LBL_UNAUTH_ADMIN']);
        }
}
else {
	header("Location: index.php?module=WorkFlow&action=index");
}


if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
	$focus->id = "";
}
echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'], array($mod_strings['LBL_MODULE_TITLE'],$focus->name), true);


$GLOBALS['log']->info("WorkFlow detail view");

$xtpl=new XTemplate ('modules/WorkFlow/DetailView.html');
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);
$xtpl->assign("GRIDLINE", $gridline);
$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign('ID', $focus->id);
$xtpl->assign('NAME', $focus->name);
$xtpl->assign("DESCRIPTION", nl2br($focus->description));

if ($focus->status == 'on') $xtpl->assign("STATUS", "checked");

//UI Parameters

$xtpl->assign('TYPE', $app_list_strings['wflow_type_dom'][$focus->type]);

$xtpl->assign('BASE_MODULE', $focus->base_module);

global $current_user;
/*
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){

	$xtpl->assign("ADMIN_EDIT","<a href='index.php?action=index&module=DynamicLayout&from_action=".$_REQUEST['action'] ."&from_module=".$_REQUEST['module'] ."&record=".$_REQUEST['record']. "'>".SugarThemeRegistry::current()->getImage("EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>");
}
*/

// adding custom fields:
require_once('modules/DynamicFields/templates/Files/DetailView.php');


$xtpl->parse("main");
$xtpl->out("main");


//Sub Panels

$sub_xtpl = $xtpl;
$old_contents = ob_get_contents();
ob_end_clean();

//if(array_key_exists('WorkFlowTriggers', $modListHeader)){
if($sub_xtpl->var_exists('subpanel', 'SUBTRIGGERS')){
	ob_start();
echo "<p>\n";

// Now get the list of cases that match this one.
$focus_list = $focus->get_linked_beans('triggers','WorkFlowTriggerShell');
include('modules/WorkFlowTriggerShells/SubPanelView.php');

echo "</p>\n";
$subtriggers =  ob_get_contents();
ob_end_clean();
}
//}

echo "ALERT SUB PANEL<BR>";

echo "ACTION SUB PANEL<BR>";


ob_start();
echo $old_contents;

if(!empty($subtriggers))$sub_xtpl->assign('SUBTRIGGERS', $subtriggers);


$sub_xtpl->parse("subpanel");
$sub_xtpl->out("subpanel");

?>
