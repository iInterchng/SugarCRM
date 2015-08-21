<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/
global $current_language;
global $mod_strings;

// grab Adminstration strings too
$admin_mod_strings = return_module_language($current_language, 'Administration');
$mod_strings = sugarArrayMerge($admin_mod_strings, $mod_strings);

include("modules/Administration/Menu.php");
?>
