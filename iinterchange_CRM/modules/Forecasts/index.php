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
global $theme;


require_once('modules/Forecasts/ForecastUtils.php');
global $mod_strings;

if (!empty($_REQUEST['page'])) {
    $user = new User();
    $user->retrieve($user,$_REQUEST['page']);
    echo get_chart_for_user($current_user,$_REQUEST['forecast_type']);
} else {
    include ('modules/Forecasts/DetailView.php');
}

?>
