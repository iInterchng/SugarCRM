<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
















	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Beheer',
    'Product' => 'Product',
    'User' => 'Gebruiker',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'Closed' => 'Gesloten',
    'Pending Input' => 'Wacht op input',
    'Rejected' => 'Afgewezen',
    'Duplicate' => 'Kopie',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Hoog',
    'P2' => 'Medium',
    'P3' => 'Laag',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => ' ',
    'Accepted' => 'Geaccepteerd',
    'Duplicate' => 'Kopie',
    'Closed' => 'Gesloten',
    'Out of Date' => 'Verlopen',
    'Invalid' => 'Ongeldig',
  ),
);

