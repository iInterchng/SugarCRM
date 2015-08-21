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

$dashletMeta['SugarFeedDashlet'] = array('module'		=> 'SugarFeed',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'SugarFeed'), 
                                          'description' => 'A customizable view into Sugar_Feed',
                                          'icon'        => 'themes/default/images/icon_SugarFeed_32.gif',
                                          'dynamic_hide' => true,
                                          'category'    => 'Tools');