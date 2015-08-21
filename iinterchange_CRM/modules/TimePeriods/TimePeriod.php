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
class TimePeriod extends SugarBean {
	//time period stored fields.
	var $id;
	var $name;
	var $parent_id;
	var $start_date;
	var $end_date;
	var $created_by;
	var $date_entered;
	var $date_modified;
	var $deleted;
	var $fiscal_year;
	var $is_fiscal_year;
	//end time period stored fields.
	var $table_name = "timeperiods";
	var $fiscal_year_checked;
	var $module_dir = 'TimePeriods';
	var $object_name = "TimePeriod";
	var $user_preferences;

	var $encodeFields = Array("name");

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('reports_to_name');

	
	var $new_schema = true;

	function TimePeriod() {
		parent::SugarBean();
		$this->disable_row_level_security =true;
	}

	function save($check_notify = false){
		//if (empty($this->id)) $this->parent_id = null;
		
		return parent::save($check_notify);		
	}



	function get_summary_text()
	{
		return "$this->name";
	}

	
	function retrieve($id, $encode=false){
		$ret = parent::retrieve($id, $encode);			
		return $ret;
	}

	function is_authenticated()
	{
		return $this->authenticated;
	}

	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	function fill_in_additional_detail_fields()
	{
		if (isset($this->parent_id) && !empty($this->parent_id)) {
		
		  $query ="SELECT name from timeperiods where id = '$this->parent_id' and deleted = 0";
		  $result =$this->db->query($query, true, "Error filling in additional detail fields") ;
		  $row = $this->db->fetchByAssoc($result);
		  $GLOBALS['log']->debug("additional detail query results: $row");

		  
		  if($row != null) {
			 $this->fiscal_year = $row['name'];
		  }
		}
	}


	function get_list_view_data(){

		$timeperiod_fields = $this->get_list_view_array();		
		$timeperiod_fields['FISCAL_YEAR'] = $this->fiscal_year;
	
		if ($this->is_fiscal_year == 1)
			$timeperiod_fields['FISCAL_YEAR_CHECKED'] = "checked";
		
		return $timeperiod_fields;
	}

	function list_view_parse_additional_sections(&$list_form, $xTemplateSection){
		return $list_form;
	}

	function create_export_query($order_by, $where)
	{
		$query = "SELECT
				timeperiods.*";
		$query .= " FROM timeperiods ";

		$where_auto = " timeperiods.deleted = 0";

		if($where != "")
			$query .= " WHERE $where AND " . $where_auto;
		else
			$query .= " WHERE " . $where_auto;

		if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY timeperiods.name";

		return $query;
	}
	
	//Fiscal year domain is stored in the timeperiods table, and not staticaly defined like the rest of the
	//domains, This method builds the domain array.
	function get_fiscal_year_dom() {

		static $fiscal_years;

		if (!isset($fiscal_years)) {

			$query = 'select id, name from timeperiods where deleted=0 and is_fiscal_year = 1 order by name';
			$db = DBManagerFactory::getInstance();
			$result = $db->query($query,true," Error filling in fiscal year domain: ");

			while (($row  =  $db->fetchByAssoc($result)) != null) {

				$fiscal_years[$row['id']]=$row['name'];
			}
			
			if (!isset($fiscal_years)) {
				$fiscal_years=array();
			}
		}
		return $fiscal_years;
	}
}

function get_fiscal_year_dom() {
    return TimePeriod::get_fiscal_year_dom();
}