<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
global $app_strings;

$dashletMeta['<module_name>Dashlet'] = array('module'		=> '<module_name>',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', '<module_name>'), 
                                          'description' => 'A customizable view into <module_name>',
                                          'icon'        => 'icon_<module_name>_32.gif',
                                          'category'    => 'Module Views');