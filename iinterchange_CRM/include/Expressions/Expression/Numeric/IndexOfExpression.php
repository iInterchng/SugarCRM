<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/Numeric/NumericExpression.php");
/**
 * <b>indexOf(val, List l)</b><br>
 * Returns the position of <i>val</i> in <i>l</i><br/>
 * or -1 if <i>l</i> does not contain <i>val</i>.<br/>
 * ex: <i>indexOf("a", createList("a", "b", "c"))</i> = 0,<br/>
 * <i>indexOf("foo", createList("a", "b", "c"))</i> = -1
 */
class IndexOfExpression extends NumericExpression
{
	/**
	 * Returns the entire enumeration bare.
	 */
	function evaluate() {
		$params = $this->getParameters();
		$array  = $params[1]->evaluate();
		$value  = $params[0]->evaluate();
		
		for ($i=0; $i < sizeOf($array); $i++) {
			if ($array[$i] == $value) {
				return $i;
			}
		}
		return -1;
	}


	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var params = this.getParameters();
			var arr  = params[1].evaluate();
			var val  = params[0].evaluate();

			for (var i=0; i < arr.length; i++) {
			if (arr[i] == val) {
				return i;
			} 
		}
		return -1;
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "indexOf";
	}

	/**
	 * The first parameter is a number and the second is the list.
	 */
	function getParameterTypes() {
		return array("generic", "enum");
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 2;
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}

?>