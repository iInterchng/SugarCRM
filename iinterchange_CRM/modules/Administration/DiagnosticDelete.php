<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


if (!is_admin($GLOBALS['current_user'])) {
    sugar_die("Unauthorized access to administration.");
}

echo getClassicModuleTitle(
        "Administration", 
        array(
            "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
           translate('LBL_DIAGNOSTIC_TITLE')
           ), 
        true
        );


if(empty($_REQUEST['file']) || empty($_REQUEST['guid']))
{
	echo $mod_strings['LBL_DIAGNOSTIC_DELETE_ERROR'];
}
else
{
    // Make sure the guid and file are valid file names for security purposes
    clean_string($_REQUEST['guid'], "ALPHANUM");
    clean_string($_REQUEST['file'], "FILE");
    
	//Making sure someone doesn't pass a variable name as a false reference
	//  to delete a file
	if(strcmp(substr($_REQUEST['file'], 0, 10), "diagnostic") != 0)
	{
		die($mod_strings['LBL_DIAGNOSTIC_DELETE_DIE']);
	}

	if(file_exists("{$GLOBALS['sugar_config']['cache_dir']}diagnostic/".$_REQUEST['guid']."/".$_REQUEST['file'].".zip"))
	{
  	  unlink("{$GLOBALS['sugar_config']['cache_dir']}diagnostic/".$_REQUEST['guid']."/".$_REQUEST['file'].".zip");
  	  rmdir("{$GLOBALS['sugar_config']['cache_dir']}diagnostic/".$_REQUEST['guid']);
	  echo $mod_strings['LBL_DIAGNOSTIC_DELETED']."<br><br>";
	}
	else
	  echo $mod_strings['LBL_DIAGNOSTIC_FILE'] . $_REQUEST['file'].$mod_strings['LBL_DIAGNOSTIC_ZIP'];
}

print "<a href=\"index.php?module=Administration&action=index\">" . $mod_strings['LBL_DIAGNOSTIC_DELETE_RETURN'] . "</a><br>";

?>
