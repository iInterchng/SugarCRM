<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/upload_file.php');


require_once('include/upload_file.php');

class DocumentSoap{
var $upload_file;
	function DocumentSoap(){
		$this->upload_file = new UploadFile('filename_file');
	}
	
	function saveFile($document, $portal = false){
        global $sugar_config;

        $focus = new Document();

                if($portal){
                        $focus->disable_row_level_security = true;
                }


        if(!empty($document['id'])){
                $focus->retrieve($document['id']);
        }else{
                return '-1';
        }

        if(!empty($document['file'])){
                $decodedFile = base64_decode($document['file']);
                $this->upload_file->set_for_soap($document['filename'], $decodedFile);

                $ext_pos = strrpos($this->upload_file->stored_file_name, ".");
                $this->upload_file->file_ext = substr($this->upload_file->stored_file_name, $ext_pos + 1);
                if (in_array($this->upload_file->file_ext, $sugar_config['upload_badext'])) {
                        $this->upload_file->stored_file_name .= ".txt";
                        $this->upload_file->file_ext = "txt";
                } 
                
                $revision = new DocumentRevision();
				$revision->filename = $this->upload_file->get_stored_file_name();
          		$revision->file_mime_type = $this->upload_file->getMimeSoap($revision->filename);
				$revision->file_ext = $this->upload_file->file_ext;
				//$revision->document_name = ;
				$revision->revision = $document['revision'];
				$revision->document_id = $document['id'];
				$revision->save();
				
               	$focus->document_revision_id = $revision->id;
               	$focus->save();
                $return_id = $revision->id;
                $this->upload_file->final_move($revision->id);
        }else{
                return '-1';
        }
        return $return_id;
	}
}
?>