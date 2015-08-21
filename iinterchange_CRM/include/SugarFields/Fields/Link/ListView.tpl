{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{capture name=getLink assign=link}{sugar_fetch object=$parentFieldArray key=$col}{/capture}
<a href="{$link|to_url}" {if $displayParams.link_target}target='{$displayParams.link_target}'{elseif $vardef.link_target}target='{$vardef.link_target}'{/if}>{$link}</a>
