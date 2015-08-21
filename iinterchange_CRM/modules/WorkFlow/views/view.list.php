<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class WorkFlowViewList extends ViewList
{
 	public function preDisplay()
 	{
 		$this->lv = new ListViewSmarty();
 		$this->lv->export = false;
 		$this->lv->showMassupdateFields = false;
 	}
}
