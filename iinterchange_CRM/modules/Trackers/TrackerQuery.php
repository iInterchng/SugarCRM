<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('data/SugarBean.php');

class TrackerQuery extends SugarBean {

    var $module_dir = 'Trackers';
    var $object_name = 'tracker_queries';
    var $table_name = 'tracker_queries';
    var $acltype = 'TrackerQuery';
    var $acl_category = 'TrackerQueries';
    var $disable_custom_fields = true;

    function TrackerQuery() {
        global $dictionary;
        if(isset($this->module_dir) && isset($this->object_name) && !isset($GLOBALS['dictionary'][$this->object_name])){
            require('metadata/tracker_queriesMetaData.php');
        }
        parent::SugarBean();
        $this->disable_row_level_security = true;
    }

    function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
}
?>
