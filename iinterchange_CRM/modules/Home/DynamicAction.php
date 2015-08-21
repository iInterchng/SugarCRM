<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('include/MySugar/MySugar.php');

$mySugar = new MySugar($_REQUEST['module']);
if (!isset($_REQUEST['DynamicAction'])) {
	$_REQUEST['DynamicAction'] = 'displayDashlet';
}
// commit session before returning output so we can serialize AJAX requests
// and not get session into a wrong state
$res = $mySugar->$_REQUEST['DynamicAction']();
if(isset($_REQUEST['commit_session'])) {
    session_commit();
}
echo $res;