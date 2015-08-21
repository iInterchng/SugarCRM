<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




/**
 * This file is where the user authentication occurs. No redirection should happen in this file.
 *
 */
require_once('modules/Users/authentication/SugarAuthenticate/SugarAuthenticateUser.php');


class SAMLAuthenticateUser extends SugarAuthenticateUser{

	/**
	 * Does the actual authentication of the user and returns an id that will be used
	 * to load the current user (loadUserOnSession)
	 *
	 * @param STRING $name
	 * @param STRING $password
	 * @return STRING id - used for loading the user
	 *
	 * Contributions by Erik Mitchell erikm@logicpd.com
	 */
	function authenticateUser($name, $password) {
		if(empty($_POST['SAMLResponse']))return parent::authenticateUser($name, $password);
		
		require 'modules/Users/authentication/SAMLAuthenticate/settings.php';
		require 'modules/Users/authentication/SAMLAuthenticate/lib/onelogin/saml.php';
		$samlresponse = new SamlResponse($_POST['SAMLResponse']);
 		$samlresponse->user_settings = get_user_settings();
  		if ($samlresponse->is_valid()){
  			$dbresult = $GLOBALS['db']->query("SELECT id, status FROM users WHERE user_name='" . $samlresponse->get_nameid() . "' AND deleted = 0");

			//user already exists use this one
			if($row = $GLOBALS['db']->fetchByAssoc($dbresult)){
				if($row['status'] != 'Inactive')
					return $row['id'];
				else
					return '';
			}else{
				return $this->createUser($samlresponse->get_nameid());
			}
  		}	
  		return '';
	}
	
	
	
	
		
	

	/**
	 * Creates a user with the given User Name and returns the id of that new user
	 * populates the user with what was set in ldapUserInfo
	 *
	 * @param STRING $name
	 * @return STRING $id
	 */
	function createUser($name){

			$user = new User();
			$user->user_name = $name;
			$user->email1 = $name;
			$user->last_name = $name;
			$user->employee_status = 'Active';
			$user->status = 'Active';
			$user->is_admin = 0;
			$user->external_auth_only = 1;
			$user->system_generated_password = 0;
			$user->save();
			return $user->id;

	}
	

	







}

?>
