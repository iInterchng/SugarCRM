<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('include/Dashlets/DashletGeneric.php');


class MyQuotesDashlet extends DashletGeneric { 
    function MyQuotesDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Quotes/Dashlets/MyQuotesDashlet/MyQuotesDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
        
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_QUOTES', 'Quotes');
        $this->searchFields = $dashletData['MyQuotesDashlet']['searchFields'];
        $this->columns = $dashletData['MyQuotesDashlet']['columns'];
        $this->seedBean = new Quote();        
    }
}

?>
