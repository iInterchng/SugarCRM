{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{include file="_head.tpl" theme_template=true}
<body onMouseOut="closeMenus();">
{$SUGAR_DCJS}
<div id="header">
    {include file="_companyLogo.tpl" theme_template=true}
    {include file="_globalLinks.tpl" theme_template=true}
    {include file="_welcome.tpl" theme_template=true}
    <div class="clear"></div>
    {include file="_headerSearch.tpl" theme_template=true}
    <div class="clear"></div>
    {if !$AUTHENTICATED}
    <br /><br />
    {/if}
    {include file="_headerModuleList.tpl" theme_template=true}
    <div class="clear"></div>
    <div class="line"></div>
    {if $AUTHENTICATED}
    {include file="_headerLastViewed.tpl" theme_template=true}
    {include file="_headerShortcuts.tpl" theme_template=true}
    {/if}
</div>

<div id="main">
    <div id="content" {if !$AUTHENTICATED}class="noLeftColumn" {/if}>
        <table style="width:100%"><tr><td>
