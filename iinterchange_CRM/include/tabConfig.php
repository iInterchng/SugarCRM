<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
   ********************************************************************************/




$GLOBALS['tabStructure'] = array(
    "LBL_TABGROUP_SALES" => array(
        'label' => 'LBL_TABGROUP_SALES',
        'modules' => array(
            "Home",
            "Accounts",
            "Contacts",
            "Opportunities",
            "Leads",
            "Contracts",
            "Quotes",
            "Products",
            "Forecasts",
        )
    ),
    "LBL_TABGROUP_MARKETING" => array(
        'label' => 'LBL_TABGROUP_MARKETING',
        'modules' => array(
            "Home",
            "Accounts",
            "Contacts",
            "Leads",    
            "Campaigns",
            "Prospects",
            "ProspectLists",
        )
    ),
    "LBL_TABGROUP_SUPPORT" => array(
        'label' => 'LBL_TABGROUP_SUPPORT',
        'modules' => array(
            "Home",
            "Accounts",
            "Contacts",
            "Cases",
            "Bugs",
            "KBDocuments",
        )
    ),
    "LBL_TABGROUP_ACTIVITIES" => array(
        'label' => 'LBL_TABGROUP_ACTIVITIES',
        'modules' => array(
            "Home",
            "Calendar",
            "Calls",
            "Meetings",
            "Emails",
            "Tasks",
            "Notes",
        )
    ),
    "LBL_TABGROUP_COLLABORATION"=>array(
        'label' => 'LBL_TABGROUP_COLLABORATION',
        'modules' => array(
            "Home",
            "Emails",
            "Documents",
            "Project",
            "KBDocuments",
        )
    ),
    "LBL_TABGROUP_REPORTS"=>array(
        'label' => 'LBL_TABGROUP_REPORTS',
        'modules' => array(
            "Home",
            "Reports",
            "Forecasts",
        )
    ),
);

if(file_exists('custom/include/tabConfig.php')){
	require_once('custom/include/tabConfig.php');
}
?>
