<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/




global $currentModule;

global $mod_strings;
global $app_strings;

global $theme;
global $focus;
global $action;

// focus_list is the means of passing data to a SubPanelView.
global $focus_list;

$button  = "<table cellspacing='0' cellpadding='1' border='0'><form border='0' action='index.php' method='post' name='form' id='form'>\n";
$button .= "<input type='hidden' name='module' value='Contacts'>\n";
if ($currentModule == 'Accounts') $button .= "<input type='hidden' name='account_id' value='$focus->id'>\n<input type='hidden' name='account_name' value='$focus->name'>\n";
$button .= "<input type='hidden' name='return_module' value='".$currentModule."'>\n";
$button .= "<input type='hidden' name='return_action' value='".$action."'>\n";
$button .= "<input type='hidden' name='return_id' value='".$focus->id."'>\n";
$button .= "<input type='hidden' name='action'>\n";
$button .= "<tr><td>&nbsp;</td>";
if ($focus->parent_type == "Accounts") $button .= "<td><input title='".$app_strings['LBL_SELECT_CONTACT_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_SELECT_CONTACT_BUTTON_KEY']."' type='button' class='button' value='".$app_strings['LBL_SELECT_CONTACT_BUTTON_LABEL']."' name='button' LANGUAGE=javascript onclick='window.open(\"index.php?module=Contacts&action=Popup&html=Popup_picker&form=DetailView&form_submit=true&query=true&account_id=$focus->parent_id&account_name=".urlencode($focus->parent_name)."\",\"new\",\"width=600,height=400,resizable=1,scrollbars=1\");'></td>\n";
else $button .= "<td><input title='".$app_strings['LBL_SELECT_CONTACT_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_SELECT_CONTACT_BUTTON_KEY']."' type='button' class='button' value='".$app_strings['LBL_SELECT_CONTACT_BUTTON_LABEL']."' name='button' LANGUAGE=javascript onclick='window.open(\"index.php?module=Contacts&action=Popup&html=Popup_picker&form=DetailView&form_submit=true\",\"new\",\"width=600,height=400,resizable=1,scrollbars=1\");'></td>\n";
$button .= "<td><input title='".$app_strings['LBL_SELECT_USER_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_SELECT_USER_BUTTON_KEY']."' type='button' class='button' value='".$app_strings['LBL_SELECT_USER_BUTTON_LABEL']."' name='button' LANGUAGE=javascript onclick='window.open(\"index.php?module=Users&action=Popup&html=Popup_picker&form=DetailView&form_submit=true\",\"new\",\"width=600,height=400,resizable=1,scrollbars=1\");'></td>\n";
$button .= "</tr></form></table>\n";

// Stick the form header out there.
echo get_form_header($mod_strings['LBL_INVITEE'], $button, false);
$xtpl=new XTemplate ('modules/Emails/SubPanelViewRecipients.html');
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);
$xtpl->assign("RETURN_URL", "&return_module=$currentModule&return_action=DetailView&return_id=$focus->id");
$xtpl->assign("EMAIL_ID", $focus->id);
$xtpl->assign("DELETE_INLINE_PNG",  SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" alt="'.$app_strings['LNK_REMOVE'].'" border="0"'));
$xtpl->assign("EDIT_INLINE_PNG",  SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"'));
$oddRow = true;
foreach($focus_users_list as $user)
{
	$user_fields = array(
		'USER_NAME' => $user->user_name,
		'FULL_NAME' => $user->first_name." ".$user->last_name,
		'ID' => $user->id,
		'EMAIL' => $user->email1,
		'PHONE_WORK' => $user->phone_work
	);

	$xtpl->assign("USER", $user_fields);

	if($oddRow)
    {
        //todo move to themes
		$xtpl->assign("ROW_COLOR", 'oddListRow');
    }
    else
    {
        //todo move to themes
		$xtpl->assign("ROW_COLOR", 'evenListRow');
    }
    $oddRow = !$oddRow;

	$xtpl->parse("users.row");
// Put the rows in.
}

$xtpl->parse("users");
$xtpl->out("users");

$oddRow = true;
print count($focus_contacts_list);

foreach($focus_contacts_list as $contact)
{
	$contact_fields = array(
		'FIRST_NAME' => $contact->first_name,
		'LAST_NAME' => $contact->last_name,
		'ACCOUNT_NAME' => $contact->account_name,
		'ID' => $contact->id,
		'EMAIL' => $contact->email1,
		'PHONE_WORK' => $contact->phone_work
	);

	$xtpl->assign("CONTACT", $contact_fields);

	if($oddRow)
    {
        //todo move to themes
		$xtpl->assign("ROW_COLOR", 'oddListRow');
    }
    else
    {
        //todo move to themes
		$xtpl->assign("ROW_COLOR", 'evenListRow');
    }
    $oddRow = !$oddRow;

	$xtpl->parse("contacts.row");
// Put the rows in.
}

$xtpl->parse("contacts");
$xtpl->out("contacts");

?>