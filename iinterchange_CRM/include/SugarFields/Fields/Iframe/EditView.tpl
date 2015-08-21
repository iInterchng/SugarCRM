{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{if !$vardef.gen}}
	{if !empty({{sugarvar key='value' string=true}})}
	<input type='text' name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' 
	   id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' size='{{$displayParams.size|default:30}}' 
	   {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{{sugarvar key='value'}}' title='{{$vardef.help}}' tabindex='{{$tabindex}}'>
	{else}
	<input type='text' name='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' 
	   id='{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}' size='{{$displayParams.size|default:30}}' 
	   {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} 
	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} title='{{$vardef.help}}' tabindex='{{$tabindex}}'>
	{/if}
{{/if}}