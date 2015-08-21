<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '-празен-',
    'Marketing' => 'Маркетинг',
    'Knowledege Base' => 'Knowledge Base',
    'Sales' => 'Продажби',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '-празен-',
    'Marketing Collateral' => 'Маркетингови материали',
    'Product Brochures' => 'Брошури',
    'FAQ' => 'Често задавани въпроси',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Активен',
    'Draft' => 'Работен вариант',
    'FAQ' => 'Често задавани въпроси',
    'Expired' => 'С изтекъл срок на валидност',
    'Under Review' => 'В процес на обработка',
    'Pending' => 'Висяща',
  ),
);

