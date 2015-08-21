<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

//updates the link between contract and document with latest revision of
//the document and sends the control back to calling page.

require_once('modules/Documents/Document.php');
require_once('include/formbase.php');
if (!empty($_REQUEST['record'])) {

	$document = new Document();
	$document->retrieve($_REQUEST['record']);
	if (!empty($document->document_revision_id) && !empty($_REQUEST['get_latest_for_id']))  {
		$query="update linked_documents set document_revision_id='{$document->document_revision_id}', date_modified='".TimeDate::getInstance()->nowDb()."' where id ='{$_REQUEST['get_latest_for_id']}' ";
		$document->db->query($query);
	}	
}
handleRedirect();
?>
