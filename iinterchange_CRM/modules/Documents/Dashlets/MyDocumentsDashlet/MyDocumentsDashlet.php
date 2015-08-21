<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/Dashlets/DashletGeneric.php');

class MyDocumentsDashlet extends DashletGeneric { 

	function MyDocumentsDashlet($id, $def = null)
	{
		global $current_user, $app_strings;
		require('modules/Documents/Dashlets/MyDocumentsDashlet/MyDocumentsDashlet.data.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Documents');

        $this->searchFields = $dashletData['MyDocumentsDashlet']['searchFields'];
        $this->columns = $dashletData['MyDocumentsDashlet']['columns'];

        $this->seedBean = new Document();        
    }

    function displayOptions() {
        $this->processDisplayOptions();
        require_once('modules/Documents/Document.php');

        $types = getDocumentsExternalApiDropDown();
        $this->currentSearchFields['doc_type']['input'] = '<select size="3" multiple="true" name="doc_type[]">'
	                                              . get_select_options_with_id($types, (empty($this->filters['doc_type']) ? '' : $this->filters['doc_type']))
	                                              . '</select>';
        $this->configureSS->assign('searchFields', $this->currentSearchFields);
        return $this->configureSS->fetch($this->configureTpl);
    }
}

?>