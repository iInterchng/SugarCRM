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
    'Knowledege Base' => 'Base de Connaissances',
    'Sales' => 'ventes',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Marketing Secondaire',
    'Product Brochures' => 'Brochures Produits',
    'FAQ' => 'FAQ',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
        'Active' => 'Actif',
        'Draft' => 'Brouillon',
        'FAQ' => 'FAQ',
        'Expired' => 'Périmé',
        'Under Review' => 'En cours de révision',
        'Pending' => 'En attente'
  ),
);
?>
