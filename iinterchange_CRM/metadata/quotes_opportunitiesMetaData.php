<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['quotes_opportunities'] = array ( 'table' => 'quotes_opportunities'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'opportunity_id', 'type' =>'varchar', 'len'=>'36',)
      , array('name' =>'quote_id', 'type' =>'varchar', 'len'=>'36', )
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
                                                      )                                  , 'indices' => array (
       array('name' =>'quotes_opportunitiespk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_opp_qte_opp', 'type' =>'index', 'fields'=>array('opportunity_id'))
      , array('name' => 'idx_quote_oportunities', 'type'=>'alternate_key', 'fields'=>array('quote_id'))
      
                                                      )
  	  , 'relationships' => array ('quotes_opportunities' => array('lhs_module'=> 'Quotes', 'lhs_table'=> 'quotes', 'lhs_key' => 'id',
							  'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'quotes_opportunities', 'join_key_lhs'=>'quote_id', 'join_key_rhs'=>'opportunity_id',
							  ))
                                                      
)
?>
