<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/





class Holiday extends SugarBean {

	var $field_name_map;
	
	var $id;
	var $deleted;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $name;
	var $holiday_date;
	var $description;
	var $person_id;
	var $person_type;
	var $related_module;
	var $related_module_id;

	var $table_name = 'holidays';
	var $object_name = 'Holiday';
	var $module_dir = 'Holidays';
	var $new_schema = true;

	function Holiday()
	{
		parent::SugarBean();
		$this->disable_row_level_security = true;
	}
	
	function get_summary_text()
	{
		return $this->name;
	}

	function create_export_query($order_by, $where)
	{
		return $this->create_new_list_query($order_by, $where);
	}	

}

?>