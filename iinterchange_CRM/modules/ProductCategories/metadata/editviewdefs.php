<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['ProductCategories']['EditView'] = array(
    'templateMeta' => array('form' => array('buttons'=>array('SAVE', 
                                            array('customCode' => '<input class="button" type="submit" value="{$APP.LBL_SAVE_NEW_BUTTON_LABEL}" onclick="this.form.action.value=\'Save\'; this.form.isDuplicate.value=\'true\'; this.form.return_action.value=\'EditView\'; return check_form(\'EditView\');" accesskey="{$APP.LBL_SAVE_NEW_BUTTON_KEY}" title="{$APP.LBL_SAVE_NEW_BUTTON_TITLE}"/>')
                                            )),
                            'maxColumns' => '2', 
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'), 
                                            array('label' => '10', 'field' => '30')
                                            ),
    'javascript' => '<script language="javascript" type="text/javascript">' .
    'function get_popup() {ldelim}
		var parent_name = document.EditView.parent_name.value;
    	var parent_id = document.EditView.parent_id.value;
		var button_query = "index.php?module=ProductCategories&action=Popup&html=Popup_picker&tree=CatCat&form=EditView" +"&parent_name=" + parent_name + "&parent_category_id=" + parent_id ;
 		var button_params = "width=600,height=400,resizable=1,scrollbars=1";
		window.open(button_query + "&query=true", "Test", button_params);
	{rdelim}</script>',
),
 'panels' =>array (
  'default' => array (
  
    array (
      array('name'=>'name', 'displayParams'=>array('required'=>true)),
    ),
  
      
    array (
       array('name'=>'parent_id', 
             'customCode'=>'<input name="type" type="hidden" value="{$fields.type.value}">' .
             		       '<input name="parent_name" readonly type="text" value="{$fields.parent_name.value}">' .
             		       '<input name="parent_id" type="hidden" value="{$fields.parent_id.value}">' .
             		       '<input class="button" type="button" onclick="return get_popup();" language="javascript" name="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" tabindex="2" accesskey="{$APP.LBL_SELECT_BUTTON_KEY}" title="{$APP.LBL_SELECT_BUTTON_TITLE}"/>' .
             		       '<input class="button" type="button" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" name="button" onclick="this.form.parent_name.value = \'\';" language="javascript" accesskey="{$APP.LBL_CLEAR_BUTTON_KEY}" title="{$APP.LBL_CLEAR_BUTTON_TITLE}"/>'
             ),
    ),
    
    
    array (
      array('name'=>'description'),
    ),
    
    array (
       array('name'=>'list_order', 
             'displayParams'=>array('size'=>5, 'postCode'=>'&nbsp;{$MOD.NTC_LIST_ORDER}', 'required'=>true)),
    ),
  ),
)


);
?>