	<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
// NOTE => manifest to install new field type in sugar
$manifest = array (
	'acceptable_sugar_versions' => array ( 
		"exact_matches" => array (), 
		"regex_matches" => array (0 => "6\\.*\\.*")
	),
	'acceptable_sugar_flavors' => array (
		'OS', 'PRO', 'ENT','CE'
	),
          'readme'=>'',
          'author' => 'David Boris',
          'description' => 'New field WYSIWYG',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'WYSIWYG',
          'published_date' => '2010-10-23 10:00:42',
          'type' => 'module',
          'version' => '1.1 Beta',
          );
$installdefs = array (
  'id' => 'WYSIWYG',
  'relationships' => 
  array (
  ),
'post_uninstall' => array(
	0 => '<basepath>/scripts/post_uninstall.php',
),
   'copy' => 
  array (
    0 => 
    array (
     		'from'=> '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateWysiwyg.php',
    	 	'to'=> 'custom/modules/DynamicFields/templates/Fields/TemplateWysiwyg.php',
    ),
     1 => 
    array (
        'from'=> '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/wysiwyg.php',
        'to'=> 'custom/modules/DynamicFields/templates/Fields/Forms/wysiwyg.php',
    ),
     2 => 
    array (
        'from'=> '<basepath>/custom/modules/DynamicFields/templates/Fields/Forms/wysiwyg.tpl',
        'to'=> 'custom/modules/DynamicFields/templates/Fields/Forms/wysiwyg.tpl',
    ),
    3 => 
    array (
        'from'=> '<basepath>/include/Smarty/plugins/modifier.htmlparser.php',
        'to'=> 'include/Smarty/plugins/modifier.htmlparser.php',
    ),
    4 => 
    array (
        'from'=> '<basepath>/include/SugarFields/Fields/Wysiwyg/',
        'to'=> 'include/SugarFields/Fields/Wysiwyg',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/WYSIWYG.en_us.lang.php',
      'to_module' => 'ModuleBuilder',
      'language' => 'en_us',
    ),
  ),
);