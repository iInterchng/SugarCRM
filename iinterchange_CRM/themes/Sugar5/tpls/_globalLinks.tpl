{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div id="globalLinks">
    <ul>
    {foreach from=$GCLS item=GCL name=gcl}
    <li>
    {if !$smarty.foreach.gcl.first}<span>|</span>{/if}
    <a href="{$GCL.URL}"{if !empty($GCL.ONCLICK)} onclick="{$GCL.ONCLICK}"{/if}>{$GCL.LABEL}</a>
    {foreach from=$GCL.SUBMENU item=GCL_SUBMENU name=gcl_submenu}
    {if $smarty.foreach.gcl_submenu.first}
    <img src='{sugar_getimagepath file="menuarrow.gif"}' alt='' /><br />
    <ul class="cssmenu">
    {/if}
    <li><a href="{$GCL_SUBMENU.URL}"{if !empty($GCL_SUBMENU.ONCLICK)} onclick="{$GCL_SUBMENU.ONCLICK}"{/if}>{$GCL_SUBMENU.LABEL}</a></li>
    {if $smarty.foreach.gcl_submenu.last}
    </ul>
    {/if}
    {/foreach}
    </li>
    {/foreach}
    </ul>
</div>
