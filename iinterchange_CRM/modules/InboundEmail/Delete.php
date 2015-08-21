<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $mod_strings;
if(empty($_REQUEST['record'])) {
	sugar_die($mod_strings['LBL_DELETE_ERROR']);
} else {
	
	$focus = new InboundEmail();
	$focus->mark_deleted($_REQUEST['record']);
	header("Location: index.php?module=".$_REQUEST['return_module']."&action=".$_REQUEST['return_action']."&record=".$_REQUEST['return_id']);
}

?>
