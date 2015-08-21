<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


/**
 * This file intialize the service class and does all the setters based on the values provided in soap/rest entry point
 * and calls serve method which takes the request and send response back to the client  
 */
ob_start();
require('include/entryPoint.php');
require_once('soap/SoapError.php');
require_once('SoapHelperWebService.php');
require_once('SugarRestUtils.php');
require_once($webservice_path);
require_once($registry_path);
$url = $GLOBALS['sugar_config']['site_url'].$location;
$service = new $webservice_class($url);
$service->registerClass($registry_class);
$service->register();
$service->registerImplClass($webservice_impl_class);

// set the service object in the global scope so that any error, if happens, can be set on this object
global $service_object;
$service_object = $service;

$service->serve();


		
