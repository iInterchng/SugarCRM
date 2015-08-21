{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div class='ytheme-gray' id="datepicker" style="z-index: 9999; position:absolute; width:50px;"></div>
<div id='trackercontent_div_{$id}'></div>
{literal}
<script type="text/javascript">
var tracker_dashlet;

function onLoadDoInit() {
{/literal}
tracker_dashlet = new TrackerDashlet();
tracker_dashlet.init('{$id}', {$height});
{literal}
}

YAHOO.util.Event.onDOMReady(function(){            
var reportLoader = new YAHOO.util.YUILoader({
	require : ["layout", "element"],
	loadOptional: true,
	skin: { base: 'blank', defaultSkin: '' },
	onSuccess : onLoadDoInit,
	base : "include/javascript/yui/build/"
});
reportLoader.addModule({
    name: "sugarwidgets",
    type: "js",
    fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js",
    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview", "button", "autocomplete", "container"]
});
reportLoader.insert();
});
</script>
{/literal}