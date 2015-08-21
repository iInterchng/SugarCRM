/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
var rhandle=new RevisionListHandler();var from_popup_return=false;function document_set_return(popup_reply_data)
{from_popup_return=true;var form_name=popup_reply_data.form_name;var name_to_value_array=popup_reply_data.name_to_value_array;related_doc_id='EMPTY';for(var the_key in name_to_value_array)
{if(the_key=='toJSON')
{}
else
{var displayValue=name_to_value_array[the_key];displayValue=displayValue.replace('&#039;',"'");displayValue=displayValue.replace('&amp;',"&");displayValue=displayValue.replace('&gt;',">");displayValue=displayValue.replace('&lt;',"<");displayValue=displayValue.replace('&quot; ',"\"");if(the_key=='related_doc_id'){related_doc_id=displayValue;}
window.document.forms[form_name].elements[the_key].value=displayValue;}}
related_doc_id=JSON.stringifyNoSecurity(related_doc_id);var conditions=new Array();conditions[conditions.length]={"name":"document_id","op":"starts_with","value":related_doc_id};var query=new Array();var query={"module":"DocumentRevisions","field_list":['id','revision','date_entered'],"conditions":conditions,"order":'date_entered desc'};result=global_rpcClient.call_method('query',query,true);rhandle.display(result);}
function RevisionListHandler(){}
RevisionListHandler.prototype.display=function(result){var names=result['list'];var rev_tag=document.getElementById('related_doc_rev_id');rev_tag.options.length=0;for(i=0;i<names.length;i++){rev_tag.options[i]=new Option(names[i].fields['revision'],names[i].fields['id'],false,false);}
rev_tag.disabled=false;}
function setvalue(source){src=new String(source.value);target=new String(source.form.document_name.value);if(target.length==0)
{lastindex=src.lastIndexOf("/");if(lastindex==-1){lastindex=src.lastIndexOf("\\");}
if(lastindex==-1){source.form.document_name.value=src;}else{source.form.document_name.value=src.substr(++lastindex,src.length);}}}
function toggle_template_type(istemplate){template_type=document.getElementById('template_type');if(istemplate.checked){template_type.disabled=false;}else{template_type.disabled=true;}}