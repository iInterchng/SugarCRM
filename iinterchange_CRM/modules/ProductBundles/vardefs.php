<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['ProductBundle'] = array('table' => 'product_bundles', 'comment' => 'Quote groups'
                               ,'fields' => array (
 'id' =>
  array (
    'name' => 'id',
    'vname' => 'LBL_NAME',
    'type' => 'id',
    'required' => true,
    'reportable'=>false,
    'comment' => 'Unique identifier'
  ),
   'deleted' =>
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'required' => false,
    'default' => '0',
    'reportable'=>false,
    'comment' => 'Record deletion indicator'
  ),
   'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'required' => true,
    'comment' => 'Date record created'
  ),
  'date_modified' =>
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'required' => true,
    'comment' => 'Date record last modified'
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
    'reportable'=>true,
    'comment' => 'User who last modified record'
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
    'comment' => 'User who created record'
  ),
  'name' =>
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'dbType' => 'varchar',
    'type' => 'name',
    'len' => '255',
    'comment' => 'Name of the group'
  ),
  'bundle_stage' =>
  array (
    'name' => 'bundle_stage',
    'vname' => 'LBL_BUNDLE_STAGE',
    'type' => 'varchar',
    'len' => '255',
    'comment' => 'Processing stage of the group (ex: Draft)'
  ),
  'description' =>
  array (
    'name' => 'description',
    'vname' => 'LBL_DESCRIPTION',
    'type' => 'text',
    'comment' => 'Group description'
  ),
  'tax' =>
  array (
    'name' => 'tax',
    'vname' => 'LBL_TAX',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Tax rate applied to items in the group'
  ),
  'tax_usdollar' =>
  array (
    'name' => 'tax_usdollar',
    'vname' => 'LBL_TAX_USDOLLAR',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Total tax for all items in group in USD'
  ),
  'total' =>
  array (
    'name' => 'total',
    'vname' => 'LBL_TOTAL',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Total amount for all items in the group'
  ),
   'total_usdollar' =>
  array (
    'name' => 'total_usdollar',
    'vname' => 'LBL_TOTAL_USDOLLAR',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Total amount for all items in the group in USD'
  ),

  'subtotal_usdollar' =>
  array (
    'name' => 'subtotal_usdollar',
    'vname' => 'LBL_SUBTOTAL_USDOLLAR',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Group total minus tax and shipping in USD'
  ),
  'shipping_usdollar' =>
  array (
    'name' => 'shipping_usdollar',
    'vname' => 'LBL_SHIPPING',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Shipping charge for group in USD'
  ),
  'deal_tot' =>
  array (
    'name' => 'deal_tot',
    'vname' => 'LBL_DEAL_TOT',
    'type' => 'decimal',
    'len' => '26,2',
    'disable_num_format' => true,
    'comment' => 'discount amount'
  ),
  'deal_tot_usdollar' =>
  array (
    'name' => 'deal_tot_usdollar',
    'vname' => 'LBL_DEAL_TOT',
    'type' => 'decimal',
    'len' => '26,2',
    'disable_num_format' => true,
    'comment' => 'discount amount'
  ),
  'new_sub' =>
  array (
    'name' => 'new_sub',
    'vname' => 'LBL_NEW_SUB',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Group total minus discount and tax and shipping'
  ),
  'new_sub_usdollar' =>
  array (
    'name' => 'new_sub_usdollar',
    'vname' => 'LBL_NEW_SUB',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Group total minus discount and tax and shipping'
  ),
  'subtotal' =>
  array (
    'name' => 'subtotal',
    'vname' => 'LBL_SUBTOTAL',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Group total minus tax and shipping'
  ),
  'shipping' =>
  array (
    'name' => 'shipping',
    'vname' => 'LBL_SHIPPING',
    'type' => 'decimal',
    'len' => '26,6',
    'disable_num_format' => true,
    'comment' => 'Shipping charge for group'
  ),
  'currency_id' =>
  array (
    'name' => 'currency_id',
    'type' => 'id',
    'required'=>false,
    'reportable'=>false,
    'comment' => 'Currency used'
  ),

)
                                                      , 'indices' => array (
       array('name' =>'procuct_bundlespk', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_products_bundles', 'type'=>'index', 'fields'=>array('name','deleted')),
                                                      )
                            );

VardefManager::createVardef('ProductBundles','ProductBundle', array(
'team_security',
));
?>
