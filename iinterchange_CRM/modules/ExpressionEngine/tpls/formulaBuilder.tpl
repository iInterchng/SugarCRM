{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<link rel="stylesheet" type="text/css" href="modules/ExpressionEngine/tpls/formulaBuilder.css" />
<table width="100%" id="formulaBuilder">
	<tr style=""><td colspan=3 style="border-bottom:1px solid #AAA; padding-bottom:2px;">
		<textarea type="text" name="formulaInput" id="formulaInput" style="width:480px;height:120px;">{$formula}</textarea>
		{*<span class="id-ff multiple"><button id="formulaInputClear" class="button"
            onclick="Dom.get('formulaInput').value='';">
                {sugar_image image="id-ff-clear.png" name="id-ff-clear" height="14" width="14"}
        </button></span>*}
	</td></tr>
	<tr>
		<td id="functionsList" width="200">
            <input id="formulaFuncSearch" style="width:200px" class="empty"
			    value="{sugar_translate module="ModuleBuilder" label="LBL_SEARCH_FUNCS"}"/>
            <span class="id-ff multiple"><button id="formulaFuncClear" class="button"
                onclick="var i = Dom.get('formulaFuncSearch'); i.value='';i.onkeyup();i.focus()">
            	{sugar_image image="id-ff-clear.png" name="id-ff-clear" height="14" width="14"}
			</button><div id="funcSearchResults"></div></span>
            <div id="functionsGrid"></div>
        </td>
		<td id="fieldsList" width="200">
			<input id="formulaFieldsSearch" style="width:200px" class="empty"
			     value="{sugar_translate module="ModuleBuilder" label="LBL_SEARCH_FIELDS"}"/>
			<span class="id-ff multiple"><button id="formulaFieldClear" class="button"
			    onclick="var i=Dom.get('formulaFieldsSearch'); i.value='';i.onkeyup();i.focus()">
		      {sugar_image image="id-ff-clear.png" name="id-ff-clear" height="14" width="14"}
			</button><div id="fieldSearchResults"></div></span>
			<div id="fieldsGrid"></div>
		</td>
	</tr>
</table>
<div style="width:100%;text-align:right">
<input type='button' class='button' name='formulacancelbtn' value='{sugar_translate module="ModuleBuilder" label="LBL_BTN_CANCEL"}'  
	onclick="ModuleBuilder.formulaEditorWindow.hide()" >
<input type='button' class='button' name='fomulaSaveButton' id="fomulaSaveButton" value='{sugar_translate module="ModuleBuilder" label="LBL_BTN_SAVE"}' 
	onclick="if(SUGAR.expressions.saveCurrentExpression('{$target}', '{$returnType}'))ModuleBuilder.formulaEditorWindow.hide()">
</div>
<script src="modules/ExpressionEngine/javascript/formulaBuilder.js"></script>
<script type="text/javascript">
{literal}
var FBLoader = new YAHOO.util.YUILoader({
    require : ["formulabuilder"],
    loadOptional: true,
    skin: { base: 'blank', defaultSkin: '' },
    onSuccess: function(){SUGAR.expressions.initFormulaBuilder()},
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
FBLoader.addModule({
    name :"formulabuilder",
    type : "js",
    fullpath: "modules/ExpressionEngine/javascript/formulaBuilder.js",
    varName: "SUGAR.expressions.initFormulaBuilder",
    requires: ["layout", "element"]
});
{/literal}
var fieldsArray = {$Field_Array};
var returnType = '{$returnType}';
FBLoader.insert();
</script>