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
$fields_array['UserPreferences'] = array ('column_fields' => Array(
		'id'
		,'category'
		,'name'
		,'contents'
		,'assigned_user_id'
		,'date_entered'
		,'date_modified'
		,'deleted'
		),
        'list_fields' =>  array('id', 'contents','category'),
);
?>