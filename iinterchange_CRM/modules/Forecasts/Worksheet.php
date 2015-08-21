<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





// User is used to store Forecast information.
class Worksheet extends SugarBean {

    var $id;

    var $table_name = "worksheet";

    var $object_name = "Worksheet";
    var $disable_custom_fields = true;

    // This is used to retrieve related fields from form posts.
    var $additional_column_fields = Array('');



    var $new_schema = true;
    var $module_dir = 'Forecasts';
    function Worksheet() {
        global $current_user;
        parent::SugarBean();
        $this->disable_row_level_security =true;
    }

    function save($check_notify = false){

        parent::save($check_notify);
    }

    function get_summary_text() {
        return "$this->id";
    }

    function retrieve($id, $encode=false){
        $ret = parent::retrieve($id, $encode);

        return $ret;
    }

    function is_authenticated()
    {
        return $this->authenticated;
    }

}
?>