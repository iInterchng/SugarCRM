<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$connector_strings = array (
        'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfoperson/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; 向全球五百万的公司的四百五十万的商业人士提供有质量的信息 . 了解更多.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',    
    
    'LBL_SEARCH_FIELDS_INFO' => 'Zoominfo&#169 个人支持一下字段; API: 名, 姓以及电子邮件地址.',    
    
    	'LBL_ID' => '编号',
	'LBL_EMAIL' => '电子邮件地址',
	'LBL_FIRST_NAME' => '名',
	'LBL_LAST_NAME' => '姓',
	'LBL_JOB_TITLE' => '职称',
	'LBL_IMAGE_URL' => '图片URL',
	'LBL_SUMMARY_URL' => '总括 URL',
	'LBL_COMPANY_NAME' => '公司名称',
	'LBL_ZOOMPERSON_URL' => 'Zoominfo个人 URL',
	'LBL_DIRECT_PHONE' => '直拨电话',
	'LBL_COMPANY_PHONE' => '公司电话e',
	'LBL_FAX' => '传真',

    'LBL_CURRENT_JOB_TITLE' => '目前职称',
    'LBL_CURRENT_JOB_START_DATE' => '目前工作的开始日期',
	'LBL_CURRENT_JOB_COMPANY_NAME' => '目前所在的公司名称',
	'LBL_CURRENT_JOB_COMPANY_STREET' => '目前工作所在地的街道名称',
	'LBL_CURRENT_JOB_COMPANY_CITY' => '目前工作所在地的城市',
	'LBL_CURRENT_JOB_COMPANY_STATE' => '目前工作所在地的省份',
	'LBL_CURRENT_JOB_COMPANY_ZIP' => '目前工作所在地的邮编地址',
	'LBL_CURRENT_JOB_COMPANY_COUNTRY_CODE' => '目前工作所在地的国家代码',
	'LBL_CURRENT_INDUSTRY' => '目前的工作产业',
	'LBL_BIOGRAPHY' => '简历',
	'LBL_EDUCATION_SCHOOL' => '学院/大学',                       	
    'LBL_AFFILIATION_TITLE' => '加盟职位',
    'LBL_AFFILIATION_COMPANY_PHONE' => '联营公司电话',
    'LBL_AFFILIATION_COMPANY_NAME' => '联营公司名称',
    'LBL_AFFILIATION_COMPANY_WEBSITE' => '联营公司网站地址',

		'person_search_url' => '个人的搜索查询的网址',
    'person_detail_url' => '个人详细信息的查询网址',
	'partner_code' => '合作伙伴代码',
    'api_key' => 'API Key',
	
		'ERROR_LBL_CONNECTION_PROBLEM' => 'Error: Unable to connect to the server for Zoominfo - Person connector.',
);

?>
