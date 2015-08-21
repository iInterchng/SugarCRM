<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $current_user;

$dashletData['SugarFavoritesDashlet']['searchFields'] = array();
$dashletData['SugarFavoritesDashlet']['columns'] =  array(   
                                                    'record_name' => array('width' => '29', 
                                                                         'label' => 'LBL_LIST_NAME',
                                                                         'sortable' => false,
                                                                         'dynamic_module' => 'MODULE',
                                                                         'link' => true,
                                                                         'id' => 'RECORD_ID',
                                                                         'ACLTag' => 'RECORD_NAME',
                                                                         'related_fields' => array('record_id', 'module'),
																		 'default' => true,
																		),
													
                                                      'module' => array('width'   => '15', 
                                                                              'label'   => 'LBL_LIST_MODULE',
                                                                              'default' => true),
                                                      'date_entered' => array('width'   => '15', 
                                                                              'label'   => 'LBL_DATE_ENTERED',
                                                                              'default' => true),
                                               );