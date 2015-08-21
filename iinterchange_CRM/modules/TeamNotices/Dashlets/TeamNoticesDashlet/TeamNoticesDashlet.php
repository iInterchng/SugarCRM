<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/Dashlets/Dashlet.php');

class TeamNoticesDashlet extends Dashlet
{
    public $isRefreshable = false;
    public $hasScript     = true;

    public function __construct($id)
    {
        parent::Dashlet($id);
        $this->title = translate('LBL_MODULE_NAME', 'TeamNotices');
    }

    public function displayScript()
    {
    }

    public function display()
    {
        $data = array();


        $ss = new Sugar_Smarty();


        $focus = new TeamNotice();

        $today = db_convert("'".TimeDate::getInstance()->nowDbDate()."'", 'date');
        $query = $focus->create_new_list_query("date_start",$focus->table_name.".date_start <= $today and ".$focus->table_name.".date_end >= $today and ".$focus->table_name.'.status=\'Visible\'');

        if ( $result = $focus->db->query($query) )
            while ( $row = $focus->db->fetchByAssoc($result) )
                $data[] = $row;

        $ss->assign("data", $data);

        return parent::display() . $ss->fetch('modules/TeamNotices/Dashlets/TeamNoticesDashlet/TeamNoticesDashlet.tpl');
    }
}
