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
 
$viewdefs['Employees']['EditView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array (
	    	array (
		        'name' => 'first_name',
		        'displayParams'=>array('wireless_edit_only'=>true,),
	      	),
	    ),
	    array (
	      	array('name'=>'last_name',
	            'displayParams'=>array('required'=>true,'wireless_edit_only'=>true,),
	      	),  
	    ),  
	    array (
	      array(
              'name'=>'title',
              'customCode' => '{if $EDIT_TITLE_DEPT}<input type="text" name="{$fields.title.name}" id="{$fields.title.name}" size="30" maxlength="50" value="{$fields.title.value}" title="" tabindex="t" >'.
                              '{else}{$fields.title.value}<input type="hidden" name="{$fields.title.name}" id="{$fields.title.name}" value="{$fields.title.value}">{/if}'
                              ),
	    ),
	    array (
	      array(
              'name'=>'department', 
              'customCode' => '{if $EDIT_TITLE_DEPT}<input type="text" name="{$fields.department.name}" id="{$fields.department.name}" size="30" maxlength="50" value="{$fields.department.value}" title="" tabindex="t" >'.
                              '{else}{$fields.department.value}<input type="hidden" name="{$fields.department.name}" id="{$fields.department.name}" value="{$fields.department.value}">{/if}'
                              ),
	    ),
		array('phone_work'),
	    array('phone_mobile'),
		array('email1'),
	),
);
?>