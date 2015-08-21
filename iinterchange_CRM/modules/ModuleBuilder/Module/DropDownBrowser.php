<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class DropDownBrowser
{
 
    function getNodes()
    {
	    global $mod_strings, $app_list_strings;
		$nodes = array();
//      $nodes[$mod_strings['LBL_EDIT_DROPDOWNS']] = array( 'name'=>$mod_strings['LBL_EDIT_DROPDOWNS'], 'action' =>'module=ModuleBuilder&action=globaldropdown&view_package=studio', 'imageTitle' => 'SPUploadCSS', 'help' => 'editDropDownBtn');
   //     $nodes[$mod_strings['LBL_ADD_DROPDOWN']] = array( 'name'=>$mod_strings['LBL_ADD_DROPDOWN'], 'action'=>'module=ModuleBuilder&action=globaldropdown&view_package=studio','imageTitle' => 'SPSync', 'help' => 'addDropDownBtn');
        
        $my_list_strings = $app_list_strings;
        foreach($my_list_strings as $key=>$value){
        	if(!is_array($value)){
        		unset($my_list_strings[$key]);
        	}
        }
        $dropdowns = array_keys($my_list_strings);
        asort($dropdowns);
        foreach($dropdowns as $dd)
        {
        	$nodes[$dd] = array( 'name'=>$dd, 'action'=>"module=ModuleBuilder&action=dropdown&view_package=studio&dropdown_name=$dd",'imageTitle' => 'SPSync', 'help' => 'editDropDownBtn');       	
        }
        return $nodes;
    }

}
?>