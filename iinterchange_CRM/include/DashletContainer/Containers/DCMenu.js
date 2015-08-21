/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
var DCMenu=YUI({combine:true,timeout:10000,base:"include/javascript/yui3/build/",comboBase:"index.php?entryPoint=getYUIComboFile&"}).use('dd','anim','cookie','json','node-menunav','io-base','io-form','io-upload-iframe',"overlay",function(Y){var requests={};var overlays=[];var overlayDepth=0;var menuFunctions={};var isRTL=(typeof(rtl)!="undefined")?true:false;function getOverlay(depth){if(!depth)depth=0;if(typeof overlays[depth]=='undefined'){overlays[depth]=new Y.Overlay({bodyContent:"",zIndex:10+depth,shim:false,visibility:false});overlays[depth].after('render',function(e){this.get('boundingBox').plug(Y.Plugin.Drag,{handles:['.hd']});});overlays[depth].show=function(){this.visible=true;this.get('boundingBox').setStyle('position','absolute');this.get('boundingBox').setStyle('visibility','visible');if(Y.get('#dcboxbody')){Y.get('#dcboxbody').setStyle('display','');}}
overlays[depth].hide=function(){this.visible=false;this.get('boundingBox').setStyle('visibility','hidden');}}
var dcmenuContainer=Y.get('#dcmenuContainer');var dcmenuContainerHeight=dcmenuContainer.get('offsetHeight');overlays[depth].set('xy',[20,dcmenuContainerHeight]);overlays[depth].render();return overlays[depth]}
DCMenu.menu=function(module,title){if(typeof(lastLoadedMenu)!='undefined'&&lastLoadedMenu==module){return;}
lastLoadedMenu=module;if(typeof menuFunctions[module]=='undefined'){loadView(module,'index.php?source_module='+this.module+'&record='+this.record+'&action=Quickcreate&module='+module,null,null,title);}}
DCMenu.displayModuleMenu=function(obj,module){loadView(module,'index.php?module='+module+'&action=ajaxmenu',0,'moduleTabLI_'+module);}
DCMenu.closeTopOverlay=function(){overlays[overlays.length-1].hide();}
DCMenu.closeOverlay=function(depth){var i=0;while(i<overlays.length){if(!depth||i>=depth){if(i==depth&&!overlays[i].visible){overlays[i].show();}else{if(typeof(overlays[i].bodyNode)!='undefined'&&typeof(overlays[i].bodyNode._node)!='undefined'&&typeof(overlays[i].bodyNode._node.getElementsByTagName('form')[0])!='undefined'){var warnMsg=onUnloadEditView(overlays[i].bodyNode._node.getElementsByTagName('form')[0]);if(warnMsg!=null){if(confirm(warnMsg)){disableOnUnloadEditView(overlays[i].bodyNode._node.getElementsByTagName('form')[0]);}else{i++;continue;}}}
overlays[i].hide();}}
i++;}}
DCMenu.minimizeOverlay=function(){Y.get('#dcboxbody').setStyle('display','none');Y.get('#dcboxbody').setStyle('width','950px;');}
function setBody(data,depth,parentid,type,title,extraButton){if(typeof(data.html)=='undefined')data={html:data};if(SUGAR.util.isLoginPage(data.html))
return false;DCMenu.closeOverlay(depth);var overlay=getOverlay(depth);ua=navigator.userAgent.toLowerCase();isIE7=ua.indexOf('msie 7')!=-1;var style='position:fixed';if(parentid){overlay.set("align",{node:"#"+parentid,points:[Y.WidgetPositionExt.TL,Y.WidgetPositionExt.BL]});overlay.set('y',42);}
var content='';if(false&&depth==0){content+='<div id="dcboxtitle">'
if(typeof data.title!='undefined'){content+='<div style="float:left"><a href="'+data.url+'">'+data.title+'</a></div>';}
content+='<div style="float:right"><a id="dcmenu_close_link" href="javascript:DCMenu.closeOverlay()">[x]</a><a href="javascript:void()" onclick="DCMenu.minimizeOverlay()">[-]</a></div></div>';}
content+='<div style="'+style+'"><div id="dcboxbody"  class="'+parentid+'"><div class="dashletPanel dc"><div class="hd"><div class="tl"></div><div class="hd-center">';if(title!==undefined)
content+='<span>'+title+'</span>';else
if(typeof type!='undefined')
content+='<span>'+type+'</span>';content+='<div class="close">';if(extraButton!=null){content+=extraButton}
content+='<a id="dcmenu_close_link" href="javascript:lastLoadedMenu=undefined;DCMenu.closeOverlay()"><img src="index.php?entryPoint=getImage&themeName='+SUGAR.themes.theme_name+'&imageName=close_button_24.png"></a></div></div><div class="tr"></div></div><div class="bd"><div class="ml"></div><div class="bd-center"><div class="dccontent">'+data.html+'</div></div><div class="mr"></div></div><div class="ft"><div class="bl"></div><div class="ft-center"></div><div class="br"></div></div></div></div>';overlay.set('bodyContent',content);overlay.show();return overlay;}
DCMenu.showView=function(data,parent_id){setBody(data,0,parent_id);}
DCMenu.iFrame=function(url,width,height){setBody("<iframe style='border:0px;height:"+height+";width:"+width+"'src='"+url+"'></iframe>");}
DCMenu.addToFavorites=function(item,module,record){Y.one(item).replaceClass('off','on');item.onclick=function(){DCMenu.removeFromFavorites(this,module,record);}
quickRequest('favorites','index.php?to_pdf=1&module=SugarFavorites&action=save&fav_id='+record+'&fav_module='+module);}
DCMenu.removeFromFavorites=function(item,module,record){Y.one(item).replaceClass('on','off');item.onclick=function(){DCMenu.addToFavorites(this,module,record);}
quickRequest('favorites','index.php?to_pdf=1&module=SugarFavorites&action=delete&fav_id='+record+'&fav_module='+module);}
DCMenu.tagFavorites=function(item,module,record,tag){quickRequest('favorites','index.php?to_pdf=1&module=SugarFavorites&action=tag&fav_id='+record+'&fav_module='+module+'&tag='+tag);}
function quickRequest(type,url,success){if(!success)success=function(id,data){}
var id=Y.io(url,{method:'POST',on:{success:success,failure:function(id,data){}}});}
DCMenu.pluginList=function(){quickRequest('plugins','index.php?to_pdf=1&module=Home&action=pluginList',pluginResults);}
pluginResults=function(id,data){var overlay=setBody(data.responseText,0,'globalLinks');overlay.set('y',90);}
DCMenu.history=function(q){quickRequest('spot','index.php?to_pdf=1&module='+this.module+'&action=modulelistmenu',spotResults);}
Y.spot=function(q){ajaxStatus.showStatus(SUGAR.language.get('app_strings','LBL_LOADING'));quickRequest('spot','index.php?to_pdf=1&module='+this.module+'&action=spot&record='+this.record+'&q='+encodeURIComponent(q),spotResults);}
DCMenu.spotZoom=function(q,module,offset){quickRequest('spot','index.php?to_pdf=1&module='+this.module+'&action=spot&record='+this.record+'&q='+encodeURIComponent(q)+'&zoom='+module+'&offset='+offset,spotResults);}
spotResults=function(id,data){var overlay=setBody(data.responseText,0,'sugar_spot_search');overlay.set('x',overlay.get('x')-60);ajaxStatus.hideStatus();var focuselement=document.getElementById('sugaraction1');if(typeof(focuselement)!='undefined'&&focuselement!=null){focuselement.focus();}}
DCMenu.miniDetailView=function(module,id){quickRequest('spot','index.php?to_pdf=1&module='+module+'&action=quick&record='+id,miniDetailViewResults);}
miniDetailViewResults=function(id,data){setBody(Y.JSON.parse(data.responseText),0);}
DCMenu.save=function(id){ajaxStatus.showStatus(SUGAR.language.get('app_strings','LBL_SAVING'));Y.io('index.php',{method:'POST',form:{id:id,upload:true},on:{complete:function(id,data){try{var returnData=Y.JSON.parse(data.responseText);switch(returnData.status){case'dupe':location.href='index.php?'+returnData.get;break;case'success':ajaxStatus.flashStatus(SUGAR.language.get('app_strings','LBL_SAVED'),2000);break;}}
catch(e){ajaxStatus.flashStatus(SUGAR.language.get('app_strings','LBL_SAVED'),2000);}}}});lastLoadedMenu=undefined;DCMenu.closeOverlay();return false;}
DCMenu.submitForm=function(id,status,title){ajaxStatus.showStatus(status);Y.io('index.php',{method:'POST',form:{id:id,upload:true},on:{complete:function(id,data){alert('hello');}}});lastLoadedMenu=undefined;return false;}
DCMenu.hostMeeting=function(){window.open(DCMenu.hostMeetingUrl,'hostmeeting');}
DCMenu.loadView=function(type,url,depth,parentid,title,extraButton){if(extraButton==undefined){extraButton=null;}
var id=Y.io(url,{method:'POST',on:{success:function(id,data){try{jData=Y.JSON.parse(data.responseText);setBody(jData,requests[id].depth,requests[id].parentid,title,extraButton);var head=Y.Node.get('head')
for(i in jData['scripts']){var script=document.createElement('script');script.src=jData['scripts'][i];head.appendChild(script);}
SUGAR.util.evalScript(jData.html);setTimeout("enableQS();",1000);}catch(err){var overlay=setBody({html:data.responseText},requests[id].depth,requests[id].parentid,requests[id].type,title);var dcmenuSugarCube=Y.get('#dcmenuSugarCube');var dcboxbody=Y.get('#dcboxbody');var dcmenuSugarCubeX=dcmenuSugarCube.get('offsetLeft');var dcboxbodyWidth=dcboxbody.get('offsetWidth');if(isRTL){overlay.set('x',dcmenuSugarCubeX-dcboxbodyWidth);}
SUGAR.util.evalScript(data.responseText);setTimeout("enableQS();",1000);}},failure:function(id,data){}}});requests[id.id]={type:type,url:url,parentid:parentid,depth:depth,extraButton:extraButton};}
var loadView=Y.loadView;DCMenu.notificationsList=function(q){quickRequest('notifications','index.php?to_pdf=1&module=Notifications&action=quicklist',notificationsListDisplay);}
notificationsListDisplay=function(id,data){var overlay=setBody(data.responseText,0,'dcmenuSugarCube');var dcmenuSugarCube=Y.get('#dcmenuSugarCube');var dcboxbody=Y.get('#dcboxbody');var dcmenuSugarCubeX=dcmenuSugarCube.get('offsetLeft');var dcmenuSugarCubeWidth=dcmenuSugarCube.get('offsetWidth');var dcboxbodyWidth=dcboxbody.get('offsetWidth');if(isRTL){overlay.set('x',(dcmenuSugarCubeX+dcmenuSugarCubeWidth)-dcboxbodyWidth);}}
DCMenu.viewMiniNotification=function(id){quickRequest('notifications','index.php?to_pdf=1&module=Notifications&action=quickView&record='+id,notificationDisplay);}
notificationDisplay=function(id,data){var jData=Y.JSON.parse(data.responseText);setBody(jData.contents,0);decrementUnreadNotificationCount();}
decrementUnreadNotificationCount=function(){var oldValue=parseInt(document.getElementById('notifCount').innerHTML);document.getElementById('notifCount').innerHTML=oldValue-1;}
updateNotificationNumber=function(id,data){var jData=Y.JSON.parse(data.responseText);var oldValue=parseInt(document.getElementById('notifCount').innerHTML);document.getElementById('notifCount').innerHTML=parseInt(jData.unreadCount)+oldValue;}
DCMenu.checkForNewNotifications=function(){quickRequest('notifications','index.php?to_pdf=1&module=Notifications&action=checkNewNotifications',updateNotificationNumber);}});