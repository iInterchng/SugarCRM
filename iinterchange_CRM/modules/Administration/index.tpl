{* <!--
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

-->


*}
<div class="dashletPanelMenu">
<div class="hd"><div class="tl"></div><div class="hd-center"></div><div class="tr"></div></div>
<div class="bd">
		<div class="ml"></div>
		<div class="bd-center">
		<div class="screen">
		
{foreach  from=$ADMIN_GROUP_HEADER key=j item=val1}
   
   {if isset($GROUP_HEADER[$j][1])}
   <p>{$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][1]}
   <table class="other view">
   
   {else}
   <p>{$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][2]}
   <table class="other view">
   {/if}
      
    {assign var='i' value=0}
    {foreach  from=$VALUES_3_TAB[$j] key=link_idx item=admin_option}
    {if isset($COLNUM[$j][$i])}
    <tr> 
            <td width="20%" scope="row">{$ITEM_HEADER_IMAGE[$j][$i]}&nbsp;<a href='{$ITEM_URL[$j][$i]}' class="tabDetailViewDL2Link">{$ITEM_HEADER_LABEL[$j][$i]}</a></td>
            <td width="30%">{$ITEM_DESCRIPTION[$j][$i]}</td>  
              
            {assign var='i' value=$i+1}
            {if $COLNUM[$j][$i] == '0'}                           
                    <td width="20%" scope="row">{$ITEM_HEADER_IMAGE[$j][$i]}&nbsp;<a href='{$ITEM_URL[$j][$i]}' class="tabDetailViewDL2Link">{$ITEM_HEADER_LABEL[$j][$i]}</a></td>
                    <td width="30%">{$ITEM_DESCRIPTION[$j][$i]}</td>
              
            {else}
            <td width="20%" scope="row">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            {/if}
   </tr>
   {/if}
   {assign var='i' value=$i+1}
   {/foreach}
           
</table>
<p/>
{/foreach}

</div>
</div>
			<div class="mr"></div>
</div>
<div class="ft"><div class="bl"></div><div class="ft-center"></div><div class="br"></div></div>
</div>