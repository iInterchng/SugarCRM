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

class TrackerSession extends SugarBean {

    var $module_dir = 'Trackers';
    var $object_name = 'tracker_sessions';
    var $table_name = 'tracker_sessions';
    var $acltype = 'TrackerSession';
    var $acl_category = 'TrackerSessions';
    var $disable_custom_fields = true;

    function TrackerSession() {
        global $dictionary;
        if(isset($this->module_dir) && isset($this->object_name) && !isset($GLOBALS['dictionary'][$this->object_name])){
            require('metadata/tracker_sessionsMetaData.php');
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
