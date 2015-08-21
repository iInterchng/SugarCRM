<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '-blank',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Wissensbasis',
    'Sales' => 'Verkauf',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '-blank-',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Werbematerial',
    'Product Brochures' => 'Produktbroschüren',
  ),
  $object_name.'_status_dom' => 
  array (
    'FAQ' => 'FAQ',
    'Pending' => 'Pending',
    'Active' => 'Aktiv',
    'Draft' => 'Entwurf',
    'Expired' => 'Abgelaufen',
    'Under Review' => 'Wird überprüft',
  ),
);

