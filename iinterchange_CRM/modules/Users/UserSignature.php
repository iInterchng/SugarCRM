<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

// User is used to store customer information.
class UserSignature extends SugarBean {
	var $id;
	var $date_entered;
	var $date_modified;
	var $deleted;
	var $user_id;
	var $name;
	var $signature;
	var $table_name = 'users_signatures';
	var $module_dir = 'Users';
	var $object_name ='UserSignature';
	var $disable_custom_fields = true;

	function UserSignature() {
		//Ensure the vardefs get loaded.
		global $dictionary;
		if(file_exists('custom/metadata/users_signaturesMetaData.php')) {
			require_once('custom/metadata/users_signaturesMetaData.php');
		} else {
			require_once('metadata/users_signaturesMetaData.php');
		}
		
		$this->disable_row_level_security=true;
		
		parent::SugarBean();	
	}
	
	/**
	 * returns the bean name - overrides SugarBean's
	 */
	function get_summary_text() {
		return $this->name;
	}

	/**
	 * Override's SugarBean's
	 */
	function create_export_query($order_by, $where, $show_deleted = 0) {
		return $this->create_new_list_query($order_by, $where,array(),array(), $show_deleted = 0);
	}

	/**
	 * Override's SugarBean's
	 */
	function get_list_view_data(){
		global $mod_strings;
		global $app_list_strings;
		$temp_array = $this->get_list_view_array();
		$temp_array['MAILBOX_TYPE_NAME']= $app_list_strings['dom_mailbox_type'][$this->mailbox_type];
		return $temp_array;
	}

	/**
	 * Override's SugarBean's
	 */
	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	/**
	 * Override's SugarBean's
	 */
	function fill_in_additional_detail_fields() {
	}
} // end class definition
?>