<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
 global $current_user;
 global $sugar_config;
 
  if($sugar_config['dbconfig']['db_type'] != 'oci8'){
    $current_user->is_admin = 1;
    $_REQUEST['mode'] = 'execute';
    include_once('modules/Administration/RepairIndex.php');
	
    
    //rrs: if we synced down custom fields the languages were not being updated.
    $mod_strings = return_module_language('en_us', 'Administration');
    include_once('modules/Administration/QuickRepairAndRebuild.php');
    $randc = new RepairAndClear();
	$randc->repairAndClearAll(array('clearAll', 'repairDatabase'), array('All Modules'), true, false);
	include_once('include/SugarObjects/LanguageManager.php');
	LanguageManager::clearLanguageCache();
	$current_user->is_admin = 0;
  }
 
?>
