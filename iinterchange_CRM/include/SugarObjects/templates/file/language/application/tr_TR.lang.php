<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Pazarlama',
    'Knowledege Base' => 'Bilgi Tabanı',
    'Sales' => 'Satış',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '',
    'Marketing Collateral' => 'Pazarlama Teminatı',
    'Product Brochures' => 'Ürün Broşürü',
    'FAQ' => 'SSS (Sıkça Sorulan Sorular)',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktif',
    'Draft' => 'Taslak',
    'FAQ' => 'SSS (Sıkça Sorulan Sorular)',
    'Expired' => 'Sona Erdi',
    'Under Review' => 'Denetleme Altında',
    'Pending' => 'Beklemede',
  ),
);

