<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


 
$app_list_strings = array (
strtolower($object_name).'_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Base de Conocimiento',
    'Sales' => 'Ventas',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Impresos de Marketing',
    'Product Brochures' => 'Folletos de Producto',
    'FAQ' => 'FAQ',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
    'Active' => 'Activo',
    'Draft' => 'Borrador',
    'FAQ' => 'FAQ',
    'Expired' => 'Caducado',
    'Under Review' => 'En Revisión',
    'Pending' => 'Pendiente',
  ),
  );
?>
