<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/String/StringExpression.php");
/**
 * <b>strToUpper(String s)</b><br/> 
 * Returns <i>s</i> converted to upper case.<br/>
 * ex: <em>strToLower("Hello World")</em> = "HELLO WORLD"
 */
class StrToUpperExpression extends StringExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {
		$param =$this->getParameters();
		if (is_array($param))
			$param = $param[0];
		return strtoupper($param->evaluate());
	}

	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var string = this.getParameters().evaluate() + "" ;
			return string.toUpperCase();
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "strToUpper";
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}
?>