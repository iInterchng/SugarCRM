{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="{{sugarvar key='name'}}">
{{if $vardef.disable_num_format}}
{assign var="value" value={{sugarvar key='value' string=true}} }
{$value}
{{else}}
{sugar_number_format precision=0 var={{sugarvar key='value' stringFormat='false'}}}
{{/if}}
</span>
{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}} 
{{/if}}
