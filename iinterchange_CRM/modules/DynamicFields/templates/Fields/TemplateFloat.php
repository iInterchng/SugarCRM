<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateRange.php');

class TemplateFloat extends TemplateRange
{
	var $type = 'float';
	var $default = null;
	var $default_value = null;
	var $len = '18';
	var $precision = '8';
	
	function TemplateFloat(){
		parent::__construct();
		$this->vardef_map['precision']='ext1';
		//$this->vardef_map['precision']='precision';
	}

    function get_field_def(){
    	$def = parent::get_field_def();
		$def['precision'] = isset($this->ext1) && $this->ext1 != '' ? $this->ext1 : $this->precision;
    	return $def;
    }

    function get_db_type(){
//    	$GLOBALS['log']->debug('TemplateFloat:get_db_type()'.print_r($this,true));
    	
		if ($GLOBALS['db']->dbType=='mysql')
		{
    	    $type = " FLOAT";
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
	
	function populateFromRow($row=array()) {
	   parent::populateFromRow($row);
	}	
}

?>
