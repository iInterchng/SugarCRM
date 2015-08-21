{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{if $AUTHENTICATED}
<div id="welcome">
    {$APP.NTC_WELCOME}, <strong><a href='index.php?module=Users&action=EditView&record={$CURRENT_USER_ID}'>{$CURRENT_USER}</a></strong> [ <a href='{$LOGOUT_LINK}' class='utilsLink'>{$LOGOUT_LABEL}</a> ]
</div>
{/if}
