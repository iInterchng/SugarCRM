<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  
 ********************************************************************************/
//TODO admins only - unless we specify otherwise?
if(!$current_user->is_admin) {
	sugar_die('You must have administrative access to proceed.');	
}
echo getClassicModuleTitle($mod_strings['LBL_MODULE_TITLE'], array($mod_strings['LBL_MODULE_TITLE']), true); 
require_once('modules/Schedulers/ListView.php');
?>
