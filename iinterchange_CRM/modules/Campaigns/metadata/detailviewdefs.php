<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Campaigns']['DetailView'] = array(
'templateMeta' => array('form' => array('buttons' =>
										array('EDIT', 'DUPLICATE', 'DELETE',
                                        array('customCode'=>'<input title="{$MOD.LBL_TEST_BUTTON_TITLE}" accessKey="{$MOD.LBL_TEST_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\';this.form.mode.value=\'test\'" type="{$ADD_BUTTON_STATE}" name="button" value="{$MOD.LBL_TEST_BUTTON_LABEL}">'),
                                        array('customCode'=>'<input title="{$MOD.LBL_QUEUE_BUTTON_TITLE}" accessKey="{$MOD.LBL_QUEUE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'Schedule\'" type="{$ADD_BUTTON_STATE}" name="button" value="{$MOD.LBL_QUEUE_BUTTON_LABEL}">'),
                                        array('customCode'=>'<input title="{$APP.LBL_MAILMERGE}" accessKey="{$APP.LBL_MAILMERGE_KEY}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'MailMerge\'" type="submit" name="button" value="{$APP.LBL_MAILMERGE}">'),
                                        array('customCode'=>'<input title="{$MOD.LBL_MARK_AS_SENT}" class="button" onclick="this.form.return_module.value=\'Campaigns\'; this.form.return_action.value=\'TrackDetailView\';this.form.action.value=\'DetailView\';this.form.mode.value=\'set_target\'" type="{$TARGET_BUTTON_STATE}" name="button" value="{$MOD.LBL_MARK_AS_SENT}"><input title="mode" class="button" id="mode" name="mode" type="hidden" value="">'),
                                        array('customCode'=>'<script>{$MSG_SCRIPT}</script>'),
                                        ),
                                        'links' => array('<input type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=WizardHome&record={$fields.id.value}\';" value="{$MOD.LBL_TO_WIZARD_TITLE}" />',
                                        				 '<input type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=TrackDetailView&record={$fields.id.value}\';" value="{$MOD.LBL_TRACK_BUTTON_LABEL}" />',
                                        				 '<input type="button" class="button" onclick="javascript:window.location=\'index.php?module=Campaigns&action=RoiDetailView&record={$fields.id.value}\';" value="{$MOD.LBL_TRACK_ROI_BUTTON_LABEL}" />',
			                             ),
                        ),
                        'maxColumns' => '2',
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                       
                        ),
'panels' =>array (
  'lbl_campaign_information'=> array(
	  array (
	    'name',
	    array (
	      'name' => 'status',
	      'label' => 'LBL_CAMPAIGN_STATUS',
	    ),
	  ),
	
	  array (
	
	    array (
	      'name' => 'start_date',
	      'label' => 'LBL_CAMPAIGN_START_DATE',
	    ),
		'campaign_type',
	  ),
	
	  array (
	  	array (
	      'name' => 'end_date',
	      'label' => 'LBL_CAMPAIGN_END_DATE',
	    ),
	    array(
          	'name' => 'frequency',
          	'customCode' => '{if $fields.campaign_type.value == "NewsLetter"}<div style=\'none\' id=\'freq_field\'>{$fields.frequency.value}</div>{/if}&nbsp;',
          	'customLabel' => '{if $fields.campaign_type.value == "NewsLetter"}<div style=\'none\' id=\'freq_label\'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div>{/if}&nbsp;'
          ),
	  ),
	  
	  array (
		array (
	      'name' => 'impressions',
	      'label' => 'LBL_CAMPAIGN_IMPRESSIONS',
	    ),
	  ),
	
	  array (
	
	    array (
	      'name' => 'budget',
	      'label' => '{$MOD.LBL_CAMPAIGN_BUDGET} ({$CURRENCY})',
	    ),
	    array (
	      'name' => 'expected_cost',
	      'label' => '{$MOD.LBL_CAMPAIGN_EXPECTED_COST} ({$CURRENCY})',
	    ),
	  ),
	
	  array (
		array (
	      'name' => 'actual_cost',
	      'label' => '{$MOD.LBL_CAMPAIGN_ACTUAL_COST} ({$CURRENCY})',
	    ),
	    array (
	      'name' => 'expected_revenue',
	      'label' => '{$MOD.LBL_CAMPAIGN_EXPECTED_REVENUE} ({$CURRENCY})',
	    ),
	  ),
	
	  array (
	
	    array (
	      'name' => 'objective',
	      'label' => 'LBL_CAMPAIGN_OBJECTIVE',
	    ),
	  ),
	
	  array (
	
	    array (
	      'name' => 'content',
	      'label' => 'LBL_CAMPAIGN_CONTENT',
	    ),
	  ),
  ),
  
  'LBL_PANEL_ASSIGNMENT' => array(
        array (
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        array (
		  'team_name', 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),	  
  ),
)

);
?>