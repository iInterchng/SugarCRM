<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Contains field arrays that are used for caching
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['ProspectList'] = array ('column_fields' => array(
				"id", "date_entered",
				"date_modified", "modified_user_id",
				"assigned_user_id", "created_by",
				"team_id",
				"name", "description",'list_type','domain_name',
	),
        'list_fields' =>  array(
				'id', 'name', 'description','list_type',
				'assigned_user_id','assigned_user_name',
				'team_id','team_name',
	),
    'required_fields' =>  array('name'=>1,'list_type'=>2),
);
?>