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
require_once('include/formbase.php');






$focus = new ContractType();

$focus->retrieve($_POST['record']);
if(!$focus->ACLAccess('Save')){
	ACLController::displayNoAccess(true);
	sugar_cleanup(true);
}

$check_notify = FALSE;
foreach($focus->column_fields as $field) {
	if(isset($_POST[$field])) {
		$value = $_POST[$field];
		$focus->$field = $value;
	}
}

foreach($focus->additional_column_fields as $field) {
	if(isset($_POST[$field])) {
		$value = $_POST[$field];
		$focus->$field = $value;

	}
}
$return_id=$focus->save($check_notify);
$GLOBALS['log']->debug("Saved record with id of ".$return_id);
$location="Location: index.php?action=".$_REQUEST['return_action']."&module=".$_REQUEST['return_module']."&record=".$return_id;
if (isset($_REQUEST['edit'])) $location.="&edit=".$_REQUEST['edit'];
if (isset($_REQUEST['isDuplicate'])) $location.="&isDuplicate=".$_REQUEST['isDuplicate'];
header($location);
?>
