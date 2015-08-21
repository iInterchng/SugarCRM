<?php
//FILE SUGARCRM flav=pro
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$mapping = array (
    'beans' => 
    array (
      'Leads' => 
      array (
        'id' => 'id',
        'firstname' => 'first_name',
        'lastname' => 'last_name',
        'jobtitle' => 'title',
        'companyname' => 'account_name',
        'companyphone' => 'phone_work',
	    'street' => 'primary_address_street',    
	    'city' => 'primary_address_city',
	    'state' => 'primary_address_state',
	    'zip' => 'primary_address_postalcode',
	    'countrycode' => 'primary_address_country',
        'biography' => 'description',         
      ),
      'Accounts' => 
      array (
        'id' => 'id',
        'jobtitle' => 'title',
        'companyname' => 'account_name',
        'companyphone' => 'phone_office',
	    'street' => 'billing_address_street',    
	    'city' => 'billing_address_city',
	    'state' => 'billing_address_state',
	    'zip' => 'billing_address_postalcode',
	    'countrycode' => 'billing_address_country',
        'biography' => 'description',              
      ),      
      'Contacts' => 
      array (
        'id' => 'id',
        'firstname' => 'first_name',
        'lastname' => 'last_name',
        'jobtitle' => 'title',
        'companyname' => 'account_name',
        'biography' => 'description',        
      ),      
    ),
);
?>
