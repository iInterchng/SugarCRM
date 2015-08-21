/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
SUGAR.dashlets=function(){return{postForm:function(theForm,callback){var success=function(data){if(data){callback(data.responseText);}}
YAHOO.util.Connect.setForm(theForm);var cObj=YAHOO.util.Connect.asyncRequest('POST','index.php',{success:success,failure:success});return false;},callMethod:function(dashletId,methodName,postData,refreshAfter,callback){ajaxStatus.showStatus(SUGAR.language.get('app_strings','LBL_SAVING'));response=function(data){ajaxStatus.hideStatus();if(refreshAfter)SUGAR.mySugar.retrieveDashlet(dashletId);if(callback){callback(data.responseText);}}
post='to_pdf=1&module=Home&action=CallMethodDashlet&method='+methodName+'&id='+dashletId+'&'+postData;var cObj=YAHOO.util.Connect.asyncRequest('POST','index.php',{success:response,failure:response},post);}};}();if(SUGAR.util.isTouchScreen()&&typeof iScroll=='undefined'){with(document.getElementsByTagName("head")[0].appendChild(document.createElement("script")))
{setAttribute("id","newScript",0);setAttribute("type","text/javascript",0);setAttribute("src","include/javascript/iscroll.js",0);}}