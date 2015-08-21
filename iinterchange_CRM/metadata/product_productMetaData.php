<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['product_product'] = array (
	'table' => 'product_product',
	'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required' => false)
      , array('name' =>'parent_id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'child_id', 'type' =>'varchar', 'len'=>'36')
	),
	'indices' => array (
       array('name' =>'prod_prodpk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_pp_parent', 'type' =>'index', 'fields'=>array('parent_id'))
      , array('name' =>'idx_pp_child', 'type' =>'index', 'fields'=>array('child_id'))
	),

 	'relationships' => array (
		'product_product' => array('lhs_module'=> 'Products', 'lhs_table'=> 'products', 'lhs_key' => 'id',
		'rhs_module'=> 'Products', 'rhs_table'=> 'products', 'rhs_key' => 'id',
		'relationship_type'=>'many-to-many',
		'join_table'=> 'product_product', 'join_key_lhs'=>'parent_id', 'join_key_rhs'=>'child_id','reverse'=>'1'))
);
?>
