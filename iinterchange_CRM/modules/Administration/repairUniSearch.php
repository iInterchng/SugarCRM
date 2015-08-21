<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $sugar_config, $mod_strings;

$search_dir='cache/';
if (!empty($sugar_config['cache_dir'])) {
	$search_dir=$sugar_config['cache_dir'];
}

$src_file = $search_dir . 'modules/unified_search_modules.php';
if(file_exists($src_file)) {
    print( $mod_strings['LBL_CLEAR_UNIFIED_SEARCH_CACHE_DELETING1'] . "<br>" );
    print( $mod_strings['LBL_CLEAR_UNIFIED_SEARCH_CACHE_DELETING2'] . " $src_file<BR>" ) ;
    unlink( "$src_file" );
}

echo "\n--- " . $mod_strings['LBL_DONE'] . "---<br />\n";
?>