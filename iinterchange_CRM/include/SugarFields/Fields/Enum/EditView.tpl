{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}

<select name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}" 
title='{{$vardef.help}}' tabindex="{{$tabindex}}" {{$displayParams.field}} 
{{if isset($displayParams.javascript)}}{{$displayParams.javascript}}{{/if}}>

{if isset({{sugarvar key='value' string=true}}) && {{sugarvar key='value' string=true}} != ''}
{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='value' string=true}}}
{else}
{html_options options={{sugarvar key='options' string=true}} selected={{sugarvar key='default' string=true}}}
{/if}
</select>
