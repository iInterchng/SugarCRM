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
global $mod_strings;
global $current_language;
if(isset($_REQUEST['step']))
{
	$step = $_REQUEST['step'];
}
else
{
	$step = '1';
}
include ('modules/MailMerge/Step'. clean_string($step). '.php'); 
?>

