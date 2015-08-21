<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/







	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_status_dom' => 
  array (
    'Pending Input' => 'Až do vstupu',
    'Rejected' => 'Odmítnuto',
    'Duplicate' => 'Duplikát',
    'New' => 'Nový',
    'Assigned' => 'Přiřazený',
    'Closed' => 'Zavřený',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Vysoký',
    'P2' => 'Střední',
    'P3' => 'Nízký',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Přijatý',
    'Duplicate' => 'Duplikát',
    'Closed' => 'Zavřený',
    'Out of Date' => 'Zastaralý',
    'Invalid' => 'Neplatný',
  ),
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Administrace',
    'Product' => 'Produkt',
    'User' => 'Uživatel',
  ),
);

