<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/DynamicFields/templates/Fields/TemplateCurrencyId.php');
require_once('modules/DynamicFields/templates/Fields/TemplateRange.php');

class TemplateCurrency extends TemplateRange 
{
    var $max_size = 25;
    var $len = 26 ;
    var $type='currency';

    function __construct()
    {
    	parent::__construct();
    }
    
    function delete($df){
    	parent::delete($df);
    	//currency id
    	$currency_id = new TemplateCurrencyId();
    	$currency_id->name = 'currency_id';
    	$currency_id->delete($df);
    }

    function save($df){
    	//the currency field
		$this->default = unformat_number($this->default);
		$this->default_value = $this->default;
    	parent::save($df);

    	//currency id
    	$currency_id = new TemplateCurrencyId();
    	$currency_id->name = 'currency_id';
    	$currency_id->vname = 'LBL_CURRENCY';
    	$currency_id->label = $currency_id->vname;
    	$currency_id->save($df);
    	//$df->addLabel($currency_id->vname);
    }

	function get_db_type(){
		$precision = (!empty($this->precision)) ? $this->precision : 6; 	
		switch($GLOBALS['db']->dbType){
			case 'oci8': 
				if(!empty($this->len))
	        	{
	        		return " number( {$this->len} , $precision )";
	    		}else{
					return " number(26,$precision)";
				}
			case 'mssql': 
				if(!empty($this->len))
	        	{
	        		return " decimal( {$this->len} , $precision )";
	    		}else{
					return " decimal(26,$precision)";
				}
			default: 
				if(!empty($this->len))
	        	{
	        		return " decimal( {$this->len} , $precision )";
	    		}else{
					return " decimal(26,$precision)";	
				}
		}
	}
}


?>
