{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
*}
{literal}<script type="text/javascript" language="Javascript">
if(typeof(tinyMCE) == 'undefined')
  document.write("<scr"+"ipt type=\"text/javascript\" src=\"include/javascript/tiny_mce/tiny_mce.js\"></scr"+"ipt>");
</script>{/literal}
{if empty({{sugarvar key='value' string=true}})}
{assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
{assign var="value" value={{sugarvar key='value' string=true}} }
{/if} 
{{if $displayParams.maxlength}}
{literal} 
{{$tiny}}
{/literal}<textarea id="{{sugarvar key='name'}}" name="{{sugarvar key='name'}}" maxlength="{{$displayParams.maxlength}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" title='{{$vardef.help}}' tabindex="{{$tabindex}}" {{$displayParams.field}}>{$value}</textarea>
{{else}}
{literal} 
{{$tiny}}
{/literal}<textarea id="{{sugarvar key='name'}}" name="{{sugarvar key='name'}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" title='{{$vardef.help}}' tabindex="{{$tabindex}}" {{$displayParams.field}}>{$value}</textarea>
{{/if}}
<br />
{literal}
<script type="text/javascript" language="Javascript">
  tinyMCE.execCommand('mceAddControl',false,"{/literal}{{sugarvar key='name'}}{literal}");
  </script>
{/literal}