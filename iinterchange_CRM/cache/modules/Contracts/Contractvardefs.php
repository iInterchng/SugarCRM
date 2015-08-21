<?php
// created: 2014-05-09 17:16:09
$GLOBALS["dictionary"]["Contract"] = array (
  'table' => 'contracts',
  'audited' => true,
  'unified_search' => true,
  'comment' => 'A contract collects information about important legal and contractural obligations',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_CONTRACT_NAME',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '255',
      'required' => true,
      'comment' => 'The name of the contract',
      'importable' => 'required',
      'unified_search' => true,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
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
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
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
      'group' => 'created_by_name',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
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
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'contracts_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'contracts_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'contracts_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => false,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'custom_type' => 'teamset',
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'contracts_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'contracts_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'contracts_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'reference_code' => 
    array (
      'name' => 'reference_code',
      'vname' => 'LBL_REFERENCE_CODE',
      'type' => 'varchar',
      'len' => '255',
      'required' => false,
      'comment' => 'The reference code used by the organization to refer to this contract',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'vname' => 'LBL_QUOTES',
      'relationship' => 'contracts_quotes',
      'link_type' => 'one',
      'source' => 'non-db',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'vname' => 'LBL_PRODUCTS',
      'relationship' => 'contracts_products',
      'link_type' => 'one',
      'source' => 'non-db',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'vname' => 'LBL_OPPORTUNITY',
      'relationship' => 'contracts_opportunities',
      'link_type' => 'one',
      'source' => 'non-db',
    ),
    'opportunity_name' => 
    array (
      'name' => 'opportunity_name',
      'rname' => 'name',
      'id_name' => 'opportunity_id',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'relate',
      'table' => 'opportunities',
      'isnull' => 'true',
      'module' => 'Opportunities',
      'dbType' => 'varchar',
      'link' => 'opportunities',
      'len' => '255',
      'source' => 'non-db',
      'massupdate' => false,
      'unified_search' => true,
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'type' => 'id',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'source' => 'non-db',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'table' => 'accounts',
      'isnull' => 'true',
      'join_name' => 'accounts',
      'module' => 'Accounts',
      'dbType' => 'varchar',
      'link' => 'accounts',
      'len' => '255',
      'source' => 'non-db',
      'required' => true,
      'importable' => 'required',
      'unified_search' => true,
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'id',
      'audited' => true,
      'reportable' => false,
      'comment' => 'The account ID to which the contract is associated',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_contracts',
      'source' => 'non-db',
      'link_type' => 'one',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'vname' => 'LBL_START_DATE',
      'type' => 'date',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'end_date',
        'blank' => true,
      ),
      'audited' => true,
      'comment' => 'The effective date of the contract',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'vname' => 'LBL_END_DATE',
      'type' => 'date',
      'audited' => true,
      'comment' => 'The date in which the contract is no longer effective',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'dbType' => 'id',
      'vname' => 'LBL_CURRENCY_ID',
      'type' => 'varchar',
      'group' => 'currency_id',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'required' => false,
      'reportable' => false,
      'comment' => 'The currency in use for the contract',
    ),
    'currency_name' => 
    array (
      'name' => 'currency_name',
      'type' => 'enum',
      'vname' => 'LBL_CURRENCY',
      'function' => 'getCurrencyDropDown',
      'source' => 'non-db',
      'studio' => 'false',
      'comment' => 'Currency name used for Meta-data framework',
    ),
    'total_contract_value' => 
    array (
      'name' => 'total_contract_value',
      'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
      'comment' => 'The overall value of the contract',
    ),
    'total_contract_value_usdollar' => 
    array (
      'name' => 'total_contract_value_usdollar',
      'vname' => 'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
      'comment' => 'The overall contract value expressed in USD',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => 100,
      'required' => true,
      'options' => 'contract_status_dom',
      'audited' => true,
      'comment' => 'The contract status',
      'importable' => 'required',
    ),
    'customer_signed_date' => 
    array (
      'name' => 'customer_signed_date',
      'vname' => 'LBL_CUSTOMER_SIGNED_DATE',
      'type' => 'date',
      'comment' => 'Date in which the ultimate customer signed the contract',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'company_signed_date' => 
    array (
      'name' => 'company_signed_date',
      'vname' => 'LBL_COMPANY_SIGNED_DATE',
      'type' => 'date',
      'comment' => 'Date in which the company using Sugar signed the contract',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'contract_term' => 
    array (
      'name' => 'contract_term',
      'vname' => 'LBL_CONTRACT_TERM',
      'type' => 'int',
      'len' => 5,
      'source' => 'non-db',
    ),
    'expiration_notice' => 
    array (
      'name' => 'expiration_notice',
      'vname' => 'LBL_EXPIRATION_NOTICE',
      'type' => 'datetimecombo',
      'reportable' => false,
      'massupdate' => false,
      'comment' => 'Date to issue an expiration notice (useful for workflow rules)',
    ),
    'time_to_expiry' => 
    array (
      'name' => 'time_to_expiry',
      'vname' => 'LBL_TIME_TO_EXPIRY',
      'type' => 'int',
      'len' => 5,
      'source' => 'non-db',
    ),
    'type_name' => 
    array (
      'name' => 'type_name',
      'vname' => 'LBL_TYPE',
      'rname' => 'name',
      'id_name' => 'type',
      'type' => 'relate',
      'studio' => 'false',
      'table' => 'contract_types',
      'module' => 'ContractTypes',
      'len' => '36',
      'reportable' => false,
      'source' => 'non-db',
      'link' => 'contract_types',
      'comment' => 'The contract type',
    ),
    'contract_types' => 
    array (
      'name' => 'contract_types',
      'type' => 'link',
      'vname' => 'LBL_PRODUCTS',
      'relationship' => 'contracts_contract_types',
      'link_type' => 'one',
      'source' => 'non-db',
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'function' => 'getContractTypesDropDown',
      'merge_filter' => 'enabled',
      'duplicate_merge' => 'disabled',
      'comment' => 'The dropdown options for Contract types',
    ),
    'contracts_documents' => 
    array (
      'name' => 'contracts_documents',
      'type' => 'link',
      'relationship' => 'contracts_documents',
      'source' => 'non-db',
      'vname' => 'LBL_DOCUMENTS',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'vname' => 'LBL_MEMBER_OF',
      'type' => 'relate',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'source' => 'non-db',
      'comment' => 'parent_name of contract, added to prevent ability to add flex relate field to module because of relationship in linked_documentsMetaData.php',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'contracts_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'contract_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
  ),
  'relationships' => 
  array (
    'contracts_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'contracts_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'contracts_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'contracts_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'contracts_teams' => 
    array (
      'lhs_module' => 'Contracts',
      'lhs_table' => 'contracts',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'contracts_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'contracts_contract_types' => 
    array (
      'lhs_module' => 'Contracts',
      'lhs_table' => 'contracts',
      'lhs_key' => 'type',
      'rhs_module' => 'ContractTypes',
      'rhs_table' => 'contract_types',
      'rhs_key' => 'id',
      'relationship_role_column' => 'type',
      'relationship_role_column_value' => 'Contracts',
      'relationship_type' => 'one-to-many',
    ),
    'contract_notes' => 
    array (
      'lhs_module' => 'Contracts',
      'lhs_table' => 'contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Contracts',
      'relationship_type' => 'one-to-many',
    ),
    'account_contracts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Contracts',
      'rhs_table' => 'contracts',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'contractspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_contracts_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'favorites' => true,
  'custom_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);
?>
