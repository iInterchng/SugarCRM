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

require_once('modules/EmailTemplates/EmailTemplate.php');

$focus = new EmailTemplate();
if($_REQUEST['from'] == 'DetailView') {
	if(!isset($_REQUEST['record']))
		sugar_die("A record number must be specified to delete the template.");
	$focus->retrieve($_REQUEST['record']);
	if(check_email_template_in_use($focus)) {
		echo 'true';
		return;
	}
	echo 'false';
} else if($_REQUEST['from'] == 'ListView') {
	$returnString = '';
	$idArray = explode(',', $_REQUEST['records']);
	foreach($idArray as $key => $value) {
		if($focus->retrieve($value)) {
			if(check_email_template_in_use($focus)) {
				$returnString .= $focus->name . ',';
			}
		}
	}
	$returnString = substr($returnString, 0, -1);
	echo $returnString;
} else {
	echo '';
}

function check_email_template_in_use($focus)
{
	if($focus->is_used_by_email_marketing()) {
		return true;
	}
	$system = $GLOBALS['sugar_config']['passwordsetting'];
	if($focus->id == $system['generatepasswordtmpl'] || $focus->id == $system['lostpasswordtmpl']) {
	    return true;
	}
    return false;
}
