<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class ViewQuicklist extends SugarView{
	function ViewQuicklist(){
		parent::SugarView();
	}

	function display()
	{
		global $current_user;
		
	    $query_fields = array('is_read' => 0,'assigned_user_id' => $current_user->id);
	    $n = new Notifications();
	    $where = "is_read = '0'";
	    //$data = $n->get_list('date_entered',$where);
	   $n1 = new Notifications();
	   $n1->name = 'Roger';
	   $data['list'][] = $n1;
		echo $this->_formatNotificationsForQuickDisplay($data['list'], "modules/Notifications/tpls/quickView.tpl");
	}
	function _formatNotificationsForQuickDisplay($notifications, $tplFile)
    {
        global $app_strings;
        $this->ss->assign('APP', $app_strings);
        $this->ss->assign('data', $notifications);
        return $this->ss->display($tplFile);
    }
}