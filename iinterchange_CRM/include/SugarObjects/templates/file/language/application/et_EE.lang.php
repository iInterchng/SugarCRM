<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_subcategory_dom' => 
  array (
    'Marketing Collateral' => 'Marketing Collateral',
    '' => '',
    'Product Brochures' => 'Tootebrožüürid',
    'FAQ' => 'KKK',
  ),
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Turundus',
    'Knowledege Base' => 'Teadmusbaas',
    'Sales' => 'Müük',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktiivne',
    'Draft' => 'Mustand',
    'FAQ' => 'KKK',
    'Expired' => 'Aegunud',
    'Under Review' => 'Ülevaatamisel',
    'Pending' => 'Ootel',
  ),
);

