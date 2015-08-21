<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$mapping = array (
    'beans' => array (
      'Leads' => array (
            'id' => 'id',
		  	'recname' => 'account_name',
            'addrstreet1' => 'primary_address_street', 
            'addrstreet2' => 'primary_address_street_2',
		    'addrstateprov' => 'primary_address_state',
		    'addrcountry' => 'primary_address_country',
		    'addrcity' => 'primary_address_city',
		    'addrzip' => 'primary_address_postalcode',
		    'hqphone' => 'phone_work',	    
      ),
      'Accounts' => array (
            'id' => 'id',
		  	'recname' => 'name',
            'addrstreet1' => 'billing_address_street', 
            'addrstreet2' => 'billing_address_street_2',      
		    'addrcity' => 'billing_address_city',
		    'addrstateprov' => 'billing_address_state',
		    'addrcountry' => 'billing_address_country',
		    'addrcity' => 'billing_address_city',
		    'addrzip' => 'billing_address_postalcode',
            'finsales' => 'annual_revenue',
            'employees' => 'employees',
            'hqphone' => 'phone_office',
      		'description' => 'description',
      ),
      'Contacts' => array(
            'id' => 'id',
            'recname' => 'company_name',
            'addrstreet1' => 'primary_address_street', 
            'addrstreet2' => 'primary_address_street_2',      
		    'addrcity' => 'primary_address_city',
		    'addrstateprov' => 'primary_address_state',
		    'addrcountry' => 'primary_address_country',
		    'addrcity' => 'primary_address_city',
		    'addrzip' => 'primary_address_postalcode',
            'hqphone' => 'phone_work',
      ),
    ),
);
?>
