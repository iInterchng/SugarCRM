<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/upload_file.php');

class KBDocumentSoap {
var $upload_file;

function KBDocumentSoap(){
	$this->upload_file = new UploadFile('uploadfile');
}

function retrieveFile($id){
	$filepath = $this->upload_file->get_upload_path($id);
	$s = '';
	if(file_exists($filepath)){
		
		$s = file_get_contents($filepath);
		return base64_encode($s);
	}
	return -1;
}

/**
 * retrieveFileName
 * This is a function to return the true file name value as listed
 * in the document_revisions table for the given id.
 * @param The id field of the row in document_revisions table to fetch file name for
 * @return The String file name or id if not found
 */
function retrieveFileName($id) {	
    
    $query = "select filename from document_revisions where id = '$id'";
    $bean = new KBDocument();
    $result = $bean->db->query($query);
    if(isset($result)) {
       $row = $bean->db->fetchByAssoc($result);
       return isset($row) ? $row['filename'] : $id;	
    }
    return $id;
}

}

?>