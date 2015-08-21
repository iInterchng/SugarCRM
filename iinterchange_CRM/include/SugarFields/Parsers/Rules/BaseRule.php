<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


/**
 * BaseRule.php
 * 
 * This is a utility base class to provide further refinement when converting 
 * pre 5.x files to the new meta-data rules.
 
 * @author Collin Lee
 */
 
class BaseRule {

function BaseRule() {
	
}

function preParse($panels, $view) {
   return $panels;
}

function postParse($panels, $view) {
   return $this->parsePanels($panels, $view);
}

function parsePanels($panels, $view) {
   return $panels;
}

function isCustomField($mixed) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match('/.*?_c$/s', $mixed['name'])) {
   	  return true;
   } else if(!is_array($mixed) && isset($mixed) && preg_match('/.*?_c$/s', $mixed)) {
   	  return true;
   }
   return false;
}

function matches($mixed, $regExp) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match($regExp, $mixed['name'])) {
   	  return true;
   } else if(!is_array($mixed) && isset($mixed) && preg_match($regExp, $mixed)) {
   	  return true;
   }
   return false;	
}

function getMatch($mixed, $regExp) {
   if(is_array($mixed) && isset($mixed['name']) && preg_match($regExp, $mixed['name'], $matches)) {
   	  return $matches;
   } else if(!is_array($mixed) && isset($mixed) && preg_match($regExp, $mixed, $matches)) {
   	  return $matches;
   }
   return null;	
}

}

?>
