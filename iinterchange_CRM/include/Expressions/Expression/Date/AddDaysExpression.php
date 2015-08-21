<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/Expressions/Expression/Date/DateExpression.php');

/**
 * <b>addDays($date, $days)</b><br>
 * Returns a date object moved forward or backwards by <i>$days</i> days.<br/>
 * ex: <i>addDays(date("1/1/2010"), 5)</i> = "1/6/2010"
 **/
class AddDaysExpression extends DateExpression
{
	/**
	 * Returns the entire enumeration bare.
	 */
	function evaluate() {
        $params = $this->getParameters();

        $date = DateExpression::parse($params[0]->evaluate());
        if(!$date) {
            return false;
        }
        $days = $params[1]->evaluate();
        
        if ($days < 0)
           return $date->modify("$days day");

        return $date->modify("+$days day");
	}


	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
		    var params = this.getParameters();
			var date = SUGAR.util.DateUtils.parse(params[0].evaluate(), 'user');
			var days = params[1].evaluate();

		    //Clone the object to prevent possible issues with other operations on this variable.
		    var d = new Date(date);
		    d.setDate(d.getDate() + days);

		    return d;
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "addDays";
	}

    function getParameterTypes() {
		return array("date", "number");
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