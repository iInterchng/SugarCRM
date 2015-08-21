<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/Numeric/NumericExpression.php");

/**
 * <b>Log(number, base)</b><br/>
 * Returns the supplied </i>base</i> Log of <i>number</i>.<br>
 * ex: <em>log(100, 10)</em> = 2
 */
class LogExpression extends NumericExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {
		$params = $this->getParameters();
        $base = $params[1]->evaluate();
        $value = $params[0]->evaluate();
        return log( $value ) / log ( $base );
	}
	
	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
		      var params = this.getParameters();

            var base = params[1].evaluate();
            var value = params[0].evaluate();
            return Math.log( value ) / Math.log ( base );
EOQ;
	}
	
	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "log";
	}
	
	/**
	 * Returns the exact number of parameters needed.
	 */
	static function getParamCount() {
		return 2;
	}
}
?>