<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $app_strings;
global $app_list_strings;
global $mod_strings;

$xtpl = new XTemplate('modules/Sync/InitialSync.html');
$xtpl->assign('MOD', $mod_strings);
$xtpl->assign('APP', $app_strings);

$xtpl->parse('main');
$xtpl->out('main');
?>