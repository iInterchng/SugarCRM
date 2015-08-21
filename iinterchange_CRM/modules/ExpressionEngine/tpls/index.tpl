{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{ext_includes}
{literal}
<script type="text/javascript">
	displayResult = function(result){
		Ext.getCmp('formulaBuilderWindow').close();
		console.log(result);
	};
	positionWindow = function() {
		//Hack for window.center() which is broken under FF3
		var win = Ext.getCmp('formulaBuilderWindow');
		var view = {width:document.body.clientWidth, height:document.body.clientHeight};//Ext.getBody().getSize();
		win.setPosition(Math.max(0, (view.width - win.getSize().width) / 2), 
						Math.max(0, (view.height -win.getSize().height) / 2));
	}
	showEditor = function() {
	var EditorWindow = new Ext.Window({
		id: 'formulaBuilderWindow',
		autoLoad: {
			url:"index.php",
			params: {
				module:"ExpressionEngine",
				action:"editFormula",
				onSave:"displayResult",
				onLoad:"positionWindow",
				onClose:"function(){Ext.getCmp('formulaBuilderWindow').close();}",
				loadExt:false,
				embed: true,
				targetModule:"Opportunities"
			},
			scripts: true
		},
		renderTo:"editorDiv",
		modal:true,
		plain:true,
		resizable:false,
		nodyBorder:false,
		width:800
		//autoHeight:true,
		//autoWidth:true
	});
	EditorWindow.show();
}
</script>
{/literal}
<input class="button" type="button" onclick="showEditor()" value="Show"/>
<div id="editorDiv"></div>