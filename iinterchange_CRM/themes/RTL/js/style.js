/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
YAHOO.util.Event.onContentReady("globalLinksModule",function()
{if(!Get_Cookie('globalLinksOpen')){Set_Cookie('globalLinksOpen','true',30,'/','','');}
if(Get_Cookie('globalLinksOpen')&&Get_Cookie('globalLinksOpen')=='true'){document.getElementById('globalLinks').style.width="auto";}
YUI({combine:true,timeout:10000,base:"include/javascript/yui3/build/",comboBase:"index.php?entryPoint=getYUIComboFile&"}).use("node","anim",function(Y){var module=Y.get('#globalLinksModule');if(Get_Cookie('globalLinksOpen')&&Get_Cookie('globalLinksOpen')=='true'){var content=module.query('#globalLinks').plug(Y.Plugin.NodeFX,{from:{width:0},to:{width:function(node){return node.get('scrollWidth');}},easing:Y.Easing.easeOut,duration:0.5});module.toggleClass('yui-closed');}else{var content=module.query('#globalLinks').plug(Y.Plugin.NodeFX,{from:{width:function(node){return node.get('scrollWidth');}},to:{width:0},easing:Y.Easing.backIn,duration:0.5});}
var onClick=function(e){module.toggleClass('yui-closed');content.fx.set('reverse',!content.fx.get('reverse'));content.fx.run();if(document.getElementById('globalLinksModule').className=='yui-closed')
Set_Cookie('globalLinksOpen','true',30,'/','','');else
Set_Cookie('globalLinksOpen','false',30,'/','','');};var control=Y.Node.create('<a title="show/hide content" class="yui-toggle"><em>toggle</em></a>');module.query('#globalLinksCtrl').appendChild(control);control.on('click',onClick);});});YAHOO.util.Event.onContentReady("moduleList",function()
{function onSubmenuBeforeShow(p_sType,p_sArgs)
{var oElement,oBd,oShadow,oShadowBody,oShadowBodyCenter,oVR,oLastViewContainer,parentIndex,oItem,oSubmenu,data,aItems;parentIndex=this.parent.index;if(this.parent){oElement=this.element;oBd=oElement.firstChild;oShadow=oElement.lastChild;oLastViewContainer=document.getElementById("lastViewedContainer"+oElement.id);var moduleName=oElement.id;var groupName=oElement.parentNode.parentNode.parentNode.id.replace('themeTabGroup_','');moduleName=moduleName.replace(groupName+'_','');var handleSuccess=function(o){if(o.responseText!==undefined){data=YAHOO.lang.JSON.parse(o.responseText);aItems=oMenuBar.getItems();oItem=aItems[parentIndex];oSubmenu=oItem.cfg.getProperty("submenu");oSubmenu.removeItem(1,1);oSubmenu.addItems(data,1);oShadowBody=oShadow.firstChild;oShadowBody.style.height=(oShadow.offsetHeight)+"px";oShadowBodyCenter=oShadowBody.childNodes[1];oShadowBodyCenter.style.height=(oShadow.offsetHeight-17)+"px";oVR=oShadow.previousSibling;oVR.style.height=(oShadow.offsetHeight-35)+"px";}}
var handleFailure=function(o){if(o.responseText!==undefined){oLastViewContainer.innerHTML="Failed to load menu";}}
var callback={success:handleSuccess,failure:handleFailure,argument:{foo:"foo",bar:"bar"}};var sUrl="index.php?module="+moduleName+"&action=modulelistmenu";if(oLastViewContainer&&oLastViewContainer.lastChild.firstChild.innerHTML=="&nbsp;"){var request=YAHOO.util.Connect.asyncRequest('GET',sUrl,callback);}}}
function onSubmenuShow(p_sType,p_sArgs){var oElement,oShadow,oShadowBody,oShadowBodyCenter,oBd,oVR;if(this.parent){var parentEl=document.getElementById(this.parent.id),parentClassName=parentEl.className;var patt1=/current/gi,matches=parentClassName.match(patt1);oElement=this.element;var newLeft=oElement.offsetLeft+offsetPadding+((matches)?7:0);oElement.style.left=newLeft+"px";oBd=oElement.firstChild;oShadow=oElement.lastChild;if(oShadow.innerHTML==""){oShadowBody=document.createElement("div");oShadowBody.setAttribute("class","shadow-bd");oShadowBody.setAttribute("className","shadow-bd");oShadowBodyMl=document.createElement("div");oShadowBodyMl.setAttribute("class","ml");oShadowBodyMl.setAttribute("className","ml");oShadowBody.appendChild(oShadowBodyMl);oShadowBodyCenter=document.createElement("div");oShadowBodyCenter.setAttribute("class","bd-center");oShadowBodyCenter.setAttribute("className","bd-center");oShadowBodyCenter.style.backgroundColor="#fff";oShadowBody.appendChild(oShadowBodyCenter);oShadowBodyMr=document.createElement("div");oShadowBodyMr.setAttribute("class","mr");oShadowBodyMr.setAttribute("className","mr");oShadowBody.appendChild(oShadowBodyMr);oShadow.appendChild(oShadowBody);oShadowFt=document.createElement("div");oShadowFt.setAttribute("class","ft");oShadowFt.setAttribute("className","ft");oShadowFtBl=document.createElement("div");oShadowFtBl.setAttribute("class","bl");oShadowFtBl.setAttribute("className","bl");oShadowFt.appendChild(oShadowFtBl);oShadowFtCenter=document.createElement("div");oShadowFtCenter.setAttribute("class","ft-center");oShadowFtCenter.setAttribute("className","ft-center");oShadowFt.appendChild(oShadowFtCenter);oShadowFtBr=document.createElement("div");oShadowFtBr.setAttribute("class","br");oShadowFtBr.setAttribute("className","br");oShadowFt.appendChild(oShadowFtBr);oShadow.appendChild(oShadowFt);}else{oShadowBody=oShadow.firstChild;}
oShadowBody.style.height=(oShadow.offsetHeight)+"px";oShadowBodyCenter=oShadowBody.childNodes[1];oShadowBodyCenter.style.height=(oShadow.offsetHeight-17)+"px";oShadowBodyCenter.style.width=(oBd.offsetWidth)+"px";if(oElement.id.substr(0,4)!="More"&&oElement.id.substring(0,8)!="TabGroup"){if(oShadow.previousSibling.className!="vr"){oVR=document.createElement("div");oVR.setAttribute("class","vr");oVR.setAttribute("className","vr");oElement.insertBefore(oVR,oShadow);oVR.style.height=(oBd.offsetHeight-35)+"px";oVR.style.top=(oBd.offsetTop+25)+"px";oVR.style.left=((oBd.offsetWidth/2)-10)+"px";}}}}
var nodes=YAHOO.util.Selector.query('#moduleList>div');allMenuBars=new Object();for(var i=0;i<nodes.length;i++){var currMenuBar=new YAHOO.widget.MenuBar(nodes[i].id,{autosubmenudisplay:true,visible:false,hidedelay:100750,lazyload:true,submenualignment:["tr","br"]});currMenuBar.subscribe("beforeShow",onSubmenuBeforeShow);currMenuBar.subscribe("show",onSubmenuShow);currMenuBar.render();allMenuBars[nodes[i].id.substr(nodes[i].id.indexOf('_')+1)]=currMenuBar;if(typeof YAHOO.util.Dom.getChildren(nodes[i])=='object'&&YAHOO.util.Dom.getChildren(nodes[i]).shift().style.display!='none')
{oMenuBar=currMenuBar;}}
if(SUGAR.util.isTouchScreen()){var nodes=YAHOO.util.Selector.query('#moduleList a.yuimenubaritemlabel-hassubmenu');YAHOO.util.Dom.batch(nodes,function(el,o){el.href='#';});}});YAHOO.util.Event.onContentReady("tabListContainer",function()
{YUI({combine:true,timeout:10000,base:"include/javascript/yui3/build/",comboBase:"index.php?entryPoint=getYUIComboFile&"}).use("anim",function(Y)
{var content=Y.get('#content');var addPage=Y.get('#add_page');var tabListContainer=Y.get('#tabListContainer');var tabList=Y.get('#tabList');var dashletCtrlsElem=Y.get('#dashletCtrls');var contentWidth=content.get('offsetWidth');var dashletCtrlsWidth=dashletCtrlsElem.get('offsetWidth')+10;var addPageWidth=addPage.get('offsetWidth')+2;var tabListContainerWidth=tabListContainer.get('offsetWidth');var tabListWidthElem=tabList.get('offsetWidth');var maxWidth=(contentWidth-3)-(dashletCtrlsWidth+addPageWidth+2);var tabListChildren=tabList.get('children');var tabListWidth=0;for(i=0;i<tabListChildren.size();i++){if(Y.UA.ie==7){tabListWidth+=tabListChildren.item(i).get('offsetWidth')+2;}else{tabListWidth+=tabListChildren.item(i).get('offsetWidth');}}
if(tabListWidth>maxWidth){tabListContainer.setStyle('width',maxWidth+"px");tabList.setStyle('width',tabListWidth+"px");tabListContainer.addClass('active');}
var node=Y.get('#tabListContainer .yui-bd');var anim=new Y.Anim({node:node,to:{scroll:function(node){return[node.get('scrollLeft')+node.get('offsetWidth'),0]}},easing:Y.Easing.easeOut});var onClick=function(e){var y=node.get('offsetWidth');if(e.currentTarget.hasClass('yui-scrollup')){y=0-y;}
anim.set('to',{scroll:[y+node.get('scrollLeft'),0]});anim.run();};Y.all('#tabListContainer .yui-hd a').on('click',onClick);});});function sugar_theme_gm_switch(groupName){document.getElementById('themeTabGroup_'+sugar_theme_gm_current).style.display='none';sugar_theme_gm_current=groupName;YAHOO.util.Connect.asyncRequest('POST','index.php?module=Users&action=ChangeGroupTab&to_pdf=true',false,'newGroup='+groupName);document.getElementById('themeTabGroup_'+groupName).style.display='block';oMenuBar=allMenuBars[groupName];}
offsetPadding=-14;var rtl=true;