<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $theme;









class Popup_Picker {
	/*
	 * 
	 */
	function Popup_Picker() {
	}
	
	/*
	 * 
	 */
	function _get_where_clause() {
		$where = '';
		if(isset($_REQUEST['query'])) {
			$where_clauses = array();
			append_where_clause($where_clauses, "name", "emails.name");
			append_where_clause($where_clauses, "contact_name", "contacts.last_name");
		
			$where = generate_where_statement($where_clauses);
		}
		
		return $where;
	}
	
	/**
	 *
	 */
	function process_page() {
		global $theme;
		global $mod_strings;
		global $app_strings;
		global $currentModule;
		
		$output_html = '';
		$where = '';
		
		$where = $this->_get_where_clause();
		
		
		
		$name = empty($_REQUEST['name']) ? '' : $_REQUEST['name'];
		$contact_name = empty($_REQUEST['contact_name']) ? '' : $_REQUEST['contact_name'];
		$request_data = empty($_REQUEST['request_data']) ? '' : $_REQUEST['request_data'];
		$hide_clear_button = empty($_REQUEST['hide_clear_button']) ? false : true;
		
		$button  = "<form action='index.php' method='post' name='form' id='form'>\n";

		if(!$hide_clear_button) {
			$button .= "<input type='button' name='button' class='button' onclick=\"send_back('','');\" title='"
				.$app_strings['LBL_CLEAR_BUTTON_TITLE']."' accesskey='"
				.$app_strings['LBL_CLEAR_BUTTON_KEY']."' value='  "
				.$app_strings['LBL_CLEAR_BUTTON_LABEL']."  ' />\n";
		}
		$button .= "<input type='submit' name='button' class='button' onclick=\"window.close();\" title='"
			.$app_strings['LBL_CANCEL_BUTTON_TITLE']."' accesskey='"
			.$app_strings['LBL_CANCEL_BUTTON_KEY']."' value='  "
			.$app_strings['LBL_CANCEL_BUTTON_LABEL']."  ' />\n";
		$button .= "</form>\n";

		$form = new XTemplate('modules/Emails/Popup_picker.html');
		$form->assign('MOD', $mod_strings);
		$form->assign('APP', $app_strings);
		$form->assign('THEME', $theme);
		$form->assign('MODULE_NAME', $currentModule);
		$form->assign('NAME', $name);
		$form->assign('CONTACT_NAME', $contact_name);
		$form->assign('request_data', $request_data);
		
		ob_start();
		insert_popup_header($theme);
		$output_html .= ob_get_contents();
		ob_end_clean();
		
		$output_html .= get_form_header($mod_strings['LBL_SEARCH_FORM_TITLE'], '', false);
		
		$form->parse('main.SearchHeader');
		$output_html .= $form->text('main.SearchHeader');
		
		// Reset the sections that are already in the page so that they do not print again later.
		$form->reset('main.SearchHeader');

		// create the listview
		$seed_bean = new Email();
		$ListView = new ListView();
		$ListView->show_export_button = false;
		$ListView->process_for_popups = true;
		$ListView->setXTemplate($form);
		$ListView->setHeaderTitle($mod_strings['LBL_LIST_FORM_TITLE']);
		$ListView->setHeaderText($button);
		$ListView->setQuery($where, '', 'name', 'EMAIL');
		$ListView->setModStrings($mod_strings);

		ob_start();
		$ListView->processListView($seed_bean, 'main', 'EMAIL');
		$output_html .= ob_get_contents();
		ob_end_clean();
				
		$output_html .= insert_popup_footer();
		return $output_html;
	}
} // end of class Popup_Picker
?>