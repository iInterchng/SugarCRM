<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$GLOBALS['studioDefs']['KBDocuments'] = array(
	'LBL_DETAILVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/KBDocuments/DetailView.html',
				'php_file'=>'modules/KBDocuments/DetailView.php',
				'type'=>'DetailView',
				),
	'LBL_EDITVIEW'=>array(
				'template'=>'xtpl',
				'template_file'=>'modules/KBDocuments/EditView.html',
				'php_file'=>'modules/KBDocuments/EditView.php',
				'type'=>'EditView',
				),

);
