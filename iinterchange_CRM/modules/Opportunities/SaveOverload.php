<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


function perform_save(&$focus){
	
	//US DOLLAR
	if(isset($focus->amount) && !number_empty($focus->amount)){
		$currency = new Currency();
		$currency->retrieve($focus->currency_id);
		$focus->amount_usdollar = $currency->convertToDollar($focus->amount);
	}	
}
?>