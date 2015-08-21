{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<select name='parent_type' tabindex="{{$tabindex}}" id='parent_type' title='{{$vardef.help}}' 
onchange='document.{$form_name}.{{sugarvar key='name'}}.value="";document.{$form_name}.parent_id.value=""; {{sugarvar key='name'}}changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{{sugarvar key='name'}});'>
{html_options options={{sugarvar key='options' string=true}} selected=$fields.parent_type.value sortoptions=true}
</select>

{{if $displayParams.split}}
<br>
{{/if}}
{if empty({{sugarvar key='options' string=true}}[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{{sugarvar key='name'}}" id="{{sugarvar key='name'}}" class="sqsEnabled" tabindex="{{$tabindex}}" 
    size="{{$displayParams.size}}" {if $keepParent}value="{{sugarvar key='value'}}"{/if} autocomplete="off"><input type="hidden" name="{{sugarvar memberName='vardef.id_name' key='name'}}" id="{{sugarvar memberName='vardef.id_name' key='name'}}"  
{if $keepParent}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{{sugarvar key='name'}}" id="btn_{{sugarvar key='name'}}" tabindex="{{$tabindex}}" 
title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {{$displayParams.popupData}}, "single", true);' {{if isset($displayParams.javascript.btn)}}{{$displayParams.javascript.btn}}{{/if}}><img src="{sugar_getimagepath file="id-ff-select.png"}"></button>{{if empty($displayParams.selectOnly)}}<button type="button" name="btn_clr_{{sugarvar key='name'}}" id="btn_clr_{{sugarvar key='name'}}" tabindex="{{$tabindex}}" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{{sugarvar key='name'}}.value = ''; this.form.{{sugarvar memberName='vardef.id_name' key='name'}}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" {{if isset($displayParams.javascript.btn_clear)}}{{$displayParams.javascript.btn_clear}}{{/if}}><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{{/if}}

<script type="text/javascript">
function {{sugarvar key='name'}}changeQS() {literal}{
{/literal}
	new_module = document.forms["{$form_name}"].elements["parent_type"].value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = true;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = true;
{literal}
	} else {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = false;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = false;
{literal}
	}
{/literal}
	sqs_objects["{$form_name}_parent_name"]["modules"] = new Array(new_module);
	if(typeof QSProcessedFieldsArray != 'undefined')
{literal}
    {
{/literal}
	   QSProcessedFieldsArray["{$form_name}_parent_name"] = false;
{literal}
	}	
{/literal}    
    enableQS(false);
{literal}
}
{/literal}
</script>
{literal}
{{$displayParams.disabled_parent_types}}
{/literal}
{literal}
{{$quickSearchCode}}
{/literal}