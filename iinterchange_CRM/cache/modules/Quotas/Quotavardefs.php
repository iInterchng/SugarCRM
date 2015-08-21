<?php
// created: 2014-05-09 17:05:18
$GLOBALS["dictionary"]["Quota"] = array (
  'table' => 'quotas',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_NAME',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'rname' => 'user_name',
      'vname' => 'LBL_USER_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'required' => false,
      'isnull' => false,
      'reportable' => false,
      'dbType' => 'id',
      'importable' => 'required',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'user_id',
      'rname' => 'user_name',
      'vname' => 'LBL_ASSIGNED_USER_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'required' => true,
      'reportable' => false,
      'source' => 'non-db',
    ),
    'user_name' => 
    array (
      'name' => 'user_name',
      'vname' => 'LBL_USER_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
    ),
    'user_full_name' => 
    array (
      'name' => 'user_full_name',
      'vname' => 'LBL_USER_FULL_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
    ),
    'timeperiod_id' => 
    array (
      'name' => 'timeperiod_id',
      'vname' => 'LBL_TIMEPERIOD_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
    ),
    'quota_type' => 
    array (
      'name' => 'quota_type',
      'vname' => 'LBL_QUOTA_TYPE',
      'type' => 'enum',
      'len' => 100,
      'massupdate' => false,
      'options' => 'forecast_type_dom',
    ),
    'amount' => 
    array (
      'name' => 'amount',
      'vname' => 'LBL_AMOUNT',
      'type' => 'int',
      'required' => true,
      'reportable' => false,
      'importable' => 'required',
    ),
    'amount_base_currency' => 
    array (
      'name' => 'amount_base_currency',
      'vname' => 'LBL_AMOUNT_BASE_CURRENCY',
      'type' => 'int',
      'required' => true,
      'reportable' => false,
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'importable' => 'required',
    ),
    'currency_symbol' => 
    array (
      'name' => 'currency_symbol',
      'vname' => 'LBL_LIST_SYMBOL',
      'type' => 'varchar',
      'len' => '36',
      'source' => 'non-db',
      'table' => 'currency',
      'required' => true,
    ),
    'committed' => 
    array (
      'name' => 'committed',
      'vname' => 'LBL_COMMITTED',
      'type' => 'bool',
      'default' => '0',
      'required' => false,
      'reportable' => false,
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
      'vname' => 'LBL_CREATED_BY',
      'type' => 'varchar',
      'len' => '36',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'reportable' => false,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'quotaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'custom_fields' => false,
);
?>
