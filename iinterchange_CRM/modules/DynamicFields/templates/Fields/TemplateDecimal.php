<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class TemplateDecimal extends TemplateFloat{
	var $type = 'decimal';
	var $default = null;
	var $default_value = null;
	
	function TemplateDecimal(){
    	parent::__construct();
	}

    function get_db_type(){
//    	$GLOBALS['log']->debug('TemplateFloat:get_db_type()'.print_r($this,true));
    	
		if ($GLOBALS['db']->dbType=='mysql')
		{
    	    $type = " DECIMAL";
        	if(!empty($this->len))
        	{
	            $precision = (!empty($this->precision)) ? $this->precision : 4; // bug 17041 tyoung - mysql requires a precision value if length is specified
	            $type .= "({$this->len},$precision)";
    		}
		}
		elseif ($GLOBALS['db']->dbType=='mssql')
		{
			$type = " decimal";
        	if(!empty($this->len))
        	{
 	            $precision = (!empty($this->precision)) ? $this->precision : 4;       		
	            $type .= "({$this->len},$precision)";
        	}
        	else
        	{
        		$type .= "(11,4)";
        	}	
		}
    	elseif ($GLOBALS['db']->dbType=='oci8')
    	{
			$precision = (!empty($this->precision))? $this->precision: 6;
			$type= " NUMBER(30,$precision) ";
    	}
    	
    	/**
		 * FOR ORACLE 
    	 * return " NUMBER($this->max_size, $this->precision)";
     	 */
    	return $type;
	}
}

?>
