<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
   
 ********************************************************************************/

require_once('include/generic/SugarWidgets/SugarWidgetFieldint.php');

class SugarWidgetFieldDecimal extends SugarWidgetFieldInt
{
 function displayListPlain($layout_def)
 {
 	
     return format_number(parent::displayListPlain($layout_def), 2, 2);	
 }
}

?>
