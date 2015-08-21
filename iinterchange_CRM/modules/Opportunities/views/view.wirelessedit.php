<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.wirelessedit.php');

class OpportunitiesViewWirelessedit extends ViewWirelessedit 
{
 	public function display() 
 	{
		parent::display();
        
        global $app_list_strings;
		$json = getJSONobj();
		$prob_array = $json->encode($app_list_strings['sales_probability_dom']);
		$prePopProb = '';
		
		if(empty($this->bean->id)) 
		    $prePopProb = 'document.getElementsByName(\'sales_stage\')[0].onchange();';
        
		echo <<<EOQ
<script>
prob_array = $prob_array;
if(document.getElementsByName('sales_stage') != null) {
    document.getElementsByName('sales_stage')[0].onchange = function() {
        if(document.getElementsByName('probability') != null
                && typeof(document.getElementsByName('sales_stage')[0].value) != "undefined" 
                && prob_array[document.getElementsByName('sales_stage')[0].value]) {
            document.getElementsByName('probability')[0].value = prob_array[document.getElementsByName('sales_stage')[0].value];
        } 
    };
    $prePopProb
}
</script>
EOQ;
 	}
}
?>
