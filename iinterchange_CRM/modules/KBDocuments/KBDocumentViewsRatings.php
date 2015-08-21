<?php
if(!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



class KBDocumentViewsRating extends SugarBean {

    var $id;
    var $kbdocument_id;
    var $views_number;
    var $ratings_number;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $team_id;


    var $table_name = "kbdocuments_views_ratings";
    var $object_name = "KBDocumentViewsRating";
    var $disable_custom_fields = true;
    var $user_preferences;

    var $encodeFields = Array ();

    var $new_schema = true;
    var $module_dir = 'KBDocuments';

    function KBDocumentViewsRating() {
        parent :: SugarBean();
        $this->setupCustomFields('KBDocumentViewsRating'); //parameter is module name
        $this->disable_row_level_security = false;
    }

    function save($check_notify = false) {
        return parent :: save($check_notify);
    }

    function retrieve($id, $encode = false) {
        $ret = parent :: retrieve($id, $encode);
        return $ret;
    }

    function is_authenticated() {
        return $this->authenticated;
    }

    function fill_in_additional_list_fields() {
        $this->fill_in_additional_detail_fields();
    }

    function mark_relationships_deleted($id) {
        //do nothing, this call is here to avoid default delete processing since
        //delete.php handles deletion of document revisions.
    }

    function bean_implements($interface) {
        switch ($interface) {
            case 'ACL' :
                return true;
        }
        return false;
    }
}
?>