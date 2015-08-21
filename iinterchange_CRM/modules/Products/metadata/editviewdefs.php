<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Products']['EditView'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
    'javascript' => '<script type="text/javascript" src="include/jsolait/init.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/JSON.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_base.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="modules/Products/EditView.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>'
),

'panels' =>array (
  'default' =>
  array (

    array (
      array('name'=>'name',
            'displayParams'=>array('required'=>true),
            'customCode'=>'<input name="name" id="name" type="text" value="{$fields.name.value}">'.
                          '<input name="product_template_id" id="product_template_id" type="hidden" value="{$fields.product_template_id.value}">'.
                          '&nbsp;<input title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" type="button" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'return get_popup_product();\'>' .
            		      '&nbsp;<input tabindex="1" title="{$LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.product_template_id.value = \'\'; this.form.name.value = \'\';" type="button" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">',
      ),
      'status'
    ),

    array (
      'account_name',
      'contact_name',
    ),

    array (
      array('name'=>'quantity','displayParams'=>array('size'=>5)),
      'date_purchased',
    ),

    array (
      'serial_number',
      'date_support_starts',
    ),

    array (
      'asset_number',
      'date_support_expires',
    ),
  ),

  array (

    array (
      'currency_id',
      '',
    ),

    array (
      'cost_price',
      '',
    ),

    array (
      'list_price',
      'book_value',
    ),

    array (
      'discount_price',
      'book_value_date',
    ),
    array (
      'discount_amount',
      'discount_select',
    ),
  ),

  array (

    array (
      array('name'=>'website', 'type'=>'Link'),
      'tax_class',
    ),

    array (
      'manufacturer_id',
      'weight',
    ),

    array (
      'mft_part_num',
      'category_id',
    ),

    array (
      'vendor_part_num',
      'type_id',
    ),    

    array (
      'description',
    ),

    array (
      'support_name',
      'support_contact',
    ),

    array (
      'support_description',
      'support_term',
    ),
  ),
)


);
?>