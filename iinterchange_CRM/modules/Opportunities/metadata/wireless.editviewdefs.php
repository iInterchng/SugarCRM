<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$viewdefs['Opportunities']['EditView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array(array('name'=>'name', 'displayParams'=>array('required'=>true,'wireless_edit_only'=>true,)),),
	    array('amount'),
		array('account_name'),
		array('date_closed'),
	    array('sales_stage'),
		array('assigned_user_name'),
		array('team_name'),
	),
);
?>