<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Contains a variety of utility functions used to display UI
 * components such as form headers and footers.  Intended to be modified on a per
 * theme basis.
 ********************************************************************************/

/**
 * Create javascript to validate the data entered into a record.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 */
function get_validate_record_js () {
	
global $mod_strings;
global $app_strings;

$err_missing_required_fields = $app_strings['ERR_MISSING_REQUIRED_FIELDS'];

$the_script  = <<<EOQ

<script type="text/javascript" language="Javascript">
function verify_data(form) {
	var isError = false;
	var errorMessage = "";

	if (isError == true) {
		alert("$err_missing_required_fields" + errorMessage);
		return false;
	}
	return true;
}
</script>

EOQ;

return $the_script;

}

/**
 * Create HTML form to enter a new record with the minimum necessary fields.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 */
function get_new_record_form () {

	require_once('modules/ProspectLists/ProspectListFormBase.php');
	$accountForm = new ProspectListFormBase();
	return $accountForm->getForm('','ProspectLists');
}
?>