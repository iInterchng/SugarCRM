{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="{{sugarvar key='name'}}">
{{if empty($displayParams.textonly)}}
{{sugarvar key='value' htmlentitydecode='true'}}
{{else}}
{{sugarvar key='value'}}
{{/if}}
</span>
{{if !empty($displayParams.enableConnectors)}}
{if !empty({{sugarvar key='value'}})}
{{sugarvar_connector view='DetailView'}}
{/if}
{{/if}}