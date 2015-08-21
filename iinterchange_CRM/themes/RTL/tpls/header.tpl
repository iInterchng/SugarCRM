{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{include file="_head.tpl" theme_template=true}
<body class="yui-skin-sam">
	{$SUGAR_DCMENU}
	<div id="header">
    {include file="_companyLogo.tpl" theme_template=true}
    {if $AUTHENTICATED}
    {include file="_globalLinks.tpl" theme_template=true}
	{/if}
    <div class="clear"></div>
    <div class="clear"></div>
    {if !$AUTHENTICATED}
    <br /><br />
    {/if}
	{if $AUTHENTICATED}
      {include file="_headerModuleList.tpl" theme_template=true}
    {/if}
	
    <div class="clear"></div>
    <div class="clear"></div>
</div>
	<div class="clear"></div>
    <div class="clear"></div>
<div id="main">
    <div id="content">
        <table style="width:100%"><tr><td>
