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
$module_name = '<module_name>';
 $metafiles[$module_name] = array(
	'detailviewdefs'  => 	'modules/'.$module_name.'/metadata/detailviewdefs.php',
	'editviewdefs'    => 	'modules/'. $module_name. '/metadata/editviewdefs.php',
 	'listviewdefs'    => 	'modules/'. $module_name. '/metadata/listviewdefs.php',
 	'searchdefs'      =>    'modules/'. $module_name. '/metadata/searchdefs.php',
 	'popupdefs'	      =>    'modules/'. $module_name. '/metadata/popupdefs.php',
 	'searchfields'	  =>    'modules/'. $module_name. '/metadata/SearchFields.php',
 );
?>
