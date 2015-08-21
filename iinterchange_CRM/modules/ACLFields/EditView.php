<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class ACLFieldsEditView{
	function getView($module, $role_id){
		$fields = ACLField::getFields( $module, '', $role_id);
		$sugar_smarty = new Sugar_Smarty();
		if(substr($module, 0, 2)=='KB'){
        	$sugar_smarty->assign('LBL_MODULE', 'KBDocuments');
        }
        else{
        	$sugar_smarty->assign('LBL_MODULE', $module);
        }
		$sugar_smarty->assign('MOD', $GLOBALS['mod_strings']);
		$sugar_smarty->assign('APP', $GLOBALS['app_strings']);
		$sugar_smarty->assign('FLC_MODULE', $module);
		$sugar_smarty->assign('APP_LIST', $GLOBALS['app_list_strings']);
		$sugar_smarty->assign('FIELDS', $fields);
		foreach($GLOBALS['aclFieldOptions'] as $key=>$option){
			$GLOBALS['aclFieldOptions'][$key] = translate($option, 'ACLFields');
		}
		$sugar_smarty->assign('OPTIONS',  $GLOBALS['aclFieldOptions']);
		$req_options = $GLOBALS['aclFieldOptions'];
		unset($req_options[-99]);
		$sugar_smarty->assign('OPTIONS_REQUIRED',  $req_options);
		return  $sugar_smarty->fetch('modules/ACLFields/EditView.tpl');
	}
}
?>