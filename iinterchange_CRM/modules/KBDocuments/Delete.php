<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Deletes an Account record and then redirects the browser to the
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/







global $mod_strings;
global $sugar_config;

if(!isset($_REQUEST['record']))
	sugar_die($mod_strings['ERR_DELETE_RECORD']);
$focus = new KBDocument();
$focus->retrieve($_REQUEST['record']);
if(!$focus->ACLAccess('Delete')){
	ACLController::displayNoAccess(true);
	sugar_cleanup(true);
}

if (false && isset($_REQUEST['object']) && $_REQUEST['object']="kbdocumentrevision") {
	//delete document revision.
	UploadFile::unlink_file($_REQUEST['revision_id'],$_REQUEST['filename']);

} else {
	//Retrieve all related kbdocument revisions.
    $kbdocrevs = KBDocument::get_kbdocument_revisions($_REQUEST['record']);
    //Loop through kbdocument revisions and delete one by one.
	if (!empty($kbdocrevs) && is_array($kbdocrevs)) {
		foreach($kbdocrevs as $key=>$thiskbid) {
			$thiskbversion = new KBDocumentRevision();
			$thiskbversion->retrieve($thiskbid);
			//Check for related documentrevision and delete.
	        if($thiskbversion->document_revision_id != null){
		        $docrev_id = $thiskbversion->document_revision_id;
				$thisdocrev = new DocumentRevision();
				$thisdocrev->retrieve($docrev_id);
				if(file_exists($sugar_config['upload_dir'].$docrev_id.$thisdocrev->filename)){
                	UploadFile::unlink_file($docrev_id,$thisdocrev->filename);
				}
				if(file_exists($sugar_config['upload_dir'].$docrev_id)){
                	unlink($sugar_config['upload_dir'].$docrev_id);
				}
				//mark version deleted
				$thisdocrev->mark_deleted($thisdocrev->id);
	        }
	        //Also check for related kbcontent and delete.
            if($thiskbversion->kbcontent_id != null){
		        $kbcont_id = $thiskbversion->kbcontent_id;
				$thiskbcont = new KBContent();
				$thiskbcont->retrieve($kbcont_id);
				$thiskbcont->mark_deleted($kbcont_id);
	        }
			//Finally delete the kbdocument revision.
		   $thiskbversion->mark_deleted($thiskbversion->id);
		}
	}
}

//delete kbdocuments_kbtags
$deleted=1;
$q = 'UPDATE kbdocuments_kbtags SET deleted = '.$deleted.' WHERE kbdocument_id = \''.$_REQUEST['record'].'\'';
$focus->db->query($q);


$focus->mark_deleted($_REQUEST['record']);

header("Location: index.php?module=".$_REQUEST['return_module']."&action=".$_REQUEST['return_action']."&record=".$_REQUEST['return_id']);
?>
