<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/connectors/filters/default/filter.php');

class ext_soap_hoovers_filter extends default_filter {
	
public function getList($args, $module) {

	$list = $this->_component->getSource()->getList($args, $module);

	//If count was 0 and city, zip, state and/or country value was used, we try to improve searching		
	if(empty($list) && !empty($args['bal']['location']['city'])) {
	   $GLOBALS['log']->info("ext_soap_hoovers_filter, unset ['bal']['location']['city'] search term");
	   unset($args['bal']['location']['city']);	
	   $list = $this->_component->getSource()->getList($args, $module);
	}		
	
	if(empty($list) && !empty($args['bal']['location']['postalCode'])) {
	   $GLOBALS['log']->info("ext_soap_hoovers_filter, unset ['bal']['location']['postalCode'] search term");
	   unset($args['bal']['location']['postalCode']);	
	   $list = $this->_component->getSource()->getList($args, $module);
	}		
	
	if(empty($list) && !empty($args['bal']['location']['globalState'])) {
	   $GLOBALS['log']->info("ext_soap_hoovers_filter, unset ['bal']['location']['globalState'] search term");
	   unset($args['bal']['location']['globalState']);	
	   $list = $this->_component->getSource()->getList($args, $module);
	}	
	
	if(empty($list) && !empty($args['bal']['location']['countryId'])) {
	   $GLOBALS['log']->info("ext_soap_hoovers_filter, unset ['bal']['location']['countryId'] search term");
	   unset($args['bal']['location']['countryId']);	
	   $list = $this->_component->getSource()->getList($args, $module);
	}

	//Sometimes Hoovers makes the mistake of returning the first entry that may not be what we want
	if(count($list) == 1 && !empty($args['bal']['specialtyCriteria']['companyName'])) {
	   if(preg_match('/^(.*?)([\,|\s]+.*?)$/', $args['bal']['specialtyCriteria']['companyName'], $matches)) {
	   	 $GLOBALS['log']->info("ext_soap_hoovers_filter, change companyName search term");
	   	 $args['bal']['specialtyCriteria']['companyName'] = $matches[1];
	     $list = $this->_component->getSource()->getList($args, $module);
	     if(!empty($list)) {
	        return $list;	
	     }
	   }
	}
	
	return $list;

}
	
}

?>