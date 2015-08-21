<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/Numeric/NumericExpression.php");
/**
 * <b>floor(Number n)</b><br>
 * Returns <i>n</i> rounded down to the next integer.<br/>
 * ex: <i>floor(5.73)</i> = 5
 */
class FloorExpression extends NumericExpression {
	/**
	 * Returns the negative of the expression that it contains.
	 */
	function evaluate() {
		return floor( $this->getParameters()->evaluate() );
	}
	
	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			return Math.floor( this.getParameters().evaluate() );
EOQ;
	}
	
	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "floor";
	}
	
	/**
	 * Returns the exact number of parameters needed.
	 */
	static function getParamCount() {
		return 1;
	}
}
?>