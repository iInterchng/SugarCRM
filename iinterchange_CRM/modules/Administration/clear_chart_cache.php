<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $sugar_config, $mod_strings;

print( $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_FINDING'] . "<br>" );

$search_dir='cache/';
if (!empty($sugar_config['cache_dir'])) {
	$search_dir=$sugar_config['cache_dir'];
}
  
$all_src_files  = findAllFiles($search_dir.'/xml', array() );

print( $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_DELETING1'] . "<br>" );
foreach( $all_src_files as $src_file ){
	if (preg_match('/\.xml$/',$src_file))
	{
   		print( $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_DELETING2'] . " $src_file<BR>" ) ;
		unlink( "$src_file" );
	}
}
 
include('modules/Versions/ExpectedVersions.php');


global $expect_versions;

if (isset($expect_versions['Chart Data Cache'])) {
	$version = new Version();
	$version->retrieve_by_string_fields(array('name'=>'Chart Data Cache'));

	$version->name = $expect_versions['Chart Data Cache']['name'];
	$version->file_version = $expect_versions['Chart Data Cache']['file_version'];
	$version->db_version = $expect_versions['Chart Data Cache']['db_version'];
	$version->save();
}

echo "\n--- " . $mod_strings['LBL_DONE'] . "---<br />\n";
?>
