<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/Campaigns/utils.php');

$GLOBALS['log']->debug('identifier from the image request is'.$_REQUEST['identifier']);
if(!empty($_REQUEST['identifier'])) {
	$keys=log_campaign_activity($_REQUEST['identifier'],'viewed');
}
sugar_cleanup();
Header("Content-Type: image/gif");
$fn=sugar_fopen(SugarThemeRegistry::current()->getImageURL("blank.gif",false),"r");
fpassthru($fn);
?>
