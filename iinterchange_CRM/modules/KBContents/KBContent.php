<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



// User is used to store Forecast information.
class KBContent extends SugarBean {

	var $id;
    var $kbdocument_body;
	var $created_by;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $document_revision_id;
	var $team_id;
	var $active_date;
	var $exp_date;	
	var $table_name = "kbcontents";
	var $object_name = "KBContent";
	var $encodeFields = Array ();

	var $new_schema = true;
	var $module_dir = 'KBContents';
	 

	function KBContent() {
		parent :: SugarBean();
		$this->setupCustomFields('KBContents'); //parameter is module name
		$this->disable_row_level_security = false;
	}

	function save($check_notify = false) {
		return parent :: save($check_notify);
	}
	
	function retrieve($id, $encode = false) {
		$ret = parent :: retrieve($id, $encode);
		return $ret;
	}

	function is_authenticated() {
		return $this->authenticated;
	}
	function mark_relationships_deleted($id) {
		//do nothing, this call is here to avoid default delete processing since  
		//delete.php handles deletion of document revisions.
	}
	
	
}
?>