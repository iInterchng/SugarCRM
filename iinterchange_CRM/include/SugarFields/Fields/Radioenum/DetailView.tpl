{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}">
{ {{sugarvar  key='options' string=true}}[{{sugarvar key='value' string=true}}]}
</span>
{{if !empty($displayParams.enableConnectors)}}
{if !empty({{sugarvar  key='options' string=true}}[{{sugarvar key='value' string=true}}])}
{{sugarvar_connector view='DetailView'}}
{/if}
{{/if}}