{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div style="visibility:hidden;" id="linkedin_popup_div"></div>
<script src="{{$config.properties.company_url}}" type="text/javascript"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}"></script>
{literal}
<style type="text/css">
.yui-panel .hd {
	background-color:#3D77CB;
	border-color:#FFFFFF #FFFFFF #000000;
	border-style:solid;
	border-width:1px;
	color:#000000;
	font-size:100%;
	font-weight:bold;
	line-height:100%;
	padding:4px;
	white-space:nowrap;
}
</style>
{/literal}
<script type="text/javascript">
function show_ext_rest_linkedin(event)
{literal} 
{

var xCoordinate = event.clientX;
var yCoordinate = event.clientY;
var isIE = document.all?true:false;
      
if(isIE) {
    xCoordinate = xCoordinate + document.body.scrollLeft;
    yCoordinate = yCoordinate + document.body.scrollTop;
}

{/literal}

cd = new CompanyDetailsDialog("linkedin_popup_div", '<div id="linkedin_div"></div>', xCoordinate, yCoordinate);
cd.setHeader("{$fields.{{$mapping_name}}.value}");
cd.display();
linked_in_popup = new LinkedIn.CompanyInsiderBox("linkedin_div", "{$fields.{{$mapping_name}}.value}");
{literal}
} 
{/literal}
</script>