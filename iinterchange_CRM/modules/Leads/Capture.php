<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/Leads/LeadFormBase.php');

global $app_strings, $app_list_strings;

$mod_strings = return_module_language($sugar_config['default_language'], 'Leads');

$app_list_strings['record_type_module'] = array('Contact'=>'Contacts', 'Account'=>'Accounts', 'Opportunity'=>'Opportunities', 'Case'=>'Cases', 'Note'=>'Notes', 'Call'=>'Calls', 'Email'=>'Emails', 'Meeting'=>'Meetings', 'Task'=>'Tasks', 'Lead'=>'Leads','Bug'=>'Bugs',
'Report'=>'Reports',  'Quote'=>'Quotes'
);
/**
 * To make your changes upgrade safe create a file called leadCapture_override.php and place the changes there
 */
$users = array(
	'PUT A RANDOM KEY FROM THE WEBSITE HERE' => array('name'=>'PUT THE USER_NAME HERE', 'pass'=>'PUT THE USER_HASH FOR THE RESPECTIVE USER HERE'),
);
if(file_exists('leadCapture_override.php')){
	include('leadCapture_override.php');
}
if (!empty($_POST['user']) && !empty($users[$_POST['user']])) {
    
    $current_user = new User();
	$current_user->user_name = $users[$_POST['user']]['name'];

	if($current_user->authenticate_user($users[$_POST['user']]['pass'])){
		$userid = $current_user->retrieve_user_id($users[$_REQUEST['user']]['name']);
		$current_user->retrieve($userid);
		$leadForm = new LeadFormBase();
		$prefix = '';
		if(!empty($_POST['prefix'])){
			$prefix = 	$_POST['prefix'];
		}

		if( !isset($_POST['assigned_user_id']) || !empty($_POST['assigned_user_id']) ){
			$_POST['prefix'] = $userid;
		}

		$_POST['record'] ='';

		if( isset($_POST['_splitName']) ) {
			$name = explode(' ',$_POST['name']);
			if(sizeof($name) == 1) {
				$_POST['first_name'] = '';  $_POST['last_name'] = $name[0];
			}
			else {
				$_POST['first_name'] = $name[0];  $_POST['last_name'] = $name[1];
			}
		}

		$return_val = $leadForm->handleSave($prefix, false, true);

		if(isset($_POST['redirect']) && !empty($_POST['redirect'])){

			//header("Location: ".$_POST['redirect']);
			echo '<html><head><title>SugarCRM</title></head><body>';
			echo '<form name="redirect" action="' .$_POST['redirect']. '" method="POST">';

			foreach($_POST as $param => $value) {

				if($param != 'redirect' && $param != 'submit') {
					echo '<input type="hidden" name="'.$param.'" value="'.$value.'">';
				}

			}

			if( ($return_val == '') || ($return_val  == 0) || ($return_val < 0) ) {
				echo '<input type="hidden" name="error" value="1">';
			}
			echo '</form><script language="javascript" type="text/javascript">document.redirect.submit();</script>';
			echo '</body></html>';
		}
		else{
			echo "Thank You For Your Submission.";
		}
		sugar_cleanup();
		// die to keep code from running into redirect case below
		die();
	}
}

echo "We're sorry, the server is currently unavailable, please try again later.";
if (!empty($_POST['redirect'])) {
	echo '<html><head><title>SugarCRM</title></head><body>';
	echo '<form name="redirect" action="' .$_POST['redirect']. '" method="POST">';
	echo '</form><script language="javascript" type="text/javascript">document.redirect.submit();</script>';
	echo '</body></html>';
}
?>