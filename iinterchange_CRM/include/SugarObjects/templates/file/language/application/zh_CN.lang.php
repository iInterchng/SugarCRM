<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


 
$app_list_strings = array (
strtolower($object_name).'_category_dom' =>
    array (
    '' => '',
    'Marketing' => '市场',
    'Knowledege Base' => '知识库',
    'Sales' => '销售',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => '市场营销',
    'Product Brochures' => '产品手册',
    'FAQ' => 'FAQ',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
    'Active' => '活动',
    'Draft' => '拟订',
    'FAQ' => 'FAQ',
    'Expired' => '到期',
    'Under Review' => '检查中',
    'Pending' => '未决定',
  ),
  );
?>
