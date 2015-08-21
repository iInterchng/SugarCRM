<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*
 * Created on May 29, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  $searchdefs['EmailTemplates'] = array(
					'templateMeta' => array(
							'maxColumns' => '2', 
  							'maxColumnsBasic' => '2',
                            'widths' => array('label' => '10', 'field' => '30'),                 
                           ),
                    'layout' => array(  					
						'basic_search' => array(
						 	'name',
							),
					    'advanced_search' => array('name','subject','description',
                                					    'assigned_user_id' => 
                                					      array (
                                					        'name' => 'assigned_user_id',
                                					        'type' => 'enum',
                                					        'label' => 'LBL_ASSIGNED_TO',
                                					        'function' => 
                                					         array (
                                    					          'name' => 'get_user_array',
                                    					          'params' => array ( 0 => false,), ),
                                					        'default' => true
                                					      ),
					    )
					),
 			   );
?>
