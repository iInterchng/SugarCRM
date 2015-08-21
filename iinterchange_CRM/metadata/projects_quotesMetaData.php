<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$dictionary['projects_quotes'] = array (
    'table' => 'projects_quotes',
    'fields' => array (
        array('name' => 'id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'quote_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'project_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'date_modified', 'type' => 'datetime'),
        array('name' => 'deleted', 'type' => 'bool', 'len' => '1', 'default' => '0', 'required' => false),
    ),
    'indices' => array (
        array('name' => 'projects_quotes_pk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' => 'idx_proj_quote_proj', 'type' =>'index', 'fields'=>array('project_id')),
        array('name' => 'idx_proj_quote_quote', 'type' =>'index', 'fields'=>array('quote_id')),
        array('name' => 'projects_quotes_alt', 'type'=>'alternate_key', 'fields'=>array('project_id','quote_id')),
    ),
    'relationships' => array (
        'projects_quotes' => array(
            'lhs_module' => 'Project',
            'lhs_table' => 'project',
            'lhs_key' => 'id',
            'rhs_module' => 'Quotes',
            'rhs_table' => 'quotes',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'projects_quotes',
            'join_key_lhs' => 'project_id',
            'join_key_rhs' => 'quote_id',
        ),
    ),
);
?>
