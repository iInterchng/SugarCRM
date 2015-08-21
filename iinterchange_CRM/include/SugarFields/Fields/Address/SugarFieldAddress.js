/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
var elems=new Array("address_street","address_city","address_state","address_postalcode","address_country");var tHasText=false;var syncAddressCheckbox=true;var originalBgColor='#FFFFFF';var Dom=YAHOO.util.Dom;function TestCheckboxReady(id){YAHOO.util.Event.onAvailable(id,this.handleOnAvailable,this);}
TestCheckboxReady.prototype.handleOnAvailable=function(me){for(x in elems){f=fromKey+"_"+elems[x];t=toKey+"_"+elems[x];e1=document.getElementById(t);e2=document.getElementById(f);if(e1!=null&&typeof e1!="undefined"&&e2!=null&&typeof e2!="undefined"){if(!tHasText&&trim(e1.value)!=""){tHasText=true;}
if(e1.value!=e2.value)
{syncAddressCheckbox=false;break;}
originalBgColor=e1.style.backgroundColor;}}
if(tHasText&&syncAddressCheckbox)
{document.getElementById(this.id).checked=true;syncFields(fromKey,toKey);}}
function writeToSyncField(e){fromEl=YAHOO.util.Event.getTarget(e,true);if(typeof fromEl!="undefined"){toEl=document.getElementById(fromEl.id.replace(fromKey,toKey));toEl.value=fromEl.value;}}
function syncFields(fromKey,toKey){for(x in elems){f=fromKey+"_"+elems[x];e2=document.getElementById(f);t=toKey+"_"+elems[x];e1=document.getElementById(t);if(e1!=null&&typeof e1!="undefined"&&e2!=null&&typeof e2!="undefined"){if(!document.getElementById(toKey+'_checkbox').checked){Dom.setStyle(e1,'backgroundColor',originalBgColor);e1.removeAttribute('readOnly');YAHOO.util.Event.removeListener(e2,'keyup');}else{e1.value=e2.value;Dom.setStyle(e1,'backgroundColor','#DCDCDC');e1.setAttribute('readOnly',true);YAHOO.util.Event.addListener(e2,'keyup',writeToSyncField);}}}}