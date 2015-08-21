<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/SugarFeed/feedLogicBase.php');


class OppFeed extends FeedLogicBase {
    var $module = "Opportunities";
    function pushFeed($bean, $event, $arguments){
        $text = '';
        if(empty($bean->fetched_row)){
            $currency = new Currency();
            $currency->retrieve($bean->currency_id);
            $text = '{SugarFeed.CREATED_OPPORTUNITY} [' . $bean->module_dir . ':' . $bean->id . ':' . $bean->name . '] {SugarFeed.WITH} [Accounts:' . $bean->account_id . ':' . $bean->account_name . '] {SugarFeed.FOR} ' . $currency->symbol. format_number($bean->amount);
        }else{
            if(!empty($bean->fetched_row['sales_stage']) && $bean->fetched_row['sales_stage'] != $bean->sales_stage && $bean->sales_stage == 'Closed Won'){
                $currency = new Currency();
                $currency->retrieve($bean->currency_id);
                $text = '{SugarFeed.WON_OPPORTUNITY} [' . $bean->module_dir . ':' . $bean->id . ':' . $bean->name . '] {SugarFeed.WITH} [Accounts:' . $bean->account_id . ':' . $bean->account_name . '] {SugarFeed.FOR} '. $currency->symbol . format_number($bean->amount);
            }
        }
		
        if(!empty($text)){ 
			SugarFeed::pushFeed2($text, $bean);
        }
		
    }
}
?>
