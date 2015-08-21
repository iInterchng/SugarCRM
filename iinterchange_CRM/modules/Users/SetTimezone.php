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



require_once('include/JSON.php');
require_once('modules/Users/Forms.php');

global $app_strings;
global $app_list_strings;
global $mod_strings;

$admin = new Administration();
$admin->retrieveSettings("notify");

if ( isset($_SESSION['isMobile']) ) {
	session_destroy();
	session_start();
    $_SESSION['login_error'] = $mod_strings['ERR_NO_LOGIN_MOBILE'];
    header("Location: index.php?module=Users&action=Login&mobile=1");
    sugar_cleanup(true);
}

///////////////////////////////////////////////////////////////////////////////
////	HELPER FUNCTIONS
////	END HELPER FUNCTIONS
///////////////////////////////////////////////////////////////////////////////

if(isset($_REQUEST['userOffset'])) { // ajax call to lookup timezone
    echo 'userTimezone = "' . TimeDate::guessTimezone($_REQUEST['userOffset']) . '";';
    exit();
}
$admin = new Administration();
$admin->retrieveSettings();
$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);

global $current_user;
$selectedZone = $current_user->getPreference('timezone');
if(empty($selectedZone) && !empty($_REQUEST['gmto'])) {
	$selectedZone = TimeDate::guessTimezone(-1 * $_REQUEST['gmto']);
}
if(empty($selectedZone)) {
    $selectedZone = TimeDate::guessTimezone();
}
$sugar_smarty->assign('TIMEZONE_CURRENT', $selectedZone);
$sugar_smarty->assign('TIMEZONEOPTIONS', TimeDate::getTimezoneList());

$sugar_smarty->display('modules/Users/SetTimezone.tpl');