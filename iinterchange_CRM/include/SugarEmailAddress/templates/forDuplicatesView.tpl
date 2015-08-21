{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<input type="hidden" name="{$moduleDir}_email_widget_id" value="{$email_widget_id}">
<input type="hidden" name="emailAddressWidget" value="{$emailAddressWidget}">
{counter assign="count" start=-1 print=false}
{foreach from=$emails item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddress{counter print=true}" value="{$email}">
{/foreach}
{counter assign="count" start=-1 print=false}
{foreach from=$verified item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressVerifiedValue{counter print=true}" value="{$email}">
{/foreach}
{if isset($primary)}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressPrimaryFlag" value="{$primary}">
{/if}
{foreach from=$optOut item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressOptOutFlag[]" value="{$email}">
{/foreach}
{foreach from=$invalid item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressInvalidFlag[]" value="{$email}">
{/foreach}
{foreach from=$replyTo item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressReplyToFlag[]" value="{$email}">
{/foreach}
{foreach from=$delete item=email}
<input type="hidden" name="{$moduleDir}{$email_widget_id}emailAddressDeleteFlag[]" value="{$email}">
{/foreach}
<input type="hidden" name="useEmailWidget" value="true">
