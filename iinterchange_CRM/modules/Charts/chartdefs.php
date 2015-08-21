<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$chartDefs = array(
	'pipeline_by_sales_stage_funnel'=>
		array(	'type' => 'code',
				'id' => 'Chart_pipeline_by_sales_stage',
				'label' => 'Pipeline by Sales Stage Funnel',
				'chartUnits' => 'Opportunity Size in $1K',
				'chartType' => 'funnel chart 3D',
				'groupBy' => array( 'sales_stage', 'user_name', ),
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				'url_params' => array( 'assigned_user_id', 'sales_stage', 'date_start', 'date_closed' ),
			 ),
	'pipeline_by_sales_stage'=>
		array( 	'type' => 'code',
				'id' => 'Chart_pipeline_by_sales_stage',
				'label' => 'Pipeline by Sales Stage',
				'chartUnits' => 'Opportunity Size in $1K',
				'chartType' => 'horizontal group by chart',
				'groupBy' => array( 'sales_stage', 'user_name' ), 
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				'url_params' => array( 'assigned_user_id', 'sales_stage', 'date_start', 'date_closed' ),				
			),
	'lead_source_by_outcome'=>
		array(	'type' => 'code',
				'id' => 'Chart_lead_source_by_outcome',
				'label' => 'Lead Source By Outcome',
				'chartUnits' => '',
				'chartType' => 'horizontal group by chart',
				'groupBy' => array( 'lead_source', 'sales_stage' ),
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				'url_params' => array( 'lead_source', 'sales_stage', 'date_start', 'date_closed' ),				
			 ),
	'outcome_by_month'=>
		array(	'type' => 'code',
				'id' => 'Chart_outcome_by_month',
				'label' => 'Outcome by Month',
				'chartUnits' => 'Opportunity Size in $1K',				
				'chartType' => 'stacked group by chart',
				'groupBy' => array( 'm', 'sales_stage', ),
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				'url_params' => array( 'sales_stage', 'date_closed' ),								
			 ),
	'pipeline_by_lead_source'=>
		array(	'type' => 'code',
				'id' => 'Chart_pipeline_by_lead_source',
				'label' => 'Pipeline By Lead Source',
				'chartUnits' => 'Opportunity Size in $1K',				
				'chartType' => 'pie chart',
				'groupBy' => array( 'lead_source', ),
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				'url_params' => array( 'lead_source', ),
			 ),
	'opportunities_this_quarter' => 
		array( 	'type' => 'code',
				'id' => 'opportunities_this_quarter',
				'label' => 'Opportunities this Quarter',
				'chartType' => 'gauge chart',
				'chartUnits' => 'Number of Opportunities',				
				'groupBy' => array( ),
				'gaugeTarget' => 200,
				'base_url'=> 
					array( 	'module' => 'Opportunities',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
		),
	
	'my_modules_used_last_30_days' =>
		array( 	'type' => 'code',
				'id' => 'my_modules_used_last_30_days',
				'label' => 'My Modules Used (Last 30 Days)',
				'chartType' => 'horizontal bar chart',
				'chartUnits' => 'Access Count',				
				'groupBy' => array( 'module_name'),
				'base_url'=> 
					array( 	'module' => 'Trackers',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
				
		),

	'my_team_modules_used_last_30_days' =>
		array( 	'type' => 'code',
				'id' => 'my_team_modules_used_last_30_days',
				'label' => 'Modules Used By My Direct Reports (Last 30 Days)',
				'chartType' => 'horizontal group by chart',
				'chartUnits' => 'Access Count',				
				'groupBy' => array('user_name', 'module_name'),
				'base_url'=> 
					array( 	'module' => 'Trackers',
							'action' => 'index',
							'query' => 'true',
							'searchFormTab' => 'advanced_search',
						 ),
		),
);

if(file_exists('custom/Charts/chartDefs.ext.php')){
	include_once('custom/Charts/chartDefs.ext.php');	
}
?>