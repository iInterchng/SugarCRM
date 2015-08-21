{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div id="dccontent" style="width:880px; height:400px; z-index:2;"></div>
<script type='text/javascript'>
{literal}
function closeEmailOverlay() {
	lastLoadedMenu=undefined; 

	if(typeof SUGAR.quickCompose.parentPanel != 'undefined' && SUGAR.quickCompose.parentPanel != null) {
       if(tinyMCE) {
    	  tinyMCE.execCommand('mceRemoveControl', false, 'htmleditor0'); 
       }
       SUGAR.quickCompose.parentPanel.hide();
       SUGAR.quickCompose.parentPanel = null;
	}
	
	DCMenu.closeOverlay();
}
{/literal}   
 
SUGAR.quickCompose.init({$json_output});

{literal}

YAHOO.util.Event.onAvailable('dcmenu_close_link', function() {
	document.getElementById('dcmenu_close_link').href = 'javascript:closeEmailOverlay();'; 
}, this);

//override the action here so we know to close the menu when email is sent
action_sugar_grp1 = 'quickcreate';

{/literal}
</script>