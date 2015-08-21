<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = '<module_name>';
$viewdefs[$module_name]['EditView'] = array(
	'templateMeta' => array('maxColumns' => '1',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            ),


	'panels' => array (
		array (
	    	array (
		        'name' => 'first_name',
		        'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
		        'displayParams'=>array('wireless_edit_only'=>true,),
	      	),
	    ),
		array (
	      	array('name'=>'last_name',
	            'displayParams'=>array('wireless_edit_only'=>true,),
	      	),  
	    ),
    	array (
    		array (
      			'name' => 'phone_work',
    		),
    	),
    	array (
    		'email1'
  		),
		array (
			'assigned_user_name',
		),
		array (
			'team_name',
		),
	)
);
?>