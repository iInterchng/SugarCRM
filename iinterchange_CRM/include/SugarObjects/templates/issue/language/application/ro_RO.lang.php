<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Administrare',
    'Product' => 'Produs',
    'User' => 'Utilizator',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Nou',
    'Assigned' => 'Alocat',
    'Closed' => 'Inchis',
    'Pending Input' => 'Asteapta intrari',
    'Rejected' => 'Respins',
    'Duplicate' => 'Duplicat',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Ridicat',
    'P2' => 'Mediu',
    'P3' => 'Scazut',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => 'Format Implicit e-mail ',
    'Accepted' => 'Acceptat',
    'Duplicate' => 'Duplicat',
    'Closed' => 'Inchis',
    'Out of Date' => 'Expirat',
    'Invalid' => 'Invalid',
  ),
);
