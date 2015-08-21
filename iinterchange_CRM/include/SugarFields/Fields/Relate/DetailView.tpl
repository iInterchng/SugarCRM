{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{if !$nolink && !empty($vardef.id_name)}} 
{if !empty({{sugarvar memberName='vardef.id_name' key='value' string='true'}})}<a href="index.php?module={{$vardef.module}}&action=DetailView&record={{sugarvar  memberName='vardef.id_name' key='value'}}">{/if}
{{/if}}
<span id="{{$vardef.id_name}}" class="sugar_field">{{sugarvar key='value'}}</span>
{{if !$nolink && !empty($vardef.id_name)}}
{if !empty({{sugarvar memberName='vardef.id_name' key='value' string='true'}})}</a>{/if}
{{/if}}
{{if !empty($displayParams.enableConnectors) && !empty($vardef.id_name)}}
{if !empty({{sugarvar memberName='vardef.id_name' key='value' string='true'}})}
{{sugarvar_connector view='DetailView'}} 
{/if}
{{/if}}
