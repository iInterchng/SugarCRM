<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$listViewDefs['KBSearch'] = array(
    'KBDOCUMENT_NAME' => array(
        'width' => '25', 
        'label' => 'LBL_ARTICLE_TITLE', 
        'link' => true,
        'default' => true,
        'tablename'=>'kbdocuments',
        ),

    'VIEWS_NUMBER' => array(
        'width' => '5', 
        'label' => 'LBL_LIST_VIEWING_FREQUENCY',
        'tablename'=>'kbdocuments',
        'default' => true
        ),   

     'KBDOC_APPROVER_NAME' => array (
        'width' => '10', 
        'label' =>  'LBL_LIST_KBDOC_APPROVER_NAME',
        'default' => true,

        ),

    'ASSIGNED_USER_NAME' => array(
        'width' => '10', 
        'label' => 'LBL_ARTICLE_AUTHOR_LIST',
        'default' => true,
        ),

    'DATE_ENTERED' => array(
        'width' => '10', 
        'label' => 'LBL_DATE_ENTERED',
        'default' => true,
        'tablename'=>'kbdocuments',
        ),  
         

     );
?>
