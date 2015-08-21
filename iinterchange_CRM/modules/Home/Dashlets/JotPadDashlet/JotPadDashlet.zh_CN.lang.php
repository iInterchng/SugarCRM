<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$defaultText = 
<<<EOQ
欢迎来到 Sugar 5.5<br>

<br>
新增加的功能包括：<br>
<br>
* 使用客户话订制新增加栏定义多个主页.<br>
* 改进的统计图和图表.<br>
* 新邮件客户可以顺畅沟通<br>
* 模块生成器可以扩展Sugar的部署<br>
* 改善Sugar工作室和访问控制功能<br>
<br>
更多详细信息，请访问Sugar大学.<br>
<br>
EOQ
;

$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => '记事本',
                                         'LBL_DESCRIPTION'      => '保留记录的新增栏',
                                         'LBL_SAVING'           => '保存记事本中...',
                                         'LBL_SAVED'            => '已保存',
                                         'LBL_CONFIGURE_TITLE'  => '标题',
                                         'LBL_CONFIGURE_HEIGHT' => '高度（1 - 300）',
                                         'LBL_DBLCLICK_HELP'    => '双击下面区域进入编辑',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,


);
?>