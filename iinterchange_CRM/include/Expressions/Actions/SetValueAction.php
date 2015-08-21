<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Actions/AbstractAction.php");
require_once("include/Expressions/Expression/Date/DateExpression.php");

class SetValueAction extends AbstractAction{
	protected $expression =  "";

	function SetValueAction($params) {
		$this->targetField = $params['target'];
		$this->expression = str_replace("\n", "",$params['value']);
	}

	/**
	 * Returns the javascript class equavalent to this php class
	 *
	 * @return string javascript.
	 */
	static function getJavascriptClass() {
		return  "
		SUGAR.forms.SetValueAction = function(target, valExpr) {
			this.expr = valExpr;
			this.target = target;
		};
		SUGAR.util.extend(SUGAR.forms.SetValueAction, SUGAR.forms.AbstractAction, {
			exec : function(context)
			{
				if (typeof(context) == 'undefined')
				    context = this.context;

				try {
				    var val = this.evalExpression(this.expr, context);
				    context.setValue(this.target, val);
				} catch (e) {
			        context.setValue(this.target, '');
			    }
	       }
		});";
	}


	/**
	 * Returns the javascript code to generate this actions equivalent.
	 *
	 * @return string javascript.
	 */
	function getJavascriptFire() {
		return  "new SUGAR.forms.SetValueAction('{$this->targetField}','" . addslashes($this->expression) . "')";
	}




	/**
	 * Applies the Action to the target.
	 *
	 * @param SugarBean $target
	 */
	function fire(&$target) {
        $result = Parser::evaluate($this->expression, $target)->evaluate();
        $field = $this->targetField;
        $def = array();
        if (!empty($target->field_defs[$field]))
            $def  = $target->field_defs[$field];
        if ($result instanceof DateTime)
        {
            $td = TimeDate::getInstance();
            $result = DateExpression::roundTime($result);
            $target->$field = $td->asDb($result);
        }
        else if (isset($def['type']) && $def['type'] == "bool")
        {
            $target->$field = $result === true || $result === AbstractExpression::$TRUE;
        }
        else
        {
            $target->$field = $result;
        }
	}

	/**
	 * Returns the definition of this action in array format.
	 *
	 */
	function getDefinition() {
		return array(
			"action" => $this->getActionName(),
	        "target" => $this->targetField,
	        "value" => $this->expression,
	    );
	}

	static function getActionName() {
		return "SetValue";
	}
}