<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Contains field arrays that are used for caching
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['KBDocument'] = array ('column_fields' => Array("id"
		,"kbdocument_name"
		,"status_id"
		,"active_date"
		,"exp_date"
		,"date_entered"
		,"date_modified"
		,"created_by"
		,"modified_user_id"
		,"kbdoc_approver_id"

		,"team_id"
		,"kbdocument_revision_id"
		,"related_doc_id"
		,"related_doc_rev_id"
		,"is_template"
		,"template_type"
        ,"assigned_user_id"
        ,"kbdocument_revision_number"
        ,"parent_id"
        ,"parent_type"
		),
        'list_fields' =>  Array("id"
		,"kbdocument_name"			
		,"status_id"
		,"active_date"
		,"exp_date"
		,"date_entered"
		,"date_modified"
		,"created_by"
		,"kbdoc_approver_id"
		,"kbdoc_approver_name"
		,"modified_user_id"
		,"team_id"
		,"kbdocument_revision_id"
		,"last_rev_create_date"
		,"last_rev_created_by"
		,"latest_revision"
		,"file_url"
		,"file_url_noimage"
        ,"assigned_user_id"
        ,"assigned_user_name"
        ,"kbdocument_revision_number"
        ,"parent_id"
        ,"parent_type"
		),
        'required_fields' => Array("kbdocument_name"=>1,"active_date"=>1,"revision"=>1),
);
?>