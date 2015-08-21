{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{if $prerow}}
	</form>
	{{/if}}
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