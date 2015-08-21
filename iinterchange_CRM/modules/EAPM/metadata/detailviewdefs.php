<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = 'EAPM';
$viewdefs[$module_name]['DetailView'] = array(
'templateMeta' => array('maxColumns' => '2',
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                            'form' => array(
                                'buttons' =>
                                array (
                                  0 => 'EDIT',
                                  array('customCode'=>'<input title="{$MOD.LBL_REAUTHENTICATE_LABEL}" accessKey="{$MOD.LBL_REAUTHENTICATE_KEY}" class="button" onclick="window.open(\'index.php?module=EAPM&action=Reauthenticate&record={$fields.id.value}&closeWhenDone=1&refreshParentWindow=1\',\'EAPM\');" type="button" name="Reauthenticate" id="Reauthenticate" value="{$MOD.LBL_REAUTHENTICATE_LABEL}">'),
                                  array ('customCode' => '{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'Users\'; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$return_id}\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if}'),
                                  ),
                                'footerTpl'=>'modules/EAPM/tpls/DetailViewFooter.tpl',),
                        ),

'panels' =>array (
    array('application', 'validated'),
    array('name',        'url'),

  array (
	array (
      'name' => 'date_entered',
      'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
      'label' => 'LBL_DATE_ENTERED',
    ),
    array (
      'name' => 'date_modified',
      'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
      'label' => 'LBL_DATE_MODIFIED',
    ),
  ),

)
);
?>
