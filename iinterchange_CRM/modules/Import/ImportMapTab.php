<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: Holds import setting for TSV (Tab Delimited) files
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
 
require_once('modules/Import/ImportMapOther.php');

class ImportMapTab extends ImportMapOther
{
	/**
     * String identifier for this import
     */
    public $name = 'tab';
	/**
     * Field delimiter
     */
    public $delimiter = "\t";
    /**
     * Field enclosure
     */
    public $enclosure;
}


?>
