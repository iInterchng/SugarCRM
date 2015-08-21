<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/Expressions/Expression/Generic/GenericExpression.php');


class SugarFieldExpression extends GenericExpression
{

    function __construct($varName){
        $this->varName = $varName;
    }
    /**
	 * Returns the entire enumeration bare.
	 */
	function evaluate() {
		if (empty($this->varName))
            return "";
        $fieldName = $this->varName;

        if (!isset($this->context))
        {
            //If we don't have a context provided, we have to guess. This can be a large performance hit.
            $this->setContext();
        }

        if (empty($this->context->field_defs[$fieldName]))
            throw new Exception("Unable to find field {$fieldName}");

        $def = $this->context->field_defs[$fieldName];
        $timedate = TimeDate::getInstance();
        switch($def['type']) {
            case 'datetime':
            case 'datetimecombo':
                if(empty($this->context->$fieldName)) {
                    throw new Exception("attempt to get date from empty field: {$fieldName}");
                }
                $date = $timedate->fromDb($this->context->$fieldName);
                if(empty($date)) {
                     throw new Exception("attempt to convert invalid value to date: {$this->context->$fieldName}");
                }
                $timedate->tzUser($date);
                return $date;
            case 'date':
                if(empty($this->context->$fieldName)) {
                     throw new Exception("attempt to get date from empty field: {$fieldName}");
                }
                $date = $timedate->fromDbDate($this->context->$fieldName);
                if(empty($date)) {
                    throw new Exception("attempt to convert invalid value to date: {$this->context->$fieldName}");
                }
                $timedate->tzUser($date);
                return $date;
            case 'time':
                if(empty($this->context->$fieldName)) {
                     throw new Exception("attempt to get date from empty field: {$fieldName}");
                }
                return $timedate->fromUserTime($timedate->to_display_time($this->context->$fieldName));
            case 'bool':
                if (!empty($this->context->$fieldName))
                    return AbstractExpression::$TRUE;
                return AbstractExpression::$FALSE;
        }
        return $this->context->$fieldName;
	}

    protected function setContext()
    {
        if (empty($this->context) && !empty($_REQUEST['module']) && !empty($_REQUEST['record']))
        {
            $module = $_REQUEST['module'];
            $id = $_REQUEST['record'];
            $focus = $this->getBean($module);
            $focus->retrieve($id);
            $this->context = $focus;
        }
    }

    protected function getBean($module)
    {
       global $beanList;
       if (empty($beanList[$module]))
           throw new Exception("No bean for module $module");
       $bean = $beanList[$module];
       return new $bean();
    }




	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
		    var varName = this.getParameters().evaluate();
			return SUGAR.forms.AssignmentHandler.getValue(varName);
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return array("sugarField");
	}

	/**
	 * The first parameter is a number and the second is the list.
	 */
	function getParameterTypes() {
		return array(AbstractExpression::$STRING_TYPE);
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 1;
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}

?>