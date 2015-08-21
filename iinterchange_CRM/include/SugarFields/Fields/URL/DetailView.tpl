{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{capture name=getLink assign=link}{{sugarvar key='value'}}{/capture}
{{if $vardef.gen}}
{sugar_replace_vars subject='{{$vardef.default|replace:'{':'['|replace:'}':']'}}' assign='link'}
{{/if}}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{{sugarvar key='name'}}">
<a href='{$link|to_url}' {{if $displayParams.link_target}}target='{{$displayParams.link_target}}'{{elseif $vardef.link_target}}target='{{$vardef.link_target}}'{{/if}}>
{{if !empty($displayParams.title)}}{sugar_translate label='{{$displayParams.title}}' module=$module}{{else}}{$link}{{/if}}
</a>
</span>
{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}}
{{/if}}
{/if}
