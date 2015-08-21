<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['KBDocumentRevision'] = array ('column_fields' => Array("id"
		,"change_log"
		,"kbdocument_id"
		,"date_entered"
		,"created_by"
		,"filename"
		,"file_ext"
		,"file_mime_type"
		,"revision"
		,"date_modified"
		,"deleted"				
		),
        'list_fields' =>  Array("id"
		,"change_log"
		,"document_id"
		,"date_entered"
		,"created_by"
		,"filename"
		,"file_ext"
		,"file_mime_type"
		,"revision"
		,"date_modified"
		,"deleted"		
		,"latest_revision_id"		
		),
        'required_fields' => Array("revision"=>1),
);
?>