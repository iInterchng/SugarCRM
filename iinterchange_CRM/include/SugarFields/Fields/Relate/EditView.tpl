{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
    {{assign var=idname value=$displayParams.idName}}
{{/if}}
<input type="text" name="{{$idname}}" class={{if empty($displayParams.class) }}"sqsEnabled"{{else}} "{{$displayParams.class}}" {{/if}} tabindex="{{$tabindex}}" id="{{$idname}}" size="{{$displayParams.size}}" value="{{sugarvar key='value'}}" title='{{$vardef.help}}' autocomplete="off" {{$displayParams.readOnly}} {{$displayParams.field}}>
<input type="hidden" name="{{if !empty($displayParams.idName)}}{{$idname}}_{{/if}}{{sugarvar key='id_name'}}" 
	id="{{if !empty($displayParams.idName)}}{{$idname}}_{{/if}}{{sugarvar key='id_name'}}" 
	{{if !empty($vardef.id_name)}}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{{/if}}>
{{if empty($displayParams.hideButtons) }}
<span class="id-ff multiple">
<button type="button" name="btn_{{$idname}}" id="btn_{{$idname}}" tabindex="{{$tabindex}}" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
    "{{sugarvar key='module'}}", 
	600, 
	400, 
	"{{$displayParams.initial_filter}}", 
	true, 
	false, 
	{{$displayParams.popupData}}, 
	"single", 
	true
);' {{if isset($displayParams.javascript.btn)}}{{$displayParams.javascript.btn}}{{/if}}><img src="{sugar_getimagepath file="id-ff-select.png"}"></button>{{if empty($displayParams.selectOnly) }}<button type="button" name="btn_clr_{{$idname}}" id="btn_clr_{{$idname}}" tabindex="{{$tabindex}}" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{{$idname}}.value = ''; this.form.{{if !empty($displayParams.idName)}}{{$displayParams.idName}}_{{/if}}{{sugarvar key='id_name'}}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" {{if isset($displayParams.javascript.btn_clear)}}{{$displayParams.javascript.btn_clear}}{{/if}}><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
{{/if}}
</span>
{{/if}}
{{if !empty($displayParams.allowNewValue) }}
<input type="hidden" name="{{$idname}}_allow_new_value" id="{{$idname}}_allow_new_value" value="true">
{{/if}}
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{{$idname}}"] = false;
	

enableQS(false);
-->	
</script>