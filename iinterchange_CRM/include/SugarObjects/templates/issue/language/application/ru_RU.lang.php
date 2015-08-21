<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Ведение',
    'Product' => 'Результат',
    'User' => 'Клиентское',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Новое',
    'Assigned' => 'Назначенное',
    'Closed' => 'Закрыто',
    'Pending Input' => 'Ожидание решения',
    'Rejected' => 'Отклонено',
    'Duplicate' => 'Дублировать',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Высокий',
    'P2' => 'Средний',
    'P3' => 'Низкий',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => ' ',
    'Accepted' => 'Принято',
    'Duplicate' => 'Дублировать',
    'Closed' => 'Закрыто',
    'Out of Date' => 'Устарело',
    'Invalid' => 'Недействительно',
  ),
);

