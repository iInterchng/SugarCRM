<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Bugs']['searchform']['basic'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            'formId' => 'BugSearchForm',
                            'formName' => 'BugSearchForm',
                           ),
    'data' => array(
        array('bug_number', 'name'),
        array('resolution', 'status'),
    )
);
?>
