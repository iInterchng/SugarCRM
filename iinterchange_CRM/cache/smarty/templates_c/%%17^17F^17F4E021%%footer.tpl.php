<?php /* Smarty version 2.6.11, created on 2014-05-08 12:29:01
         compiled from include/SearchForm/tpls/footer.tpl */ ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
</form>
{literal}
<script>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
{/literal}			
        document.getElementById('up_down_img').src='{sugar_getimagepath file="basic_search.gif"}';
{literal}
    }else{
{/literal}			
        document.getElementById('up_down_img').src='{sugar_getimagepath file="advanced_search.gif"}';
{literal}			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
</script>
{/literal}