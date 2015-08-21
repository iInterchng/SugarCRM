<?php /* Smarty version 2.6.11, created on 2014-05-08 13:30:14
         compiled from include/Popups/tpls/footer.tpl */ ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php if ($this->_tpl_vars['prerow']): ?>
	</form>
	<?php endif; ?>
{literal}
<script type="text/javascript">
/* initialize the popup request from the parent */
if(window.document.forms['popup_query_form'].request_data.value == "")
{
	window.document.forms['popup_query_form'].request_data.value
		= JSON.stringify(window.opener.get_popup_request_data());
}

enableQS(false);
</script>
{/literal}