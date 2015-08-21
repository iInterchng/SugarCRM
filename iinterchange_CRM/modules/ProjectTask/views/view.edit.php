<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');

class ProjectTaskViewEdit extends ViewEdit 
{
    /**
 	 * @see SugarView::display()
 	 */
 	public function display() 
 	{
		global $beanFiles;
		require_once($beanFiles['ProjectTask']);
		
		$focus = new ProjectTask();
		if (isset($_REQUEST['record'])){
			$focus->retrieve($_REQUEST['record']);
		}
		
		$this->ss->assign('resource', $focus->getResourceName());
		
		if (isset($_REQUEST['fromGrid']) && $_REQUEST['fromGrid'] == '1'){
			$this->ss->assign('project_id', $focus->project_id);
			$this->ss->assign('FROM_GRID', true);
		}
		else{
			$this->ss->assign('FROM_GRID', false);
		}
		
 		parent::display();
 	}
}
