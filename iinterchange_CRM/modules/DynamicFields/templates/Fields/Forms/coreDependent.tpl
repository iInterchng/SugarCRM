{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



*}
{* && $vardef.type != 'date' && $vardef.type != 'datetimecombo' *}
{if $vardef.type != 'enum' && $vardef.type != 'address'
 && $vardef.type != 'html' && $vardef.type != 'multienum' && $vardef.type != 'radioenum' && $vardef.type != 'relate'
 && $vardef.type != 'url' && $vardef.type != 'iframe' && $vardef.type != 'parent'  && $vardef.type != 'image'}
<tr><td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_CALCULATED"}:</td>
    <td style="line-height:1em"><input type="checkbox" name="calculated" id="calculated" value="1" onclick ="ModuleBuilder.toggleCF()"
        {if !empty($vardef.calculated) && !empty($vardef.formula)}CHECKED{/if} {if $hideLevel > 5}disabled{/if}/>
		{if $hideLevel > 5}
            <input type="hidden" name="calculated" value="{$vardef.calculated}">
        {/if}
		<img id="calcToolTipIcon" src="{sugar_getimagepath file="helpInline.gif"}" />
		<input type="hidden" name="enforced" id="enforced" value="{$vardef.enforced}">
		<script>
			if (!ModuleBuilder.cfToolTip)
			     ModuleBuilder.cfToolTip = new YAHOO.widget.Tooltip("cfToolTip", {ldelim}
				    context:"calcToolTipIcon", text:SUGAR.language.get("ModuleBuilder", "LBL_POPHELP_CALCULATED")
				 {rdelim});
		    else
			    ModuleBuilder.cfToolTip.cfg.setProperty("context", "calcToolTipIcon");
			ModuleBuilder.toggleCF({if empty($vardef.calculated) || empty($vardef.formula)}false{else}{$vardef.calculated}{/if})
		</script>
    </td>
</tr>
<tr id='formulaRow' {if empty($vardef.formula)}style="display:none"{/if}>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_FORMULA"}:</td>
    <td>
        <input id="formula" type="hidden" name="formula" value="{$vardef.formula}" onchange="document.getElementById('formula_display').value = this.value"/>
        <input id="formula_display" type="text" name="formula_display" value="{$vardef.formula}" readonly="1" style="background-color:#eee"/>
	    <input type="button" class="button"  name="editFormula" style="margin-top: -2px"
		      value="{sugar_translate label="LBL_BTN_EDIT_FORMULA"}"
            onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('formula').value, 'formula')"/>
    </td>
</tr>
{/if}
{if $vardef.type != 'address'}
<tr><td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_DEPENDENT"}:</td>
    <td><input type="checkbox" name="dependent" id="dependent" value="1" onclick ="ModuleBuilder.toggleDF()"
        {if !empty($vardef.dependency)}CHECKED{/if} {if $hideLevel > 5}disabled{/if}/>
        <img id="depToolTipIcon" src="{sugar_getimagepath file="helpInline.gif"}" />
        <script>
			if (!ModuleBuilder.dfToolTip)
			     ModuleBuilder.dfToolTip = new YAHOO.widget.Tooltip("dfToolTip", {ldelim}
                        context:"depToolTipIcon", text:SUGAR.language.get("ModuleBuilder", "LBL_POPHELP_DEPENDENT")
				 {rdelim});
		    else
			    ModuleBuilder.cfToolTip.cfg.setProperty("context", "depToolTipIcon");
			ModuleBuilder.toggleCF({if empty($vardef.calculated) || empty($vardef.formula)}false{else}{$vardef.calculated}{/if})
		</script>
    </td>
</tr>
<tr id='visFormulaRow' {if empty($vardef.dependency)}style="display:none"{/if}><td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_VISIBLE_IF"}:</td> 
    <td>
        <input id="dependency" type="hidden" name="dependency" value="{$vardef.dependency|escape:'html'}" onchange="document.getElementById('dependency_display').value = this.value"/>
        <input id="dependency_display" type="text" name="dependency_display" value="{$vardef.dependency|escape:'html'}" readonly="1" style="background-color:#eee"/>
          <input class="button" type=button name="editFormula" value="{sugar_translate label="LBL_BTN_EDIT_FORMULA"}" 
            onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('dependency').value, 'dependency', 'boolean')"/>
    </td>
</tr>

{/if}