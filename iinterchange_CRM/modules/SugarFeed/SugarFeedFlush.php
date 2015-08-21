<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





class SugarFeedFlush {
    function flushStaleEntries($bean, $event, $arguments) {
        $admin = new Administration();
        $admin->retrieveSettings();

        $timedate = TimeDate::getInstance();

        $currDate = $timedate->nowDbDate();
        if ( $admin->settings['sugarfeed_flushdate'] != $currDate ) {
            global $db;
            if ( ! isset($db) ) { $db = DBManagerFactory::getInstance(); }

            $tmpTime = time();
            $tmpSF = new SugarFeed();
            $flushBefore = $timedate->asDbDate($timedate->getNow()->modify("-14 days")->setTime(0,0));
            $db->query("DELETE FROM ".$tmpSF->table_name." WHERE date_entered < '".$db->quote($flushBefore)."'");
            $admin->saveSetting('sugarfeed','flushdate',$currDate);
            // Flush the cache
            $admin->retrieveSettings(FALSE,TRUE);
        }
    }
}
