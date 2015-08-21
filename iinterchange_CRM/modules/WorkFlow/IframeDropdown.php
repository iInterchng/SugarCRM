<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $app_list_strings;
global $beanList;
global $theme;

require_once('include/workflow/workflow_utils.php');

	
	if(!empty($_REQUEST['target_module']) && $_REQUEST['target_module']!=""){
		$target_module = $_REQUEST['target_module'];
	} else {
		sugar_die("Target_module required");
	}

	if(!empty($_REQUEST['iframe_type']) && $_REQUEST['iframe_type']!=""){
		$iframe_type = $_REQUEST['iframe_type'];
	} else {
		$iframe_type = "";	
	}		
	
	if(!empty($_REQUEST['base_module']) && $_REQUEST['base_module']!=""){
		$base_module = $_REQUEST['base_module'];
	} else {
		$base_module = "";	
	}		


//iframe_type/////////////////////////////////////
//rel_mod
//rel_mod_fields
//base_fields	

	if($iframe_type=="rel_mod"){
		$temp_module = get_module_info($target_module);
		$temp_module->call_vardef_handler("template_rel_filter");
		$temp_module->vardef_handler->start_none=true;
		$temp_module->vardef_handler->start_none_lbl = $GLOBALS['mod_strings']['LBL_PLEASE_SELECT'];

		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true, true, true, true),"");
		$select_jscript = "onchange=\"window.parent.togglefields('rel_iframe', 'fields_iframe', 'base_module')";	
		$ext_value = "";
		$on_start = "";
	//end if iframe_type is rel_mod
	}
	if($iframe_type=="rel_mod_fields"){
		
		$temp_module = get_module_info($base_module);
		$rel_attribute_name = "";
		//First, see if there is a link field with the name of the related module
		if (!empty($temp_module->field_defs[$target_module]) 
			&& !empty($temp_module->field_defs[$target_module]['relationship']))
		{
			$rel_attribute_name = $temp_module->field_defs[$target_module]['relationship'];		
		}
		elseif (!empty($temp_module->field_defs[strtolower($target_module)]) 
			&& !empty($temp_module->field_defs[strtolower($target_module)]['relationship']))
		{
			$rel_attribute_name = $temp_module->field_defs[strtolower($target_module)]['relationship'];		
		}
		else 
		{
			//Next, Find the first link field associated with the requested module
			foreach($temp_module->get_linked_fields() as $name => $def)
			{
				if (isset($def['module']) && $def['module'] == $target_module && !empty($def['relationship']))
				{
					$rel_attribute_name = $def['relationship'];
					break;
				}
			}
		}
		$rel_module = get_rel_module_name($base_module, $rel_attribute_name, $temp_module->db);
		$temp_module = get_module_info($rel_module);
		$temp_module->call_vardef_handler("template_filter");
		$temp_module->vardef_handler->extra_array['href_link'] = $GLOBALS['mod_strings']['LBL_LINK_RECORD'];
		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true),"");
		$select_jscript = "onchange=\"window.parent.copy_text('fields_iframe', 'variable_text')";
		$ext_value = $base_module."::".$target_module;
		$on_start ="window.parent.copy_text('fields_iframe', 'variable_text');";
	}
	if($iframe_type=="base_fields"){
		$temp_module = get_module_info($target_module);
		$temp_module->call_vardef_handler("template_filter");
		$temp_module->vardef_handler->extra_array['href_link'] = $GLOBALS['mod_strings']['LBL_LINK_RECORD'];
		if($target_module=="Meetings" || $target_module=="Calls" || $target_module=="meetings" || $target_module=="calls"){
			$temp_module->vardef_handler->extra_array['invite_link'] = $GLOBALS['mod_strings']['LBL_INVITE_LINK'];
		}
		$target_dropdown = get_select_options_with_id($temp_module->vardef_handler->get_vardef_array(true),"");		
		$select_jscript = "onchange=\"window.parent.copy_text('fields_iframe', 'variable_text')";
		$ext_value = $target_module;
		$on_start ="window.parent.copy_text('fields_iframe', 'variable_text');";
	}		
	

////////////HTML DISPLAY AREA////////////////////	
	echo "<html><head>";
	echo SugarThemeRegistry::current()->getCSS();
	echo "<style type='text/css'> body {background-color: transparent}</style></head><body>";
	echo "<form name=\"EditView\">";
	echo "<select id='target_dropdown' name='target_dropdown' tabindex='2' ".$select_jscript."\">".$target_dropdown."</select>";
	echo "<input type='hidden' id='ext1' name='ext1' value='".$ext_value."'>";
	echo "<input type='hidden' id='ext2' name='ext2' value='".$iframe_type."'>";
echo "</form>";	

	echo "<script>";
 	echo $on_start;
	echo "</script>";
	echo "</body></html>";

?>