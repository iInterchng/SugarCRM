<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
global $app_strings;

$dashletMeta['SugarNewsDashlet'] = array('module'		=> 'Home',
                                          'title'       => translate('LBL_DASHLET_SUGAR_NEWS', 'Home'),
                                          'description' => 'A customizeable portal page',
                                          'icon'        => 'themes/default/images/icon_SugarNews_32.gif',
                                          'category'    => 'Tools');