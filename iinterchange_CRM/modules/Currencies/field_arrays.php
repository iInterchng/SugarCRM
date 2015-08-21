<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Contains field arrays that are used for caching
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['Currency'] = array ('column_fields' => Array("id"
		,"name"
		,"conversion_rate"
		,"iso4217"
		,"symbol"
		,'status'
                ,"deleted"
                ,"date_entered"
                ,"date_modified"
		),
        'required_fields' => array('name'=>1, 'symbol'=>2, 'conversion_rate'=>3, 'iso4217'=>4 , 'status'=>5),
);
?>