{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div style="padding:5px" height="100%">
	<div>
		<a class="listViewThLinkS1" href="javascript:SUGAR.routing.ui.addRule();">{$app_strings.LBL_ROUTING_ADD_RULE}</a> <a class="listViewThLinkS1" href="javascript:SUGAR.routing.ui.addRule();"><img src="{sugar_getimagepath file='plus.gif'}" align="absmiddle" border="0"></a>
	</div>
	<br />
	<div id="rulesList" style="background:#fff; overflow:auto; margin:5px; padding:2px; border:1px solid #ccc;">{$savedRules}</div>
	<div>
		<i>{$app_strings.LBL_ROUTING_SUB_DESC}</i>
	</div>
</div>