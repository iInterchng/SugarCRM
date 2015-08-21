<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/DynamicFields/DynamicField.php');

$module = $_REQUEST['module_name'];
$custom_fields = new DynamicField($module);
if(!empty($module)){
			$class_name = $beanList[$module];
			$class_file = $class_name;
			if($class_file == 'aCase'){
				$class_file = 'Case';	
			}
			require_once("modules/$module/$class_file.php");
			$mod = new $class_name();
			$custom_fields->setup($mod);
}else{
	echo "\nNo Module Included Could Not Save";	
}
$name = $_REQUEST['field_label'];
$options = '';
if($_REQUEST['field_type'] == 'enum'){		
	$options = $_REQUEST['options'];
}
$default_value = '';

$custom_fields->addField($name,$name, $_REQUEST['field_type'],'255','optional', $default_value, $options, '', '' );
$html = $custom_fields->getFieldHTML($name, $_REQUEST['file_type']);

set_register_value('dyn_layout', 'field_counter', $_REQUEST['field_count']);
$label = $custom_fields->getFieldLabelHTML($name, $_REQUEST['field_type']);
require_once('modules/DynamicLayout/AddField.php');
$af = new AddField();
$af->add_field($name, $html,$label, 'window.opener.');
echo $af->get_script('window.opener.');
echo "\n<script>window.close();</script>";

?>
