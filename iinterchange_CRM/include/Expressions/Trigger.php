<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Dependency.php");
require_once("include/Expressions/Actions/AbstractAction.php");
require_once("include/Expressions/Expression/Parser/Parser.php");
require_once("include/Expressions/Expression/AbstractExpression.php");

class Trigger {
	public $triggerFields = array();
	public $conditionFunction = "";
	static $ValueNotSetError = -1;
	
	function Trigger($condition, $fields = array()) {
		$this->conditionFunction = $condition;
		if (!is_array($fields))
			$fields = array($fields);
		$this->triggerFields = $fields;
	}
	
	function evaluate($target) {
		foreach($this->triggerFields as $field){
			if (!isset($target->$field)) 
			{
				return Trigger::$ValueNotSetError;
			}
		}
		$result = Parser::evaluate($this->conditionFunction, $target)->evaluate();
		if ($result == AbstractExpression::$TRUE){
			return true;
		} else {
			return false;
		}
	}
	
	function getJavascript() {
		$js = "new SUGAR.forms.Trigger([";
		for ($i=0; $i < sizeOf($this->triggerFields); $i++) {
			$js .= "'{$this->triggerFields[$i]}'";
			if ($i < sizeOf($this->triggerFields) - 1){
				$js .= ",";
			}
		}
		$js .= "], '" . str_replace("\n","",$this->conditionFunction) . "')";
		return $js;
	}
	
	function getCondition() {
		return $this->conditionFunction;
	}
}