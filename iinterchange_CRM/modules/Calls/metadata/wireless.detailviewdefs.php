<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Calls']['DetailView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array(array('name'=>'name', 'displayParams'=>array('required'=>true,'wireless_edit_only'=>true,)),),
		array('date_start'),
		array('direction'),
	    array('status'),
	    array('duration_hours'),
		array('duration_minutes'),
        array('description'),
		array('assigned_user_name'),
		array('team_name'),
        
	),
);
?>