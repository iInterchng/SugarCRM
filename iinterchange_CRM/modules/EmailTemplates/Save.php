<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Saves an Account record and then redirects the browser to the
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$focus = new EmailTemplate();
require_once('include/formbase.php');
$focus = populateFromPost('', $focus);

require_once('modules/EmailTemplates/EmailTemplateFormBase.php');
$form = new EmailTemplateFormBase();
if(isset($_REQUEST['inpopupwindow']) and $_REQUEST['inpopupwindow'] == true) {
	$focus=$form->handleSave('',false, false); //do not redirect.
	$body1 = "
		<script type='text/javascript'>
			function refreshTemplates() {
				window.opener.refresh_email_template_list('$focus->id','$focus->name')
				window.close();
			}

			refreshTemplates();
		</script>";
	echo  $body1;
} else {
	$form->handleSave('',true, false);
}
?>