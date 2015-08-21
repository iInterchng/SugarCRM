<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



require_once('include/formbase.php');

$focus = new Holiday();
global $current_user;

$focus->disable_row_level_security = true;	
$focus->retrieve($_POST['record']);

$focus = populateFromPost('', $focus);

if ($_REQUEST['return_module'] != 'Project'){
	$focus->person_id = $_REQUEST['relate_id'];
	$focus->person_type = "Users";
}
else if ($_REQUEST['return_module'] == 'Project'){
	$focus->related_module = 'Project';
	$focus->related_module_id = $_REQUEST['relate_id'];
}

$check_notify = FALSE;

$focus->save($check_notify);
$return_id = $Document->id;

if(isset($_POST['return_module']) && $_POST['return_module'] != "") $return_module = $_POST['return_module'];
else $return_module = "Holidays";
if(isset($_POST['return_action']) && $_POST['return_action'] != "") $return_action = $_POST['return_action'];
else $return_action = "DetailView";
if(isset($_POST['return_id']) && $_POST['return_id'] != "") $return_id = $_POST['return_id'];

$GLOBALS['log']->debug("Saved record with id of ".$return_id);

handleRedirect($return_id,'Holidays');
?>
