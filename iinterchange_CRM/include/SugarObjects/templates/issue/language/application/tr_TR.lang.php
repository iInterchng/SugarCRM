<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Kabul edildi',
    'Duplicate' => 'Çoğalt',
    'Closed' => 'Kapalı',
    'Out of Date' => 'Geçerliliğini Yitirmiş',
    'Invalid' => 'Geçersiz',
  ),
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Yönetim',
    'Product' => 'Ürün',
    'User' => 'Kullanıcı',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Yeni',
    'Assigned' => 'Atanmış',
    'Closed' => 'Kapalı',
    'Pending Input' => 'Bekleyen Girdi',
    'Rejected' => 'Reddedilmiş',
    'Duplicate' => 'Çoğalt',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Yüksek',
    'P2' => 'Orta',
    'P3' => 'Düşük',
  ),
);

