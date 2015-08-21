<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


global $sugar_config, $dbconfig, $beanList, $beanFiles, $app_strings, $app_list_strings;


if ( !empty($_REQUEST['user_id'])) {
    $current_user = new User();
    $result = $current_user->retrieve($_REQUEST['user_id']);
    if ($result == null) {
        session_destroy();
        sugar_cleanup();
        die("The user id doesn't exist");
    }
    $current_entity = $current_user;
}
else if ( ! empty($_REQUEST['contact_id'])) {
    $current_entity = new Contact();
    $current_entity->disable_row_level_security = true;
    $result = $current_entity->retrieve($_REQUEST['contact_id']);
    if($result == null) {
        session_destroy();
        sugar_cleanup();
        die("The contact id doesn't exist");
    }
}
else if ( ! empty($_REQUEST['lead_id'])) {
    $current_entity = new Lead();
    $current_entity->disable_row_level_security = true;
    $result = $current_entity->retrieve($_REQUEST['lead_id']);
    if($result == null) {
        session_destroy();
        sugar_cleanup();
        die("The lead id doesn't exist");
    }
}

$bean = $beanList[clean_string($_REQUEST['module'])];
require_once($beanFiles[$bean]);
$focus = new $bean;
$focus->disable_row_level_security = true;
$result = $focus->retrieve($_REQUEST['record']);

if($result == null) {
	session_destroy();
	sugar_cleanup();
	die("The focus id doesn't exist");
}

$focus->set_accept_status($current_entity,$_REQUEST['accept_status']);

print $app_strings['LBL_STATUS_UPDATED']."<BR><BR>";
print $app_strings['LBL_STATUS']. " ". $app_list_strings['dom_meeting_accept_status'][$_REQUEST['accept_status']];
print "<BR><BR>";
$script = <<<EOQ
<SCRIPT language="JavaScript">
<!--
var browserName=navigator.appName;
if (browserName=="Netscape") {
// C.L. fix for Mozilla/Netscape flavors... need a parent window
function closeme()
{
window.open('','_parent','');
window.close();
}
} else {
function closeme()
{
window.close();
}
}
//-->
</SCRIPT>
EOQ;

print $script;
print "<a href='#' onclick='window.closeme(); return false;'>".$app_strings['LBL_CLOSE_WINDOW']."</a><br>";
sugar_cleanup();
exit;
?>
