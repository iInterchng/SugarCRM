<?php
//FILE SUGARCRM flav=pro
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['ext_rest_zoominfocompany'] = array(
  'comment' => 'vardefs for ZoomInfo Company connector',
  'fields' => array (
    'id' =>
	  array (
	    'name' => 'id',
	    'output' => 'companyid',
	    'vname' => 'LBL_COMPANY_ID',
	    'input' => 'CompanyID',
	    'hidden' => true,
	),  
	'companyname' => array (
	    'name' => 'companyname',
	    'vname' => 'LBL_COMPANY_NAME',
	    'input' => 'companyName',
	    'search' => true,
    ),  
    'street'=> array(
        'name' => 'street',
        'vname' => 'LBL_STREET',
    ),
    'city'=> array(
	    'name' => 'city',
	    'vname' => 'LBL_CITY',
    ),
    'state' => array (
	    'name' => 'state',
	    'vname' => 'LBL_STATE',
	    'input' => 'State',
	    'search' => true,
    ),
    'countrycode' => array (
	    'name' => 'countrycode',
	    'vname' => 'LBL_COUNTRY',
	    'input' => 'Country',
	    'search' => true,    
    ),
    'zip' => array (
	    'name' => 'zip',
	    'vname' => 'LBL_ZIP',
	    'input' => 'ZipCode',
	    'search' => true,    
    ),
    'industry' => array(
	    'name' => 'industry',
	    'vname' => 'LBL_INDUSTRY',
    ),
    'website' => array(
	    'name' => 'website',
	    'vname' => 'LBL_WEBSITE',
    ),
    'companydescription' => array(
	    'name' => 'companydescription',
	    'vname' => 'LBL_DESCRIPTION', 
    ),
    'phone' => array(
        'name' => 'phone',
    	'vname' => 'LBL_PHONE',
    ),
    'companyticker' => array(
    	'name'=>'companyticker',
    	'vname' => 'LBL_COMPANY_TICKER',
    ),
    'zoomcompanyurl'=> array(
    	'name'=>'zoomcompanyurl',
    	'vname'=>'LBL_ZOOMINFO_COMPANY_URL',
    ),
    'revenue' => array(
    	'name'=>'revenue',
    	'vname'=>'LBL_REVENUE',
    ),
    'employees' => array(
    	'name'=>'employees',
    	'vname'=>'LBL_EMPLOYEES',
    ),    
  )
);
?>
