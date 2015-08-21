<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	if(empty($_FILES)){
echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_DESC'];
echo <<<EOQ
<br>
<br>
<form enctype="multipart/form-data" action="index.php" method="POST">
   	<input type='hidden' name='module' value='Administration'>
   	<input type='hidden' name='action' value='ImportCustomFieldStructure'>
   {$mod_strings['LBL_IMPORT_CUSTOM_FIELDS_STRUCT']}: <input name="sugfile" type="file" />
    <input type="submit" value="{$mod_strings['LBL_ICF_IMPORT_S']}" class='button'/>
</form>
EOQ;

	
	}else{
	
	$fmd = new FieldsMetaData();
	
	echo $mod_strings['LBL_ICF_DROPPING'] . '<br>';
	$lines = file($_FILES['sugfile']['tmp_name']);
	$cur = array();
	foreach($lines as $line){

		if(trim($line) == 'DONE'){
			$fmd->new_with_id  = true;
			echo 'Adding:'.$fmd->custom_module . '-'. $fmd->name. '<br>';
			$fmd->db->query("DELETE FROM $fmd->table_name WHERE id='$fmd->id'");
			$fmd->save(false);
			$fmd = new FieldsMetaData();
			

			
		}else{

			$ln = explode(':::', $line ,2); 
			if(sizeof($ln) == 2){
			$KEY = trim($ln[0]);
				$fmd->$KEY = trim($ln[1]);
			}
		}	
		
	}
	$_REQUEST['run'] = true;
	$result = $fmd->db->query("SELECT count(*) field_count FROM $fmd->table_name");
	$row = $fmd->db->fetchByAssoc($result);
	echo 'Total Custom Fields :' . $row['field_count'] . '<br>';
	include('modules/Administration/UpgradeFields.php');
	}
?>
