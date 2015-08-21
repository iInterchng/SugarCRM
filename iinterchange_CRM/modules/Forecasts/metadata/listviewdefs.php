<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$listViewDefs['ForecastDirectReports'] = array(
	'USER_NAME' => array(
		'width' => '16%', 		
		'label' => 'LBL_FDR_USER_NAME',
        'tablename'=>'users',
		), 
	'BEST_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_C_BEST_CASE',
        'sortable'  => false,
    ),
	'LIKELY_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_C_LIKELY_CASE',
        'sortable'  => false,
    ),
	'WORST_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_C_WORST_CASE',
        'sortable'  => false,
    ),		
	'DATE_COMMITTED' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_DATE_COMMIT',
        'sortable'  => false,
    ),
	'WK_BEST_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_WK_BEST_CASE',		
		'edit' => true,
        'sortable'  => false,
    ),
	'WK_LIKELY_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_WK_LIKELY_CASE',		
		'edit' => true,
        'sortable'  => false,
    ),
	'WK_WORST_CASE' => array(
		'width' => '12%', 
		'label' => 'LBL_FDR_WK_WORST_CASE',		
		'edit' => true,
        'sortable'  => false,
    ),		
//fields not visible in the list view.
    'OPP_COUNT' => array(
        'hidden' => true,    
        'width' => '0%', 
        'label' => 'LBL_FDR_OPPORTUNITIES'), 
    'OPP_WEIGH_VALUE' => array(
        'hidden' => true,
        'width' => '0%', 
        'label' => 'LBL_FDR_WEIGH'), 
	'FORECAST_TYPE' => array(
		'width' => '0%', 
		'label' => 'LBL_FDR_ADJ_AMOUNT',		
		'hidden' => true,),
    'DATE_ENTERED' => array(
        'width' => '0%', 
        'label' => 'LBL_FDR_DATE_COMMIT',
        'hidden' => true,
    ),

);
?>
