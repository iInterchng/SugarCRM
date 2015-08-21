{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{if !$displayParams.nolink}
<a href="index.php?module={$module}&action=DetailView&record={$values.primary.id}">
{/if}
{$values.primary.name}
{if !$displayParams.nolink}
</a>

{if !empty($values.secondaries)}
    <a href="javascript:collection['{$vardef.name}'].js_more_detail('{$values.primary.id}')" id='more_{$values.primary.id}' class="utilsLink"><img id='more_img_{$values.primary.id}' height="8" border="0" width="8" absmiddle="" alt="Hide/Show" src="{sugar_getimagepath file='advanced_search.gif'}"/></a>
    <div id='more_div_{$values.primary.id}' style="display:none">
    {foreach item=secondary_field from=$values.secondaries}
        <br><a href="index.php?module={$module}&action=DetailView&record={$secondary_field.id}">
        {$secondary_field.name}
        </a>
    {foreachelse}
    {/foreach}
    </div>
<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Collection/SugarFieldCollection.js"}'></script>
<script type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    collection['{$vardef.name}'] = new SUGAR.collection('{$displayParams.formName}', '{$vardef.name}', '{$module}', '{$displayParams.popupData}');
</script>
{/if}
{/if}