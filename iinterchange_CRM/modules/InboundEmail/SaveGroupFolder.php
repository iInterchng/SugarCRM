<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Saves an Account record and then redirects the browser to the
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/SugarFolders/SugarFolders.php');
$folder = new SugarFolder();
$_REQUEST['name'] = $_REQUEST['groupFolderAddName'];
$_REQUEST['parent_folder'] = $_REQUEST['groupFoldersAdd'];
$_REQUEST['group_id'] = $_REQUEST['groupFoldersUser'];
require_once("modules/Teams/TeamSet.php");
$_REQUEST['team_id'] = $_REQUEST['primaryTeamId'];
$teamSet = new TeamSet();
$teamIds = explode(",", $_REQUEST['teamIds']);
$team_set_id = $teamSet->addTeams($teamIds);
$_REQUEST['team_set_id'] = $team_set_id;
if (empty($_REQUEST['record'])) {
	$folder->setFolder($_REQUEST);
} else {
	$folder->updateFolder($_REQUEST);
}
$body1 = "
	<script type='text/javascript'>
		function refreshOpener() {
			window.opener.refresh_group_folder_list('$folder->id','$folder->name')
			window.close();
		} // fn
		refreshOpener();
	</script>";
echo  $body1;
?>