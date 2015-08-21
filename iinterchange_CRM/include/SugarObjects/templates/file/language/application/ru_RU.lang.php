<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
















	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => ' ',
    'Marketing' => 'Маркетинговые кампании',
    'Knowledege Base' => 'База знаний',
    'Sales' => 'Продажи',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => ' ',
    'Marketing Collateral' => 'Дополнительное маркетинговое обеспечение',
    'Product Brochures' => 'Брошюры продуктов',
    'FAQ' => 'Часто задаваемые вопросы',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Активно',
    'Draft' => 'Черновик',
    'FAQ' => 'Часто задаваемые вопросы',
    'Expired' => 'Просрочен',
    'Under Review' => 'На рассмотрении',
    'Pending' => 'В ожидании',
  ),
);

