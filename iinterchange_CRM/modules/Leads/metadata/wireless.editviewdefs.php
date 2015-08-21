<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$viewdefs['Leads']['EditView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array (
	    	array (
		        'name' => 'first_name',
		        'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
		        'displayParams'=>array('wireless_edit_only'=>true,),
	      	),
	    ),
	    array (
	      	array('name'=>'last_name',
	            'displayParams'=>array('wireless_edit_only'=>true,),
	      	),  
	    ),
		array('title'),
	    array('account_name'),			          
		array('phone_work'),
		array('phone_mobile'),
		array('email1'),
		array('primary_address_street'),
		array('primary_address_city'),
		array('primary_address_state'),
		array('primary_address_postalcode'),
		array('primary_address_country'),			    			    
	    array('status'),
		array('assigned_user_name'),
		array('team_name'),
	),
);
?>