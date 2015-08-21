<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

* Description: This file generates the appropriate manager for the database
* 
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

require_once('include/database/DBManager.php');

class DBManagerFactory
{
    /** 
	 * Returns a reference to the DB object for instance $instanceName, or the default 
     * instance if one is not specified
     *
     * @param  string $instanceName optional, name of the instance
     * @return object DBManager instance 
     */
	public static function getInstance(
        $instanceName = ''
        )
    {
        global $sugar_config, $dbinstances;
        static $count, $old_count;

        $instanceName = 'db';
        $config = $sugar_config['dbconfig'];
        if(!isset($dbinstances)){
            $dbinstances = array();
        }
        //fall back to the default instance name
        if(empty($sugar_config['db'][$instanceName])){
        	$instanceName = '';
        }
        if(!isset($dbinstances[$instanceName])){
            $my_db_manager = 'MysqlManager';
            if( $config['db_type'] == "mysql" ) {
                if ((!isset($sugar_config['mysqli_disabled'])
                            || $sugar_config['mysqli_disabled'] == false) 
                    && function_exists('mysqli_connect')) {
                    $my_db_manager = 'MysqliManager';
                }
            }
            if( $config['db_type'] == "oci8" ){
            }
            elseif( $config['db_type'] == "mssql" ){
            	if ( function_exists('sqlsrv_connect')
                        && (empty($config['db_mssql_force_driver']) || $config['db_mssql_force_driver'] == 'sqlsrv' ))
                	$my_db_manager = 'SqlsrvManager';
            	elseif (is_freetds() 
                        && (empty($config['db_mssql_force_driver']) || $config['db_mssql_force_driver'] == 'freetds' ))
                    $my_db_manager = 'FreeTDSManager';
                else
                    $my_db_manager = 'MssqlManager';
            }
            $GLOBALS['log']->info("using $my_db_manager DBManager backend");
            if(!empty($config['db_manager'])){
                $my_db_manager = $config['db_manager'];
            }

                require_once("include/database/{$my_db_manager}.php");
                $dbinstances[$instanceName] = new $my_db_manager();
                $dbinstances[$instanceName]->getHelper();
                $dbinstances[$instanceName]->connect($config, true);
                $dbinstances[$instanceName]->count_id = $count;
                $dbinstances[$instanceName]->references = 0;
                $dbinstances[$instanceName]->getHelper()->db = $dbinstances[$instanceName];           
        }
        else {
            $old_count++;
            $dbinstances[$instanceName]->references = $old_count;
        }
        return $dbinstances[$instanceName];
    }
    
    /**
     * Returns an instance of the helper class
     *
     * @deprecated
     * @return object DBHelper instance
     */
    public static function getHelperInstance()
    {
        $GLOBALS['log']->info('call to DBManagerFactory::getHelperInstance() is deprecated');
        return self::getInstance()->getHelper();
    }
    
    /**
     * Loads the DBManager and DBHelper instance class files
     *
     * @deprecated
     * @param string $class_name
     */
    public static function load_db_manager_class(
        $class_name
        )
    {
        $GLOBALS['log']->info('call to DBManagerFactory::load_db_manager_class() is deprecated');
        if( is_file("include/database/{$class_name}.php") && !class_exists($class_name))
            require_once("include/database/{$class_name}.php");
        
        $class_name = str_ireplace('Manager','Helper',$class_name);
        
        if( is_file("include/database/{$class_name}.php") && !class_exists($class_name))
            require_once("include/database/{$class_name}.php");
    }
                
}

?>
