<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


	global $mod_strings;
	global $current_language;
	global $currentModule;
	$temp_module = $currentModule;
	$mod_strings = return_module_language($current_language,'Calendar');
	$currentModule = 'Calendar';
	$args = array();
        include_once("modules/Calendar/Calendar.php") ;
        include_once("modules/Calendar/templates/templates_calendar.php") ;
        $args['calendar'] = new Calendar('month');
	$args['view'] = 'month';
	$args['size'] = 'small';
        template_calendar($args);
	$mod_strings = return_module_language($current_language,$temp_module);
	$currentModule = $_REQUEST['module'];
?>

