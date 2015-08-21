<?PHP
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



class Notifications extends Basic {
	var $new_schema = true;
	var $module_dir = 'Notifications';
	var $object_name = 'Notifications';
	var $table_name = 'notifications';
	var $importable = false;

		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $is_read;
		var $disable_row_level_security = true;
		
		
	function Notifications(){	
		parent::Basic();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
	
	}
		
	/**
	 * TODO
	 *
	 * Should replace send notification portion in SugarBean.
	 */
	function sendNotification()
	{
	   //Determine how the user wants to receive notifications from the system (email|sms|in system)
	   
	   //Factory pattern returns array of classes cooresponding to different options for user
	   
	   //Iterate over each object, call send, all objects implement sendable.
	    
	}
	
	/**
	 * TODO
	 *
	 * @param unknown_type $user
	 */
	function clearUnreadNotificationCacheForUser($user)
	{
	    
	}
	
	function retrieveUnreadCountFromDateEnteredFilter($date_entered)
	{
	    global $current_user;
	    $query = "SELECT count(*) as cnt FROM {$this->table_name} where is_read='0' AND deleted='0' AND assigned_user_id='{$current_user->id}' AND
	               date_entered >  '$date_entered' ";
	    $result = $this->db->query($query, false);
	    $row = $this->db->fetchByAssoc($result);
	    $result = ($row['cnt'] != null) ? $row['cnt'] : 0;
 
	    return $result;
	}
	function getUnreadNotificationCountForUser($user = null)
	{
	    /** TO DO - ADD A CACHE MECHANISM HERE **/
	    
	    if($user == null)
	       $user = $GLOBALS['current_user'];
	       
	    $query = "SELECT count(*) as cnt FROM {$this->table_name} where is_read='0' AND deleted='0' AND assigned_user_id='{$user->id}' ";
	    $result = $this->db->query($query, false);
	    $row = $this->db->fetchByAssoc($result);
	    $result = ($row['cnt'] != null) ? $row['cnt'] : 0;
	    
	    return $result;
	}
	
	public function getSystemNotificationsCount(){
		$sv = new SugarView();
		$GLOBALS['system_notification_buffer'] = array();
		$GLOBALS['buffer_system_notifications'] = true;
		$GLOBALS['system_notification_count'] = 0;
		$sv->includeClassicFile('modules/Administration/DisplayWarnings.php');
	    return $GLOBALS['system_notification_count'];
	}
		
}
?>