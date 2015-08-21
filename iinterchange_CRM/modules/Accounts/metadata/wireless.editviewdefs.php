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
 
$viewdefs['Accounts']['EditView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array(array('name'=>'name', 'displayParams'=>array('required'=>true,'wireless_edit_only'=>true,)),),
	    array('phone_office'),
		array(array('name'=>'website', 'displayParams'=>array('type'=>'link'))),
		array('email1'),
		array('billing_address_street'),
		array('billing_address_city'),
		array('billing_address_state'),
		array('billing_address_postalcode'),
		array('billing_address_country'),
		array('assigned_user_name'),
		array('team_name'),

	),
);
?>