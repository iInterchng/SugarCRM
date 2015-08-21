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
    'User' => 'Bruger',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Pending Input' => 'Afventer input',
    'Rejected' => 'Afvist',
    'Duplicate' => 'Dupliker',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Høj',
    'P2' => 'Mellem',
    'P3' => 'Lav',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Accepteret',
    'Duplicate' => 'Dupliker',
    'Closed' => 'Lukket',
    'Out of Date' => 'Forældet',
    'Invalid' => 'Ugyldig',
  ),
);

