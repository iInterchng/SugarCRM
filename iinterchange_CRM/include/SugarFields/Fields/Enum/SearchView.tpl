{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{capture name=display_size assign=size}}{{$displayParams.size|default:6}}{{/capture}}
{html_options name='{{$vardef.name}}[]' options={{sugarvar key='options' string=true}} size="{{$size}}" style="width: 150px" {{if $size > 1}}multiple="1"{{/if}} selected={{sugarvar key='value' string=true}}}
