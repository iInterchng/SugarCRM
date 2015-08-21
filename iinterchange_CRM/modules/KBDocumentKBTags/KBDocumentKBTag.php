<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once ('include/upload_file.php');


// User is used to store Forecast information.
class KBDocumentKBTag extends SugarBean {

	var $id;
	var $kbdocument_id;
	var $kbtag_id;
	var $created_by;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $kbdocument_name;
	var $team_id;


	var $table_name = "kbdocuments_kbtags";
	var $object_name = "KBDocumentKBTag";
	var $user_preferences;

	var $encodeFields = Array ();

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array ('revision');

	

	var $new_schema = true;
	var $module_dir = 'KBDocumentKBTags';
	
//todo remove leads relationship.
	var $relationship_fields = Array('contract_id'=>'contracts',
	 
		'lead_id' => 'leads'
	 );
	  

	function KBDocumentKBTag() {
		parent :: SugarBean();
		$this->setupCustomFields('KBDocumentKBTags'); //parameter is module name
		$this->disable_row_level_security = false;
	}

	function save($check_notify = false) {
		return parent :: save($check_notify);
	}
	
	function fill_in_additional_detail_fields()
	{
	    $kbdoc = new KBDocument;
	    $kbdoc = $kbdoc->retrieve($this->kbdocument_id);
	    if ( !empty($kbdoc->id) ) {
	        $this->kbdocument_name = $kbdoc->kbdocument_name;
	    }
	}
	function get_summary_text() {
		return "$this->kbdocument_name";
	}

	function is_authenticated() {
		return $this->authenticated;
	}

	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	function mark_relationships_deleted($id) {
		//do nothing, this call is here to avoid default delete processing since  
		//delete.php handles deletion of document revisions.
	}

	
}
?>