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


$focus = new Email();

if(!isset($_REQUEST['record']))
	sugar_die("A record number must be specified to delete the email.");
$focus->retrieve($_REQUEST['record']);
$email_type = $focus->type;
if(!$focus->ACLAccess('Delete')){
	ACLController::displayNoAccess(true);
	sugar_cleanup(true);
}
$focus->mark_deleted($_REQUEST['record']);

// make sure assigned_user_id is set - during testing this isn't always set
if (!isset($_REQUEST['assigned_user_id'])) {
	$_REQUEST['assigned_user_id'] = '';
}

if ($email_type == 'archived') {
	global $current_user;
	$loc = 'Location: index.php?module=Emails&action=ListView&all=true';
} else {
$loc = 'Location: index.php?module='.$_REQUEST['return_module'].'&action='.$_REQUEST['return_action'].'&record='.$_REQUEST['return_id'].'&type='.$_REQUEST['type'].'&assigned_user_id='.$_REQUEST['assigned_user_id'];
}

header($loc);
?>
