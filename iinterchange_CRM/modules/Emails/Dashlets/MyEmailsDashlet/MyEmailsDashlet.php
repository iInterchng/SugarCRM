<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once('include/Dashlets/DashletGeneric.php');


class MyEmailsDashlet extends DashletGeneric {
    function MyEmailsDashlet($id, $def = null) {
        global $current_user, $app_strings, $dashletData;
		require('modules/Emails/Dashlets/MyEmailsDashlet/MyEmailsDashlet.data.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title']))
            $this->title = translate('LBL_MY_EMAILS', 'Emails');

        $this->searchFields = $dashletData['MyEmailsDashlet']['searchFields'];
        $this->hasScript = true;  // dashlet has javascript attached to it

        $this->columns = $dashletData['MyEmailsDashlet']['columns'];

        $this->seedBean = new Email();
    }

    function process() {
        global $current_language, $app_list_strings, $image_path, $current_user;
        //$where = 'emails.deleted = 0 AND emails.assigned_user_id = \''.$current_user->id.'\' AND emails.type = \'inbound\' AND emails.status = \'unread\'';
        $mod_strings = return_module_language($current_language, 'Emails');

        if ($this->myItemsOnly) {
        	$this->filters['assigned_user_id'] = $current_user->id;
        }
        $this->filters['type'] = array("inbound");
        $this->filters['status'] = array("unread");

        $lvsParams = array();
        $lvsParams['custom_select'] = " ,emails_text.from_addr as from_addr ";
        $lvsParams['custom_from'] = " join emails_text on emails.id = emails_text.email_id ";
        parent::process($lvsParams);
    }

    function displayScript() {
        global $current_language;

        $mod_strings = return_module_language($current_language, 'Emails');
        $casesImageURL = "\"" . SugarThemeRegistry::current()->getImageURL('Cases.gif') . "\"";
        
        $leadsImageURL = "\"" . SugarThemeRegistry::current()->getImageURL('Leads.gif') . "\"";
        
        $contactsImageURL = "\"" . SugarThemeRegistry::current()->getImageURL('Contacts.gif') . "\"";
        
        $bugsImageURL = "\"" . SugarThemeRegistry::current()->getImageURL('Bugs.gif') . "\"";
        
        $tasksURL = "\"" . SugarThemeRegistry::current()->getImageURL('Tasks.gif') . "\"";
        $script = <<<EOQ
        <script>
        function quick_create_overlib(id, theme) {
            return overlib('<a style=\'width: 150px\' class=\'menuItem\' onmouseover=\'hiliteItem(this,"yes");\' onmouseout=\'unhiliteItem(this);\' href=\'index.php?module=Cases&action=EditView&inbound_email_id=' + id + '\'>' +
            "<img border='0' src='" + {$casesImageURL} + "' style='margin-right:5px'>" + '{$mod_strings['LBL_LIST_CASE']}' + '</a>' +
            
            "<a style='width: 150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' href='index.php?module=Leads&action=EditView&inbound_email_id=" + id + "'>" +
                    "<img border='0' src='" + {$leadsImageURL} + "' style='margin-right:5px'>"
                    + '{$mod_strings['LBL_LIST_LEAD']}' + "</a>" +
                    
            "<a style='width: 150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' href='index.php?module=Contacts&action=EditView&inbound_email_id=" + id + "'>" +
                    "<img border='0' src='" + {$contactsImageURL} + "' style='margin-right:5px'>"
                    + '{$mod_strings['LBL_LIST_CONTACT']}' + "</a>" +
             
             "<a style='width: 150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' href='index.php?module=Bugs&action=EditView&inbound_email_id=" + id + "'>"+
                    "<img border='0' src='" + {$bugsImageURL} + "' style='margin-right:5px'>"
                    + '{$mod_strings['LBL_LIST_BUG']}' + "</a>" +
                    
             "<a style='width: 150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' href='index.php?module=Tasks&action=EditView&inbound_email_id=" + id + "'>" +
                    "<img border='0' src='" + {$tasksURL} + "' style='margin-right:5px'>"
                   + '{$mod_strings['LBL_LIST_TASK']}' + "</a>"
            , CAPTION, '{$mod_strings['LBL_QUICK_CREATE']}'
            , STICKY, MOUSEOFF, 3000, CLOSETEXT, '<div style="float:right"><img border=0 src="themes/default/images/close_inline.gif"></div>', WIDTH, 150, CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE'), CLOSECLICK, FGCLASS, 'olOptionsFgClass',
            CGCLASS, 'olOptionsCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olOptionsCapFontClass', CLOSEFONTCLASS, 'olOptionsCloseFontClass');
        }
        </script>
EOQ;
        return $script;
    }
}

?>
