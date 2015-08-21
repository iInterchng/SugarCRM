<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $mod_strings;

$module_menu = Array(

	Array("index.php?module=Roles&action=EditView&return_module=Roles&return_action=index", $mod_strings['LNK_NEW_ROLE'],"CreateRoles"),
	Array("index.php?module=Roles&action=index", $mod_strings['LNK_ROLES'],"Roles"),

);

?>