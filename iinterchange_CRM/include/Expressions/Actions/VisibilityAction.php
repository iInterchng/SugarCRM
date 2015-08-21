<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Actions/AbstractAction.php");

class VisibilityAction extends AbstractAction{
	protected $targetField = array();
	protected $expression = "";
	
	function VisibilityAction($params) {
        $this->params = $params;
		$this->targetField = $params['target'];
		$this->expression = str_replace("\n", "",$params['value']);
		$this->view = isset($params['view']) ? $params['view'] : "";
	}
	
	/**
	 * Returns the javascript class equavalent to this php class
	 *
	 * @return string javascript.
	 */
	static function getJavascriptClass() {
		return "
		SUGAR.forms.VisibilityAction = function(target, expr, view)
		{
			this.target = target;
			this.expr	= 'cond(' + expr + ', \"\", \"none\")';
			this.view = view;
			if (!SUGAR.forms.VisibilityAction.initialized)
			{
			    var head = document.getElementsByTagName('head')[0];
                var cssdef = 'td.vis_action_hidden * { visibility:hidden}'
			    var newStyle = document.createElement('style');
                newStyle.setAttribute('type', 'text/css');
				if (newStyle.styleSheet)
			        newStyle.styleSheet.cssText = cssdef;
			    else
			        newStyle.innerHTML = cssdef;
			    head.appendChild(newStyle);
                SUGAR.forms.VisibilityAction.initialized = true;
			}
		}
		
		/**
		 * Triggers this dependency to be re-evaluated again.
		 */
		SUGAR.util.extend(SUGAR.forms.VisibilityAction, SUGAR.forms.AbstractAction, {
		
			/**
			 * Triggers the style dependencies.
			 */
			exec: function(context)
			{
				if (typeof(context) == 'undefined')
                    context = this.context;
                try {
                    var Dom = YAHOO.util.Dom;
                    var exp = this.evalExpression(this.expr, context);
					var hide =  exp == 'none' || exp == 'hidden';
					var target = SUGAR.forms.AssignmentHandler.getElement(this.target);
					if (target != null) {
					    var inv_class = 'vis_action_hidden';
						var inputTD = Dom.getAncestorByTagName(target, 'TD');
						var labelTD = Dom.getPreviousSiblingBy(inputTD, function(e){
							if (e.tagName == 'TD') return true;
							return false;
						});
						this.wrapContent(labelTD);
						this.wrapContent(inputTD);
						var wasHidden = Dom.hasClass(labelTD, inv_class);
						if (hide)
						{
						    Dom.addClass(labelTD, inv_class);
						    Dom.addClass(inputTD, inv_class);
						}
						else
						{
						    Dom.removeClass(labelTD, inv_class);
						    Dom.removeClass(inputTD, inv_class);
						    if (wasHidden && this.view == 'EditView')
						        SUGAR.forms.FlashField(target);
						}
						this.checkRow(Dom.getAncestorByTagName(inputTD, 'TR'), inv_class);
					}
				} catch (e) {if (console && console.log) console.log(e);}
			},
			//we need to wrap plain text nodes in a span in order to hide the contents without hiding the TD itesef
			wrapContent: function(el)
			{
			    if (el && this.containsPlainText(el))
			    {
			        var span = document.createElement('SPAN');
			        var nodes = [];
			        for(var i = 0; i < el.childNodes.length ; i++)
                    {
                        nodes[i] = el.childNodes[i];
                    }
                    for(var i = 0 ; i < nodes.length; i++)
                    {
                        span.appendChild(nodes[i]);
                    }
			        el.appendChild(span);
			    }
			},
			containsPlainText: function(el)
			{
                for(var i = 0; i < el.childNodes.length; i++)
                {
                    var node = el.childNodes[i];
                    if (node.nodeName == '#text' && YAHOO.lang.trim(node.textContent) != '') {
                        return true;
                    }
                }
			    return false;
			},
			checkRow: function(el, inv_class)
			{
                var hide = true;
                for(var i = 0; i < el.children.length; i++)
                {
                    var node = el.children[i];
                    if (!YAHOO.util.Dom.hasClass(node, inv_class)) {
                        hide = false;
                        break;
                    }
                }
                el.style.display = hide ? 'none' : '';
			}

		});";
	}

	/**
	 * Returns the javascript code to generate this actions equivalent. 
	 *
	 * @return string javascript.
	 */
	function getJavascriptFire() {
		return "new SUGAR.forms.VisibilityAction('{$this->targetField}','{$this->expression}', '{$this->view}')";
	}
	
	/**
	 * Applies the Action to the target.
	 *
	 * @param SugarBean $target
	 */
	function fire(&$target) {
		require_once("include/Expressions/Expression/AbstractExpression.php");
		$result = Parser::evaluate($this->expression, $target)->evaluate();
		if ($result === AbstractExpression::$FALSE) {
			$target->field_defs[$this->targetField]['hidden'] = true;
		} else 
		{
			$target->field_defs[$this->targetField]['hidden'] = false;
		}
	}
	
	static function getActionName() {
		return "SetVisibility";
	}
	
}
