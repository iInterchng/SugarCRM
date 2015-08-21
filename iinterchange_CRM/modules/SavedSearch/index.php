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

	
if(!empty($_REQUEST['saved_search_action'])) {

	$ss = new SavedSearch();
	
	switch($_REQUEST['saved_search_action']) {
        case 'update': // save here
        	$savedSearchBean = loadBean($_REQUEST['search_module']);
            $ss->handleSave('', true, false, $_REQUEST['saved_search_select'], $savedSearchBean);
            break;
		case 'save': // save here
			$savedSearchBean = loadBean($_REQUEST['search_module']);
			$ss->handleSave('', true, false, null, $savedSearchBean);
			break;
		case 'delete': // delete here
			$ss->handleDelete($_REQUEST['saved_search_select']);
			break;			
	}
}
elseif(!empty($_REQUEST['saved_search_select'])) { // requesting a search here.
    if(!empty($_REQUEST['searchFormTab'])) // where is the request from  
        $searchFormTab = $_REQUEST['searchFormTab'];
    else 
        $searchFormTab = 'saved_views';

	if($_REQUEST['saved_search_select'] == '_none') { // none selected
		$_SESSION['LastSavedView'][$_REQUEST['search_module']] = '';
        $current_user->setPreference('ListViewDisplayColumns', array(), 0, $_REQUEST['search_module']);
        header("Location: index.php?action=index&module={$_REQUEST['search_module']}&searchFormTab={$searchFormTab}&query=true&clear_query=true");
		die();
	}
	else {
		
		$ss = new SavedSearch();
        $show='no';
        if(isset($_REQUEST['showSSDIV'])){$show = $_REQUEST['showSSDIV'];}
		$ss->returnSavedSearch($_REQUEST['saved_search_select'], $searchFormTab, $show);
	}
}
else {
	include('modules/SavedSearch/ListView.php');
}

?>