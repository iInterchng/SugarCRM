<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/


require_once('include/OutboundEmail/OutboundEmail.php');
global $current_user;
if ( !is_admin($current_user)
		&& !is_admin_for_module($GLOBALS['current_user'],'Emails')
 	    && !is_admin_for_module($GLOBALS['current_user'],'Campaigns') ){
sugar_die("Unauthorized access to administration.");
}

//Do not allow users to spoof for sendmail if the config flag is not set.
if( !isset($sugar_config['allow_sendmail_outbound']) || !$sugar_config['allow_sendmail_outbound'])
	$_REQUEST['mail_sendtype'] = "SMTP";

// save Outbound settings  #Bug 20033 Ensure data for Outbound email exists before trying to update the system mailer.
if(isset($_REQUEST['mail_sendtype']) && empty($_REQUEST['campaignConfig'])) {
	$oe = new OutboundEmail();
	$oe->populateFromPost();
	$oe->saveSystem();
}

$focus = new Administration();

if(isset($_POST['tracking_entities_location_type'])) {
	if ($_POST['tracking_entities_location_type'] != '2') {
		unset($_POST['tracking_entities_location']);
		unset($_POST['tracking_entities_location_type']);
	}
}
// cn: handle mail_smtpauth_req checkbox on/off (removing double reference in the form itself
if( !isset($_POST['mail_smtpauth_req']) )
{
    $_POST['mail_smtpauth_req'] = 0;
    $_POST['notify_allow_default_outbound'] = 0; //If smtp auth is disabled ensure outbound is disabled.
}

if( !empty($_POST['notify_allow_default_outbound']) )
{
    $oe = new OutboundEmail();
    if( !$oe->isAllowUserAccessToSystemDefaultOutbound() )
        $oe->removeUserOverrideAccounts();
}

$focus->saveConfig();

// save User defaults for emails
$sugar_config['email_default_delete_attachments'] = (isset($_REQUEST['email_default_delete_attachments'])) ? true : false;

///////////////////////////////////////////////////////////////////////////////
////	SECURITY
$security = array();
if(isset($_REQUEST['applet'])) $security['applet'] = 'applet';
if(isset($_REQUEST['base'])) $security['base'] = 'base';
if(isset($_REQUEST['embed'])) $security['embed'] = 'embed';
if(isset($_REQUEST['form'])) $security['form'] = 'form';
if(isset($_REQUEST['frame'])) $security['frame'] = 'frame';
if(isset($_REQUEST['frameset'])) $security['frameset'] = 'frameset';
if(isset($_REQUEST['iframe'])) $security['iframe'] = 'iframe';
if(isset($_REQUEST['import'])) $security['import'] = '\?import';
if(isset($_REQUEST['layer'])) $security['layer'] = 'layer';
if(isset($_REQUEST['link'])) $security['link'] = 'link';
if(isset($_REQUEST['object'])) $security['object'] = 'object';
if(isset($_REQUEST['style'])) $security['style'] = 'style';
if(isset($_REQUEST['xmp'])) $security['xmp'] = 'xmp';
$security['script'] = 'script';

$sugar_config['email_xss'] = base64_encode(serialize($security));

////	SECURITY
///////////////////////////////////////////////////////////////////////////////

ksort($sugar_config);
write_array_to_file('sugar_config', $sugar_config, 'config.php');

header("Location: index.php?action={$_POST['return_action']}&module={$_POST['return_module']}");
?>