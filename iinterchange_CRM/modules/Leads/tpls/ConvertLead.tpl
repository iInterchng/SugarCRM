{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}

<span class="color">{$ERROR}</span>
{{foreach name=section from=$sectionPanels key=label item=panel}}
{{counter name="panelCount" print=false}}
<h4>
<style>
 input[disabled] {ldelim}
    background-color:lightgray;
 {rdelim}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_{{$module}}" id="convert_create_{{$module}}" 
    {if ($def.required && empty($def.select)) || (!empty($def.default_action) && $def.default_action == "create")} value="true" {/if}/>

{{if isset($def.templateMeta.form.hidden)}}
{{foreach from=$def.templateMeta.form.hidden item=field}}
{{$field}}   
{{/foreach}}
{{/if}}
{if !$def.required || !empty($def.select)}
<input class="checkbox" type="checkbox" name="new{{$module}}" id="new{{$module}}" onclick="toggleDisplay('create{{$module}}');{{if !empty($def.select)}}toggle{{$module}}Select();{{/if}}">
<script type="text/javascript">
 {{if !empty($def.select)}}
 toggle{{$module}}Select = function(){ldelim} 
    var inputs = document.getElementById('select{{$module}}').getElementsByTagName('input');
	for(var i in inputs) {ldelim}inputs[i].disabled = !inputs[i].disabled;{rdelim}
	var buttons = document.getElementById('select{{$module}}').getElementsByTagName('button');
    for(var i in buttons) {ldelim}buttons[i].disabled = !buttons[i].disabled;{rdelim}
 {rdelim}
 {{/if}}
 {if !empty($def.default_action) && $def.default_action == "create"}
    YAHOO.util.Event.onContentReady('create{{$module}}', function(){ldelim}
		toggleDisplay('create{{$module}}');
		document.getElementById('new{{$module}}').checked = true;
		{{if !empty($def.select)}}
		toggle{{$module}}Select();
		{{/if}}
	{rdelim});
 {/if}
{/if}
</script>
</td><td>
{sugar_translate label='{{$label}}' module='Leads'}
</td><td>
{{if !empty($def.select)}}
    {sugar_translate label='LNK_SELECT_{{$module|strtoupper}}' module='Leads'}
    {if $def.required }
        <span class="required">{{$APP.LBL_REQUIRED_SYMBOL}}</span>
    {/if}
</td><td id ="select{{$module}}">
{{sugar_field parentFieldArray='contact_def' vardef=$contact_def[$def.select] displayType='EditView' formName=$form_name form_name=$form_name}}
<script>
if (typeof(sqs_objects) == "undefined") sqs_objects = [];
sqs_objects['{{$form_name}}_{{$def.select}}'] = {ldelim}
    form          : '{{$form_name}}',
    method        : 'query',
    modules       : ['{{$module}}'],
    group         : 'or',
    field_list    : ['name', 'id'],
    populate_list : ['{{$def.select}}', '{{$contact_def[$def.select].id_name}}'],
    conditions    : [{ldelim}'name':'name','op':'like','end':'%','value':''{rdelim}],
    required_list : ['{{$contact_def[$def.select].id_name}}'],
    order         : 'name',
    limit         : '10'
{rdelim}
</script>
{{/if}}
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}" id ="create{{$module}}" {if !$def.required || !empty($def.select)}style="display:none"{/if}>
{{assign var='rowCount' value=0}}
{{foreach name=rowIteration from=$panel key=row item=rowData}}
    <tr>
    {{assign var='columnsInRow' value=$rowData|@count}}
    {{assign var='columnsUsed' value=0}}

    {{* Loop through each column and display *}}
    {{counter name="colCount" start=0 print=false assign="colCount"}}

    {{foreach name=colIteration from=$rowData key=col item=colData}}
	    {{counter name="colCount" print=false}}
	    {{if count($rowData) == $colCount}}
	        {{assign var="colCount" value=0}}
	    {{/if}}
        {{if empty($def.templateMeta.labelsOnTop) && empty($colData.field.hideLabel)}}
        <td valign="top" id='{{$colData.field.name}}_label' width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' scope="row">
            {{if isset($colData.field.customLabel)}}
               {{$colData.field.customLabel}}
            {{elseif isset($colData.field.label)}}
               {capture name="label" assign="label"}
               {sugar_translate label='{{$colData.field.label}}' module='{{$module}}'}
               {/capture}
               {$label|strip_semicolon}:
            {{elseif isset($fields[$colData.field.name])}}
               {capture name="label" assign="label"}
               {sugar_translate label='{{$fields[$colData.field.name].vname}}' module='{{$module}}'}
               {/capture}
               {$label|strip_semicolon}:
            {{/if}}
            {{* Show the required symbol if field is required, but override not set.  Or show if override is set *}}
            {{if ($fields[$colData.field.name].required && !isset($colData.field.displayParams.required)) || 
                 (isset($colData.field.displayParams.required) && $colData.field.displayParams.required)}}
                <span class="required">{{$APP.LBL_REQUIRED_SYMBOL}}</span>
            {{/if}}
        </td>
        {{/if}}
        <td valign="top" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' {{if $colData.colspan}}colspan='{{$colData.colspan}}'{{/if}}>
        {{if $fields[$colData.field.name] && !empty($colData.field.fields) }}
            {{foreach from=$colData.field.fields item=subField}}
                {{if $fields[$subField.name]}}
                    {counter name="panelFieldCount" print=false}
                    {{sugar_field parentFieldArray='fields' tabindex=$colData.field.tabindex vardef=$fields[$subField.name] displayType='EditView' displayParams=$subField.displayParams formName=$form_name}}&nbsp;
                {{/if}}
            {{/foreach}}
        {{elseif !empty($colData.field.customCode)}}
            {counter name="panelFieldCount" print=false}
            {{php}}$this->_tpl_vars['colData']['field']['displayParams']['idName'] = $this->_tpl_vars['module'] . $this->_tpl_vars['colData']['field']['name'];{{/php}}
            {{sugar_evalcolumn var=$colData.field.customCode colData=$colData tabindex=$colData.field.tabindex}}
        {{elseif $fields[$colData.field.name]}}
            {counter name="panelFieldCount" print=false}
            {{$colData.displayParams}}
            {{php}}$this->_tpl_vars['colData']['field']['displayParams']['idName'] = $this->_tpl_vars['module'] . $this->_tpl_vars['colData']['field']['name'];{{/php}}
            {{sugar_field parentFieldArray='fields' tabindex=$colData.field.tabindex vardef=$fields[$colData.field.name] displayType='EditView' displayParams=$colData.field.displayParams typeOverride=$colData.field.type formName=$form_name}}
        {{/if}}
        </td>
    {{/foreach}}
    </tr>
{{/foreach}}
</table>
{{/foreach}}