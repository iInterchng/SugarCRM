<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class ViewQuickview extends SugarView{
	function ViewQuickview(){
		parent::SugarView();
	}

	function display()
	{	
	    $record = empty($_REQUEST['record']) ? "" : $_REQUEST['record'];
	    $n = new Notifications();
	    $focus = $n->retrieve($record);
        
	    //Mark as read.
	    $focus->is_read = true;
	    $focus->save(FALSE);
	    
	    $results = array('contents' => $this->_formatNotificationForDisplay($focus) );

	    $json = getJSONobj();
		$out = $json->encode($results);
		ob_clean();
		print($out);
		sugar_cleanup(true);
		
	}
	
	function _formatNotificationForDisplay($notification)
    {
        global $app_strings;
        $this->ss->assign('APP', $app_strings);
        $this->ss->assign('focus', $notification);
        return $this->ss->fetch("modules/Notifications/tpls/detailView.tpl");
    }
}