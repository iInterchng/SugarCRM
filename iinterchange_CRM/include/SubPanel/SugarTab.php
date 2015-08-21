<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




class SugarTab
{    
    function SugarTab($type='singletabmenu')
    {
        $this->type = $type;
        $this->ss = new Sugar_Smarty();
    }
    
    function setup($mainTabs, $otherTabs=array(), $subTabs=array(), $selected_group='All')
    {
        global $sugar_version, $sugar_config, $current_user;
        
        $max_tabs = $current_user->getPreference('max_tabs');
        if(!isset($max_tabs) || $max_tabs <= 0) $max_tabs = $GLOBALS['sugar_config']['default_max_tabs'];
        
        $moreTabs = array_slice($mainTabs,$max_tabs);
        /* If the current tab is in the 'More' menu, move it into the visible menu. */
        if(!empty($moreTabs[$selected_group]))
        {
        	$temp = array($selected_group => $mainTabs[$selected_group]);
            unset($mainTabs[$selected_group]);
            array_splice($mainTabs, $max_tabs-1, 0, $temp);
        }
        
        $this->ss->assign('showLinks', 'false');
        $this->ss->assign('sugartabs', array_slice($mainTabs, 0, $max_tabs));
        $this->ss->assign('moreMenu', array_slice($mainTabs, $max_tabs));
        $this->ss->assign('othertabs', $otherTabs);
        $this->ss->assign('startSubPanel', $selected_group);
        $this->ss->assign('sugarVersionJsStr', "?s=$sugar_version&c={$sugar_config['js_custom_version']}");
        if(!empty($mainTabs))
        {
            $mtak = array_keys($mainTabs);
            $this->ss->assign('moreTab', $mainTabs[$mtak[min(count($mtak)-1, $max_tabs-1)]]['label']);
        }
    }
    
    function fetch()
    {
        return $this->ss->fetch('include/SubPanel/tpls/' . $this->type . '.tpl');
    }
    
    function display()
    {
       $this->ss->display('include/SubPanel/tpls/' . $this->type . '.tpl');
    }  
}



?>
