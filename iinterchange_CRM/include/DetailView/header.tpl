{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{{* Add the preForm code if it is defined (used for vcards) *}}
{{if $preForm}}
	{{$preForm}}
{{/if}}
<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{{if isset($form.hidden)}}
{{foreach from=$form.hidden item=field}}
{{$field}}
{{/foreach}}
{{/if}}

{{if !isset($form.buttons)}}
{{sugar_button module="$module" id="EDIT" view="$view"}}
{{sugar_button module="$module" id="DUPLICATE" view="EditView"}}
{{sugar_button module="$module" id="DELETE" view="$view"}}
{{else}}
	{{counter assign="num_buttons" start=0 print=false}}
	{{foreach from=$form.buttons key=val item=button}}
	  {{if !is_array($button) && in_array($button, $built_in_buttons)}}
	     {{counter print=false}}
	     {{sugar_button module="$module" id="$button" view="EditView"}}
	  {{/if}}
	{{/foreach}}
	{{if isset($closeFormBeforeCustomButtons)}}
	</form>
	</td>
	{{/if}}
	{{if count($form.buttons) > $num_buttons}}
			{{foreach from=$form.buttons key=val item=button}}
			  {{if is_array($button) && $button.customCode}}
              {{if isset($closeFormBeforeCustomButtons)}}
              <td class="buttons" align="left" NOWRAP>
              {{/if}}
			  {{sugar_button module="$module" id="$button" view="EditView"}}
              {{if isset($closeFormBeforeCustomButtons)}}
              </td>
              {{/if}}
			  {{/if}}
			{{/foreach}}
	{{/if}}
{{/if}}
{{if !isset($closeFormBeforeCustomButtons)}}
</form>
</td>
{{/if}}
{{if empty($form.hideAudit) || !$form.hideAudit}}
<td class="buttons" align="left" NOWRAP>
{{sugar_button module="$module" id="Audit" view="EditView"}}
</td>
{{/if}}
<td align="right" width="100%">{$ADMIN_EDIT}
	{{if $panelCount == 0}}
	    {{* Render tag for VCR control if SHOW_VCR_CONTROL is true *}}
		{{if $SHOW_VCR_CONTROL}}
			{$PAGINATION}
		{{/if}}
		{{counter name="panelCount" print=false}}
	{{/if}}
</td>
{{* Add $form.links if they are defined *}}
{{if !empty($form) && isset($form.links)}}
	<td align="right" width="10%">&nbsp;</td>
	<td align="right" width="100%" NOWRAP>
	{{foreach from=$form.links item=link}}
	    {{$link}}&nbsp;
	{{/foreach}}
	</td>
{{/if}}
</tr>
</table>