<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Quotes module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once 'modules/ModuleBuilder/Module/StudioModule.php' ;

class LeadsStudioModule extends StudioModule
{
     function __construct ($module)
    {
         parent::__construct ($module);
    }

    function getLayouts()
    {
        $layouts = parent::getLayouts();
        
        $layouts = array_merge(array( translate("LBL_CONVERTLEAD", "Leads") => array ( 
            'name' => translate("LBL_CONVERTLEAD", "Leads") , 
            'action' => "module=Leads&action=Editconvert&to_pdf=1" , 
            'imageTitle' => 'icon_ConvertLead' , 
            'help' => 'layoutsBtn' , 
            'size' => '48')), $layouts);
        
        return $layouts ;

    }
}