<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




class Group extends User {
	// User attribute overrides
	var $status			= 'Group';
	var $password		= ''; // to disallow logins
	var $default_team;
	
	function Group() {
		parent::User();
	}

	/** 
	 * overrides SugarBean method
	 */
	function mark_deleted($id) {
		SugarBean::mark_deleted($id);
	}

	function create_export_query($order_by, $where)
	{
		$query = "SELECT users.*";
		$query .= " FROM users ";
		$where_auto = " users.deleted = 0";
		if($where != "")
			$query .= " WHERE $where AND " . $where_auto;
		else
			$query .= " WHERE " . $where_auto;
		if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY users.user_name";
		return $query;
	}
	
} // end class def 

?>