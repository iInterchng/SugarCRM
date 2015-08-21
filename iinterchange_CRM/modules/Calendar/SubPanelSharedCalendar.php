<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/

/// START SHARED CALENDAR
include('modules/Calendar/templates/template_shared_calendar.php');


function SubPanelSharedCalendar(&$focus)
{

global $mod_strings;
global $current_language;
global $currentModule;

$currentModule = $_REQUEST['module'];
$temp_module = $currentModule;
$mod_strings = return_module_language($current_language,'Calendar');
$currentModule = 'Calendar';

$args = array(
"activity_focus"=>$focus,
"users"=>$focus->get_users());

template_shared_calendar($args);

$mod_strings = return_module_language($current_language,$temp_module);
$currentModule = $_REQUEST['module'];
/// END SHARED CALENDAR
}

?>
