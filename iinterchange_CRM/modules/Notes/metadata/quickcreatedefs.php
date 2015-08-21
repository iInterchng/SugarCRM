<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs ['Notes'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
         
        array (
          'label' => '10',
          'field' => '30',
        ),
         
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    ),
    'panels' => 
    array (
      'default' => 
      array (
         
        array (
           'contact_name',
           'parent_name',
        ),
        array (
           
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
            'displayParams' => 
            array (
              'size' => 50,
              'required' => true,
            ),
          ),
          'assigned_user_name'
        ),
         
        array (
           'filename',
        ),
         
        array (
           
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
            'displayParams' => 
            array (
              'rows' => 6,
              'cols' => 75,
            ),
          ),
        ),
         array (
           
            array (
              'name' => 'team_name',
            ),
        ),
      ),
    ),
  ),
);
?>