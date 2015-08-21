<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Contacts module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.list.php');

class ViewSourceProperties extends ViewList {
   
 	function ViewSourceProperties(){
 		parent::ViewList();
 	}
    
 	function process() {
 	    parent::process();
 	}
 	
    function display() {
		require_once('include/connectors/sources/SourceFactory.php');
		require_once('include/connectors/utils/ConnectorUtils.php');
		
		$source_id = $_REQUEST['source_id'];
		$connector_language = ConnectorUtils::getConnectorStrings($source_id);
    	$source = SourceFactory::getSource($source_id);
    	$properties = $source->getProperties();
        
    	$required_fields = array();
    	$config_fields = $source->getRequiredConfigFields();
	    $fields = $source->getRequiredConfigFields();
	    foreach($fields as $field_id) {
	    	$label = isset($connector_language[$field_id]) ? $connector_language[$field_id] : $field_id;
	        $required_fields[$field_id]=$label;
	    }
    	
    	$this->ss->assign('required_properties', $required_fields);
    	$this->ss->assign('source_id', $source_id);
    	$this->ss->assign('properties', $properties);
    	$this->ss->assign('mod', $GLOBALS['mod_strings']);
    	$this->ss->assign('app', $GLOBALS['app_strings']);
    	$this->ss->assign('connector_language', $connector_language);
    	$this->ss->assign('hasTestingEnabled', $source->hasTestingEnabled());
    	echo $this->ss->fetch('modules/Connectors/tpls/source_properties.tpl');
    }
}

?>