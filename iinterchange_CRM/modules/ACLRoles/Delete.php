<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$role = new ACLRole();
if(isset($_REQUEST['record'])){
	$role->mark_deleted($_REQUEST['record']);
}
require_once('include/formbase.php');
handleRedirect();

?>