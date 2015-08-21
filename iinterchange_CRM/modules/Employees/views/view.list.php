<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class EmployeesViewList extends ViewList
{
 	public function preDisplay()
 	{
 		$this->lv = new ListViewSmarty();
 		$this->lv->delete = false;
 		$this->lv->email = false;
 		if (!is_admin($GLOBALS['current_user'])&& !is_admin_for_module($GLOBALS['current_user'],'Users')){
            $this->lv->multiSelect = false;
        }
 	}
 	
	public function listViewProcess()
	{
		$this->processSearchForm();
		$this->lv->searchColumns = $this->searchForm->searchColumns;
		
		if(!$this->headers)
			return;
		if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
			$this->lv->ss->assign("SEARCH",true);
			
			$tplFile = 'include/ListView/ListViewGeneric.tpl';
			if (!is_admin($GLOBALS['current_user'])&& !is_admin_for_module($GLOBALS['current_user'],'Users')){
				$tplFile = 'include/ListView/ListViewNoMassUpdate.tpl';
			}
			$this->lv->setup($this->seed, $tplFile, $this->where, $this->params);
			$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
			echo $this->lv->display();
		}
 	}
}
