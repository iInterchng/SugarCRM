{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{if $AUTHENTICATED}
<div id="search">
    <form name='UnifiedSearch' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
        <input type="hidden" name="action" value="UnifiedSearch">
        <input type="hidden" name="module" value="Home">
        <input type="hidden" name="search_form" value="false">
        <input type="hidden" name="advanced" value="false">
        <img id="unified_search_advanced_img" src="{sugar_getimagepath file='searchMore.gif'}" border="0" alt="{$APP.LBL_SEARCH}">&nbsp;
        <input type="text" name="query_string" id="query_string" size="20" value="{$SEARCH}">&nbsp;
        <input type="submit" class="button" value="{$APP.LBL_SEARCH}">
    </form><br />
    <div id="unified_search_advanced_div"> </div>
</div>
<div id="sitemapLink">
    <span id="sitemapLinkSpan">
        {$APP.LBL_SITEMAP}
        <img src="{sugar_getimagepath file='MoreDetail.png'}">
    </span>
</div>
<span id='sm_holder'></span>
{/if}
