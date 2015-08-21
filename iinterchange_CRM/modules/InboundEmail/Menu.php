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
global $mod_strings;
$module_menu = Array();
$module_menu[]= array("index.php?module=InboundEmail&action=EditView", $mod_strings['LNK_LIST_CREATE_NEW_GROUP'],"CreateMailboxes");
$module_menu[]= array("index.php?module=InboundEmail&action=EditView&mailbox_type=bounce", $mod_strings['LNK_LIST_CREATE_NEW_BOUNCE'],"CreateMailboxes");
$module_menu[]= array("index.php?module=InboundEmail&action=index", $mod_strings['LNK_LIST_MAILBOXES'],"InboundEmail");

if(is_admin($GLOBALS['current_user']))$module_menu[]= array("index.php?module=Schedulers&action=index", $mod_strings['LNK_LIST_SCHEDULER'],"Schedulers");
	//array("index.php?module=Queues&action=Seed", $mod_strings['LNK_SEED_QUEUES'],"CustomQueries"),
?>
