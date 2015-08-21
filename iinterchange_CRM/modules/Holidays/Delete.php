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



$focus = new Holiday();

if(!isset($_REQUEST['record']))
	sugar_die("A record number must be specified to delete this holiday.");

$focus->mark_deleted($_REQUEST['record']);

// Bug 11485: Redirect to "My Account" page, do not expose Holiday listview
global $current_user;
header("Location: index.php?module=Users&action=DetailView&record=".$current_user->id);
?>
