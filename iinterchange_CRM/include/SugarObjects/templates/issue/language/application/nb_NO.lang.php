<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/







	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Administrasjon',
    'Product' => 'Produkt',
    'User' => 'Bruker',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Ny',
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Pending Input' => 'Venter på informasjon',
    'Rejected' => 'Avvist',
    'Duplicate' => 'Dublett',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Høy',
    'P2' => 'Middels',
    'P3' => 'Lav',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Godtatt',
    'Duplicate' => 'Dublett',
    'Closed' => 'Lukket',
    'Out of Date' => 'Foreldet',
    'Invalid' => 'Ugyldig',
  ),
);

