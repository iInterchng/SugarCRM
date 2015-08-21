<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/SugarWireless/SugarWirelessView.php');

/**
 * ViewWireless_Login extends SugarWirelessView and is the login view.
 */
class ViewWirelesslogin extends SugarWirelessView{

	/**
	 * Constructor for the view, it runs the constructor of SugarWirelessView and
	 * sets the footer option to true (it is off in the SugarWirelessView constructor)
	 */
	public function __construct(){
		parent::__construct();
		$this->options['show_footer'] = true;
	}

	/**
	 * Private function to check if the session variables store the user name.
	 */	
	private function check_session(){
		global $sugar_config;

        if(isset($_SESSION['authenticated_user_id'])) {
           header("Location: index.php?module=Users&action=wirelessmain&mobile=1");
        }
        
		if (isset($_SESSION['login_user_name'])) {
			if (isset($_REQUEST['default_user_name']))
				$login_user_name = $_REQUEST['default_user_name'];
			else
				$login_user_name = $_SESSION['login_user_name'];
		} 
		else {
			if (isset($_REQUEST['default_user_name'])) {
				$login_user_name = $_REQUEST['default_user_name'];
			} 
			else if (isset($_REQUEST['ck_login_id_20'])) {
				$login_user_name = get_user_name($_REQUEST['ck_login_id_20']);
			} 
			else {
				$login_user_name = $sugar_config['default_user_name'];
			}
			$_SESSION['login_user_name'] = $login_user_name;
		}
		
		// Retrieve username and password from the session if possible.
		if(isset($_SESSION['login_password'])) {
			$login_password = $_SESSION['login_password'];
		} 
		else {
			$login_password = $sugar_config['default_password'];
			$_SESSION['login_password'] = $login_password;
		}		
	}
	
	/**
	 * Public function that handles the display of the wireless login page.
	 */
	public function display()
    {
        global $mod_strings;
        
		$this->check_session();
				
		// set template variables for login error
		if(isset($_SESSION['login_error'])) {
			$this->ss->assign('login_error', true);
			$this->ss->assign('error_message', $mod_strings['LBL_ERROR'] . ": ". $_SESSION['login_error']);
            unset($_SESSION['login_error']);
        }

		// print the header		
		$this->wl_header();
		
		// set up template strings
		$this->ss->assign('LBL_USER_NAME', translate('LBL_USER_NAME', 'Users'));
		$this->ss->assign('LBL_PASSWORD', translate('LBL_PASSWORD', 'Users'));
		$this->ss->assign('LBL_NORMAL_LOGIN', translate('LBL_NORMAL_LOGIN', 'Users'));
		$this->ss->assign('LBL_LOGIN_BUTTON_LABEL', translate('LBL_LOGIN_BUTTON_LABEL', 'Users'));		
		
		// print the wireless login page
		$this->ss->display('include/SugarWireless/tpls/wirelesslogin.tpl');
	}
}
?>

