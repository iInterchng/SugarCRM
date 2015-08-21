<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Cases']['searchform']['basic'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            'formId' => 'CaseSearchForm',
                            'formName' => 'CaseSearchForm',
                           ),
    'data' => array(
        array('case_number', 'name'),
        array('status', 'priority'),
    )
);
?>
