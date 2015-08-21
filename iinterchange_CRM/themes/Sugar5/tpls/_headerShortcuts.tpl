{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{if count($SHORTCUT_MENU) > 0 && $MODULE_TAB != 'Home'}
<div id="shortcuts" class="headerList">
    <b style="white-space:nowrap;">{$APP.LBL_LINK_ACTIONS}:&nbsp;&nbsp;</b>
    <span>
    {foreach from=$SHORTCUT_MENU item=item}
    <span style="white-space:nowrap;">
        <a href="{$item.URL}">{$item.IMAGE}&nbsp;<span>{$item.LABEL}</span></a>
    </span>
    {/foreach}
    </span>
</div>
{/if}
