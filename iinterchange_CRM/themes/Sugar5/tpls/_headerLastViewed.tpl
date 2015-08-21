{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div id="lastView" class="headerList">
        <b style="white-space:nowrap;">{$APP.LBL_LAST_VIEWED}:&nbsp;&nbsp;</b>
    <span>
    {foreach from=$recentRecords item=item name=lastViewed}
    <span>
        
        <a title="{$item.item_summary} [{$APP.LBL_ALT_HOT_KEY}{$smarty.foreach.lastViewed.iteration}]" 
            accessKey="{$smarty.foreach.lastViewed.iteration}" 
            href="{sugar_link module=$item.module_name action='DetailView' record=$item.item_id link_only=1}">
            {$item.image}&nbsp;<span>{$item.item_summary_short}</span>
        </a>
    </span>
    {foreachelse}
    {$APP.NTC_NO_ITEMS_DISPLAY}
    {/foreach}
    </span>
</div>
