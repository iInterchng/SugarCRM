<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Holidays']['EditView'] = array(
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
      '',
    ),
    
    array (
      
      array (
        'name' => 'description',
      ),
    ),
    
    array (
    	array (
    		'name' => 'resource_name',
    		'displayParams'=>array('required'=>true),
    		'customCode' => '{if $PROJECT}<select name="person_type" id="person_type" onChange="showResourceSelect();">' .
							'<option value="">{$MOD.LBL_SELECT_RESOURCE_TYPE}</option>' .
							'<option value="Users">{$MOD.LBL_USER}</option>' .
							'<option value="Contacts">{$MOD.LBL_CONTACT}</option>' .
							'</select>' .
							'<span id="resourceSelector"></span>{/if}',
		),
	),
  ),
)


);
?>