<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/Expressions/Expression/Numeric/NumericExpression.php');

/**
 * <b>dayofweek(Date d)</b><br>
 * Returns the day of week that <i>d</i> falls on.<br/>
 * Sun = 0, Mon = 1, ... , Sat = 6
 */
class DayOfWeekExpression extends NumericExpression
{
	/**
	 * Returns day of week for the date.
	 */
	function evaluate() {
		$params = DateExpression::parse($this->getParameters()->evaluate());
        if(!$params) {
            return false;
        }
		return $params->day_of_week;
	}


	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var time = this.getParameters().evaluate();
			return new Date(time).getDay();
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "dayofweek";
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 1;
	}

    /**
	 * All parameters have to be a date.
	 */
	function getParameterTypes() {
		return array(AbstractExpression::$DATE_TYPE);
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}

?>