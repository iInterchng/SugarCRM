<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once ('modules/ModuleBuilder/MB/AjaxCompose.php');
require_once ('include/MVC/View/SugarView.php');
require_once ('modules/ModuleBuilder/parsers/ParserFactory.php');

class ViewProperty extends SugarView
{   
    function ViewProperty()
    {
        $this->init();
    }
    
    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   translate('LBL_MODULE_NAME','Administration'),
    	   ModuleBuilderController::getModuleTitle(),
    	   );
    }

	
    function init () // pseduo-constuctor - given a well-known name to allow subclasses to call this classes constructor
    {
        $this->editModule = (! empty($_REQUEST['view_module'])) ? $_REQUEST['view_module'] : null;
        $this->editPackage = (! empty($_REQUEST['view_package'])) ? $_REQUEST['view_package'] : null;
        $this->id = (! empty($_REQUEST['id'])) ? $_REQUEST['id'] : null;
        $this->subpanel = (! empty($_REQUEST['subpanel'])) ? $_REQUEST['subpanel'] : "";
        $this->properties = array();
        foreach($_REQUEST as $key=>$value)
        {
            if (substr($key,0,4) == 'name')
            {
                $this->properties[substr($key,5)]['name'] = $value;
            }
            if (substr($key,0,2) == 'id')
            {
                $this->properties[substr($key,3)]['id'] = $value;
            }
            if (substr($key,0,5) == 'value')
            {
                $this->properties[substr($key,6)]['value'] = $value;
                // tyoung - now a nasty hack to disable editing of labels which contain Smarty functions - this is envisaged to be a temporary fix to prevent admins modifying these functions then being unable to restore the original complicated value if they regret it
                if (substr($key,6) == 'label')
                {
                    //#29796  , we disable the edit function for sub panel label
                    if (preg_match('/\{.*\}/',$value) || !empty($this->subpanel))
                    {
                        $this->properties[substr($key,6)]['hidden'] = 1;
                    }
                }
            }
            if (substr($key,0,5) == 'title')
            {
                $this->properties[substr($key,6)]['title'] = $value;
            }
        }
     }

    function display()
    {
        global $mod_strings;
    	$ajax = new AjaxCompose();
        $smarty = new Sugar_Smarty();
        if (isset($_REQUEST['MB']) && $_REQUEST['MB'] == "1")
        {
            $smarty->assign("MB", $_REQUEST['MB']);
            $smarty->assign("view_package", $_REQUEST['view_package']);
        }

        $selected_lang = (!empty($_REQUEST['selected_lang'])?$_REQUEST['selected_lang']:$_SESSION['authenticated_user_language']);
		if(empty($selected_lang)){
		    $selected_lang = $GLOBALS['sugar_config']['default_language'];
		}
		$smarty->assign('available_languages', get_languages());
		$smarty->assign('selected_lang', $selected_lang);
		
        ksort($this->properties);

        $smarty->assign("properties",$this->properties);
//        $smarty->assign("id",$this->id);
        
        $smarty->assign("mod_strings",$mod_strings);
        $smarty->assign('APP', $GLOBALS['app_strings']);
        $smarty->assign("view_module", $this->editModule);
        $smarty->assign("subpanel", $this->subpanel);
        if (isset($this->editPackage))
            $smarty->assign("view_package", $this->editPackage);       

        $ajax->addSection('east', translate('LBL_SECTION_PROPERTIES', 'ModuleBuilder'), $smarty->fetch('modules/ModuleBuilder/tpls/editProperty.tpl'));
        echo $ajax->getJavascript();
    }
}