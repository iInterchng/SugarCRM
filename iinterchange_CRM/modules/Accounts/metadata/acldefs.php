<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

// created: 2005-10-19 11:16:08
$acldefs['Accounts'] = array (
  'forms' => 
  array (
    'by_name' => 
    array (
      'btn1' => 
      array (
        'display_option' => 'disabled',
        'action_option' => 'list',
        'app_action' => 'EditView',
        'module' => 'Accounts',
      ),
    ),
  ),
  'form_names' => 
  array (
    'by_id' => 'by_id',
    'by_name' => 'by_name',
    'DetailView' => 'DetailView',
    'EditView' => 'EditView',
  ),
);
?>
