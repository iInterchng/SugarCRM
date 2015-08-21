<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$popupMeta = array('moduleMain' => 'Project',
						'varName' => 'PROJECT',
						'orderBy' => 'name',
						'whereClauses' => 
							array('name' => 'project.name'),
						'whereStatement' => " project.is_template = 0 ",
						'searchInputs' =>
							array('name')
						);


?>
 
