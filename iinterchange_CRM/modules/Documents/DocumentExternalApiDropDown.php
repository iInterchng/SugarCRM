<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

function getDocumentsExternalApiDropDown($focus = null, $name = null, $value = null, $view = null) {
    require_once('include/externalAPI/ExternalAPIFactory.php');

    $apiList = ExternalAPIFactory::getModuleDropDown('Documents');

    $apiList = array_merge(array('Sugar'=>$GLOBALS['app_list_strings']['eapm_list']['Sugar']),$apiList);
    if(!empty($value) && empty($apiList[$value])){
        $apiList[$value] = $value;
    }
    return $apiList;

}
 
