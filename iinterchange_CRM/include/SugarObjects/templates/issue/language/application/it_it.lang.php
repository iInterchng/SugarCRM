<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















 

$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
   'Administration' => 'Amministrazione',
    'Product' => 'Prodotto',
    'User' => 'Utente',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'Nuovo',
    'Assigned' => 'Assegnato',
    'Closed' => 'Chiuso',
    'Pending Input' => 'In attesa di input',
    'Rejected' => 'Respinto',
    'Duplicate' => 'Duplicato',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'Alta',
    'P2' => 'Media',
    'P3' => 'Bassa',
  ),
  $object_name.'_resolution_dom' =>
  array (
   '' => '',
   'Accepted' => 'Accettato',
    'Duplicate' => 'Duplicato',
    'Closed' => 'Chiuso',
    'Out of Date' => 'Non aggiornato',
    'Invalid' => 'Non valido',
  ),
  );
?>