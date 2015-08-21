{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}


<div style='width:100%'>
<form name='configure_{$id}' action="index.php" method="post">
<input type='hidden' name='id' value='{$id}'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td scope='row'>{$titleLBL}</td>
    <td>
    	<input class="text" name="title" size='20' maxlength='80' value='{$title}'>
    </td>
</tr>
{if $isRefreshable}
<tr>
    <td scope='row'>
        {$autoRefresh}
    </td>
    <td>
        <select name='autoRefresh'>
            {html_options options=$autoRefreshOptions selected=$autoRefreshSelect}
        </select>
    </td>
</tr>
{/if}
<tr>
    <td scope='row'>{$rowsLBL}</td>
    <td>
    	<input class="text" name="rows" size='3' value='{$rows}'>
    </td>
</tr>
<tr>
    <td scope='row'>{$categoriesLBL}</td>
    <td>
        <select name='categories[]' multiple=true size=6 onchange='getMultiple(this);' id='categories_{$id}'>
    	{html_options options=$categories selected=$selectedCategories}
    	</select>
    </td>
</tr>
<tr>
    <td scope='row'>{$myFavoritesOnlyLBL}</td>
    <td>
        <input type='checkbox' {if $myFavoritesOnly == 'true'}checked{/if} name='myFavoritesOnly' value='true'>
    </td>
</tr>
<tr>
  <td align="right" colspan="2">
    <div id='externalApiDiv'>
    </div>
  </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='button' class='button' value='{$saveLBL}' id='save_{$id}' onclick='promptAuthentication(); if(SUGAR.dashlets.postForm("configure_{$id}", SUGAR.mySugar.uncoverPage)) this.form.submit();'>
   	</td>
</tr>
</table>
<script language='javascript'>
var externalApiList = {$externalApiList};
var authenticatedExternalApiList = new Array();
{literal}


function getMultiple(ob){
    var showAll = false;
    var selected = new Array();
    for (var i = 0; i < ob.options.length; i++){
        if (ob.options[ i ].selected){
            selected.push(ob.options[ i ].value);
            if(ob.options[ i ].value == 'ALL'){
                showAll = true;
            }
        }
    }
    var buttonHtml = '';
    if(showAll){
        for (var j = 0; j < externalApiList.length; j++) 
        {
            if(!authenticatedExternalApiList[externalApiList[j]])
            {
	            buttonHtml += '<div id="' + externalApiList[j] + '_div" style="visibility:;"><a href="#" onclick="window.open(\'index.php?module=EAPM&callbackFunction=hideExternalDiv&closeWhenDone=1&action=QuickSave&application='+externalApiList[j]+'\',\'EAPM\');">{/literal}{$authenticateLBL}{literal} '+externalApiList[j]+'</a></div>';
            }
        }
    }else{
        for (var i = 0; i < selected.length; i++){
            for (var j = 0; j < externalApiList.length; j++)
            {
                if(selected[i] == externalApiList[j] && !authenticatedExternalApiList[externalApiList[j]]) 
                {
                    buttonHtml += '<div id="' + externalApiList[j] + '_div" style="visibility:";><a href="#" onclick="window.open(\'index.php?module=EAPM&callbackFunction=hideExternalDiv&closeWhenDone=1&action=QuickSave&application='+externalApiList[j]+'\',\'EAPM\');">{/literal}{$authenticateLBL}{literal} '+externalApiList[j]+'</a></div>';
                }
            }
        }
    }
    document.getElementById('externalApiDiv').innerHTML = buttonHtml;
}

function initExternalOptions(){
    var ob = document.getElementById('{/literal}categories_{$id}{literal}');
    getMultiple(ob);
}

function hideExternalDiv(id)
{
    //Hide the div for the external API link, set the authenticated Array list to true
    if(YAHOO.util.Dom.get(id + '_div'))
    {
		YAHOO.util.Dom.get(id + '_div').style.visibility = 'hidden';
		authenticatedExternalApiList[id] = true;
	}
}

function promptAuthentication()
{
    //This is how we know that not all external API links were authenticated
{/literal}
     categoryElement = YAHOO.util.Dom.get('categories_{$id}');  
{literal} 
    //Only check for prompt warning if the 'ALL' option was selected
    if(categoryElement.options[categoryElement.selectedIndex].value != 'ALL')
    {
       return;
    }
    
	if(authenticatedExternalApiList.length < externalApiList.length)
	{
{/literal}
		if(!confirm("{$autenticationPendingLBL}")) 
{literal}		
		{
		    //Cancel form submission here
		    e = event ? event : window.event;
		    if (e.preventDefault) e.preventDefault();
		    e.returnValue = false;
		    e.cancelBubble = true;
		    if (e.stopPropagation) e.stopPropagation();
		}
	}
}

YAHOO.util.Event.onDOMReady(initExternalOptions);
</script>
{/literal}
</form>
</div>