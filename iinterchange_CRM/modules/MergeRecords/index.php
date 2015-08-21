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

if (isset($_REQUEST['uid'])) {
	$merge_ids = explode(',',$_REQUEST['uid']);
	// Bug 18852 - Check to make sure we have ACL Edit privledges on both records involved in the merge before proceeding
	if ( ($bean1 = SugarModule::get($_REQUEST['action_module'])->loadBean()) !== false
    	    && ($bean2 = SugarModule::get($_REQUEST['action_module'])->loadBean()) !== false ) {
        $bean1->retrieve($merge_ids[0]);
        $bean2->retrieve($merge_ids[1]);
        if ( !$bean1->ACLAccess('edit') || !$bean2->ACLAccess('edit') ) {
            ACLController::displayNoAccess();
            sugar_die('');
        }
    }
	
	 //redirect to step3.
	$_REQUEST['record']=$merge_ids[0];
	$_REQUEST['merge_module']=$_REQUEST['action_module'];
	unset($merge_ids[0]);
	$_REQUEST['mass']=$merge_ids;
}
else {
	global $beanList;
	global $beanFiles;
	$merge_ids = array();
	$bean = $beanList[$_REQUEST['return_module']];
	require_once($beanFiles[$bean]);
	$focus = new $bean();
	
	if(isset($_SESSION['export_where']) && !empty($_SESSION['export_where'])) { // bug 4679
		$where = $_SESSION['export_where'];
		$whereArr = explode (" ", trim($where));
		if ($whereArr[0] == trim('where')) {
			$whereClean = array_shift($whereArr);
		}
		$where = implode(" ", $whereArr);
	}	
	else {
		$where = '';
	}
	if(empty($order_by))$order_by = '';
	$query = $focus->create_export_query($order_by,$where);
	$result = $focus->db->query($query,true);
	
	/*
	$query = 'select * from '.$focus->table_name.' where deleted=0';
	$result = $focus->db->query($query, true, "");   
	*/
	$row = $focus->db->fetchByAssoc($result);
	
	while ($row != null) {
	    //$beanObj = new $bean;
	    array_push($merge_ids, $row['id']);
	    $row = $focus->db->fetchByAssoc($result);    
	}
	$_REQUEST['record']=$merge_ids[0];
	$_REQUEST['action']='index.php';
	$_REQUEST['merge_module']=$_REQUEST['return_module'];
	unset($merge_ids[0]);
	$_REQUEST['mass']=$merge_ids;
}
require('modules/MergeRecords/Step3.php');
 
?>
