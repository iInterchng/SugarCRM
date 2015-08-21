<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

global $mod_strings;
global $current_user;

$module_menu[] = array("index.php?module=Forecasts&action=ListView", $mod_strings['LNK_FORECAST_LIST'],"Forecasts");
$module_menu[] = array("index.php?module=Forecasts&action=index", $mod_strings['LNK_UPD_FORECAST'],"ForecastWorksheet");
$module_menu[] = array("index.php?module=Quotas&action=index", $mod_strings['LNK_QUOTA'],"ForecastWorksheet");
?>
