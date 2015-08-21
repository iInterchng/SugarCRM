<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Bugs']['editview'] = array (
  'templateMeta' =>
  array (
    'maxColumns' => '2',
    'widths' => array(
                    array('label' => '10', 'field' => '30'),
                    array('label' => '10', 'field' => '30')
                    ),
    'formId' => 'BugEditView',
    'formName' => 'BugEditView',
    'hiddenInputs' =>
    array (
      'module' => 'Bugs',
      'returnmodule' => 'Bugs',
      'returnaction' => 'DetailView',
      'action' => 'Save',
    ),
    'hiddenFields' => array(
	    array (
           'name'=>'portal_viewable',
           'operator'=>'=',
           'value'=>'1',
	    ),
    ),
  ),
  'data' => array(
     array ('priority','status'),
     array ('source','product_category'),
     array ('resolution'),
     array (array ('field' => 'name', 'displayParams' => array('size' => 60))),
     array (array ('field' => 'description', 'displayParams' => array ('rows' => '15', 'cols' => '100'))),
     array (array ('field' => 'work_log', 'displayParams' => array ('rows' => '15', 'cols' => '100'))),
  )
);
?>
