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

if(!function_exists('getFilesForPermsCheck')) {
	require_once('modules/UpgradeWizard/uw_utils.php');	
}
if(!isset($sugar_config) || empty($sugar_config)) {
		
}
// persistence
$persistence = getPersistence();

switch($_REQUEST['commitStep']) {
	case 'run_sql':
		ob_end_flush();
		logThis('commitJson->runSql() called.');
		$persistence = commitAjaxRunSql($persistence);
	break;

	case 'get_errors':
		logThis('commitJson->getErrors() called.');
		commitAjaxGetSqlErrors($persistence);
	break;
	
	case 'post_install':
		logThis('commitJson->postInstall() called.');
		commitAjaxPostInstall($persistence);
	break;
	
	case 'final_touches':
		logThis('commitJson->finalTouches() called.');
		$persistence = commitAjaxFinalTouches($persistence);
	break;	
}

savePersistence($persistence);
?>