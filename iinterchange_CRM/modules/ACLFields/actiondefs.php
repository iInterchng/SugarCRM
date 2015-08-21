<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 if(!defined('ACL_READ_ONLY')){   
 	define('ACL_READ_ONLY', 50);
 	define('ACL_READ_WRITE', 99);
 	define('ACL_OWNER_READ_WRITE', 40);
 	define('ACL_READ_OWNER_WRITE', 60);
 	 if(!defined('ACL_ALLOW_NONE')){  
 	 	define('ACL_ALLOW_NONE', -99);
 	 	define('ACL_ALLOW_DEFAULT', 0);
 	 }
 	 define('ACL_FIELD_DEFAULT', 99);
 }
 
 $GLOBALS['aclFieldOptions'] = array(
 					ACL_ALLOW_DEFAULT=>'LBL_DEFAULT',
 					ACL_READ_WRITE=>'LBL_READ_WRITE',
 					ACL_READ_OWNER_WRITE=>'LBL_READ_OWNER_WRITE',
 			 		ACL_READ_ONLY=>'LBL_READ_ONLY',
 			 		ACL_OWNER_READ_WRITE=>'LBL_OWNER_READ_WRITE',
 					ACL_ALLOW_NONE=>'LBL_ALLOW_NONE',
 					);

 




?>