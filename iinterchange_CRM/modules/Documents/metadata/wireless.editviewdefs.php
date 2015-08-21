<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$viewdefs['Documents']['EditView'] = array(
	'templateMeta' => array('maxColumns' => '1',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            ),
                            ),


	'panels' => array (
    	array (
    		array (
      			'name' => 'document_name',
      			'label' => 'LBL_DOC_NAME',
    		),
    	),
      	array ('active_date'),
      	array ('exp_date'),
		array('team_name'),
	)

);
?>