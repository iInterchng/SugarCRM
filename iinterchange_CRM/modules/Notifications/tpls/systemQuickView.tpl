{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}

<div id="SpotResults">
    <div>{$APP.LBL_NOTIFICATIONS}</div>
    <ul>
        {foreach from=$data item=n}
            <li>{$n}</li>
        {foreachelse}
            <li>-None-</li>
        {/foreach}
    </ul>
</div>