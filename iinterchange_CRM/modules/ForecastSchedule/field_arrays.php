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
$fields_array['ForecastSchedule'] = array ('column_fields' => 
	array('id'
		,'timeperiod_id'
		,'user_id'
		,'cascade_hierarchy'
		,'forecast_start_date'
		,'status'
		,'date_entered'
		,'date_modified'
		,'created_by'
		),
        'list_fields' =>  array('id', 'timeperiod_id', 'user_id', 'date_entered', 'name', 
								'start_date','end_date','forecast_type'),
);
?>