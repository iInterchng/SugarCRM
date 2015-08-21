<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





$listViewDefs['Calendar'] = array(
/*
    'STATUS' => array(
        'width' => '10', 
        'label' => 'LBL_LIST_STATUS', 
        'link' => false,
        'default' => true),              
 */
     'SET_COMPLETE' => array(
        'width' => '1', 
        'label' => 'LBL_LIST_CLOSE', 
        'link' => true,
        'sortable' => false,
        'default' => true,
        'related_fields' => array('status')),
       'NAME' => array(
        'width' => '40', 
        'label' => 'LBL_LIST_SUBJECT', 
        'link' => true,
        'default' => true),
    'DATE_DUE' => array(
        'width' => '15', 
        'label' => 'LBL_LIST_DUE_DATE', 
        'link' => false,
        'default' => true),   
);
?>
