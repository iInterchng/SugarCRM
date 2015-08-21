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
{if !empty($link) && $link != "http://"}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<input type="hidden" class="sugar_field" id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" value="{if $linkStart != 'http://' && $link}http://{/if}{$link}">
<iframe src="{if $linkStart != 'http://' && $link}http://{/if}{$link}" height="{{sugarvar key='height'}}" width="100%"/></iframe>
{/if}
{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}} 
{{/if}}