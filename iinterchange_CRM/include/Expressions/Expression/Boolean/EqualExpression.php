<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Expression/Boolean/BooleanExpression.php");

/**
 * <b>equal(Generic item1, Generic item2)</b><br>
 * Returns true if "item1" is equal to "item2".<br/>
 * ex: <i>equal("one", "one")</i> = true, <i>equal(1, "one")</i> = false
 */
class EqualExpression extends BooleanExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {
		$params = $this->getParameters();

        $a = $params[0]->evaluate();
		$b = $params[1]->evaluate();

        if ( $a == $b )	return AbstractExpression::$TRUE;
		return AbstractExpression::$FALSE;
	}

	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var params = this.getParameters();
			var a = params[0].evaluate();
			var b = params[1].evaluate();
			if ( a == b )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
EOQ;
	}

	/**
	 * Any generic type will suffice.
	 */
	function getParameterTypes() {
		return array(AbstractExpression::$GENERIC_TYPE, AbstractExpression::$GENERIC_TYPE);
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 2;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "equal";
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}
?>