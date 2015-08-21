<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$connector_strings = array (
        'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; 向全球五百万的公司的四百五十万的商业人士提供有质量的信息 . 了解更多.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',    
    
    'LBL_SEARCH_FIELDS_INFO' => ' Zoominfo&#169 公司支持一下字段; API: 公司名称, 城市, 省以及国家.',
        
    
    	'LBL_COMPANY_ID' => '编号',
	'LBL_COMPANY_NAME' => '公司名称',
    'LBL_STREET' => '街道',
	'LBL_CITY' => '城市',
	'LBL_ZIP' => '邮政编码',
	'LBL_STATE' => '省',
	'LBL_COUNTRY' => '国家',
	'LBL_INDUSTRY' => '工业',
	'LBL_WEBSITE' => '网址',
	'LBL_DESCRIPTION' => '描述',
    'LBL_PHONE' => '电话',
	'LBL_COMPANY_TICKER' => '公司证券',
	'LBL_ZOOMINFO_COMPANY_URL' => '公司简介网址',
	'LBL_REVENUE' => '年收入',
	'LBL_EMPLOYEES' => '雇员',
	
		'company_search_url' => '公司搜索网址',
	'company_detail_url' => '公司详细信息的网址',
    'partner_code' => '合作伙伴代码',
	'api_key' => 'API KEY',
	
		'ERROR_LBL_CONNECTION_PROBLEM' => '失败: 不能连接到Zoominfo的服务器 - Company connector.',
);

?>
