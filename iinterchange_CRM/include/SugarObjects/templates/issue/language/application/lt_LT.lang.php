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
    'Administration' => 'Administratorius',
    'Product' => 'Prekė',
    'User' => 'Vartotojas',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Naujas',
    'Assigned' => 'Priskirtas',
    'Closed' => 'Užbaigtas',
    'Pending Input' => 'Laukiantis',
    'Rejected' => 'Atmestas',
    'Duplicate' => 'Dublikatas',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Didelė',
    'P2' => 'Vidutinė',
    'P3' => 'Maža',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Patvirtintas',
    'Duplicate' => 'Dublikatas',
    'Closed' => 'Užbaigtas',
    'Out of Date' => 'Pasenęs',
    'Invalid' => 'Neteisingas',
  ),
);

