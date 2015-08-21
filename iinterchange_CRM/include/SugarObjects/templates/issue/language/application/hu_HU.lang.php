<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
















	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Adminisztráció',
    'Product' => 'Termék',
    'User' => 'Felhasználó',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Új',
    'Assigned' => 'Engedélyezve',
    'Closed' => 'Zárva',
    'Pending Input' => 'Függőben lévő bevitel',
    'Rejected' => 'Elutasítva',
    'Duplicate' => 'Másolat',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Magas',
    'P2' => 'Közepes',
    'P3' => 'Alacsony',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '[-üres-]',
    'Accepted' => 'Elfogadott',
    'Duplicate' => 'Másolat',
    'Closed' => 'Lezárt',
    'Out of Date' => 'Lejárt',
    'Invalid' => 'Érvénytelen',
  ),
);

