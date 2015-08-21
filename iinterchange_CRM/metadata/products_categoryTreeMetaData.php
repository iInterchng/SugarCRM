<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['products_category_tree'] = array ( 'table' => 'category_tree'
                                  , 'fields' => array (
       array('name' =>'self_id', 'type' =>'varchar', 'len'=>'36' )
      , array('name' =>'node_id', 'type' =>'int', 'auto_increment'=>true, 'required'=>true)
      , array('name' =>'parent_node_id', 'type' =>'int','default'=>'0')
      , array ('name' => 'type','type' => 'varchar', 'len'=>'36' )
                                                      )                                  , 'indices' => array (
       array('name' =>'categorytreepk', 'type' =>'primary', 'fields'=>array('node_id'))
      , array('name' =>'idx_categorytree', 'type' =>'index', 'fields'=>array('self_id'))
                                                      )
                                  )
?>