/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




var appel;
function generatepwd(id)
{
    callback = {
        success: function(o)
        {
            checkok=o.responseText;
            if (checkok.charAt(0) != '1')
                YAHOO.SUGAR.MessageBox.show({title: SUGAR.language.get("Users", "LBL_CANNOT_SEND_PASSWORD"), msg: checkok});
            else
                YAHOO.SUGAR.MessageBox.show({title: SUGAR.language.get("Users", "LBL_PASSWORD_SENT"), msg: SUGAR.language.get("Users", "LBL_NEW_USER_PASSWORD_2")} );
        },
        failure: function(o)
        {
            YAHOO.SUGAR.MessageBox.show({title: SUGAR.language.get("Users", "LBL_CANNOT_SEND_PASSWORD"), msg: SUGAR.language.get("app_strings", "LBL_AJAX_FAILURE")});
        }
    }
	PostData = '&to_pdf=1&module=Users&action=GeneratePassword&userId='+id;
	YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, PostData);	
}

function set_return_user_and_save(popup_reply_data)
{
	var form_name = popup_reply_data.form_name;
	var name_to_value_array;
	if(popup_reply_data.selection_list)
	{
		name_to_value_array = popup_reply_data.selection_list;
	}else if(popup_reply_data.teams){
		name_to_value_array = new Array();
		for (var the_key in popup_reply_data.teams){
			name_to_value_array.push(popup_reply_data.teams[the_key].team_id);
		}
	}else
	{
		name_to_value_array = popup_reply_data.name_to_value_array;
	}
	
	var query_array =  new Array();
	for (var the_key in name_to_value_array)
	{
		if(the_key == 'toJSON')
		{
			/* just ignore */
		}
		else
		{
			query_array.push("record[]="+name_to_value_array[the_key]);
		}
	}
	query_array.push('user_id='+get_user_id(form_name));
	query_array.push('action=AddUserToTeam');
	query_array.push('module=Teams');
	var query_string = query_array.join('&');
	
	var returnstuff = http_fetch_sync('index.php',query_string);
	
	document.location.reload(true);
}

function get_user_id(form_name)
{
	return window.document.forms[form_name].elements['user_id'].value;
}

function user_status_display(field){
	switch (field){
	
		case 'RegularUser':
		    document.getElementById("calendar_options").style.display="";
			document.getElementById("edit_tabs").style.display="";
		    document.getElementById("locale").style.display="";
			document.getElementById("settings").style.display="";
			document.getElementById("information").style.display="";
			break;
			
		case 'GroupUser':
		    document.getElementById("calendar_options").style.display="none";
			document.getElementById("edit_tabs").style.display="none";
		    document.getElementById("locale").style.display="none";
			document.getElementById("settings").style.display="none";
			document.getElementById("information").style.display="none";
			if(document.getElementById("pdf")) {
				document.getElementById("pdf").style.display="none";
			}
            document.getElementById("email_options_link_type").style.display="none";
	    break;

		case 'PortalUser':
		    document.getElementById("calendar_options").style.display="none";
			document.getElementById("edit_tabs").style.display="none";
		    document.getElementById("locale").style.display="none";
			document.getElementById("settings").style.display="none";
			document.getElementById("information").style.display="none";
			if(document.getElementById("pdf")) {
				document.getElementById("pdf").style.display="none";
			}
            document.getElementById("email_options_link_type").style.display="none";
	    break;
	}
}
