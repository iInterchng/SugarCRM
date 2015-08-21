<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/String/StringExpression.php");
/**
 * <b>toString(val)</b><br/>
 * Converts the given value to a string.<br>
 * ex: <i>toString(5.5)</i> = "5.5"
 */
class DefineStringExpression extends StringExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {
		return $this->getParameters()->evaluate() . "";
	}

	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			return this.getParameters().evaluate() + "";
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return array("toString", "string");
	}

	/**
	 * Returns the exact number of parameters needed.
	 */
	static function getParamCount() {
		return 1;
	}

	/**
	 * Any generic type will suffice.
	 */
	function getParameterTypes() {
		return array("generic");
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}
?>