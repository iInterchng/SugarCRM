<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/

/**
 * EmployeeStatus.php
 * This is a helper file used by the meta-data framework
 * @see modules/Users/vardefs.php (employee_status)
 * @author Collin Lee
 */

function getEmployeeStatusOptions($focus, $name = 'employee_status', $value, $view = 'DetailView') {

	
	global $current_user, $app_list_strings;
    if(($view == 'EditView' || $view == 'MassUpdate') && is_admin($current_user)) {
	   
	   	$employee_status  = "<select name='$name'";
		if(!empty($sugar_config['default_user_name']) 
			&& $sugar_config['default_user_name'] == $focus->user_name 
			&& isset($sugar_config['lock_default_user_name']) 
			&& $sugar_config['lock_default_user_name'])
		    {
				$employee_status .= " disabled ";
			}
			$employee_status .= ">";
			$employee_status .= get_select_options_with_id($app_list_strings['employee_status_dom'], $focus->employee_status);
			$employee_status .= "</select>\n";
			return $employee_status;
	 }
	   	
	 if ( isset($app_list_strings['employee_status_dom'][$focus->employee_status]) )
	 {
        return $app_list_strings['employee_status_dom'][$focus->employee_status];
	 }
	  
	 return $focus->employee_status;
		
}

function getMessengerTypeOptions($focus, $name = 'messenger_type', $value, $view = 'DetailView') {
   global $current_user, $app_list_strings;
   if($view == 'EditView' || $view == 'MassUpdate') {
   	  $messenger_type = "<select name=\"$name\">";
      $messenger_type .= get_select_options_with_id($app_list_strings['messenger_type_dom'], $focus->messenger_type);
      $messenger_type .= '</select>';
   	  return $messenger_type;
   } 
   
   return $app_list_strings['messenger_type_dom'][$focus->messenger_type];
}

?>
