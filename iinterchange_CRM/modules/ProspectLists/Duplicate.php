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




global $mod_strings;


$focus = new ProspectList();

$focus->retrieve($_POST['record']);
if (isset($_POST['isDuplicate']) && $_POST['isDuplicate'] == true) {

	$focus->id='';
	$focus->name=$mod_strings['LBL_COPY_PREFIX'].' '.$focus->name;
	
	$focus->save();
	$return_id=$focus->id; 
	//duplicate the linked items.
	$query  = "select * from prospect_lists_prospects where prospect_list_id = '".$_POST['record']."'";
	$result = $focus->db->query($query);
	if ($result != null) {
	
		while(($row = $focus->db->fetchByAssoc($result)) != null) {
			$iquery ="INSERT INTO prospect_lists_prospects (id,prospect_list_id, related_id, related_type,date_modified) ";
			$iquery .= "VALUES ("."'".create_guid()."',"."'".$focus->id."',"."'".$row['related_id']."',"."'".$row['related_type']."',"."'".TimeDate::getInstance()->nowDb()."')";
			$focus->db->query($iquery); //save the record.	
		}	
	}
}
header("Location: index.php?action=DetailView&module=ProspectLists&record=$return_id");
?>