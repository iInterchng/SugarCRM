{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
</form>
{{if $externalJSFile}}
require_once("'".$externalJSFile."'");
{{/if}}
{$set_focus_block}
{{if isset($scriptBlocks)}}
<!-- Begin Meta-Data Javascript -->
{{$scriptBlocks}}
<!-- End Meta-Data Javascript -->
{{/if}}


<div class="h3Row" id="scheduler"></div>

<script type="text/javascript">
{literal}
function fill_invitees() { 
	if (typeof(GLOBAL_REGISTRY) != 'undefined')  {    
		SugarWidgetScheduler.fill_invitees(document.EditView);
	} 
}
{/literal}

var root_div = document.getElementById('scheduler');
var sugarContainer_instance = new SugarContainer(document.getElementById('scheduler'));
sugarContainer_instance.start(SugarWidgetScheduler);
{literal}
if ( document.getElementById('save_and_continue') ) {
    var oldclick = document.getElementById('save_and_continue').attributes['onclick'].nodeValue;
    document.getElementById('save_and_continue').onclick = function(){
        fill_invitees();
        eval(oldclick);
    }
}
{/literal}
</script>
</form>
<form >
	<div class="buttons">
		{{if !empty($form) && !empty($form.buttons)}}
		   {{foreach from=$form.buttons key=val item=button}}
		      {{sugar_button module="$module" id="$button" view="$view"}}
		   {{/foreach}}
		{{else}}
				{{sugar_button module="$module" id="SAVE" view="$view"}}
				{{sugar_button module="$module" id="CANCEL" view="$view"}}
		{{/if}}
		{{sugar_button module="$module" id="Audit" view="$view"}}
	</div>
</form> 