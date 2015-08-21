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

if(ob_get_level() < 1)
	ob_start();
ob_implicit_flush(1);

// load the generated persistence file if found
$persistence = array();
if(file_exists(getcwd().'/modules/UpgradeWizard/_persistence.php')) {
	require_once(getcwd().'/modules/UpgradeWizard/_persistence.php');
}

if(!function_exists('getFilesForPermsCheck')) {
	require_once('modules/UpgradeWizard/uw_utils.php');	
}
if(!isset($sugar_config) || empty($sugar_config)) {
		
}

switch($_REQUEST['systemCheckStep']) {
	case 'find_all_files':
		ob_end_flush();
		



			$persistence['files_to_check'] = getFilesForPermsCheck();



	break;
	
	case 'check_found_files':
		if(empty($persistence['files_to_check'])) {
			logThis('*** ERROR: could not find persistent array of files to check');
			echo $mod_strings['ERR_UW_NO_FILES'];
		} else {
			ob_end_flush();
			$persistence = checkFiles($persistence['files_to_check'], true);
		}
	break;
	
	case 'check_files_status':
		$ret = ($persistence['filesNotWritable']) ? 'true' : 'false';
		echo $ret;
	break;	
}


write_array_to_file('persistence', $persistence, 'modules/UpgradeWizard/_persistence.php');


?>
