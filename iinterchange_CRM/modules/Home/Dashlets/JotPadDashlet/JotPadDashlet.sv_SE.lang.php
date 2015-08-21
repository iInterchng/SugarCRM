<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




















$defaultText = 
<<<EOQ
Welcome to Sugar 5.0<br /><br />

New features include:<br />
* Multiple homepages with customizable dashlets<br />
* Improved Dashboards and Charts<br />
* New Email Client for smoother communication<br />
* Module Builder to extend your SugarCRM deployment<br />
* Improved Sugar Studio and Access Control Features<br /><br />

For more information on getting started, please visit Sugar University.
EOQ
;


$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => 'JotPad',
                                         'LBL_DESCRIPTION'      => 'En dashlet för dina anteckningar',
                                         'LBL_SAVING'           => 'Sparar JotPad ...',
                                         'LBL_SAVED'            => 'Sparat',
                                         'LBL_CONFIGURE_TITLE'  => 'Titel',
                                         'LBL_CONFIGURE_HEIGHT' => 'Höjd (1 - 300)',
                                         'LBL_DBLCLICK_HELP'    => 'Dubbelklicka nedan för att editera.',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,
);
?>