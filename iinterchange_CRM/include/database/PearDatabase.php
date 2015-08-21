<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('include/database/DBManager.php');

/**
 * @deprecated
 */
class PearDatabase
{
    /**
     * Returns DBManager instance
     *
     * @deprecated
     * @param  string $instanceName optional, name of the instance
     * @return object DBManager instance 
     */
    public static function getInstance($instanceName='')
    {
        $GLOBALS['log']->info('call to PearDatabase::getInstance() is deprecated');
        return DBManagerFactory::getInstance($instanceName);
    }
    
    /**
     * Returns a quoted string
     *
     * @deprecated
     * @param  string $string
     * @param  bool   $isLike optional
     * @return string
     */
    public static function quote(
        $string,
        $isLike = true
        )
    {
        $GLOBALS['log']->info('call to PearDatabase::quote() is deprecated');
        return $GLOBALS['db']->quote($string, $isLike);
    }

    /**
     * Returns a quoted string for email
     *
     * @deprecated
     * @param  string $string
     * @param  bool   $isLike optional
     * @return string
     */
    public static function quoteForEmail(
        $string, 
        $isLike = true
        )
    {
        $GLOBALS['log']->info('call to PearDatabase::quoteForEmail() is deprecated');
        return $GLOBALS['db']->quoteForEmail($string, $isLike);
    }    
    
    /**
     * Quotes each string in the given array
     *
     * @deprecated
     * @param  array  $array
     * @param  bool   $isLike optional
     * @return string
     */
    public static function arrayQuote(
        array &$array, 
        $isLike = true
        ) 
    {
        $GLOBALS['log']->info('call to PearDatabase::arrayQuote() is deprecated');
        return $GLOBALS['db']->arrayQuote($array, $isLike);
    }
    
    /**
     * Truncates a string to a given length
     *
     * @deprecated
     * @param string $string
     * @param int    $len    length to trim to
     * @param string
     */
    public static function truncate(
        $string, 
        $len
        ) 
    {
        $GLOBALS['log']->info('call to PearDatabase::truncate() is deprecated');
        if ( is_numeric($len) && $len > 0 )
                $string=mb_substr($string,0,(int) $len);
        return $string;
    }


}
?>
