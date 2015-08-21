<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$listViewDefs['KBDocuments'] = array(
	'KBDOCUMENT_NAME' => array(
		'width' => '25', 
        'label' => 'LBL_ARTICLE_TITLE', 
		'link' => true,
        'default' => true,
        'tablename'=>'KBDocuments',
        ),

    'VIEWS_NUMBER' => array(
        'width' => '5', 
        'label' => 'LBL_LIST_VIEWING_FREQUENCY',
        'tablename'=>'KBDocuments',
        'default' => true
        ),   

     'KBDOC_APPROVER_NAME' => array (
        'width' => '10', 
        'label' =>  'LBL_LIST_KBDOC_APPROVER_NAME',
        'default' => true,
        'tablename'=>'KBDocuments',
        ),

    'ASSIGNED_USER_NAME' => array(
        'width' => '10', 
        'label' => 'LBL_ARTICLE_AUTHOR_LIST',
        'default' => true,
        'tablename'=>'KBDocuments',
        ),

    'DATE_ENTERED' => array(
        'width' => '10', 
        'label' => 'LBL_DATE_ENTERED',
        'default' => true,
        'tablename'=>'KBDocuments',
        ),  
         

     );
?>