<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
















	
$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => '管理',
    'Product' => '商品',
    'User' => 'アサイン先',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => '新規',
    'Assigned' => 'アサイン済み',
    'Closed' => '完了',
    'Pending Input' => '保留',
    'Rejected' => '拒否',
    'Duplicate' => '重複',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => '高',
    'P2' => '中',
    'P3' => '低',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => '受領',
    'Duplicate' => '重複',
    'Closed' => '完了',
    'Out of Date' => '期限切れ',
    'Invalid' => '無効'
  ),
  );