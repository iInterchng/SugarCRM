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



// record the last theme the user used
$current_user->setPreference('lastTheme',$theme);
$GLOBALS['current_user']->call_custom_logic('before_logout');

// submitted by Tim Scott from SugarCRM forums
foreach($_SESSION as $key => $val) {
	$_SESSION[$key] = ''; // cannot just overwrite session data, causes segfaults in some versions of PHP	
}
if(isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-42000, '/');
}

//Update the tracker_sessions table
$trackerManager = TrackerManager::getInstance();
if($monitor = $trackerManager->getMonitor('tracker_sessions')){ 
	$monitor->setValue('user_id', $GLOBALS['current_user']->id);
	$monitor->setValue('date_end', TimeDate::getInstance()->nowDb());
	$seconds = strtotime($monitor->date_end) - strtotime($monitor->date_start);
	$monitor->setValue('seconds', $seconds);
	$monitor->setValue('active', 0);
	$trackerManager->saveMonitor($monitor);
}
// clear out the authenticating flag
session_destroy();

LogicHook::initialize();
$GLOBALS['logic_hook']->call_custom_logic('Users', 'after_logout');
// go to the login screen.
header("Location: index.php?action=Login&module=Users");
sugar_cleanup(true);

?>
