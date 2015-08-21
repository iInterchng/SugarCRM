<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_status_dom' => 
  array (
    'New' => 'Нов',
    'Assigned' => 'Разпределен',
    'Closed' => 'Затворен',
    'Pending Input' => 'Висящ',
    'Rejected' => 'Отхвърлен',
    'Duplicate' => 'Дублирай',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '-празен-',
    'Accepted' => 'Приет',
    'Out of Date' => 'С изтекъл срок',
    'Invalid' => 'Невалиден',
    'Duplicate' => 'Дублирай',
    'Closed' => 'Затворен',
  ),
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Административен',
    'Product' => 'Продукт',
    'User' => 'Потребител',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Висока',
    'P2' => 'Средна',
    'P3' => 'Ниска',
  ),
);

