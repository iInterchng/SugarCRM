<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: Static class to that is used to get the filenames for the various
 * cache files used
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
 
class ImportCacheFiles
{
    /**
     * Returns the filename for a temporary file
     *
     * @param  string $type string to prepend to the filename, typically to indicate the file's use
     * @return string filename
     */
    private static function _createFileName(
        $type = 'misc'
        )
    {
        global $sugar_config, $current_user;
        
        if( !is_dir($sugar_config['import_dir']) )
            create_cache_directory(preg_replace('/^cache\//','',$sugar_config['import_dir']));
        
        if( !is_writable($sugar_config['import_dir']) )
            return false;
        
        return "{$sugar_config['import_dir']}{$type}_{$current_user->id}.csv";        
    }
    
    /**
     * Returns the duplicates filename
     *
     * @return string filename
     */
    public static function getDuplicateFileName()
    {
        return self::_createFileName("dupes");
    }
    
    /**
     * Returns the error filename
     *
     * @return string filename
     */
    public static function getErrorFileName()
    {
        return self::_createFileName("error");
    }
    
    /**
     * Returns the error records filename
     *
     * @return string filename
     */
    public static function getErrorRecordsFileName()
    {
        return self::_createFileName("errorrecords");
    }
    
    /**
     * Returns the status filename
     *
     * @return string filename
     */
    public static function getStatusFileName()
    {
        return self::_createFileName("status");
    }
    
    /**
     * Clears out all cache files in the $sugar_config['import_dir'] directory
     */
    public static function clearCacheFiles()
    {
        global $sugar_config;
        
        if ( is_dir($sugar_config['import_dir']) ) {
            $files = dir($sugar_config['import_dir']);
            while (false !== ($file = $files->read())) {
                if ( !is_dir($file) && stristr($file,'.csv') )
                    unlink($sugar_config['import_dir'].$file);
            }
        }
    }
}
