<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateId extends TemplateField{
    var $type='id';
    var $len = 36 ;
    
    
}


?>
