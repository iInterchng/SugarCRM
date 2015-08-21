<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/DetailView/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/DetailView/DetailView.tpl', 39, false),array('function', 'sugar_evalcolumn', 'include/DetailView/DetailView.tpl', 124, false),array('function', 'sugar_field', 'include/DetailView/DetailView.tpl', 129, false),array('modifier', 'count', 'include/DetailView/DetailView.tpl', 75, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['headerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
{sugar_include include=$includes}
<div id="<?php echo $this->_tpl_vars['module']; ?>
_detailview_tabs"
<?php if ($this->_tpl_vars['useTabs']): ?>
class="yui-navset detailview_tabs"
<?php endif; ?>
>
    <?php if ($this->_tpl_vars['useTabs']): ?>
    {* Generate the Tab headers *}
    <?php echo smarty_function_counter(array('name' => 'tabCount','start' => -1,'print' => false,'assign' => 'tabCount'), $this);?>

    <ul class="yui-nav">
    <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
        <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

        <li><a id="tab<?php echo $this->_tpl_vars['tabCount']; ?>
" href="#tab<?php echo $this->_tpl_vars['tabCount']; ?>
"><em>{sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}</em></a></li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <?php endif; ?>
    <div <?php if ($this->_tpl_vars['useTabs']): ?>class="yui-content"<?php endif; ?>>
<?php echo smarty_function_counter(array('name' => 'panelCount','print' => false,'start' => 0,'assign' => 'panelCount'), $this);?>

<?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
 $this->assign('panel_id', $this->_tpl_vars['panelCount']); ?>
<div id='<?php echo $this->_tpl_vars['label']; ?>
' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<?php if (! is_array ( $this->_tpl_vars['panel'] )): ?>
    {sugar_include type='php' file='<?php echo $this->_tpl_vars['panel']; ?>
'}
<?php else: ?>

	<?php if (! empty ( $this->_tpl_vars['label'] ) && ! is_int ( $this->_tpl_vars['label'] ) && $this->_tpl_vars['label'] != 'DEFAULT' && ! $this->_tpl_vars['useTabs']): ?>
	<h4>{sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}</h4>
	<?php endif; ?>
		<table id='detailpanel_<?php echo $this->_foreach['section']['iteration']; ?>
' cellspacing='{$gridline}'>



	<?php $_from = $this->_tpl_vars['panel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
	{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
		<?php $this->assign('columnsInRow', count($this->_tpl_vars['rowData'])); ?>
		<?php $this->assign('columnsUsed', 0); ?>
		<?php $_from = $this->_tpl_vars['rowData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>
	    <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideIf'] )): ?>
	    	{if !(<?php echo $this->_tpl_vars['colData']['field']['hideIf']; ?>
) }
	    <?php endif; ?>
	    <?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
			{if $fields.<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
.acl > 0}
		<?php endif; ?>
			{counter name="fieldsUsed"}
			<td width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' scope="row">
				<?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
				    {if !$fields.<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
.hidden}
                <?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['colData']['field']['customLabel'] )): ?>
			       <?php echo $this->_tpl_vars['colData']['field']['customLabel']; ?>

				<?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] ) && strpos ( $this->_tpl_vars['colData']['field']['label'] , '$' )): ?>
				   {capture name="label" assign="label"}<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
{/capture}
			       {$label|strip_semicolon}:
				<?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
				   {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
			       {$label|strip_semicolon}:
				<?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
				   {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
			       {$label|strip_semicolon}:
				<?php else: ?>
				   &nbsp;
				<?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] ) || isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] ) && isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                   <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] )): ?>
                     {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['colData']['field']['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                   <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                     {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                   <?php endif; ?>
                   {overlib_includes}
                   {sugar_help text=$popupText WIDTH=400}
                <?php endif; ?>
                <?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
                {else}
                    {counter name="fieldsHidden"}
                {/if}
                <?php endif; ?>
			</td>
			<td width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['field']; ?>
%' <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?> <?php if (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] ) && $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] == 'phone'): ?>class="phone"<?php endif; ?>>
			    <?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
			    {if !$fields.<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
.hidden}
			    <?php endif; ?>
				<?php if ($this->_tpl_vars['colData']['field']['customCode'] || $this->_tpl_vars['colData']['field']['assign']): ?>
					{counter name="panelFieldCount"}
					<span id="<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field'],'colData' => $this->_tpl_vars['colData']), $this);?>
</span>
				<?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] && ! empty ( $this->_tpl_vars['colData']['field']['fields'] )): ?>
				    <?php $_from = $this->_tpl_vars['colData']['field']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField']):
?>
				        <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['subField']]): ?>
				        	{counter name="panelFieldCount"}
				            <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','tabindex' => $this->_tpl_vars['tabIndex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['subField']],'displayType' => 'DetailView'), $this);?>
&nbsp;
				        <?php else: ?>
				        	{counter name="panelFieldCount"}
				            <?php echo $this->_tpl_vars['subField']; ?>

				        <?php endif; ?>
				    <?php endforeach; endif; unset($_from); ?>
				<?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
					{counter name="panelFieldCount"}
					<?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'DetailView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type']), $this);?>

				<?php endif; ?>
				<?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
				{/if}
				<?php endif; ?>
			</td>
		<?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
			{else}

			<td scope="row">&nbsp;</td><td>&nbsp;</td>
			{/if}
		<?php endif; ?>
	    <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideIf'] )): ?>
			{else}

			<td scope="row">&nbsp;</td><td>&nbsp;</td>
			{/if}
	    <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
	<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
</div>
{if $panelFieldCount == 0}

<script>document.getElementById("<?php echo $this->_tpl_vars['label']; ?>
").style.display='none';</script>
{/if}
<?php endforeach; endif; unset($_from); ?>
</div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['useTabs']): ?>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
var <?php echo $this->_tpl_vars['module']; ?>
_detailview_tabs = new YAHOO.widget.TabView("<?php echo $this->_tpl_vars['module']; ?>
_detailview_tabs");
<?php echo $this->_tpl_vars['module']; ?>
_detailview_tabs.selectTab(0);
</script>
<?php endif; ?>