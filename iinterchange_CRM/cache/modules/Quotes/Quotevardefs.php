<?php
// created: 2014-05-09 17:21:33
$GLOBALS["dictionary"]["Quote"] = array (
  'table' => 'quotes',
  'audited' => true,
  'unified_search' => true,
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
      'vname' => 'LBL_QUOTE_NAME',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '50',
      'unified_search' => true,
      'importable' => 'required',
      'required' => true,
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
      'relationship' => 'quotes_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'quotes_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
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
      'relationship' => 'quotes_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
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
      'relationship' => 'quotes_team',
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
      'relationship' => 'quotes_team_count_relationship',
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
      'relationship' => 'quotes_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'shipper_id' => 
    array (
      'name' => 'shipper_id',
      'vname' => 'LBL_SHIPPER_ID',
      'type' => 'id',
      'required' => false,
      'do_report' => false,
      'reportable' => false,
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_ID',
      'type' => 'id',
      'required' => false,
      'do_report' => false,
      'reportable' => false,
    ),
    'taxrate_id' => 
    array (
      'name' => 'taxrate_id',
      'vname' => 'LBL_TAXRATE_ID',
      'type' => 'id',
      'required' => false,
      'do_report' => false,
      'reportable' => false,
    ),
    'show_line_nums' => 
    array (
      'name' => 'show_line_nums',
      'vname' => 'LBL_SHOW_LINE_NUMS',
      'type' => 'bool',
      'default' => 1,
      'hideacl' => true,
      'reportable' => false,
      'massupdate' => false,
    ),
    'calc_grand_total' => 
    array (
      'name' => 'calc_grand_total',
      'vname' => 'LBL_CALC_GRAND',
      'type' => 'bool',
      'reportable' => false,
      'default' => 1,
      'hideacl' => true,
      'massupdate' => false,
    ),
    'quote_type' => 
    array (
      'name' => 'quote_type',
      'vname' => 'LBL_QUOTE_TYPE',
      'type' => 'varchar',
      'len' => 100,
    ),
    'date_quote_expected_closed' => 
    array (
      'name' => 'date_quote_expected_closed',
      'vname' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED',
      'type' => 'date',
      'audited' => true,
      'reportable' => true,
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'original_po_date' => 
    array (
      'name' => 'original_po_date',
      'vname' => 'LBL_ORIGINAL_PO_DATE',
      'type' => 'date',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'payment_terms' => 
    array (
      'name' => 'payment_terms',
      'vname' => 'LBL_PAYMENT_TERMS',
      'type' => 'enum',
      'options' => 'payment_terms',
      'len' => '128',
    ),
    'date_quote_closed' => 
    array (
      'name' => 'date_quote_closed',
      'massupdate' => false,
      'vname' => 'LBL_DATE_QUOTE_CLOSED',
      'type' => 'date',
      'reportable' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_order_shipped' => 
    array (
      'name' => 'date_order_shipped',
      'massupdate' => false,
      'vname' => 'LBL_LIST_DATE_QUOTE_CLOSED',
      'type' => 'date',
      'reportable' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'order_stage' => 
    array (
      'name' => 'order_stage',
      'vname' => 'LBL_ORDER_STAGE',
      'type' => 'enum',
      'options' => 'order_stage_dom',
      'massupdate' => false,
      'len' => 100,
    ),
    'quote_stage' => 
    array (
      'name' => 'quote_stage',
      'vname' => 'LBL_QUOTE_STAGE',
      'type' => 'enum',
      'options' => 'quote_stage_dom',
      'len' => 100,
      'audited' => true,
      'importable' => 'required',
      'required' => true,
    ),
    'purchase_order_num' => 
    array (
      'name' => 'purchase_order_num',
      'vname' => 'LBL_PURCHASE_ORDER_NUM',
      'type' => 'varchar',
      'len' => '50',
    ),
    'quote_num' => 
    array (
      'name' => 'quote_num',
      'vname' => 'LBL_QUOTE_NUM',
      'type' => 'int',
      'auto_increment' => true,
      'required' => true,
      'unified_search' => true,
      'disable_num_format' => true,
      'enable_range_search' => true,
      'options' => 'numeric_range_search_dom',
    ),
    'subtotal' => 
    array (
      'name' => 'subtotal',
      'vname' => 'LBL_SUBTOTAL',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'subtotal_usdollar' => 
    array (
      'name' => 'subtotal_usdollar',
      'group' => 'subtotal',
      'vname' => 'LBL_SUBTOTAL_USDOLLAR',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
    ),
    'shipping' => 
    array (
      'name' => 'shipping',
      'vname' => 'LBL_SHIPPING',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'shipping_usdollar' => 
    array (
      'name' => 'shipping_usdollar',
      'vname' => 'LBL_SHIPPING_USDOLLAR',
      'group' => 'shipping',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'discount' => 
    array (
      'name' => 'discount',
      'vname' => 'LBL_DISCOUNT_TOTAL',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'deal_tot' => 
    array (
      'name' => 'deal_tot',
      'vname' => 'LBL_DEAL_TOT',
      'dbType' => 'decimal',
      'type' => 'decimal',
      'len' => '26,2',
    ),
    'deal_tot_usdollar' => 
    array (
      'name' => 'deal_tot_usdollar',
      'vname' => 'LBL_DEAL_TOT_USDOLLAR',
      'dbType' => 'decimal',
      'type' => 'decimal',
      'len' => '26,2',
    ),
    'new_sub' => 
    array (
      'name' => 'new_sub',
      'vname' => 'LBL_NEW_SUB',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'new_sub_usdollar' => 
    array (
      'name' => 'new_sub_usdollar',
      'vname' => 'LBL_NEW_SUB',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'tax' => 
    array (
      'name' => 'tax',
      'vname' => 'LBL_TAX',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'tax_usdollar' => 
    array (
      'name' => 'tax_usdollar',
      'vname' => 'LBL_TAX_USDOLLAR',
      'dbType' => 'decimal',
      'group' => 'tax',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
    ),
    'total' => 
    array (
      'name' => 'total',
      'vname' => 'LBL_TOTAL',
      'dbType' => 'decimal',
      'type' => 'currency',
      'len' => '26,6',
    ),
    'total_usdollar' => 
    array (
      'name' => 'total_usdollar',
      'vname' => 'LBL_TOTAL_USDOLLAR',
      'dbType' => 'decimal',
      'group' => 'total',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
      'enable_range_search' => true,
      'options' => 'numeric_range_search_dom',
    ),
    'billing_address_street' => 
    array (
      'name' => 'billing_address_street',
      'vname' => 'LBL_BILLING_ADDRESS_STREET',
      'type' => 'varchar',
      'group' => 'billing_address',
      'len' => '150',
    ),
    'billing_address_city' => 
    array (
      'name' => 'billing_address_city',
      'vname' => 'LBL_BILLING_ADDRESS_CITY',
      'type' => 'varchar',
      'group' => 'billing_address',
      'len' => '100',
    ),
    'billing_address_state' => 
    array (
      'name' => 'billing_address_state',
      'vname' => 'LBL_BILLING_ADDRESS_STATE',
      'type' => 'varchar',
      'group' => 'billing_address',
      'len' => '100',
    ),
    'billing_address_postalcode' => 
    array (
      'name' => 'billing_address_postalcode',
      'vname' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
      'type' => 'varchar',
      'group' => 'billing_address',
      'len' => '20',
    ),
    'billing_address_country' => 
    array (
      'name' => 'billing_address_country',
      'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
      'type' => 'varchar',
      'group' => 'billing_address',
      'len' => '100',
    ),
    'shipping_address_street' => 
    array (
      'name' => 'shipping_address_street',
      'vname' => 'LBL_SHIPPING_ADDRESS_STREET',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'len' => '150',
    ),
    'shipping_address_city' => 
    array (
      'name' => 'shipping_address_city',
      'vname' => 'LBL_SHIPPING_ADDRESS_CITY',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'len' => '100',
    ),
    'shipping_address_state' => 
    array (
      'name' => 'shipping_address_state',
      'vname' => 'LBL_SHIPPING_ADDRESS_STATE',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'len' => '100',
    ),
    'shipping_address_postalcode' => 
    array (
      'name' => 'shipping_address_postalcode',
      'vname' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'len' => '20',
    ),
    'shipping_address_country' => 
    array (
      'name' => 'shipping_address_country',
      'vname' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'len' => '100',
    ),
    'system_id' => 
    array (
      'name' => 'system_id',
      'vname' => 'LBL_SYSTEM_ID',
      'type' => 'int',
    ),
    'shipping_account_name' => 
    array (
      'name' => 'shipping_account_name',
      'rname' => 'name',
      'id_name' => 'shipping_account_id',
      'vname' => 'LBL_SHIPPING_ACCOUNT_NAME',
      'type' => 'relate',
      'table' => 'shipping_accounts',
      'isnull' => 'true',
      'group' => 'shipping_address',
      'link' => 'shipping_accounts',
      'module' => 'Accounts',
      'source' => 'non-db',
    ),
    'shipping_account_id' => 
    array (
      'name' => 'shipping_account_id',
      'type' => 'id',
      'group' => 'shipping_address',
      'vname' => 'LBL_SHIPPING_ACCOUNT_ID',
      'source' => 'non-db',
    ),
    'shipping_contact_name' => 
    array (
      'name' => 'shipping_contact_name',
      'rname' => 'last_name',
      'id_name' => 'shipping_contact_id',
      'vname' => 'LBL_SHIPPING_CONTACT_NAME',
      'type' => 'relate',
      'group' => 'shipping_address',
      'link' => 'shipping_contacts',
      'table' => 'shipping_contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'source' => 'non-db',
    ),
    'shipping_contact_id' => 
    array (
      'name' => 'shipping_contact_id',
      'rname' => 'last_name',
      'group' => 'shipping_address',
      'id_name' => 'shipping_contact_id',
      'vname' => 'LBL_SHIPPING_CONTACT_ID',
      'type' => 'relate',
      'link' => 'shipping_contacts',
      'table' => 'shipping_contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'group' => 'billing_address',
      'link' => 'billing_accounts',
      'table' => 'billing_accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'source' => 'non-db',
      'massupdate' => false,
      'studio' => 'false',
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'type' => 'id',
      'group' => 'billing_address',
      'vname' => 'LBL_ACCOUNT_ID',
      'source' => 'non-db',
      'massupdate' => false,
      'studio' => 'false',
    ),
    'billing_account_name' => 
    array (
      'name' => 'billing_account_name',
      'rname' => 'name',
      'group' => 'billing_address',
      'id_name' => 'billing_account_id',
      'vname' => 'LBL_BILLING_ACCOUNT_NAME',
      'type' => 'relate',
      'link' => 'billing_accounts',
      'table' => 'billing_accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'source' => 'non-db',
      'importable' => 'required',
      'required' => true,
    ),
    'billing_account_id' => 
    array (
      'name' => 'billing_account_id',
      'type' => 'id',
      'group' => 'billing_address',
      'vname' => 'LBL_BILLING_ACCOUNT_ID',
      'source' => 'non-db',
    ),
    'billing_contact_name' => 
    array (
      'name' => 'billing_contact_name',
      'rname' => 'last_name',
      'group' => 'billing_address',
      'id_name' => 'billing_contact_id',
      'vname' => 'LBL_BILLING_CONTACT_NAME',
      'type' => 'relate',
      'link' => 'billing_contacts',
      'table' => 'billing_contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'source' => 'non-db',
    ),
    'billing_contact_id' => 
    array (
      'name' => 'billing_contact_id',
      'rname' => 'last_name',
      'id_name' => 'billing_contact_id',
      'vname' => 'LBL_BILLING_CONTACT_ID',
      'type' => 'relate',
      'group' => 'billing_address',
      'link' => 'billing_contacts',
      'table' => 'billing_contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'source' => 'non-db',
      'massupdate' => false,
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'quote_tasks',
      'vname' => 'LBL_TASKS',
      'source' => 'non-db',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'quote_notes',
      'vname' => 'LBL_NOTES',
      'source' => 'non-db',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'quote_meetings',
      'vname' => 'LBL_MEETINGS',
      'source' => 'non-db',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'quote_calls',
      'vname' => 'LBL_CALLS',
      'source' => 'non-db',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_quotes',
      'vname' => 'LBL_EMAILS',
      'source' => 'non-db',
    ),
    'project' => 
    array (
      'name' => 'project',
      'type' => 'link',
      'relationship' => 'projects_quotes',
      'vname' => 'LBL_PROJECTS',
      'source' => 'non-db',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'quote_products',
      'vname' => 'LBL_PRODUCTS',
      'source' => 'non-db',
    ),
    'shipping_accounts' => 
    array (
      'name' => 'shipping_accounts',
      'type' => 'link',
      'relationship' => 'quotes_shipto_accounts',
      'vname' => 'LBL_SHIP_TO_ACCOUNT',
      'source' => 'non-db',
      'link_type' => 'one',
    ),
    'billing_accounts' => 
    array (
      'name' => 'billing_accounts',
      'type' => 'link',
      'relationship' => 'quotes_billto_accounts',
      'vname' => 'LBL_BILL_TO_ACCOUNT',
      'source' => 'non-db',
      'link_type' => 'one',
    ),
    'shipping_contacts' => 
    array (
      'name' => 'shipping_contacts',
      'type' => 'link',
      'relationship' => 'quotes_contacts_shipto',
      'vname' => 'LBL_SHIP_TO_CONTACT',
      'source' => 'non-db',
      'link_type' => 'one',
    ),
    'billing_contacts' => 
    array (
      'name' => 'billing_contacts',
      'type' => 'link',
      'link_type' => 'one',
      'vname' => 'LBL_BILL_TO_CONTACT',
      'relationship' => 'quotes_contacts_billto',
      'source' => 'non-db',
    ),
    'product_bundles' => 
    array (
      'name' => 'product_bundles',
      'type' => 'link',
      'vname' => 'LBL_PRODUCT_BUNDLES',
      'relationship' => 'product_bundle_quote',
      'source' => 'non-db',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'vname' => 'LBL_OPPORTUNITY',
      'relationship' => 'quotes_opportunities',
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
      'table' => 'Opportunities',
      'isnull' => 'true',
      'module' => 'Opportunities',
      'link' => 'opportunity_link',
      'massupdate' => false,
      'source' => 'non-db',
      'len' => 50,
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'type' => 'id',
      'vname' => 'LBL_BILLING_ACCOUNT_NAME',
      'source' => 'non-db',
    ),
    'documents' => 
    array (
      'name' => 'documents',
      'type' => 'link',
      'relationship' => 'documents_quotes',
      'source' => 'non-db',
      'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'vname' => 'LBL_CONTRACTS',
      'relationship' => 'contracts_quotes',
      'link_type' => 'one',
      'source' => 'non-db',
    ),
    'pymentterm_c' => 
    array (
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'pymentterm_c',
      'vname' => 'LBL_PYMENTTERM',
      'type' => 'enum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'payment_terms',
      'studio' => 'visible',
      'id' => 'Quotespymentterm_c',
      'custom_module' => 'Quotes',
    ),
    'terms_c' => 
    array (
      'default_value' => '<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<p>1) Supplier : Anchrom Analytical Pvt. Ltd.<br>
101, A Wing, Aniket Apartment, Navghar Road, Mulund (E), Mumbai - 400 081<br>
<br>
2) Manufacturer : CAMAG, Sonnenmattstrasse 11 CH 4132 Muttenz, Switzerland.<br>
Tel.: (61) 467 34 34 Fax.: (61) 461 07 02<br>
<br>
3) Delivery : 4-6 Weeks from receipt of payment along with order.<br>
<br>
4) Payment : With purchase order.<br>
<br>
5) Our Bankers : HDFC Bank Ltd.<br>
Manisha Towers Annex, 60 Feet Road<br>
Near Tata Colony, Mulund East, Mumbai - 400081<br>
Account No.03768630000045<br>
NEFT/ RTGS IFSC code : HDFC0000376<br>
<br>
6) Sales Tax charged @ V.A.T. 12.5% or CST 12.5%<br>
10.5% refund will be given upon receipt of ‘C’ form.<br>
<br>
7) Our MVAT : 27730009683-V<br>
CSTRC : 27730009683-C<br>
PAN No.: AAACA0177 D<br>
<br>
8) Validity : &lt;90&gt; days from the date of this offer.<br>
<br>
9) Warranty : 12 months from the date of installation or 13 months from the date
of shipment (whichever is earlier) against manufacturing defects only. CAMAG/ANCHROM
will arrange to replace or repair the defective parts at their discretion free
of charge. However any expenses arising for the same to carry out warranty terms
will borne by you. e.g dispatch of faulty part to Switzerland etc. The parts
ordered and fitted later do not carry any warranty, although they are brand new
and tested by our Principals. Also warranty is not applicable to consumables and
accessories such as capillaries, syringes, lamps, tubes, tips, washers, glass
items etc.<br>
<br>
10) The price is for the supply of material only. Labour charges for fitting the
same, if required, will be extra, as per specific quotation or treated as AMC
call.<br>
<br>
&lt;Please delete the term no. 11 force majure for orders below Rs.1,00,000/-&gt;<br>
<br>
11) Force Majure : If at any time during the continuance of this order either
party is unable to perform in whole or in part any obligation under this order
because of war, hostility, Military operation of any character, acts of public
enemy, civil commissions, sabotage, sterike, lock out, go-slow, fire, floods,
explosions, epidemic, quarantine restrictions, acts of God and acts of
Government (including but not mentioned to prohibition of exports or imports)
then the date when such circumstances are operative any extension/waiver of time
in respect of the delivery of any installment or parts of goods shall not be
deemed to be waiver/extension of time in respect of the remaining deliveries if
delivery of such circumstances exceed six months, either party shall have right
to refuse further performance of the contract in which case neither party shall
have the right to claim eventually damages. The party which is unable to fulfill
its engagements under the present contract must immediately inform the
circumstances to the other party.<br>
<br>
ANCHROM ANALYTICAL PVT. LTD.<br>
<br>
<br>
<br>
Ashish Bansod<br>
Service Coordinator</p>

</body>

</html>
',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'terms_c',
      'vname' => 'LBL_TERMS',
      'type' => 'wysiwyg',
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
      'dbType' => 'text',
      'id' => 'Quotesterms_c',
      'custom_module' => 'Quotes',
    ),
    'proddesc_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'proddesc_c',
      'vname' => 'LBL_PRODDESC',
      'type' => 'wysiwyg',
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
      'dbType' => 'text',
      'id' => 'Quotesproddesc_c',
      'custom_module' => 'Quotes',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'quotespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_quotes_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    1 => 
    array (
      'name' => 'quote_num',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'quote_num',
        1 => 'system_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_qte_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
  ),
  'relationships' => 
  array (
    'quotes_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'quotes_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'quotes_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'quotes_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'quotes_teams' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'quotes_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'quote_tasks' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Quotes',
    ),
    'quote_notes' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Quotes',
    ),
    'quote_meetings' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Quotes',
    ),
    'quote_calls' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Quotes',
    ),
    'quote_emails' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Quotes',
    ),
    'quote_products' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Products',
      'rhs_table' => 'products',
      'rhs_key' => 'quote_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'favorites' => true,
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => true,
);
?>
