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


	
$db = DBManagerFactory::getInstance();

$badAccts = array();

$q = "SELECT id, name, email_password FROM inbound_email WHERE deleted=0 AND status='Active'";
$r = $db->query($q);

while($a = $db->fetchByAssoc($r)) {
	$ieX = new InboundEmail();
	$ieX->retrieve($a['id']);
	if(!$ieX->repairAccount()) {
		// none of the iterations worked.  flag for display
		$badAccts[$a['id']] = $a['name'];
	}
}

if(empty($badAccts)) {
	echo $mod_strings['LBL_REPAIR_IE_SUCCESS'];
} else {
	echo "<div class='error'>{$mod_strings['LBL_REPAIR_IE_FAILURE']}</div><br />";
	foreach($badAccts as $id => $acctName) {
		echo "<a href='index.php?module=InboundEmail&action=EditView&record={$id}' target='_blank'>{$acctName}</a><br />";
	}
}

?>