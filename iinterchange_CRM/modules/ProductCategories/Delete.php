<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  
 ********************************************************************************/


global $mod_strings;



$focus = new ProductCategory();

if(!isset($_REQUEST['record']))
	sugar_die($mod_strings['ERR_DELETE_RECORD']);

$focus->mark_deleted($_REQUEST['record']);

//$focus->clear_branch($_REQUEST['record']);
//
//if($_REQUEST['delete_type']=="graft") $focus->graft($_REQUEST['record'], $_REQUEST['parent_id'], $_REQUEST['parent_node_id']);
//
//if($_REQUEST['delete_type']=="prune"){
//	
//	$focus->prune($_REQUEST['record']);
//
//	$TreeView = new TreeView($focus);
//	$TreeView->regrow_tree("Y");
//}
 
header("Location: index.php?module=".$_REQUEST['return_module']."&action=".$_REQUEST['return_action']."&record=".$_REQUEST['return_id']);
?>