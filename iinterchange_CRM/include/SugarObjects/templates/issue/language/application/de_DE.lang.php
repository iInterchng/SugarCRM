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
    'User' => 'Benutzer',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'Neu',
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'Pending Input' => 'Rückmeldung ausstehend',
    'Rejected' => 'Abgelehnt',
    'Duplicate' => 'Duplizieren',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'Hoch',
    'P2' => 'Mittel',
    'P3' => 'Niedrig',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'Akzeptiert',
    'Duplicate' => 'Duplizieren',
    'Closed' => 'Abgeschlossen',
    'Out of Date' => 'Abgelaufen',
    'Invalid' => 'Ungültig',
  ),
  );
?>