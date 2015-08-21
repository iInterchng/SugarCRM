<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
global $app_strings;

$dashletMeta['iFrameDashlet'] = array('module'		=> 'Home',
                                      'title'       => translate('LBL_DASHLET_TITLE', 'Home'),
                                      'description' => 'A customizeable portal page',
                                      'icon'        => 'themes/default/images/icon_iFrames_32.gif',
                                      'category'    => 'Web');