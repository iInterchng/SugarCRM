/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
function set_return_category(name)
{clear_search();document.popup_query_form.category_name.value=name;document.popup_query_form.submit();}
function set_return_product(name)
{clear_search();document.popup_query_form.name.value=name;document.popup_query_form.submit();}
function clear_search()
{document.popup_query_form.category_name.value='';document.popup_query_form.name.value='';document.popup_query_form.type_name.value='';document.popup_query_form.manufacturer_name.value='';}