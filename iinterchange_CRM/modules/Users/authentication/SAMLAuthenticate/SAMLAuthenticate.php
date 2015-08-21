<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




/**
 * This file is used to control the authentication process. 
 * It will call on the user authenticate and controll redirection 
 * based on the users validation
 *
 */

if(empty($_REQUEST['user_name']))$_REQUEST['user_name'] = 'onelogin';
if(empty($_REQUEST['user_password']))$_REQUEST['user_password'] = 'onelogin';
require_once('modules/Users/authentication/SugarAuthenticate/SugarAuthenticate.php');
class SAMLAuthenticate extends SugarAuthenticate {
	var $userAuthenticateClass = 'SAMLAuthenticateUser';
	var $authenticationDir = 'SAMLAuthenticate';
	/**
	 * Constructs SAMLAuthenticate
	 * This will load the user authentication class
	 *
	 * @return SAMLAuthenticate
	 */
	function SAMLAuthenticate(){
		parent::SugarAuthenticate();
	}

}
