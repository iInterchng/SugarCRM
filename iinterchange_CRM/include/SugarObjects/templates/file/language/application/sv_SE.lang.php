<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_subcategory_dom' => 
  array (
    'FAQ' => 'Frågor och svar',
    '' => '',
    'Marketing Collateral' => 'Marknadsmaterial',
    'Product Brochures' => 'Produkt broschyrer',
  ),
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Marknad',
    'Knowledege Base' => 'Kunskapsbas',
    'Sales' => 'Sälj',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Draft' => 'Utkast',
    'FAQ' => 'Frågor och svar',
    'Expired' => 'Utgången',
    'Under Review' => 'Under granskning',
    'Pending' => 'Avvaktar',
  ),
);

