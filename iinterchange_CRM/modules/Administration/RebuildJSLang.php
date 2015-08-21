<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if(is_admin($current_user)){
    
    global $mod_strings, $sugar_config;
    echo $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_DESC'];
        
    $jsFiles = array();
    getFiles($jsFiles, $sugar_config['cache_dir'] . 'jsLanguage');
    foreach($jsFiles as $file) {
        unlink($file);
    }
    
    if(empty($sugar_config['js_lang_version'])) $sugar_config['js_lang_version'] = 1;
    else $sugar_config['js_lang_version'] += 1;
    
    write_array_to_file( "sugar_config", $sugar_config, "config.php");  
    
    //remove lanugage cache files
    
    LanguageManager::clearLanguageCache(); 
}
else{
	sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 
}
?>