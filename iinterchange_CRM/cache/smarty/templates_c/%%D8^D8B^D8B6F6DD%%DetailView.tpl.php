<?php /* Smarty version 2.6.11, created on 2014-05-09 15:36:02
         compiled from cache/modules/Accounts/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Accounts/DetailView.tpl', 30, false),array('function', 'sugar_translate', 'cache/modules/Accounts/DetailView.tpl', 36, false),array('function', 'counter', 'cache/modules/Accounts/DetailView.tpl', 42, false),array('function', 'overlib_includes', 'cache/modules/Accounts/DetailView.tpl', 69, false),array('function', 'sugar_getjspath', 'cache/modules/Accounts/DetailView.tpl', 70, false),array('function', 'sugar_phone', 'cache/modules/Accounts/DetailView.tpl', 206, false),array('function', 'sugarvar_teamset', 'cache/modules/Accounts/DetailView.tpl', 818, false),array('modifier', 'strip_semicolon', 'cache/modules/Accounts/DetailView.tpl', 53, false),array('modifier', 'trim', 'cache/modules/Accounts/DetailView.tpl', 141, false),array('modifier', 'substr', 'cache/modules/Accounts/DetailView.tpl', 238, false),array('modifier', 'to_url', 'cache/modules/Accounts/DetailView.tpl', 240, false),array('modifier', 'escape', 'cache/modules/Accounts/DetailView.tpl', 297, false),array('modifier', 'url2html', 'cache/modules/Accounts/DetailView.tpl', 297, false),array('modifier', 'nl2br', 'cache/modules/Accounts/DetailView.tpl', 297, false),array('modifier', 'strip_tags', 'cache/modules/Accounts/DetailView.tpl', 302, false),)), $this); ?>


<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="this.form.return_module.value='Accounts'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Accounts'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Accounts'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit') && $this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" accessKey="M" class="button" onclick="this.form.return_module.value='Accounts'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='Step1'; this.form.module.value='MergeRecords';" type="submit" name="Merge" value="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_MERGE_CONNECTORS']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_MERGE_CONNECTORS_BUTTON_KEY']; ?>
" type="button" class="button" onClick="document.location='index.php?module=Connectors&action=Step1&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&merge_module=<?php echo $this->_tpl_vars['module']; ?>
'" name="merge_connector" value="<?php echo $this->_tpl_vars['APP']['LBL_MERGE_CONNECTORS']; ?>
">
</form>
</td>
<td class="buttons" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Accounts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Accounts_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">
<li><a id="tab0" href="#tab0"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'Accounts'), $this);?>
</em></a></li>
<li><a id="tab1" href="#tab1"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ADVANCED','module' => 'Accounts'), $this);?>
</em></a></li>
<li><a id="tab2" href="#tab2"><em><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Accounts'), $this);?>
</em></a></li>
</ul>
<div class="yui-content">
<div id='LBL_ACCOUNT_INFORMATION' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table id='detailpanel_1' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['value'] )): ?>
<img id="dswidget_img" src="themes/Sugar/images/MoreDetail.png?s=528ea9837190122019b07d9a2372fd8d&c=1" width="11" height="7" border="0" alt="connectors_popups" onmouseover="return showConnectorMenu2();" onmouseout="return nd(1000);"><?php echo smarty_function_overlib_includes(array(), $this);?>

<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/connectors/formatters/default/company_detail.js'), $this);?>
'></script>
<script type='text/javascript'>
function showConnectorMenu2() <?php echo ' { '; ?>

var menuParams = "<a href='#' style='width:150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' onclick='show_ext_rest_linkedin(event);'>LinkedIn&#169;</a><a href='#' style='width:150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' onclick='show_ext_rest_twitter(event);'>Twitter&#169;</a>";
return overlib(menuParams, CENTER, STICKY, MOUSEOFF, 3000, WIDTH, 110, FGCLASS, 'olOptionsFgClass', CGCLASS, 'olOptionsCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olOptionsCapFontClass', CLOSEFONTCLASS, 'olOptionsCloseFontClass');
<?php echo ' } '; ?>

</script>

<div style="visibility:hidden;" id="linkedin_popup_div"></div>
<script src="http://www.linkedin.com/companyInsider?script&useBorder=no" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/connectors/formatters/default/company_detail.js'), $this);?>
"></script>
<?php echo '
<style type="text/css">
.yui-panel .hd {
background-color:#3D77CB;
border-color:#FFFFFF #FFFFFF #000000;
border-style:solid;
border-width:1px;
color:#000000;
font-size:100%;
font-weight:bold;
line-height:100%;
padding:4px;
white-space:nowrap;
}
</style>
'; ?>

<script type="text/javascript">
function show_ext_rest_linkedin(event)
<?php echo ' 
{

var xCoordinate = event.clientX;
var yCoordinate = event.clientY;
var isIE = document.all?true:false;
      
if(isIE) {
    xCoordinate = xCoordinate + document.body.scrollLeft;
    yCoordinate = yCoordinate + document.body.scrollTop;
}

'; ?>


cd = new CompanyDetailsDialog("linkedin_popup_div", '<div id="linkedin_div"></div>', xCoordinate, yCoordinate);
cd.setHeader("<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
");
cd.display();
linked_in_popup = new LinkedIn.CompanyInsiderBox("linkedin_div", "<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
");
<?php echo '
} 
'; ?>

</script>
<div style="visibility:hidden;" id="twitter_popup_div"></div>
<script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/connectors/formatters/default/company_detail.js'), $this);?>
"></script>
<script type="text/javascript">
function show_ext_rest_twitter(event)
<?php echo ' 
{
    var xCoordinate = event.clientX;
    var yCoordinate = event.clientY;
    var isIE = document.all?true:false;
      
    if(isIE) 
    {
        xCoordinate = xCoordinate + document.body.scrollLeft;
        yCoordinate = yCoordinate + document.body.scrollTop;
    }

'; ?>


    cd = new CompanyDetailsDialog("twitter_popup_div", '<div id="twitter_div" name="twitter_div">' + SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_LOADING') + '</div>', xCoordinate, yCoordinate);
    cd.setHeader("<?php echo ((is_array($_tmp=$this->_tpl_vars['fields']['name']['value'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
");
    cd.display();

    mapping_name_value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['fields']['name']['value'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
";

    if (mapping_name_value.length > 0) 
    {
        twitter_popup = new TWTR.Widget(<?php echo '{
          id: \'twitter_div\',
          version: 2,
          type: \'profile\',
          rpp: 4,
          interval: 6000,
          width: 250,
          height: 300,
          theme: {
            shell: {
              background: \'#ffffff\',
              color: \'#000000\'
            },
            tweets: {
              background: \'#ffffff\',
              color: \'#000000\',
              links: \'#0b578f\'
            }
          },
          features: {
            scrollbar: true,
            loop: false,
            live: true,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: \'all\'
          }
        }'; ?>
).render().setUser('<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
').start();
    } 
    else 
    {
        document.getElementById('twitter_div').innerHTML = SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_EMPTY');
    }
}
</script>
<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_office']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['phone_office']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OFFICE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_office']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_office']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_office']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['website']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php ob_start();  echo $this->_tpl_vars['fields']['website']['value'];  $this->_smarty_vars['capture']['getLink'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['link'] )):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7));  $this->_smarty_vars['capture']['getStart'] = ob_get_contents();  $this->assign('linkStart', ob_get_contents());ob_end_clean(); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
">
<a href='<?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('to_url', true, $_tmp) : smarty_modifier_to_url($_tmp)); ?>
' target='_blank' ><?php echo $this->_tpl_vars['link']; ?>
</a>
</span>
<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_fax']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['phone_fax']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_fax']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_fax']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_fax']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_address_street']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="billing_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_billing']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_address_street']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="shipping_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_shipping']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['email1']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['email1']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['email1']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='email1'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['custtype_c']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['custtype_c']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CUSTTYPE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['custtype_c']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['custtype_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['custtype_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['custtype_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['custtype_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['custtype_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['custtype_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['custtype_c']['options'][$this->_tpl_vars['fields']['custtype_c']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='LBL_PANEL_ADVANCED' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table id='detailpanel_2' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['account_type']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['account_type']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['account_type']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['account_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['account_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['account_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['account_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['account_type']['options'][$this->_tpl_vars['fields']['account_type']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['industry']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['industry']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_INDUSTRY','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['industry']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['industry']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['industry']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['industry']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['industry']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['industry']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['industry']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['industry']['options'][$this->_tpl_vars['fields']['industry']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['annual_revenue']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['annual_revenue']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANNUAL_REVENUE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['annual_revenue']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['annual_revenue']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['annual_revenue']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['annual_revenue']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['annual_revenue']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['annual_revenue']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['employees']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['employees']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEES','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['employees']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['employees']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['employees']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['employees']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['employees']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['employees']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['sic_code']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['sic_code']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SIC_CODE','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['sic_code']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['sic_code']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['sic_code']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['sic_code']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['sic_code']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['sic_code']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['ticker_symbol']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['ticker_symbol']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TICKER_SYMBOL','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ticker_symbol']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['ticker_symbol']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ticker_symbol']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ticker_symbol']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['ticker_symbol']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['ticker_symbol']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['parent_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['parent_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MEMBER_OF','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['parent_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['parent_id']['value'] )): ?><a href="index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
"><?php endif; ?>
<span id="parent_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['parent_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['ownership']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['ownership']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OWNERSHIP','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ownership']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['ownership']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ownership']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ownership']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['ownership']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['ownership']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['campaign_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['campaign_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['campaign_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['campaign_id']['value'] )): ?><a href="index.php?module=Campaigns&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['campaign_id']['value']; ?>
"><?php endif; ?>
<span id="campaign_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['campaign_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['campaign_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['rating']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['rating']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RATING','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['rating']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rating']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rating']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rating']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['rating']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['rating']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ADVANCED").style.display='none';</script>
<?php endif; ?>
<div id='LBL_PANEL_ASSIGNMENT' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table id='detailpanel_3' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="assigned_user_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_modified']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_modified']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_MODIFIED','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_modified']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="date_modified" class="sugar_field"><?php echo $this->_tpl_vars['fields']['date_modified']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['modified_by_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['team_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['team_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['team_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '','labelSpan' => '','fieldSpan' => '','formName' => '','displayType' => 'renderDetailView'), $this);?>

<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_entered']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'Accounts'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="date_entered" class="sugar_field"><?php echo $this->_tpl_vars['fields']['date_entered']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
<?php endif; ?>
</div></div>

</form><script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript">
var Accounts_detailview_tabs = new YAHOO.widget.TabView("Accounts_detailview_tabs");
Accounts_detailview_tabs.selectTab(0);
</script><?php echo '
<script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView(\'DetailView\');
</script>'; ?>
