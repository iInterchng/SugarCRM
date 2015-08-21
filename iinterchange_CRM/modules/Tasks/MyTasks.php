<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/








global $app_strings;
global $app_list_strings;
global $current_language, $current_user, $timedate;
$current_module_strings = return_module_language($current_language, 'Tasks');

$tomorrow = $timedate->getNow()->get("+1 day")->asDb();

$ListView = new ListView();
$seedTasks = new Task();
if ($seedTasks->db->dbType=='mysql') {
	$format=array("'%Y-%m-%d'");
	$where = "tasks.assigned_user_id='". $current_user->id ."' and (tasks.status is NULL or (tasks.status!='Completed' and tasks.status!='Deferred')) ";
	$where .= "and (tasks.date_start is NULL or ";
	$where .=  " CONCAT(".db_convert("tasks.date_start","date_format",$format).", CONCAT(' ',". db_convert("tasks.time_start","time_format",$format)." ))  <=". "'".$tomorrow."')";
}
else if ($seedTasks->db->dbType=='mssql')
{
	$where = "tasks.assigned_user_id='". $current_user->id ."' and (tasks.status is NULL or (tasks.status!='Completed' and tasks.status!='Deferred')) ";
	$where .= "and (tasks.date_start is NULL or ";
	$where .=  db_convert("tasks.date_start","date_format") . ' + ' . db_convert("tasks.time_start","time_format") . " <=". "'".$tomorrow."')";
}

else if ($seedTasks->db->dbType=='oci8')
{
	$format=array("'YYYY-MM-DD'");
	$where = "tasks.assigned_user_id='". $current_user->id ."' and (tasks.status is NULL or (tasks.status!='Completed' and tasks.status!='Deferred')) ";
	$where .= "and (tasks.date_start is NULL or ";
	$where .=  " CONCAT(".db_convert("tasks.date_start","date_format",$format).", CONCAT(' ',". db_convert("tasks.time_start","time_format",$format)." ))  <=". "'".$tomorrow."')";
}

$ListView->initNewXTemplate( 'modules/Tasks/MyTasks.html',$current_module_strings);
$header_text = '';

if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){
		$header_text = "&nbsp;<a href='index.php?action=index&module=DynamicLayout&from_action=MyTasks&from_module=Tasks'>".SugarThemeRegistry::current()->getImage("EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>";
}
$ListView->setHeaderTitle($current_module_strings['LBL_LIST_MY_TASKS'].$header_text);
$ListView->setQuery($where, "", "date_due,priority desc", "TASK");
$ListView->processListView($seedTasks, "main", "TASK");
