<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

define('PACKAGE_MANAGER_DOWNLOAD_SERVER', 'https://depot.sugarcrm.com/depot/');
define('PACKAGE_MANAGER_DOWNLOAD_PAGE', 'download.php');
define('PACKAGE_MANAGER_DOWNLOAD_PATH', '../'.$GLOBALS['sugar_config']['upload_dir']);
class PackageManagerDownloader{
	
	/**
	 * Using curl we will download the file from the depot server
	 * 
	 * @param session_id		the session_id this file is queued for
	 * @param file_name			the file_name to download
	 * @param save_dir			(optional) if specified it will direct where to save the file once downloaded
	 * @param download_sever	(optional) if specified it will direct the url for the download
	 * 
	 * @return the full path of the saved file
	 */
	function download($session_id, $file_name, $save_dir = '', $download_server = ''){
		if(empty($save_dir)){
			$save_dir = PACKAGE_MANAGER_DOWNLOAD_PATH;
		}
		if(empty($download_server)){
			$download_server = PACKAGE_MANAGER_DOWNLOAD_SERVER;
		}
		$download_server .= PACKAGE_MANAGER_DOWNLOAD_PAGE;
		$ch = curl_init($download_server . '?filename='. $file_name);
		$fp = sugar_fopen($save_dir . $file_name, 'w');
		curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID='.$session_id. ';');
		curl_setopt($ch, CURLOPT_FILE, $fp);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_exec($ch);
		curl_close($ch);
		fclose($fp);
		return $save_dir . $file_name;
	}
}
?>