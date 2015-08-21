<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['quotes_accounts'] = array('table' => 'quotes_accounts'
,'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'quote_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'account_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'account_role', 'type' =>'varchar', 'len'=>'20', )
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
                                                      )                         
,'indices' => array (
       array('name' =>'quotes_accountspk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_acc_qte_acc', 'type' =>'index', 'fields'=>array('account_id'))
      , array('name' =>'idx_acc_qte_opp', 'type' =>'index', 'fields'=>array('quote_id'))
      , array('name' => 'idx_quote_account_role', 'type'=>'alternate_key', 'fields'=>array('quote_id','account_role'))
                                                      )
,'relationships' => 
	array ('quotes_billto_accounts' => 
		array('lhs_module'=> 'Quotes', 'lhs_table'=> 'quotes', 'lhs_key' => 'id',
		'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'id',
		'relationship_type'=>'many-to-many',
		'join_table'=> 'quotes_accounts', 'join_key_lhs'=>'quote_id', 'join_key_rhs'=>'account_id',
		'relationship_role_column'=>'account_role', 'relationship_role_column_value'=>'Bill To'),
							  
		'quotes_shipto_accounts' => 
		array('lhs_module'=> 'Quotes', 'lhs_table'=> 'quotes', 'lhs_key' => 'id',
		'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'id',
		'relationship_type'=>'many-to-many',
		'join_table'=> 'quotes_accounts', 'join_key_lhs'=>'quote_id', 'join_key_rhs'=>'account_id',
		'relationship_role_column'=>'account_role', 'relationship_role_column_value'=>'Ship To'),							  
		)

);
?>
