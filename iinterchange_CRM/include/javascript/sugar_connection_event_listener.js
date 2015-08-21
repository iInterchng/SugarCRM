/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
SUGAR_callsInProgress=0;YAHOO.util.Connect.completeEvent.subscribe(function(event,data){SUGAR_callsInProgress--;if(SUGAR.util.isLoginPage(data[0].conn.responseText))
return false;});YAHOO.util.Connect.startEvent.subscribe(function(event,data)
{SUGAR_callsInProgress++;});