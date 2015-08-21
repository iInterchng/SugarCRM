<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Knowledge Base',
    'Sales' => 'Verkoop',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '',
    'Product Brochures' => 'Product Brochures',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Marketing Organisatie',
  ),
  $object_name.'_status_dom' => 
  array (
    'FAQ' => 'FAQ',
    'Active' => 'Actief',
    'Draft' => 'Concept',
    'Expired' => 'Verlopen',
    'Under Review' => 'Ter Controle',
    'Pending' => 'In behandeling',
  ),
);

