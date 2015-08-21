<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/SugarFeed/feedLogicBase.php');


class CaseFeed extends FeedLogicBase {
    var $module = 'Cases';
    function pushFeed($bean, $event, $arguments){
        $text = '';
        if(empty($bean->fetched_row)){
            $text =  '{SugarFeed.CREATED_CASE} [' . $bean->module_dir . ':' . $bean->id . ':' . $bean->name.'] {SugarFeed.FOR} [Accounts:' . $bean->account_id . ':' . $bean->account_name . ']: '. $bean->description;
        }else{
            if(!empty($bean->fetched_row['status'] ) && $bean->fetched_row['status'] != $bean->status && $bean->status == 'Closed'){
                $text =  '{SugarFeed.CLOSED_CASE} [' . $bean->module_dir . ':' . $bean->id . ':' . $bean->name. '] {SugarFeed.FOR} [Accounts:' . $bean->account_id . ':' . $bean->account_name . ']';
            }
        }

        if(!empty($text)){
			SugarFeed::pushFeed2($text, $bean);
        }

    }
}
?>
