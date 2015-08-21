<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$connector_strings = array (
    
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; 向sugarCRM的用户免费提供最新的公司信息。  欲获取详细信息请访问 <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',    
    
        'LBL_SEARCH_FIELDS_INFO' => '以下字段信息是由Hoovers&#169查询接口提供： 公司名称， 城市， 省， 国家和邮政编码。',
    
    	'LBL_ID' => '编号',
	'LBL_NAME' => '公司名称',
	
	'LBL_STREET' => '街道',
	'LBL_CITY' => '城市',
	'LBL_STATE' => '省',
	'LBL_COUNTRY' => '国家',
	'LBL_ZIP' => '邮政编码',
	'LBL_FINSALES' => '年销售额',
	
		'hoovers_endpoint' => '端点地址',
	'hoovers_wsdl' => 'WSDL地址',
	'hoovers_api_key' => '接口密钥',
);

?>