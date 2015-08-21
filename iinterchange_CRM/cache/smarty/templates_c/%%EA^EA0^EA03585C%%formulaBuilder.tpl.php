<?php /* Smarty version 2.6.11, created on 2014-05-08 13:10:39
         compiled from modules/ExpressionEngine/tpls/formulaBuilder.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 42, false),array('function', 'sugar_image', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 45, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="modules/ExpressionEngine/tpls/formulaBuilder.css" />
<table width="100%" id="formulaBuilder">
	<tr style=""><td colspan=3 style="border-bottom:1px solid #AAA; padding-bottom:2px;">
		<textarea type="text" name="formulaInput" id="formulaInput" style="width:480px;height:120px;"><?php echo $this->_tpl_vars['formula']; ?>
</textarea>
			</td></tr>
	<tr>
		<td id="functionsList" width="200">
            <input id="formulaFuncSearch" style="width:200px" class="empty"
			    value="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_SEARCH_FUNCS'), $this);?>
"/>
            <span class="id-ff multiple"><button id="formulaFuncClear" class="button"
                onclick="var i = Dom.get('formulaFuncSearch'); i.value='';i.onkeyup();i.focus()">
            	<?php echo smarty_function_sugar_image(array('image' => "id-ff-clear.png",'name' => "id-ff-clear",'height' => '14','width' => '14'), $this);?>

			</button><div id="funcSearchResults"></div></span>
            <div id="functionsGrid"></div>
        </td>
		<td id="fieldsList" width="200">
			<input id="formulaFieldsSearch" style="width:200px" class="empty"
			     value="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_SEARCH_FIELDS'), $this);?>
"/>
			<span class="id-ff multiple"><button id="formulaFieldClear" class="button"
			    onclick="var i=Dom.get('formulaFieldsSearch'); i.value='';i.onkeyup();i.focus()">
		      <?php echo smarty_function_sugar_image(array('image' => "id-ff-clear.png",'name' => "id-ff-clear",'height' => '14','width' => '14'), $this);?>

			</button><div id="fieldSearchResults"></div></span>
			<div id="fieldsGrid"></div>
		</td>
	</tr>
</table>
<div style="width:100%;text-align:right">
<input type='button' class='button' name='formulacancelbtn' value='<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_CANCEL'), $this);?>
'  
	onclick="ModuleBuilder.formulaEditorWindow.hide()" >
<input type='button' class='button' name='fomulaSaveButton' id="fomulaSaveButton" value='<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_SAVE'), $this);?>
' 
	onclick="if(SUGAR.expressions.saveCurrentExpression('<?php echo $this->_tpl_vars['target']; ?>
', '<?php echo $this->_tpl_vars['returnType']; ?>
'))ModuleBuilder.formulaEditorWindow.hide()">
</div>
<script src="modules/ExpressionEngine/javascript/formulaBuilder.js"></script>
<script type="text/javascript">
<?php echo '
var FBLoader = new YAHOO.util.YUILoader({
    require : ["formulabuilder"],
    loadOptional: true,
    skin: { base: \'blank\', defaultSkin: \'\' },
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
'; ?>

var fieldsArray = <?php echo $this->_tpl_vars['Field_Array']; ?>
;
var returnType = '<?php echo $this->_tpl_vars['returnType']; ?>
';
FBLoader.insert();
</script>