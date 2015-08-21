<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Administracja',
    'Product' => 'Produkt',
    'User' => 'Użytkownik',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przydzielone',
    'Closed' => 'Zamknięte',
    'Pending Input' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
    'Duplicate' => 'Duplikuj',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Wysoki',
    'P2' => 'Średni',
    'P3' => 'Niski',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '[-pusty-]',
    'Accepted' => 'Zaakceptowane',
    'Duplicate' => 'Duplikuj',
    'Closed' => 'Zamknięte',
    'Out of Date' => 'Nieaktualne',
    'Invalid' => 'Niepoprawny',
  ),
);

