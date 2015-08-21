<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['{{$class.name}}'] = array(
	'table'=>'{{$class.table_name}}',
	'audited'=>{{$class.audited}},
	'fields'=>{{$class.fields_string}},
	'relationships'=>{{$class.relationships}},
	'optimistic_locking'=>true,
	{{if !empty($class.table_name) && !empty($class.templates)}}
	'unified_search'=>true,
	{{/if}}
);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('{{$class.name}}','{{$class.name}}', array({{$class.templates}}));
