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






$focus = new ProspectList();

$focus->retrieve($_POST['record']);

if (!empty($_POST['assigned_user_id']) && ($focus->assigned_user_id != $_POST['assigned_user_id']) && ($_POST['assigned_user_id'] != $current_user->id)) {
	$check_notify = TRUE;
}
else {
	$check_notify = FALSE;
}

require_once('include/formbase.php');
$focus = populateFromPost('', $focus);

$focus->save($check_notify);
$return_id = $focus->id;

if(isset($_POST['return_module']) && $_POST['return_module'] != "") $return_module = $_POST['return_module'];
else $return_module = "ProspectLists";
if(isset($_POST['return_action']) && $_POST['return_action'] != "") $return_action = $_POST['return_action'];
else $return_action = "DetailView";
if(isset($_POST['return_id']) && $_POST['return_id'] != "") $return_id = $_POST['return_id'];

if($return_action == "SaveCampaignProspectListRelationshipNew")
{
	$prospect_list_id = $focus->id;
	
	header("Location: index.php?action=$return_action&module=$return_module&record=$return_id&prospect_list_id=$prospect_list_id");
}
else
{
	$GLOBALS['log']->debug("Saved record with id of ".$return_id);
	header("Location: index.php?action=$return_action&module=$return_module&record=$return_id");
}
?>