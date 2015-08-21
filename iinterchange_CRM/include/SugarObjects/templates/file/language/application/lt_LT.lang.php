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
    'Marketing' => 'Marketingas',
    'Knowledege Base' => 'Žinių bazė',
    'Sales' => 'Pardavimai',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '',
    'Marketing Collateral' => 'Rinkodaros dokumentai',
    'Product Brochures' => 'Prekių bukletai',
    'FAQ' => 'DUK',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktyvus',
    'Draft' => 'Juodraštis',
    'FAQ' => 'DUK',
    'Expired' => 'Pasibaigęs',
    'Under Review' => 'Peržiūrimas',
    'Pending' => 'Laukiantis',
  ),
);

