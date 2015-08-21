<?php
if(!defined('sugarEntry') || !sugarEntry) { die('Not A Valid Entry Point'); }

require_once("modules/Administration/QuickRepairAndRebuild.php");
$newRepair = new RepairAndClear();
$newRepair->module_list=array();
$newRepair->clearTpls();

?>