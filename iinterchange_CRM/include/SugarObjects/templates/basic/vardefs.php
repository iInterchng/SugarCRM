<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$vardefs = array(  
'favorites'=>true, 
'fields' => array (
	  'id' =>
	  array (
	    'name' => 'id',
	    'vname' => 'LBL_ID',
	    'type' => 'id',
	    'required'=>true,
	    'reportable'=>true,
	    'comment' => 'Unique identifier'
	  ),
	  'name'=>
	    array(
	    'name'=>'name',
	    'vname'=> 'LBL_NAME',
	    'type'=>'name',
		'dbType' => 'varchar',
	    'len'=>255,
        'unified_search' => true,
        'required'=>true,
		'importable' => 'required',
	    ),
	  'date_entered' =>
	  array (
	    'name' => 'date_entered',
	    'vname' => 'LBL_DATE_ENTERED',
	    'type' => 'datetime',
	    'group'=>'created_by_name',
	    'comment' => 'Date record created',
	    'enable_range_search' => true,
	  	'options' => 'date_range_search_dom',
	  ),
	  'date_modified' =>
	  array (
	    'name' => 'date_modified',
	    'vname' => 'LBL_DATE_MODIFIED',
	    'type' => 'datetime',
	    'group'=>'modified_by_name',
	    'comment' => 'Date record last modified',
	    'enable_range_search' => true,
	    'options' => 'date_range_search_dom',
	  ),
		'modified_user_id' =>
	  array (
	    'name' => 'modified_user_id',
	    'rname' => 'user_name',
	    'id_name' => 'modified_user_id',
	    'vname' => 'LBL_MODIFIED',
	    'type' => 'assigned_user_name',
	    'table' => 'users',
	    'isnull' => 'false',
	     'group'=>'modified_by_name',
	    'dbType' => 'id',
	    'reportable'=>true,
	    'comment' => 'User who last modified record',
	  ),
	  'modified_by_name' => 
	  array (
	    'name' => 'modified_by_name',
	    'vname' => 'LBL_MODIFIED_NAME',
	    'type' => 'relate',
	    'reportable'=>false,
	    'source'=>'non-db',
	    'rname'=>'user_name',
	    'table' => 'users',
	    'id_name' => 'modified_user_id',
	    'module'=>'Users',
	    'link'=>'modified_user_link',
	    'duplicate_merge'=>'disabled' 
	  ),  
	  'created_by' =>
	  array (
	    'name' => 'created_by',
	    'rname' => 'user_name',
	    'id_name' => 'modified_user_id',
	    'vname' => 'LBL_CREATED',
	    'type' => 'assigned_user_name',
	    'table' => 'users',
	    'isnull' => 'false',
	    'dbType' => 'id',
	    'group'=>'created_by_name',
	    'comment' => 'User who created record',
	  ),
	  	'created_by_name' => 
	  array (
	    'name' => 'created_by_name',
		'vname' => 'LBL_CREATED',
		'type' => 'relate',
		'reportable'=>false,
	    'link' => 'created_by_link',
	    'rname' => 'user_name',
		'source'=>'non-db',
		'table' => 'users',
		'id_name' => 'created_by',
		'module'=>'Users',
		'duplicate_merge'=>'disabled',
        'importable' => 'false',
	),
	  'description' =>
	  array (
	    'name' => 'description',
	    'vname' => 'LBL_DESCRIPTION',
	    'type' => 'text',
	    'comment' => 'Full text of the note',
	    'rows' => 6,
	    'cols' => 80,
	  ),
	  'deleted' =>
	  array (
	    'name' => 'deleted',
	    'vname' => 'LBL_DELETED',
	    'type' => 'bool',
	    'default' => '0',
	    'reportable'=>false,
	    'comment' => 'Record deletion indicator'
	  ),
	    
/////////////////RELATIONSHIP LINKS////////////////////////////
	  'created_by_link' =>
  array (
     'name' => 'created_by_link',
    'type' => 'link',
    'relationship' => strtolower($module) . '_created_by',
    'vname' => 'LBL_CREATED_USER',
    'link_type' => 'one',
    'module'=>'Users',
    'bean_name'=>'User',
    'source'=>'non-db',
  ),
  'modified_user_link' =>
  array (
        'name' => 'modified_user_link',
    'type' => 'link',
    'relationship' => strtolower($module). '_modified_user',
    'vname' => 'LBL_MODIFIED_USER',
    'link_type' => 'one',
    'module'=>'Users',
    'bean_name'=>'User',
    'source'=>'non-db',
  ),

),
'indices' => array (
       'id'=>array('name' =>strtolower($module).'pk', 'type' =>'primary', 'fields'=>array('id')),
       ),
'relationships'=>array(
	strtolower($module).'_modified_user' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> $module, 'rhs_table'=> strtolower($module), 'rhs_key' => 'modified_user_id',
   'relationship_type'=>'one-to-many')
   ,strtolower($module).'_created_by' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> $module, 'rhs_table'=> strtolower($module), 'rhs_key' => 'created_by',
   'relationship_type'=>'one-to-many')
),


);
?>