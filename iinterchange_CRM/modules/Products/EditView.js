/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
function get_popup_product()
{open_popup('ProductTemplates','600','400','&form=EditView&tree=ProductsProd','true','false',{"call_back_function":"set_product_type_return","form_name":this.form_id,"field_to_name_array":{"id":"product_template_id","name":"name"}});}
function set_product_type_return(popup_reply_data)
{var form_name=popup_reply_data.form_name;var name_to_value_array=popup_reply_data.name_to_value_array;if(typeof(name_to_value_array['product_template_id'])!='undefined'){var post_data={"module":"ProductTemplates","record":name_to_value_array['product_template_id'],"method":"retrieve","id":name_to_value_array['product_template_id']};var global_rpcClient=new SugarRPCClient();result=global_rpcClient.call_method('retrieve',post_data,true);if(result.status=='success'){for(var the_key in result.record.fields)
{if(typeof(window.document.forms[form_name].elements[the_key])!='undefined'){eval('var the_value=result.record.fields.'+the_key);if(the_key=='cost_price'||the_key=='list_price'||the_key=='discount_price')
{the_value=formatNumber(the_value,num_grp_sep,dec_sep,'2','2');}
window.document.forms[form_name].elements[the_key].value=the_value;}}}}}