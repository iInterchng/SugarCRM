<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class DCMenu extends DashletContainer
{	
	protected function getMenuItem($module)
	{
	    $imageURL = SugarThemeRegistry::current()->getImageURL("icon_{$module}_bar_32.png");
	    if (empty($imageURL))
	    	$imageURL = SugarThemeRegistry::current()->getImageURL("icon_generic_bar_32.png");
	    $module_mod_strings = return_module_language($GLOBALS['current_language'], $module);
	    if ( isset($module_mod_strings['LNK_NEW_RECORD']) )
	        $createRecordTitle = $module_mod_strings['LNK_NEW_RECORD'];
	    elseif ( isset($module_mod_strings['LNK_NEW_'.strtoupper($GLOBALS['beanList'][$module])]) )
	        $createRecordTitle = $module_mod_strings['LNK_NEW_'.strtoupper($GLOBALS['beanList'][$module])];
	    elseif ( strtoupper($GLOBALS['beanList'][$module]) == 'ACASE' && isset($module_mod_strings['LNK_NEW_CASE']) )
	        $createRecordTitle = $module_mod_strings['LNK_NEW_CASE'];
        else
	        $createRecordTitle = $GLOBALS['app_strings']['LBL_CREATE_BUTTON_LABEL'].' '.$module_mod_strings['LBL_MODULE_NAME'];
	    return <<<EOQ
		<li><a href="javascript: if ( DCMenu.menu ) DCMenu.menu('$module','$createRecordTitle');"><img class='icon' src='{$imageURL}' alt='{$createRecordTitle}' title='{$createRecordTitle}'></a></li>	
EOQ;

	}
	
	protected function getDynamicMenuItem($def)
	{
		if (!empty($def['icon']))
			$imageURL = $def['icon'];
	    else
	    	$imageURL = SugarThemeRegistry::current()->getImageURL("icon_generic_bar_32.png");
	    
	    $module = !empty($def['module']) ? $def['module'] : "";
	    $label = isset($def['label']) ? translate($def['label'], $module) : "";
	    $action = isset($def['action']) ? $def['action'] : "DCMenu.menu('$module','$label');";
	    $script = isset($def['script_url']) ? '<script type="text/javascript" src="' . $def['script_url'] . '"></script>' : "";
	    return <<<EOQ
		<li>$script<a href="javascript: $action"><img class="icon" src="{$imageURL}" alt="{$label}" title="{$label}"></a></li>	
EOQ;
	}
	
	public function getLayout()
	{
		$record = !empty($_REQUEST['record'])?$_REQUEST['record']:'';
		$module = !empty($_REQUEST['module'])?$_REQUEST['module']:'';
		
		global $current_user;
				$notificationsHTML = '';
		if(is_admin($current_user)){
		    $shouldSkip = sugar_cache_retrieve('dcmenu_check_notifications');
		    $unreadNotifications = 0;
		    if ( $shouldSkip != '1' ) {
                require_once('modules/Notifications/Notifications.php');
                $n = new Notifications();
                $unreadNotifications = $n->getSystemNotificationsCount();
                if ( $unreadNotifications == 0 )
                    sugar_cache_put('dcmenu_check_notifications','1');
            }

		if($unreadNotifications > 0) {
			$iconImageUrl = SugarThemeRegistry::current()->getImageURL("dcMenuSugarCube_alert.png");
			$code = '<div id="notifCount" class="notifCount">'.$unreadNotifications.'</div>';
			$class = "";
		} else {
			$iconImageUrl = SugarThemeRegistry::current()->getImageURL("dcMenuSugarCube.png");
			$code = '';
			$class = ' class="none"';
		}
		
		$notificationsHTML = <<<EOQ
		
			<div id="dcmenuSugarCube" $class>
			  <a href="javascript: DCMenu.notificationsList();" class="notice"><img class='dc_notif_icon' src='$iconImageUrl' border="0"></a>
			  $code
			</div>	
			
EOQ;
		} else {
			$iconImageUrl = SugarThemeRegistry::current()->getImageURL("dcMenuSugarCube.png");
				$code = '';
				$class = ' class="none"';
				$notificationsHTML = <<<EOQ
			
			<div id="dcmenuSugarCube" $class>
			  <img class='dc_notif_icon' src='$iconImageUrl' border="0">
			  $code
			</div>	
EOQ;
		}
		$action = $GLOBALS['app']->controller->action;
		$html = "<script src='".getJSPath('include/DashletContainer/Containers/DCMenu.js')."'></script>";
		// TODO: Come back and make a SugarFields grouping file for all of these
		$html .= "<script src='".getJSPath('include/SugarFields/Fields/Collection/SugarFieldCollection.js')."'></script>";
		$html .= "<script src='".getJSPath('include/SugarFields/Fields/Teamset/Teamset.js')."'></script>";
		$html .= "<script src='".getJSPath('include/JSON.js')."'></script>";
		$html .= "<script src='".getJSPath('include/SugarFields/Fields/Datetimecombo/Datetimecombo.js')."'></script>";
		$html .= <<<EOQ
		<script>
			
		YUI().use('node-base', 'event-key', function(Y){
			
			function init(){
				DCMenu.module = '$module';
				DCMenu.record = '$record';
				DCMenu.action = '$action';
				
				// store the return value from Y.on to remove the listener later
    			var handle = Y.on('key', function(e) {
        			DCMenu.spot(document.getElementById('sugar_spot_search').value);
        			e.halt();
				 }, '#sugar_spot_search', 'down:13', Y);


			}
	    	Y.on("domready", init);
			
		});
		</script>
EOQ;
		$html .= <<<EOQ
		<div id='dcmenutop'></div>
		<div id='dcmenu' class='dcmenu dcmenuFloat'>
		{$notificationsHTML}
		<div class="dcmenuDivider" id="notificationsDivider"></div>
		
		<div id="dcmenuContainer">
		<ul id="dcmenuitems">

EOQ;
        $DCActions = array();
        $dynamicDCActions = array();
		$actions_path = "include/DashletContainer/Containers/DCActions.php";
		if (is_file('custom/' . $actions_path))
		    include('custom/' . $actions_path);
		else
		    include($actions_path); 
		if (is_file('custom/application/Ext/DashletContainer/Containers/dcactions.ext.php'))
			include 'custom/application/Ext/DashletContainer/Containers/dcactions.ext.php';

		foreach($DCActions as $action){
			if(ACLController::checkAccess($action, 'edit', true)) {
			   $html .= $this->getMenuItem($action);	
			}
		}

		$dyn_actions_path = "include/DashletContainer/Containers/DynamicDCActions.php";
		if (is_file('custom/' . $dyn_actions_path)) {
		    include('custom/' . $dyn_actions_path);
		} else if ( is_file($dyn_actions_path) ) {
		    include($dyn_actions_path); 
        }
		if (is_file('custom/application/Ext/DashletContainer/Containers/dynamicdcactions.ext.php')) {
			include 'custom/application/Ext/DashletContainer/Containers/dynamicdcactions.ext.php';
        }
		
		foreach($dynamicDCActions as $def){
			$html .= $this->getDynamicMenuItem($def);
		}

		$iconSearch = SugarThemeRegistry::current()->getImageURL("dcMenuSearchBtn.png");
		$html .= <<<EOQ
		</ul>
		</div>
EOQ;
$html .= <<<EOQ
		<div id="glblSearchBtn"><a href="javascript: DCMenu.spot(document.getElementById('sugar_spot_search').value);"><img src="$iconSearch" class="icon" align="top"></a></div>
		<div id="dcmenuSearchDiv"><div id="sugar_spot_search_div"><input size=20 id='sugar_spot_search'></div>
EOQ;
$html .= <<<EOQ
		</div>
		</div>
		
EOQ;
		return array('html'=>$html, 'jsfiles'=>array());
	}
}