<?php
$viewdefs ['Quotes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'footerTpl' => 'modules/Quotes/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_quote_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'opportunity_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quote_num',
            'type' => 'readonly',
            'displayParams' => 
            array (
              'required' => false,
            ),
          ),
          1 => 'quote_stage',
        ),
        2 => 
        array (
          0 => 'purchase_order_num',
          1 => 'date_quote_expected_closed',
        ),
        3 => 
        array (
          0 => 'payment_terms',
          1 => 'original_po_date',
        ),
      ),
      'lbl_bill_to' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_account_name',
            'displayParams' => 
            array (
              'key' => 
              array (
                0 => 'billing',
                1 => 'shipping',
              ),
              'copy' => 
              array (
                0 => 'billing',
                1 => 'shipping',
              ),
              'billingKey' => 'billing',
              'shippingKey' => 'shipping',
              'copyPhone' => false,
              'call_back_function' => 'set_billing_return',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_account_name',
            'displayParams' => 
            array (
              'key' => 
              array (
                0 => 'shipping',
              ),
              'copy' => 
              array (
                0 => 'shipping',
              ),
              'shippingKey' => 'shipping',
              'copyPhone' => false,
              'call_back_function' => 'set_shipping_return',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_contact_name',
            'displayParams' => 
            array (
              'initial_filter' => '&account_id_advanced="+this.form.{$fields.billing_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.billing_account_name.name}.value+"',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_contact_name',
            'displayParams' => 
            array (
              'initial_filter' => '&account_id_advanced="+this.form.{$fields.shipping_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.shipping_account_name.name}.value+"',
            ),
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
