<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/String/StringExpression.php");
/**
 * <b>strToLower(String s)</b><br/>
 * Returns <i>s</i> converted to lower case.<br/>
 * ex: <em>strToLower("Hello World")</em> = "hello world"
 */
class StrToLowerExpression extends StringExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {
		$param =$this->getParameters();
		if (is_array($param))
			$param = $param[0];
		return strtolower($param->evaluate());
	}

	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var string = this.getParameters().evaluate() + "";
			return string.toLowerCase();
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "strToLower";
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}
?>