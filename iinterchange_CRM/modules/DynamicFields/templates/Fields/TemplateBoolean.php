<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateBoolean extends TemplateField{
    var $default_value = '0';
    var $default = '0';
	var $type = 'bool';
    function get_db_type(){
        if ($GLOBALS['db']->dbType=='oci8') {
            return " NUMBER(1) ";
        }elseif($GLOBALS['db']->dbType=='mssql'){
            return " bit ";
        }else{
            return " BOOL ";
        }   
    }   
    //BEGIN BACKWARDS COMPATABILITY
function get_xtpl_edit(){
        $name = $this->name;
        $returnXTPL = array();
        if(!empty($this->help)){
            $returnXTPL[$this->name . '_help'] = translate($this->help, $this->bean->module_dir);
        }
        if(isset($this->bean->$name)){

            
            if(strcmp($this->bean->$name ,'1') ==0  || strcmp($this->bean->$name,'on')==0 || strcmp($this->bean->$name,'yes')==0 || strcmp($this->bean->$name, 'true')==0){
                $returnXTPL[$this->name . '_checked'] = 'checked';
                $returnXTPL[$this->name] = 'checked';
            }
        }else{
                
                if(empty($this->bean->id)){
                    
                    if(!empty($this->default_value)){
                        
                        if(!(strcmp($this->default_value,'false')==0 || strcmp($this->default_value,'no')==0 || strcmp($this->default_value,'off')==0 )){
                            $returnXTPL[$this->name . '_checked'] = 'checked';
                            $returnXTPL[$this->name] = 'checked';   
                        }
                            
                    }
                    $returnXTPL[strtoupper($this->name)] =  $this->default_value;   
                }       
        }
            

        
        return $returnXTPL;
    }
    

    
    
    function get_xtpl_search(){
        
        if(!empty($_REQUEST[$this->name])){
            $returnXTPL = array();
            
            if($_REQUEST[$this->name] == '1' || $_REQUEST[$this->name] == 'on' || $_REQUEST[$this->name] == 'yes'){
                $returnXTPL[$this->name . '_checked'] = 'checked';
                $returnXTPL[$this->name] = 'checked';
            }
            return $returnXTPL;

        }
        return '';
    }
    
   function get_xtpl_detail(){
        $name = $this->name;
        $returnXTPL = array();
        if(!empty($this->help)){
            $returnXTPL[$this->name . '_help'] = translate($this->help, $this->bean->module_dir);
        }
        $returnXTPL[$this->name . '_checked'] = '';
        $returnXTPL[$this->name] = '';

        if(isset($this->bean->$name)){
            if(strcmp($this->bean->$name ,'1') ==0  || strcmp($this->bean->$name,'on')==0 || strcmp($this->bean->$name,'yes')==0 || strcmp($this->bean->$name, 'true')==0){
                $returnXTPL[$this->name . '_checked'] = 'checked';
                $returnXTPL[$this->name] = 'checked';
            }
        }
        return $returnXTPL;
    }
    function get_xtpl_list(){
        return $this->get_xtpl_edit();  
    }

    
    
   
    
    
    
}


?>
