<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/Sugar_Smarty.php');

$ss = new Sugar_Smarty();
$current_module_strings = return_module_language($current_language, 'Home');
$ss->assign('current_module_strings', $current_module_strings);
$ss->assign('sugar_version', $GLOBALS['sugar_version']);
echo $ss->fetch('modules/Home/Welcome.tpl');

?>