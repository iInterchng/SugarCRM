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
$fields_array['KBDocumentKBTag'] = array ('column_fields' => Array("id"		
		,"kbdocument_id"
		,"kbtag_id"
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"				
		),
        'list_fields' =>  Array("id"
		,"kbdocument_id"
		,"kbtag_id"
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"						
		),
        'required_fields' => Array("revision"=>1),
);
?>