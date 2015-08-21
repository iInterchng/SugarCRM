<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





global $mod_strings;
global $app_list_strings;
global $app_strings;
global $theme;

global $current_user;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

global $db;
if(empty($db)) {
	
	$db = DBManagerFactory::getInstance();
}

echo getClassicModuleTitle(
        "Administration", 
        array(
            "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
           translate('LBL_DIAGNOSTIC_TITLE')
           ), 
        false
        );

global $currentModule;

$GLOBALS['log']->info("Administration Diagnostic");

$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign("MOD", $mod_strings);
$sugar_smarty->assign("APP", $app_strings);

if($db->dbType != 'mysql') {
	$sugar_smarty->assign("NO_MYSQL_MESSAGE", "<tr><td class=\"dataLabel\"><slot><font color=red>".
										$mod_strings['LBL_DIAGNOSTIC_NO_MYSQL'].
									  "</font></slot></td></tr><tr><td>&nbsp;</td></tr>");
	$sugar_smarty->assign("MYSQL_CAPABLE", "");
	$sugar_smarty->assign("MYSQL_CAPABLE_CHECKBOXES",
				  "<script type=\"text/javascript\" language=\"Javascript\"> ".
				  "document.Diagnostic.mysql_dumps.disabled=true;".
				  "document.Diagnostic.mysql_schema.disabled=true;".
				  "document.Diagnostic.mysql_info.disabled=true;".
				  "</script>"
				  );
}
else {
	$sugar_smarty->assign("NO_MYSQL_MESSAGE", "");
	$sugar_smarty->assign("MYSQL_CAPABLE", "checked");
	$sugar_smarty->assign("MYSQL_CAPABLE_CHECKBOXES", "");
}

$sugar_smarty->assign("RETURN_MODULE", "Administration");
$sugar_smarty->assign("RETURN_ACTION", "index");

$sugar_smarty->assign("MODULE", $currentModule);
$sugar_smarty->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);


$sugar_smarty->assign("ADVANCED_SEARCH_PNG", SugarThemeRegistry::current()->getImage('advanced_search','alt="'.$app_strings['LNK_ADVANCED_SEARCH'].'"  border="0"'));
$sugar_smarty->assign("BASIC_SEARCH_PNG", SugarThemeRegistry::current()->getImage('basic_search','alt="'.$app_strings['LNK_BASIC_SEARCH'].'"  border="0"'));

$sugar_smarty->display("modules/Administration/Diagnostic.tpl");
