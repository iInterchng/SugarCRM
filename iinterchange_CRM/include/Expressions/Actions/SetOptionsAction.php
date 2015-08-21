<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Actions/AbstractAction.php");

class SetOptionsAction extends AbstractAction{
	protected $keysExpression =  "";
	protected $labelsExpressions =  "";
	
	function SetOptionsAction($params) {
        $this->params = $params;
		$this->targetField = $params['target'];
		$this->keysExpression = str_replace("\n", "",$params['keys']);
		$this->labelsExpression = str_replace("\n", "",$params['labels']);
	}
	
	/**
	 * Returns the javascript class equavalent to this php class
	 *
	 * @return string javascript.
	 */
	static function getJavascriptClass() {
		return  "
		SUGAR.forms.SetOptionsAction = function(target, keyExpr, labelExpr) {
			this.keyExpr = keyExpr;
			this.labelExpr = labelExpr;
			this.target = target;
		};
				
		SUGAR.util.extend(SUGAR.forms.SetOptionsAction, SUGAR.forms.AbstractAction, {
			exec: function(context) {
			    if (typeof(context) == 'undefined')
                    context = this.context;
				var field = SUGAR.forms.AssignmentHandler.getElement(this.target);
				if ( field == null )	return null;		
				
				var keys = this.evalExpression(this.keyExpr, context);
				var labels = this.evalExpression(this.labelExpr, context);
				var selected = '';
				
				if (keys instanceof Array && field.options != null) 
				{
					// get the options of this select
					var options = field.options;
					
					for (var i = 0; i < options.length; i++) {
					    if (options[i].selected)
					    	selected = options[i].value;
					}
					
					// empty the options
					while (options.length > 0) {
						field.remove(options[0]);
					}

					if (typeof(labels) == 'string') //get translated values from Sugar Language
					{
					    var fullSet = SUGAR.language.get('app_list_strings', labels);
					    labels = [];
					    for (var i in keys)
					    {
					        labels[i] = fullSet[keys[i]];
					    }
					}
					
					var new_opt;
					for (var i in keys) {
						if (labels instanceof Array)
						{
							if (typeof keys[i] == 'string')
							{
								if (typeof labels[i] == 'string') {
									new_opt = options[options.length] = new Option(labels[i], keys[i], keys[i] == selected);
								}
								else 
								{
									new_opt = options[options.length] = new Option(keys[i], keys[i], keys[i] == selected);
								}
							}
						}
						else //Use the keys as labels
						{
							if (typeof keys[0] == 'undefined') {
								if (typeof(keys[i]) == 'string') {
									new_opt = options[options.length] = new Option(keys[i], i);
								}
							} else {
								if (typeof(value[i]) == 'string') {
									new_opt = options[options.length] = new Option(keys[i], keys[i]);
								}
							}
						}
						if (keys[i] == selected)
							new_opt.selected = true;
					
					}
					
					if(field.value != selected)
						SUGAR.forms.AssignmentHandler.assign(this.target, field.value);
					
					//Hide fields with empty lists
					var empty =  field.options.length == 1 && field.value == '';
					var visAction = new SUGAR.forms.VisibilityAction(this.target, empty ? 'false' : 'true', '');
					visAction.setContext(context);
					visAction.exec();
					
					if ( SUGAR.forms.AssignmentHandler.ANIMATE && !empty)
						SUGAR.forms.FlashField(field);
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
		return  "new SUGAR.forms.SetOptionsAction('{$this->targetField}','{$this->keysExpression}', '{$this->labelsExpression}')";
	}
	
	
	
	/**
	 * Applies the Action to the target.
	 *
	 * @param SugarBean $target
	 * A NoOP on the PHP side for setoptions
	 */
	function fire(&$target) {
		
		/*$expr = Parser::replaceVariables($this->expression, $target);
		$result = Parser::evaluate($expr)->evaluate();
		$field = $this->targetField;
		$target->$field = $result;*/
	}
	
	static function getActionName() {
		return "SetOptions";
	}
}
