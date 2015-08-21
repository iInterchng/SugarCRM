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
$fields_array['KBContent'] = array ('column_fields' => Array("id"		
		,"kbdocument_body"
		,"document_revision_id"
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"				
		),
        'list_fields' =>  Array("id"				
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"			
		),
        'required_fields' => Array("revision"=>1),
);
?>