<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


function additionalDetailsCall($fields) {
	static $mod_strings;
	if(empty($mod_strings)) {
		global $current_language;
		$mod_strings = return_module_language($current_language, 'Calls');
	}

	$overlib_string = '';

	//Modify by jchi 6/27/2008 1515pm china time , bug 20626.
	if(!empty($fields['DATE_START']))
		$overlib_string .= '<b>'. $mod_strings['LBL_DATE_TIME'] . '</b> ' . $fields['DATE_START'] . ' <br>';
	if(isset($fields['DURATION_HOURS']) || isset($fields['DURATION_MINUTES'])) {
		$overlib_string .= '<b>'. $mod_strings['LBL_DURATION'] . '</b> ';
        if(isset($fields['DURATION_HOURS'])) {
            $overlib_string .= $fields['DURATION_HOURS'] . $mod_strings['LBL_HOURS_ABBREV'] . ' ';
        }
        if(isset($fields['DURATION_MINUTES'])) {
            $overlib_string .=  $fields['DURATION_MINUTES'] . $mod_strings['LBL_MINSS_ABBREV'];
        }
        $overlib_string .=  '<br>';
	}
	if(!empty($fields['DESCRIPTION'])) {
		$overlib_string .= '<b>'. $mod_strings['LBL_DESCRIPTION'] . '</b> ' . substr($fields['DESCRIPTION'], 0, 300);
		if(strlen($fields['DESCRIPTION']) > 300) $overlib_string .= '...';
		$overlib_string .= '<br>';
	}

	$editLink = "index.php?action=EditView&module=Calls&record={$fields['ID']}";
	$viewLink = "index.php?action=DetailView&module=Calls&record={$fields['ID']}";

	$return_module = empty($_REQUEST['module']) ? 'Calls' : $_REQUEST['module'];
	$return_action = empty($_REQUEST['action']) ? 'ListView' : $_REQUEST['action'];

	$editLink .= "&return_module=$return_module&return_action=$return_action";
	$viewLink .= "&return_module=$return_module&return_action=$return_action";

	return array('fieldToAddTo' => 'NAME',
				 'string' => $overlib_string,
				 'editLink' => $editLink,
				 'viewLink' => $viewLink);
}
