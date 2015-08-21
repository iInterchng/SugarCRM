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
require_once('modules/Users/authentication/SugarAuthenticate/SugarAuthenticate.php');
class EmailAuthenticate extends SugarAuthenticate {
	var $userAuthenticateClass = 'EmailAuthenticateUser';
	var $authenticationDir = 'EmailAuthenticate';
	/**
	 * Constructs EmailAuthenticate
	 * This will load the user authentication class
	 *
	 * @return EmailAuthenticate
	 */
	function EmailAuthenticate(){
	    
		parent::SugarAuthenticate();
	}

}
