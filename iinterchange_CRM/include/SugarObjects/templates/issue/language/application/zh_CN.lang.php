<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



















$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => '管理员',
    'Product' => '产品',
    'User' => '用户',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => '新建',
    'Assigned' => '负责人',
    'Closed' => '关闭',
    'Pending Input' => '等待输入',
    'Rejected' => '拒绝',
    'Duplicate' => '复制',
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
  	'Accepted' => '接受',
    'Duplicate' => '复制',
    'Closed' => '关闭',
    'Out of Date' => '超期',
    'Invalid' => '无效',
  ),
  );
?>