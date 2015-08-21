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
$fields_array['Forecast'] = array ('column_fields' => 
	array('id'
		,'timeperiod_id'
		,'user_id'
		,'forecast_type'
		,'opp_count'
		,'opp_weigh_value'
		,'date_entered'
		,'date_modified'
		,'best_case'
		,'likely_case'
		,'worst_case'
		),
        'list_fields' =>  array('id', 'timeperiod_id', 'user_id', 'cascade_hierarchy', 
								'forecast_start_date', 'status','user_name','cascade_hierarchy_checked',
								'best_case','likely_case','worst_case'),
);
$fields_array['ForecastOpportunities'] = array ('column_fields' => 
	array('id'
		,'name'
		,'probability'
		,'revenue'
		,'weighted_value'
		,'wk_likely_case'
		,'wk_best_case'
		,'wk_worst_case'
		, 'worksheet_id'
		),
        'list_fields' =>  array('id', 'name','revenue','date_entered', 'weighted_value', 
								'account_name','probability','wk_likely_case',
								'wk_best_case','wk_worst_case', 'worksheet_id'),
);
$fields_array['ForecastDirectReports'] = array ('column_fields' => 
	array('id'
		,'name'
		,'probability'
		,'revenue'
		,'weighted_value'
		,'user_id'
		,'commit_value'
		,'forecast_type'
		,'likely_case'
		,'best_case'
		,'worst_case'
		,'wk_likely_case'
		,'wk_best_case'
		,'wk_worst_case'				
		),
        'list_fields' =>  array('id', 'name','revenue','date_entered', 'weighted_value', 
								'account_name','probability','forecast_type','likely_case',
								'best_case','worst_case','wk_likely_case','wk_best_case','wk_worst_case'),
);
$fields_array['Worksheet'] = array ('column_fields' => array(
		'id'
		, 'user_id'
		,'timeperiod_d'
		,'forecast_type' 
		,'related_id'
		,'best_case_value'
		,'likely_value'
		,'worst_case_value'
		,'related_forecast_type'
        ,'date_modified'
        ,'modified_user_id'
		),
        'list_fields' =>  array('id','user_id','timeperiod_d','related_id','forecast_type',
								'best_case','likely_case','worst_case','related_forecast_type','date_modified','modified_user_id'),
);

?>