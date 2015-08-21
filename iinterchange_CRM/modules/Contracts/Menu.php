<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $mod_strings;
global $current_user;

if (ACLController :: checkAccess('Contracts', 'edit', true)) {
	$module_menu[] = array ('index.php?module=Contracts&action=EditView&return_module=Contracts&return_action=DetailView', $mod_strings['LNK_NEW_CONTRACT'], 'CreateContracts');
}

if (ACLController :: checkAccess('Contracts', 'list', true)) {
	$module_menu[] = array ('index.php?module=Contracts&action=index', $mod_strings['LNK_CONTRACT_LIST'], 'Contracts');
}

if (ACLController :: checkAccess('Contracts', 'detail', true)) {
	
	$admin = new Administration();
	$admin->retrieveSettings();
}

?>

