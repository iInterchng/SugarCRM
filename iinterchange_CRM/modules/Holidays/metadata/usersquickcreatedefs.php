<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Holidays']['UsersQuickCreate'] = array(
    'templateMeta' => array('maxColumns' => '2', 
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'), 
                                            array('label' => '10', 'field' => '30')
                                            ),
    ),
 'panels' =>array (
  'default' => 
  array (
    
    array (
      
      array (
        'name' => 'holiday_date',
      ),
    ),
    
    array (
      
      array (
        'name' => 'description',
        'displayParams' => 
        array (
          'rows' => '4',
          'cols' => '80',
        ),
      ),
    ),
  ),
)


);
?>