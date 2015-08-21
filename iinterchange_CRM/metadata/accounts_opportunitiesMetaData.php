<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['accounts_opportunities'] = array ( 'table' => 'accounts_opportunities'
      , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'opportunity_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'account_id', 'type' =>'varchar', 'len'=>'36', )
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
      )                                  
      , 'indices' => array (
       array('name' =>'accounts_opportunitiespk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' => 'idx_account_opportunity', 'type'=>'alternate_key', 'fields'=>array('account_id','opportunity_id'))      
      , array('name' => 'idx_oppid_del_accid', 'type' => 'index', 'fields'=> array('opportunity_id', 'deleted', 'account_id'))
      )
      
      ,'relationships' => array ('accounts_opportunities' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
							  'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'accounts_opportunities', 'join_key_lhs'=>'account_id', 'join_key_rhs'=>'opportunity_id'))
	  	
)
?>
