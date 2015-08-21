<?php
// created: 2014-05-09 17:16:10
$GLOBALS["dictionary"]["Team"] = array (
  'table' => 'teams',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_PRIMARY_TEAM_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '128',
    ),
    'name_2' => 
    array (
      'name' => 'name_2',
      'vname' => 'LBL_NAME_2',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '128',
      'reportable' => false,
    ),
    'associated_user_id' => 
    array (
      'name' => 'associated_user_id',
      'type' => 'id',
      'reportable' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
    ),
    'private' => 
    array (
      'name' => 'private',
      'vname' => 'LBL_PRIVATE',
      'type' => 'bool',
      'default' => '0',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'reportable' => false,
      'required' => false,
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'team_memberships',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'res_c' => 
    array (
      'enforced' => 'false',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'res_c',
      'vname' => 'LBL_RES',
      'type' => 'text',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
      'id' => 'Teamsres_c',
      'custom_module' => 'Teams',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'teamspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_team_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_team_del_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'name',
      ),
    ),
  ),
  'custom_fields' => true,
);
?>
