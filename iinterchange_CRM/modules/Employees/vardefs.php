<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $dictionary;
if(empty($dictionary['User'])){
	include('modules/Users/vardefs.php');
}
$dictionary['Employee']=$dictionary['User'];
//users of emloyees modules are not allowed to change the employee/user status.
$dictionary['Employee']['fields']['status']['massupdate']=false;
$dictionary['Employee']['fields']['is_admin']['massupdate']=false;
$dictionary['Employee']['fields']['email1']['required']=false;
$dictionary['Employee']['fields']['email_addresses']['required']=false;
$dictionary['Employee']['fields']['email_addresses_primary']['required']=false;
?>
