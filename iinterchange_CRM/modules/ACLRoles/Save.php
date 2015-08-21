<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





$role = new ACLRole();
if(isset($_REQUEST['record']))$role->id = $_POST['record'];
if(!empty($_REQUEST['name'])){
	$role->name = $_POST['name'];
	$role->description = $_POST['description'];
	$role->save();
	//if duplicate
	if(isset($_REQUEST['isduplicate']) && !empty($_REQUEST['isduplicate'])){
	    //duplicate actions
	    $role_actions=$role->getRoleActions($_REQUEST['isduplicate']);
	    foreach($role_actions as $module){
	        foreach($module as $type){
	            foreach($type as $act){
	                $role->setAction($role->id, $act['id'], $act['aclaccess']);
	            }
	        }
	    }
	    // duplicate field ACL
	    $fields = ACLField::getACLFieldsByRole($_REQUEST['isduplicate']);
	    foreach($fields as $field){
            ACLField::setAccessControl($field['category'], $role->id, $field['name'], $field['aclaccess']);
	    }
	}
}else{
    ob_clean();	
    $flc_module = 'All';
    foreach($_POST as $name=>$value){
    	if(substr_count($name, 'act_guid') > 0){
    		$name = str_replace('act_guid', '', $name);
    
    		$role->setAction($role->id,$name, $value);
    	}
    	if(substr_count($name, 'flc_guid') > 0){
    		$flc_module = $_REQUEST['flc_module'];
    		$name = str_replace('flc_guid', '', $name);
    		ACLField::setAccessControl($flc_module, $role->id, $name, $value);
    	}
    	
    }
    echo "result = {role_id:'$role->id', module:'$flc_module'}";
    sugar_cleanup(true);
}

header("Location: index.php?module=ACLRoles&action=DetailView&record=". $role->id);
?>