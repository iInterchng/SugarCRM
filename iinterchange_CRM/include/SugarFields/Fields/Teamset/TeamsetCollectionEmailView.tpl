
	        	{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Collection/SugarFieldCollection.js"}'></script>
<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Teamset/Teamset.js"}'></script>
<script type="text/javascript" src='{sugar_getjspath file="include/JSON.js"}'></script>
<script type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    collection["{$displayParams.formName}_{$vardef.name}"] = new SUGAR.collection('{$displayParams.formName}', '{$vardef.name}', '{$module}', '{$displayParams.popupData}');
	{if $hideShowHideButton}
		collection["{$displayParams.formName}_{$vardef.name}"].show_more_image = false;
	{/if}
</script>
<input type="hidden" id="update_fields_{$vardef.name}_collection" name="update_fields_{$vardef.name}_collection" value="">
<input type="hidden" id="{$vardef.name}_new_on_update" name="{$vardef.name}_new_on_update" value="{$displayParams.new_on_update}">
<input type="hidden" id="{$vardef.name}_allow_update" name="{$vardef.name}_allow_update" value="{$displayParams.allow_update}">
<input type="hidden" id="{$vardef.name}_allow_new" name="{$vardef.name}_allow_new" value="{$displayParams.allow_new}">
<input type="hidden" id="{$vardef.name}" name="{$vardef.name}" value="{$vardef.name}">

{if !empty($vardef.required)}
<input type="hidden" id="{$vardef.name}_field" name="{$vardef.name}_field" value="{$vardef.name}_table">
{/if}
<table name='{$displayParams.formName}_{$vardef.name}_table' id='{$displayParams.formName}_{$vardef.name}_table' style="border-spacing: 0pt;">
    <!-- BEGIN Labels Line -->
    <tr id="lineLabel_{$vardef.name}" name="lineLabel_{$vardef.name}">
        <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="{sugar_translate label='LBL_SELECT_BUTTON_LABEL'}" onclick='javascript:open_popup_for_email_teams("Teams", 600, 400, "", true, false, {literal}{"call_back_function":"set_return_teams_for_editview","form_name": {/literal} "{$displayParams.formName}","field_name":"{$vardef.name}",{literal}"field_to_name_array":{"id":"team_id","name":"team_name"}}{/literal}, "{$CUSTOM_METHOD}", "{$USER_ID}", "MULTISELECT", true); if(collection["{$displayParams.formName}_{$vardef.name}"].more_status)collection["{$displayParams.formName}_{$vardef.name}"].js_more();'>
            <img src="{sugar_getimagepath file="id-ff-select.png"}">
            </button><button type="button" class="button lastChild" value="{sugar_translate label='LBL_ADD_BUTTON'}" onclick="javascript:collection['{$displayParams.formName}_{$vardef.name}'].add(); if(collection['{$displayParams.formName}_{$vardef.name}'].more_status)collection['{$displayParams.formName}_{$vardef.name}'].js_more();">
            <img src="{sugar_getimagepath file="id-ff-add.png"}"></button>
			</span>
        </td>        
        <td align='center' id="lineLabel_{$vardef.name}_primary" rowspan='1' scope='row' style='white-space: nowrap; word-wrap: normal;'>
            {sugar_translate label='LBL_COLLECTION_PRIMARY'}
        </td>
<!-- BEGIN Add and collapse -->
        <td rowspan='1' scope='row' style='white-space:nowrap; word-wrap:normal;'>
            &nbsp;
            {if !$hideShowHideButton}
            <span onclick="javascript:collection['{$displayParams.formName}_{$vardef.name}'].js_more();" id='more_{$displayParams.formName}_{$vardef.name}' {if empty($values.secondaries)}style="display:none; text-decoration:none;"{else}style="text-decoration:none;"{/if}>
            <input id="arrow_{$vardef.name}" name="arrow_{$vardef.name}" type="hidden" value="show">
            <img id='more_img_{$displayParams.formName}_{$vardef.name}' height="8" border="0" width="8" absmiddle="" alt="Hide/Show" src="{sugar_getimagepath file='advanced_search.gif'}"/>
            <span id="more_div_{$displayParams.formName}_{$vardef.name}" {if empty($values.secondaries)}style="display:none"{/if}>{sugar_translate label='LBL_SHOW'}</span>
        	</span>
        	{/if}
        </td>
<!-- END Add and collapse -->
        <td width='100%'>
        &nbsp;
        </td>
    </tr>
<!-- END Labels Line -->
    <tr id="lineFields_{$displayParams.formName}_{$vardef.name}_0">
        <td valign='top'>
            <span id='{$displayParams.formName}_{$vardef.name}_input_div_0' name='teamset_div'>          
            <input type="text" name="{$vardef.name}_collection_0" id="{$vardef.name}_collection_0" class="sqsEnabled" tabindex="{$tabindex}" size="{$displayParams.size}" value="" title='{$vardef.help}' autocomplete="off" {$displayParams.readOnly} {$displayParams.field}>
            <input type="hidden" name="id_{$vardef.name}_collection_0" id="id_{$vardef.name}_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign='top' align='left' nowrap>
            &nbsp;
            <img id="remove_{$vardef.name}_collection_0" name="remove_{$vardef.name}_collection_0" src="{sugar_getimagepath file='id-ff-remove.png'}" onclick="collection['{$displayParams.formName}_{$vardef.name}'].remove(0);"/>
            {if !empty($displayParams.allowNewValue) }
            <input type="hidden" name="allow_new_value_{$vardef.name}_collection_0" id="allow_new_value_{$vardef.name}_collection_0" value="true">
            {/if}
        </td>
        <td valign='top' align='center'>
            <span id='{$displayParams.formName}_{$vardef.name}_radio_div_0'>
            &nbsp;
            <input id="primary_{$vardef.name}_collection_0" name="primary_{$vardef.name}_collection" type="radio" class="radio" {if $displayParams.primaryChecked}checked="checked"{/if} value="0" onclick="collection['{$displayParams.formName}_{$vardef.name}'].changePrimary(true);"/>
            </span>
        </td>
        <td>
        &nbsp;
        </td>
<!-- END Remove and Radio -->
    </tr>
</table>
{if $includeMassUpdateField}
    <table style="border-spacing: 0pt;">
        <tr>
    		<td nowrap>
                <div id='{$displayParams.formName}_{$vardef.name}_mass_operation_div'>
            	<input type="radio" class="radio" name="{$vardef.name}_type" value="replace" checked> {sugar_translate label='LBL_REPLACE_BUTTON'}
    			<input type="radio" class="radio" name="{$vardef.name}_type" value="add"> {sugar_translate label='LBL_ADD_BUTTON'}
                </div>	
    		</td>
    	</tr>    
    </table>
{/if}

<script type="text/javascript">
	if(collection["{$displayParams.formName}_{$vardef.name}"] && collection["{$displayParams.formName}_{$vardef.name}"].secondaries_values.length == 0) {ldelim}
		{if !empty($values.secondaries)}
			{foreach from=$values.secondaries item=secondary_field}   
			var temp_array = new Array();  
			temp_array['name'] = '{$secondary_field.name}';
			temp_array['id'] = '{$secondary_field.id}';
			collection["{$displayParams.formName}_{$vardef.name}"].secondaries_values.push(temp_array);
			{/foreach}
		{/if}
	    collection_field = collection["{$displayParams.formName}_{$vardef.name}"];
		collection_field.add_secondaries(collection_field.secondaries_values);	
	{rdelim}

 	document.forms["{$displayParams.formName}"].elements["id_{$vardef.name}_collection_0"].value = "{$values.primary.id}";
 	document.forms["{$displayParams.formName}"].elements["{$vardef.name}_collection_0"].value = "{$values.primary.name}";
  
    {if isset($displayParams.arrow) && $displayParams.arrow == 'show'}
        setTimeout('call_js_more(collection_field)',1000);
    {/if}
    
    {literal}
	function call_js_more(c) {
	    c.js_more();
	}    
	
	function open_popup_for_email_teams(module_name, width, height, initial_filter, close_popup, hide_clear_button, popup_request_data, custom_method, user_id, popup_mode, create, metadata) {
		// set the variables that the popup will pull from
		window.document.popup_request_data = popup_request_data;
		window.document.close_popup = close_popup;
		//globally changing width and height of standard pop up window from 600 x 400 to 800 x 800 
		width = (width == 600) ? 800 : width;
		height = (height == 400) ? 800 : height;
		// launch the popup
		URL = 'index.php?'
			+ 'module=' + module_name
			+ '&action=Popup';
		
		if(initial_filter != '')
		{
			URL += '&query=true' + initial_filter;
		}
		
		if(hide_clear_button)
		{
			URL += '&hide_clear_button=true';
		}
		
		windowName = 'popup_window';
		
		windowFeatures = 'width=' + width
			+ ',height=' + height
			+ ',resizable=1,scrollbars=1';
	
		if (popup_mode == '' && popup_mode == 'undefined') {
			popup_mode='single';		
		}
		URL+='&mode='+popup_mode;
		if (create == '' && create == 'undefined') {
			create = 'false';
		}
		URL+='&create='+create;
	
		if (metadata != '' && metadata != 'undefined') {
			URL+='&metadata='+metadata;	
		}
	
	    if(custom_method != '') {
	    	URL+='&custom_method=' + custom_method;
		}
		
		if(user_id != '') {
		    URL+='&user_id=' + user_id;
		}
		
		win = window.open(URL, windowName, windowFeatures);
	
		if(window.focus)
		{
			// put the focus on the popup if the browser supports the focus() method
			win.focus();
		}
	
		return win;	
	}
	{/literal}
</script>
{$quickSearchCode}