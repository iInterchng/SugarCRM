{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<a href="index.php?entryPoint=download&id={$parentFieldArray.ID}&type={$displayParams.module}{$vardef.displayParams.module}" class="tabDetailViewDFLink" target='_blank'>{sugar_fetch object=$parentFieldArray key=$col}
{if isset($vardef.allowEapm) && $vardef.allowEapm && isset($parentFieldArray.DOC_TYPE) }
{capture name=imageNameCapture assign=imageName}
{sugar_fetch object=$parentFieldArray key=DOC_TYPE}_image_inline.png
{/capture}
{capture name=imageURLCapture assign=imageURL}
{sugar_getimagepath file=$imageName}
{/capture}
{if strlen($imageURL)>1}<img src="{$imageURL}" border="0">{/if}
{/if}
</a>