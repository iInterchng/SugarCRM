<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once ('include/formbase.php');



global $timedate;
if(!empty($_POST['expiration_notice_time_meridiem']) && !empty($_POST['expiration_notice_time'])) {
	$_POST['expiration_notice_time'] = $timedate->merge_time_meridiem($_POST['expiration_notice_time'],$timedate->get_time_format(), $_POST['expiration_notice_time_meridiem']);
}


$sugarbean = new Contract();
$sugarbean = populateFromPost('', $sugarbean);

if (!$sugarbean->ACLAccess('Save')) {
	ACLController :: displayNoAccess(true);
	sugar_cleanup(true);
}
if(empty($sugarbean->id)) {
    $sugarbean->id = create_guid();
    $sugarbean->new_with_id = true;
}

$check_notify = isset($GLOBALS['check_notify']) ? $GLOBALS['check_notify'] : false;
$sugarbean->save($check_notify);
$return_id = $sugarbean->id;

if (!empty($_POST['type']) && $_POST['type'] !== $_POST['old_type']) {
	//attach all documents from contract type into contract.
	$ctype = new ContractType();
	$ctype->retrieve($_POST['type']);
	if (!empty($ctype->id)) {
		$ctype->load_relationship('documents');
		$doc = new Document();
		$documents=$ctype->documents->getBeans($doc);
		if (count($documents) > 0) {
			$sugarbean->load_relationship('contracts_documents');
			foreach($documents as $document) {
				$sugarbean->contracts_documents->add($document->id,array('document_revision_id'=>$document->document_revision_id));
			}			
		}	
	}
}
handleRedirect($return_id, 'Contracts');
?>