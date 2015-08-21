<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/





// Contact is used to store customer information.
class ContactQuoteRelationship extends SugarBean {
	// Stored fields
	var $id;
	var $contact_id;
	var $contact_role;
	var $quote_id;

	// Related fields
	var $contact_name;
	var $quote_name;

	var $table_name = "quotes_contacts";
	var $object_name = "ContactQuoteRelationship";
	var $column_fields = Array("id"
		,"contact_id"
		,"quote_id"
		,"contact_role"
		);

	var $new_schema = true;

	var $additional_column_fields = Array();

	function ContactQuoteRelationship() {
		;
		parent::SugarBean();
		$this->disable_row_level_security =true;
	}

	function fill_in_additional_detail_fields()
	{
	    global $locale;
	    
		if(isset($this->contact_id) && $this->contact_id != "")
		{
			$query = "SELECT first_name, last_name from contacts where id='$this->contact_id' AND deleted=0";
			$result =$this->db->query($query,true," Error filling in additional detail fields: ");
			// Get the id and the name.
			$row = $this->db->fetchByAssoc($result);

			if($row != null)
			{
				$this->contact_name = $locale->getLocaleFormattedName($row['first_name'], $row['last_name']);
			}
		}

		if(isset($this->quote_id) && $this->quote_id != "")
		{
			$query = "SELECT name from quotes where id='$this->quote_id' AND deleted=0";
			$result =$this->db->query($query,true," Error filling in additional detail fields: ");
			// Get the id and the name.
			$row = $this->db->fetchByAssoc($result);

			if($row != null)
			{
				$this->quote_name = $row['name'];
			}
		}

	}
}



?>
