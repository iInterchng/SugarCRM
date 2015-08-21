<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


global $mod_strings, $app_strings, $sugar_config;
 
if(ACLController::checkAccess('{$moduleName}', 'edit', true))$module_menu[]=Array("index.php?module={$moduleName}&action=EditView&return_module={$moduleName}&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Create{$moduleName}", '{$moduleName}');
{if $showvCard}if(ACLController::checkAccess('{$moduleName}', 'edit', true))$module_menu[]=Array("index.php?module={$moduleName}&action=ImportVCard", $mod_strings['LNK_IMPORT_VCARD'],"Create{$moduleName}", '{$moduleName}');{/if}
if(ACLController::checkAccess('{$moduleName}', 'list', true))$module_menu[]=Array("index.php?module={$moduleName}&action=index&return_module={$moduleName}&return_action=DetailView", $mod_strings['LNK_LIST'],"{$moduleName}", '{$moduleName}');
{if $showimport}if(ACLController::checkAccess('{$moduleName}', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module={$moduleName}&return_module={$moduleName}&return_action=index", $app_strings['LBL_IMPORT'],"Import", '{$moduleName}');{/if}