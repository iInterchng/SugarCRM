{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="{$FAVICON_URL}">
<meta http-equiv="Content-Type" content="text/html; charset={$APP.LBL_CHARSET}">
<title>{$APP.LBL_BROWSER_TITLE}</title>
{$SUGAR_CSS}
{$SUGAR_JS}
{literal}
<script type="text/javascript">
<!--
SUGAR.themes.theme_name      = '{/literal}{$THEME}{literal}';
SUGAR.themes.theme_ie6compat = {/literal}{$THEME_IE6COMPAT}{literal};
SUGAR.themes.hide_image      = '{/literal}{sugar_getimagepath file="hide.gif"}{literal}';
SUGAR.themes.show_image      = '{/literal}{sugar_getimagepath file="show.gif"}{literal}';
SUGAR.themes.allThemes       = eval({/literal}{$allThemes}{literal});
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->
</script>
{/literal}
</head>
<a name="top"></a>