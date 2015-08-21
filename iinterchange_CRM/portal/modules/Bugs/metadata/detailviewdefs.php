<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Bugs']['detailview'] = array (
  'templateMeta' => array('maxColumns' => '2',
                          'widths' => array(array('label' => '10', 'field' => '30'),
                                            array('label' => '10','field' => '30'),
                                           ),
                          ),
  'data' => array(array('bug_number'),
                  array('status', 'priority'),
                  array('source', 'product_category'),
                  array('resolution', 'type'),
                  array('date_modified', 'modified_by_name'),
                  array('created_by_name', 'date_entered'),
                  array('name'),
                  array('description'),
                  array('work_log'),
                 )
);
?>
