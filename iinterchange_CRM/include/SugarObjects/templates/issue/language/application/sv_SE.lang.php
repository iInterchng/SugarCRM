<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















 

$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => 'Administration',
    'Product' => 'Produkt',
    'User' => 'Anvöndare',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'Ny',
    'Assigned' => 'Tilldelad',
    'Closed' => 'Stängd',
    'Pending Input' => 'Avvaktande',
    'Rejected' => 'Avslag',
    'Duplicate' => 'Duplicerat',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'Hög',
    'P2' => 'Medium',
    'P3' => 'Låg',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'Accepterat',
    'Duplicate' => 'Duplicerat',
    'Closed' => 'Stängt',
    'Out of Date' => 'Utgånget datum',
    'Invalid' => 'Invalid',
  ),
  );
?>