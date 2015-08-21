<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if(isset($_REQUEST['record']) && !empty($_REQUEST['record'])) {
	
	$focus = new Group();
	$focus->retrieve($_REQUEST['record']);
	$focus->mark_deleted($focus->id);
}

header("Location: index.php?module=Groups&action=index");

?>
