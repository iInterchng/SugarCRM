<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['quotes_contacts'] = array ( 'table' => 'quotes_contacts'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'contact_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'quote_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'contact_role', 'type' =>'varchar', 'len'=>'20', )
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
		)                                  
		
  , 'indices' => array (
       array('name' =>'quotes_contactspk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_con_qte_con', 'type' =>'index', 'fields'=>array('contact_id'))
      , array('name' =>'idx_con_qte_opp', 'type' =>'index', 'fields'=>array('quote_id'))
      , array('name' => 'idx_quote_contact_role', 'type'=>'alternate_key', 'fields'=>array('quote_id','contact_role'))
                                                      )
                                                      
  , 'relationships' => array ('quotes_contacts_shipto' => 
   								array('lhs_module'=> 'Quotes', 'lhs_table'=> 'quotes', 
								'lhs_key' => 'id','rhs_module'=> 'Contacts', 'rhs_table'=> 'contacts', 
								'rhs_key' => 'id','relationship_type'=>'many-to-many',
						  		'join_table'=> 'quotes_contacts', 'join_key_lhs'=>'quote_id', 'join_key_rhs'=>'contact_id',
							    'relationship_role_column'=>'contact_role', 'relationship_role_column_value'=>'Ship To'
						  		),
					   			'quotes_contacts_billto' => 
   								array('lhs_module'=> 'Quotes', 'lhs_table'=> 'quotes', 
								'lhs_key' => 'id','rhs_module'=> 'Contacts', 'rhs_table'=> 'contacts', 
								'rhs_key' => 'id','relationship_type'=>'many-to-many',
						  		'join_table'=> 'quotes_contacts', 'join_key_lhs'=>'quote_id', 'join_key_rhs'=>'contact_id',
							    'relationship_role_column'=>'contact_role', 'relationship_role_column_value'=>'Bill To'
						  		)						  		
							)
)
?>
