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


session_start();
$GLOBALS['installing'] = true;


require_once('include/JSON.php');

require_once('include/utils/db_utils.php');

require_once('include/utils/zip_utils.php');

require_once('modules/UpgradeWizard/uw_utils.php');



$json = getJSONobj();
/*
$upgradeStepTime = $json->decode(html_entity_decode($_REQUEST['upgradeStepTime']));
if(isset($tagdata['jsonObject']) && $tagdata['jsonObject'] != null){
	$upgradeStepTime = $upgradeStepTime['jsonObject'];
 }

 if(!isset($_SESSION['totalUpgradeTime'])){
   $_SESSION['totalUpgradeTime'] = 0;
 }
*/

 $_SESSION['totalUpgradeTime'] = $_SESSION['totalUpgradeTime']+$_REQUEST['upgradeStepTime'];
 $response = $_SESSION['totalUpgradeTime'];

$GLOBALS['log']->fatal('TOTAL TIME .....'.$_SESSION['totalUpgradeTime']);
 //$uptime = $uptime+$_REQUEST['upgradeStepTime'];
 $GLOBALS['log']->fatal($response);


 if (!empty($response)) {
    $json = getJSONobj();
	print $json->encode($response);
 }

sugar_cleanup();
exit();

?>
