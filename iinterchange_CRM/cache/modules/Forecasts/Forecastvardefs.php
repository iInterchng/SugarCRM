<?php
// created: 2014-05-09 17:41:57
$GLOBALS["dictionary"]["Forecast"] = array (
  'table' => 'forecasts',
  'acl_fields' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_FORECAST_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'timeperiod_id' => 
    array (
      'name' => 'timeperiod_id',
      'vname' => 'LBL_FORECAST_TIME_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'ID of the associated time period for this forecast',
    ),
    'forecast_type' => 
    array (
      'name' => 'forecast_type',
      'vname' => 'LBL_FORECAST_TYPE',
      'type' => 'enum',
      'len' => 100,
      'massupdate' => false,
      'options' => 'forecast_type_dom',
      'comment' => 'Indicator of whether forecast is direct or rollup',
    ),
    'opp_count' => 
    array (
      'name' => 'opp_count',
      'vname' => 'LBL_FORECAST_OPP_COUNT',
      'type' => 'int',
      'len' => '5',
      'comment' => 'Number of opportunities represented by this forecast',
    ),
    'opp_weigh_value' => 
    array (
      'name' => 'opp_weigh_value',
      'vname' => 'LBL_FORECAST_OPP_WEIGH',
      'type' => 'int',
      'comment' => 'Weighted amount of all opportunities represented by this forecast',
    ),
    'best_case' => 
    array (
      'name' => 'best_case',
      'vname' => 'LBL_FORECAST_OPP_BEST_CASE',
      'type' => 'int',
      'comment' => 'Best case forecast amount',
    ),
    'likely_case' => 
    array (
      'name' => 'likely_case',
      'vname' => 'LBL_FORECAST_OPP_COMMIT',
      'type' => 'int',
      'comment' => 'Likely case forecast amount',
    ),
    'worst_case' => 
    array (
      'name' => 'worst_case',
      'vname' => 'LBL_FORECAST_OPP_WORST',
      'type' => 'int',
      'comment' => 'Worst case likely amount',
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'vname' => 'LBL_FORECAST_USER',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'User to which this forecast pertains',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
      'comment' => 'Date record created',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
      'comment' => 'Date record modified',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'timeperiod_name' => 
    array (
      'name' => 'timeperiod_name',
      'rname' => 'name',
      'id_name' => 'timeperiod_id',
      'vname' => 'LBL_TIMEPERIOD_NAME',
      'type' => 'relate',
      'table' => 'timeperiods',
      'isnull' => 'true',
      'module' => 'TimePeriods',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'user_name' => 
    array (
      'name' => 'user_name',
      'rname' => 'user_name',
      'id_name' => 'user_id',
      'vname' => 'LBL_USER_NAME',
      'type' => 'relate',
      'table' => 'users',
      'isnull' => 'true',
      'module' => 'Users',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'reports_to_user_name' => 
    array (
      'name' => 'reports_to_user_name',
      'rname' => 'user_name',
      'id_name' => 'reports_to_user_name',
      'vname' => 'LBL_REPORTS_TO_USER_NAME',
      'type' => 'relate',
      'table' => 'reports_to',
      'isnull' => 'true',
      'module' => 'Users',
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'type' => 'date',
      'source' => 'non-db',
      'table' => 'timeperiods',
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'type' => 'date',
      'source' => 'non-db',
      'table' => 'timeperiods',
    ),
    'name' => 
    array (
      'name' => 'name',
      'type' => 'varchar',
      'source' => 'non-db',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'forecasts_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'forecasts_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Forecasts',
      'rhs_table' => 'forecasts',
      'rhs_key' => 'user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'forecastspk',
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
