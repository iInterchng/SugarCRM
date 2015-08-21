<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Target for ajax calls to retrieve AdditionalDetails
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('include/MVC/View/SugarView.php');
 
class HomeViewAdditionaldetailsretrieve extends SugarView
{
 	public function display()
 	{
        global $beanList, $beanFiles, $current_user, $app_strings;
        
        $moduleDir = empty($_REQUEST['bean']) ? '' : $_REQUEST['bean'];
        $beanName = empty($beanList[$moduleDir]) ? '' : $beanList[$moduleDir];
        $id = empty($_REQUEST['id']) ? '' : $_REQUEST['id'];
        
        // Bug 40216 - Add support for a custom additionalDetails.php file
        $additionalDetailsFile = $this->getAdditionalDetailsMetadataFile($moduleDir);
        
        if(empty($beanFiles[$beanName]) || 
            empty($id) || !is_file($additionalDetailsFile) ) {
                echo 'bad data';
                die();
        } 
        
        require_once($beanFiles[$beanName]);
        require_once($additionalDetailsFile);
        $adFunction = 'additionalDetails' . $beanName;
        
        if(function_exists($adFunction)) { // does the additional details function exist
            $json = getJSONobj();
            $bean = new $beanName();
            $bean->retrieve($id);
            $bean->ACLFilterFields();
            $arr = array_change_key_case($bean->toArray(), CASE_UPPER);
        
            $results = $adFunction($arr);
            $retArray['body'] = str_replace(array("\rn", "\r", "\n"), array('','','<br />'), $results['string']);
            if(!$bean->ACLAccess('EditView')) $results['editLink'] = '';
            
            $retArray['caption'] = "<div style='float:left'>{$app_strings['LBL_ADDITIONAL_DETAILS']}</div><div style='float: right'>";
            $retArray['caption'] .= ""; 
            $retArray['width'] = (empty($results['width']) ? '300' : $results['width']);              
            echo 'result = ' . $json->encode($retArray);
        }
    }
    
    protected function getAdditionalDetailsMetadataFile(
        $moduleName
        )
    {
        $additionalDetailsFile = 'modules/' . $moduleName . '/metadata/additionalDetails.php';
        if (file_exists('custom/'.$additionalDetailsFile)) {
            $additionalDetailsFile = 'custom/'.$additionalDetailsFile;
        }
        
        return $additionalDetailsFile;
    }
}