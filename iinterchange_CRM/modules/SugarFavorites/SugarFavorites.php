<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



class SugarFavorites extends Basic 
{	
	public $new_schema = true;
	public $module_dir = 'SugarFavorites';
	public $object_name = 'SugarFavorites';
	public $table_name = 'sugarfavorites';
	public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $module;
    public $record_id;
    public $tag;
    public $record_name;
    public $disable_row_level_security = true;
	
	public static function generateStar(
	    $on, 
	    $module, 
	    $record
	    )
	{
	global $app_strings;
		if ($on)
			return '<div class="star" title="'.$app_strings['LBL_REMOVE_FROM_FAVORITES'].'"><div class="on" onclick="DCMenu.removeFromFavorites(this, \''.$module. '\',  \''.$record. '\');">&nbsp;</div></div>';
		else
			return '<div class="star" title="'.$app_strings['LBL_ADD_TO_FAVORITES'].'"><div class="off" onclick="DCMenu.addToFavorites(this, \''.$module. '\',  \''.$record. '\');">&nbsp;</div></div>';
	}
	
	public static function generateGUID(
	    $module, 
	    $record,
	    $user_id = ''
	    )
	{
	    if(empty($user_id))
	        $user_id = $GLOBALS['current_user']->id;
	    
		return md5($module . $record . $user_id);
	}
	
	public static function isUserFavorite(
	    $module, 
	    $record,
	    $user_id = ''
	    )
	{
		$id = SugarFavorites::generateGUID($module, $record, $user_id);

		$focus = new SugarFavorites;
		$focus->retrieve($id);
		
		return !empty($focus->id);
	}

	public static function getUserFavoritesByModule(
	    $module = '',
	    User $user = null
	    )
	{
	    if ( empty($user) )
	        $where = " sugarfavorites.assigned_user_id = '{$GLOBALS['current_user']->id}' ";
	    else
	        $where = " sugarfavorites.assigned_user_id = '{$user->id}' ";
	    
        if ( !empty($module) )
            if ( is_array($module) )
                $where .= " AND sugarfavorites.module IN ('" . implode("','",$module) . "')";
            else
                $where .= " AND sugarfavorites.module = '$module' ";
        
        $focus = new SugarFavorites;
		$response = $focus->get_list("",$where);
	    
	    return $response['list'];
	}
	
	public function fill_in_additional_list_fields()
	{
	    parent::fill_in_additional_list_fields();
	    
	    $focus = loadBean($this->module);
	    if ( $focus instanceOf SugarBean ) {
	        $focus->retrieve($this->record_id);
	        if ( !empty($focus->id) )
	            $this->record_name = $focus->name;
	    }
	}
}