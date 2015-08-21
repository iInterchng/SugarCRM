<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$fields_array['Contract'] = array (
	'column_fields' => array(
		'id',
		'name',
		'status',
		'reference_code',
		'start_date',
		'account_id',
		'end_date',
		'opportunity_id',
		'quote_id',
		'currency_id',
		'total_contract_value',
		'total_contract_value_usdollar',
		'team_id',
		'customer_signed_date',
		'assigned_user_id',
		'company_signed_date',
		'expiration_notice_date',
		'expiration_notice_time',
		'description',
		'date_entered',
		'date_modified',
		'deleted',
		'modified_user_id',
		'created_by',
		'type',
	),
	'list_fields' => array(
		'id',
		'name',
		'account_id',
		'account_name',
		'status',
		'start_date',
		'end_date',
		'team_id',
		'team_name',
		'assigned_user_id',
		'assigned_user_name',
		'description',
	),
	'required_fields' => array(
		'name' => 1,
		'account_name' => 2,
		'status' => 3,
	),
);
?>
