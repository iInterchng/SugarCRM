<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


global $current_user;

if(isset($_REQUEST['type']) && $_REQUEST['type'] == 'personal') {
	if($current_user->hasPersonalEmail()) {
		
		$ie = new InboundEmail();
		$beans = $ie->retrieveByGroupId($current_user->id);
		if(!empty($beans)) {
			foreach($beans as $bean) {
				$bean->connectMailserver();
				$newMsgs = array();
				if ($bean->isPop3Protocol()) {
					$newMsgs = $bean->getPop3NewMessagesToDownload();
				} else {
					$newMsgs = $bean->getNewMessageIds();
				}
				//$newMsgs = $bean->getNewMessageIds();
				if(is_array($newMsgs)) {
					foreach($newMsgs as $k => $msgNo) {
						$uid = $msgNo;
						if ($bean->isPop3Protocol()) {
							$uid = $bean->getUIDLForMessage($msgNo);
						} else {
							$uid = imap_uid($bean->conn, $msgNo);
						} // else					
						$bean->importOneEmail($msgNo, $uid);
					}
				}
				imap_expunge($bean->conn);
				imap_close($bean->conn);
			}	
		}
	}
	header('Location: index.php?module=Emails&action=ListView&type=inbound&assigned_user_id='.$current_user->id);
} elseif(isset($_REQUEST['type']) && $_REQUEST['type'] == 'group') {
	$ie = new InboundEmail();
	// this query only polls Group Inboxes
	$r = $ie->db->query('SELECT inbound_email.id FROM inbound_email JOIN users ON inbound_email.group_id = users.id WHERE inbound_email.deleted=0 AND inbound_email.status = \'Active\' AND mailbox_type != \'bounce\' AND users.deleted = 0 AND users.is_group = 1');

	while($a = $ie->db->fetchByAssoc($r)) {
		$ieX = new InboundEmail();
		$ieX->retrieve($a['id']);
		$ieX->connectMailserver();
		//$newMsgs = $ieX->getNewMessageIds();
		$newMsgs = array();
		if ($ieX->isPop3Protocol()) {
			$newMsgs = $ieX->getPop3NewMessagesToDownload();
		} else {
			$newMsgs = $ieX->getNewMessageIds();
		}

		if(is_array($newMsgs)) {
			foreach($newMsgs as $k => $msgNo) {
				$uid = $msgNo;
				if ($ieX->isPop3Protocol()) {
					$uid = $ieX->getUIDLForMessage($msgNo);
				} else {
					$uid = imap_uid($ieX->conn, $msgNo);
				} // else					
				$ieX->importOneEmail($msgNo, $uid);
			}
		}
		imap_expunge($ieX->conn);
		imap_close($ieX->conn);
	}
	
	header('Location: index.php?module=Emails&action=ListViewGroup');
} else { // fail gracefully
	header('Location: index.php?module=Emails&action=index');
}


?>