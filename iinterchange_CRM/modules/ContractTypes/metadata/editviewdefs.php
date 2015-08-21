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
 
$viewdefs['ContractTypes']['EditView'] = array(
    'templateMeta' => array('maxColumns' => '2', 
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'), 
                                            array('label' => '10', 'field' => '30')
                                            ),
    ),
    
    'panels' => array (
    	'default'=> array(
	         array(array('name'=>'name',
	                     'label'=>'LBL_NAME', 
	                     'displayParams'=>array('required'=>true, 'size'=>60)
	               )
	         ),
	         array(array('name'=>'list_order',
	                     'label'=>'LBL_LIST_ORDER',
	                     'displayParams'=>array('required'=>true, 'size'=>4)
	               ),
	         ),
         ),
    )


);
?>