<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Cases']['detailview'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            'extraFields' => array('date_modified'),
                           ),
    'data' => array(
        array('case_number', 'assigned_user_name'),
        array('created_by_name', 'date_entered'),
        array('modified_by_name', 'date_modified'),
        array('priority', 'status'),
        array('name'),
        array(array('field' => 'description', 'nl2br' => true)),
        array('resolution'),
    )
);
?>
