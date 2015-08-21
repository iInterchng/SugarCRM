<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Actions/AbstractAction.php");

class StyleAction extends AbstractAction{
	protected $expression =  "";
	
	function StyleAction($params) {
		$this->targetField = $params['target'];
		$this->attributes = str_replace("\n", "",$params['attrs']);
	}
	
	/**
	 * Returns the javascript class equavalent to this php class
	 *
	 * @return string javascript.
	 */
	static function getJavascriptClass() {
		return  "
/**
 * A style dependency is an object representation of a style change.
 */
SUGAR.forms.StyleAction = function(target, attrs)
{
    this.target = target;
    this.attrs  = attrs;
}

/**
 * Triggers this dependency to be re-evaluated again.
 */
SUGAR.util.extend(SUGAR.forms.StyleAction, SUGAR.forms.AbstractAction, {

    /**
     * Triggers the style dependencies.
     */
    exec: function(context)
    {
        if (typeof(context) == 'undefined')
            context = this.context;
        try {
            // a temp attributes array containing the evaluated version
            // of the original attributes array
            var temp = {};

            // evaluate the attrs, if needed
            for (var i in this.attrs)
            {
                if ( typeof(this.attrs[i]) === 'object' ) {
                    temp[i] = this.evalExpression(this.attrs[i].evaluate, context);
                } else {
                    temp[i] = this.attrs[i];
                }
            }
            SUGAR.forms.AssignmentHandler.setStyle(this.target, temp);
        } catch (e) {return;}
    }
});";
	}

	/**
	 * Returns the javascript code to generate this actions equivalent. 
	 *
	 * @return string javascript.
	 */
	function getJavascriptFire() {
		return  "new SUGAR.forms.SetValueAction('{$this->targetField}','{$this->attributes}')";
	}
	
	
	
	/**
	 * Applies the Action to the target.
	 *
	 * @param SugarBean $target
	 */
	function fire(&$target) {

	}
	
	/**
	 * Returns the definition of this action in array format.
	 *
	 */
	function getDefinition() {
		return array(	
			"action" => $this->getActionName(), 
	        "target" => $this->targetField, 
	        "attrs" => $this->attributes,
	    );
	}
	
	static function getActionName() {
		return "Style";
	}
}