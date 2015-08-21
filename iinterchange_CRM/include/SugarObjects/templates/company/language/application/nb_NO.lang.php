<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Partner' => 'Partner',
    'Prospect' => 'Prospect',
    '' => '',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Analyst' => 'Analytiker',
    'Competitor' => 'Konkurrent',
    'Customer' => 'Kunde',
    'Press' => 'Presse',
    'Reseller' => 'Distributør',
    'Other' => 'Annen',
  ),
);

