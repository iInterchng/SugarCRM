<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


/*
 ARGS:

 $_REQUEST['module'] : the module associated with this Bean instance (will be used to get the class name)
 $_REQUEST['prospect_lists'] : the id of the prospect list
 $_REQUEST['uids'] : the ids of the records to be added to the prospect list, separated by ','

 */

require_once 'include/formbase.php';

global $beanFiles,$beanList;
$bean_name = $beanList[$_REQUEST['module']];
require_once($beanFiles[$bean_name]);
$focus = new $bean_name();

$uids = array();
if($_REQUEST['select_entire_list'] == '1'){
	$order_by = '';
	
	require_once('include/MassUpdate.php');
	$mass = new MassUpdate();
	$mass->generateSearchWhere($_REQUEST['module'], $_REQUEST['current_query_by_page']);
	$ret_array = create_export_query_relate_link_patch($_REQUEST['module'], $mass->searchFields, $mass->where_clauses);
	$query = $focus->create_export_query($order_by, $ret_array['where'], $ret_array['join']);
	$result = $GLOBALS['db']->query($query,true);
	$uids = array();
	while($val = $GLOBALS['db']->fetchByAssoc($result,-1,false))
	{
		array_push($uids, $val['id']);
	}
}
else{
	$uids = explode ( ',', $_POST['uids'] );
}

// find the relationship to use
$relationship = '';
foreach($focus->get_linked_fields() as $field => $def) {
    if ($focus->load_relationship($field)) {
        if ( $focus->$field->getRelatedModuleName() == 'ProspectLists' ) {
            $relationship = $field;
            break;
        }
    }
}

if ( $relationship != '' ) {
    foreach ( $uids as $id) {
        $focus->retrieve($id);
        $focus->load_relationship($relationship);
        $focus->prospect_lists->add( $_REQUEST['prospect_list'] );
    }
}
handleRedirect();
exit;
?>
