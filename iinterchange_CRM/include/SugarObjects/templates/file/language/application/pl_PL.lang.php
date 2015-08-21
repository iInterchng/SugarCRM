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
    '' => '[-pusty-]',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Baza wiedzy',
    'Sales' => 'Sprzedaż',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '[-pusty-]',
    'Marketing Collateral' => 'Marketing dodatkowy',
    'Product Brochures' => 'Katalogi produktowe',
    'FAQ' => 'FAQ',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktywny',
    'Draft' => 'Wersja robocza',
    'FAQ' => 'FAQ',
    'Expired' => 'Wygałsy',
    'Under Review' => 'W recenzji',
    'Pending' => 'Oczekujący',
  ),
);

