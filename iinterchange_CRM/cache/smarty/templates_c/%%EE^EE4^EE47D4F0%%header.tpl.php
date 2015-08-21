<?php /* Smarty version 2.6.11, created on 2014-05-08 12:29:01
         compiled from include/SearchForm/tpls/header.tpl */ ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div class='listViewBody'>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_parent_helper.js'}"></script>
{$TABS}
<?php if ($this->_tpl_vars['displayView'] == saved_views): ?>
{literal}
<script>SUGAR.savedViews.handleForm();</script>
{/literal}
<?php endif; ?>
<form name='search_form' id='search_form' class='search_form' method='post' action='index.php?module={$module}&action={$action}'>
<input type='hidden' name='searchFormTab' value='{$displayView}'/>
<input type='hidden' name='module' value='{$module}'/>
<input type='hidden' name='action' value='{$action}'/> 
<input type='hidden' name='query' value='true'/>
{foreach name=tabIteration from=$TAB_ARRAY key=tabkey item=tabData}
<div id='{$module}{$tabData.name}_searchSearchForm' style='{$tabData.displayDiv}' class="edit view search {$tabData.name}">{if $tabData.displayDiv}{else}{$return_txt}{/if}</div>
{/foreach}
<div id='{$module}saved_viewsSearchForm' <?php if ($this->_tpl_vars['displayView'] != 'saved_views'): ?>style='display: none';<?php endif; ?>>{$saved_views_txt}</div>