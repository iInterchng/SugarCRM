<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class TemplateEmail extends TemplateText{
	
	function get_html_detail(){
		return '<a href="mailto:{'. strtoupper($this->name).'}">{'. strtoupper($this->name).'}</a>';	
	}
	
}


?>
