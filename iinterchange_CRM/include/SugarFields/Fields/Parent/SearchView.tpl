{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<select name='{{$vardef.type_name}}' tabindex="{{$tabindex}}" id='{{$vardef.type_name}}' title='{{$vardef.help}}' 
onchange='document.{{$form_name}}.{{sugarvar key='name'}}.value="";document.{{$form_name}}.parent_id.value=""; 
	{{$vardef.type_name}}changeQS(); checkParentType(document.{{$form_name}}.parent_type.value, document.{{$form_name}}.btn_{{sugarvar key='name'}});'>
{html_options options={{sugarvar key='options' string=true}} selected=$fields.parent_type.value}
</select>
{{if $displayParams.split}}
<br>
{{/if}}
{if empty({{sugarvar key='options' string=true}}[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent value = 1}
{/if}
<input type="text" name="{{sugarvar key='name'}}" id="{{sugarvar key='name'}}" class="sqsEnabled" tabindex="{{$tabindex}}" size="{{$displayParams.size}}" value="{{sugarvar key='value'}}" autocomplete="off"><input type="hidden" name="{{$vardef.id_name}}" id="{{$vardef.id_name}}"  {if $keepParent}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{{sugarvar key='name'}}" tabindex="{{$tabindex}}" title="{$APP.LBL_SELECT_BUTTON_TITLE}" 
	   accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button{{if empty($displayParams.selectOnly)}} firstChild{{/if}}" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
	   onclick='open_popup(document.{{$form_name}}.parent_type.value, 600, 400, "", true, false, {{$displayParams.popupData}}, "single", true);'><img src="{sugar_getimagepath file="id-ff-select.png"}"></button>
{{if empty($displayParams.selectOnly)}}
<button type="button" name="btn_clr_{{sugarvar key='name'}}" tabindex="{{$tabindex}}" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{{sugarvar key='name'}}.value = ''; this.form.{{sugarvar key='id_name'}}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
{{/if}}
</span>
<script type="text/javascript">
function {{$vardef.type_name}}changeQS() {ldelim}
	new_module = document.forms["{{$form_name}}"].elements["parent_type"].value;
	if(typeof(disabledModules[new_module]) != 'undefined') {ldelim}
		sqs_objects["{{$form_name}}_{{sugarvar key='name'}}"]["disable"] = true;
		document.forms["{{$form_name}}"].elements["{{sugarvar key='name'}}"].readOnly = true;
	{rdelim} else {ldelim}
		sqs_objects["{{$form_name}}_{{sugarvar key='name'}}"]["disable"] = false;
		document.forms["{{$form_name}}"].elements["{{sugarvar key='name'}}"].readOnly = false;
	{rdelim}	
	sqs_objects["{{$form_name}}_{{sugarvar key='name'}}"]["modules"] = new Array(new_module);
    enableQS(false);
{rdelim}
</script>
{literal}
{{$displayParams.disabled_parent_types}}
{/literal}