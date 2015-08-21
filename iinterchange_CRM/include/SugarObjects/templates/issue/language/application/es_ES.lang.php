<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















 


$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => 'Administración',
    'Product' => 'Producto',
    'User' => 'Usuario',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'Nuevo',
    'Assigned' => 'Asignado',
    'Closed' => 'Cerrado',
    'Pending Input' => 'Pendiente de Información',
    'Rejected' => 'Rechazado',
    'Duplicate' => 'Duplicado',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'Alta',
    'P2' => 'Media',
    'P3' => 'Baja',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'Aceptado',
    'Duplicate' => 'Duplicado',
    'Closed' => 'Cerrado',
    'Out of Date' => 'Caducado',
    'Invalid' => 'No Válido',
  ),
  );
?>