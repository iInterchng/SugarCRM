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





$focus = new EmailMarketing();

if(!isset($_REQUEST['record'])) {
	sugar_die("A record number must be specified to delete the marketing campaign.");
}
$focus->retrieve($_REQUEST['record']);
if(!$focus->ACLAccess('Delete')){
	ACLController::displayNoAccess(true);
	sugar_cleanup(true);
}
$focus->mark_deleted($_REQUEST['record']);

if(isset($_REQUEST['record']))
{
	$query = "DELETE FROM emailman WHERE marketing_id ='" . $_REQUEST['record'] ."'";
	$focus->db->query($query);
}

header("Location: index.php?module=".$_REQUEST['return_module']."&action=".$_REQUEST['return_action']."&record=".$_REQUEST['return_id']);
?>