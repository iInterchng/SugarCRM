<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/Notifications/Notifications.php');

class NotificationsController extends SugarController
{
    var $action_remap = array ( ) ;

    /**
     * DEPRECATED 
     *
     */
    function action_checkNewNotifications()
    {
	    global $timedate;
	   
	    $thirtySecondsAgoFormatted = $timedate->getNow()->get("30 seconds ago")->asDb();

	    $now = $timedate->nowDb();

	    $lastNotiticationCheck = !empty($_SESSION['lastNotificationCheck']) ? $_SESSION['lastNotificationCheck'] : $thirtySecondsAgoFormatted;
	    
        $n = new Notifications();
        $unreadCount = $n->retrieveUnreadCountFromDateEnteredFilter($lastNotiticationCheck);
        
        //Store the last datetime checked.
        $_SESSION['lastNotificationCheck'] = $now;
        
        $results = array('unreadCount' => $unreadCount );

	    $json = getJSONobj();
		$out = $json->encode($results);
		ob_clean();
		print($out);
		sugar_cleanup(true);
	    
    }
}
?>
