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




require_once('modules/Emails/Email.php');

global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user;

$json = getJSONobj();
$pass = '';
if(!empty($_REQUEST['mail_smtppass'])) {
    $pass = $_REQUEST['mail_smtppass'];
} elseif(isset($_REQUEST['mail_name'])) {
    $oe = new OutboundEmail();
    $oe = $oe->getMailerByName($current_user, $_REQUEST['mail_name']);
    if(!empty($oe)) {
        $pass = $oe->mail_smtppass;
    }
}
$out = Email::sendEmailTest($_REQUEST['mail_smtpserver'], $_REQUEST['mail_smtpport'], $_REQUEST['mail_smtpssl'],
        							($_REQUEST['mail_smtpauth_req'] == 'true' ? 1 : 0), $_REQUEST['mail_smtpuser'],
        							$pass, $_REQUEST['outboundtest_from_address'], $_REQUEST['outboundtest_to_address'], $_REQUEST['mail_sendtype']);

$out = $json->encode($out);
echo $out;
?>