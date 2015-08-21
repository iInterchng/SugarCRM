<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/
include_once("modules/Calendar/Calendar.php");
include_once("modules/Calendar/templates/templates_calendar.php");

function template_shared_calendar(&$args) {
global $current_user;
global $app_strings;
global $mod_strings;
$date_arr= array("activity_focus"=>$args['activity_focus']);
$calendar = new Calendar("day",$date_arr);
$calendar->show_tasks = false;
$calendar->toggle_appt = false;
foreach($args['users'] as $user)
{
/*
	if ($user->id != $current_user->id)
	{
*/
		$calendar->add_activities($user,'vfb');
/*
	}
*/
}
?>
<p>

<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td><h3><?php echo $mod_strings['LBL_USER_CALENDARS']; ?></h3>
</td>
<td align=right>
<h3><?php template_echo_date_info("day",$calendar->date_time);?></h3>
</td></tr></table>
<table cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
        <tr height="20">
        <td scope="col" width="25%" ><?php echo $app_strings['LBL_LIST_NAME']; ?></td>
<?php
 $start_slice_idx = $calendar->get_start_slice_idx();
  $end_slice_idx = $calendar->get_end_slice_idx();
  $cur_slice_idx = 1;
  $slice_args = array();
  for($cur_slice_idx=$start_slice_idx;$cur_slice_idx<=$end_slice_idx;$cur_slice_idx++)
  {
        $slice_args['slice'] = $calendar->slice_hash[$calendar->slices_arr[$cur_slice_idx]];
        $slice_args['calendar'] = $calendar;
        //print_r($cur_time);
  ?>
	<td ><?php template_echo_slice_date($slice_args) ; ?></td>
<?php
  }
?>
        </tr>
<?php
$oddRow = true;
foreach($args['users'] as $curr_user)
{

	if($oddRow)
	{
		$row_class = 'oddListRowS1';
	} else
	{
		$row_class = 'evenListRowS1';
	}
	$oddRow = !$oddRow;
?>
<tr height="20" class="<?php echo $row_class; ?>"> 
<td scope="row" valign="top"><a href="index.php?action=DetailView&module=Users&record=<?php echo $curr_user->id; ?>" >
<?php echo $curr_user->full_name; ?></a></td>
<?php
  // loop through each slice for this user and show free/busy
  for($cur_slice_idx=$start_slice_idx;$cur_slice_idx<=$end_slice_idx;$cur_slice_idx++)
  {

  $cur_slice =  $calendar->slice_hash[$calendar->slices_arr[$cur_slice_idx]];

  // if this current activitiy occurs within this time slice
	if ( Calendar::occurs_within_slice($cur_slice,$calendar->activity_focus))
	{
/*
		$got_conflict = 0;
		if ( isset($cur_slice->acts_arr[$curr_user->id]) )
		{
			foreach( $cur_slice->acts_arr[$curr_user->id] as $act)
			{
				if ($act->sugar_bean->id != $calendar->activity_focus->sugar_bean->id)
				{
					$got_conflict = 1;
				}
			}
		}
*/

		if (isset($cur_slice->acts_arr[$curr_user->id]) && count($cur_slice->acts_arr[$curr_user->id]) > 1)
		{
?>

  <td class="listViewCalConflictAppt">&nbsp;</td>
<?php
		} else
		{
?>
  <td class="listViewCalCurrentAppt">&nbsp;</td>
<?php
		}
	}
	else if ( isset($cur_slice->acts_arr[$curr_user->id]))
	{
  ?>
  <td class="listViewCalOtherAppt">&nbsp;</td>
<?php
	}
	else
	{
  ?>
  <td>&nbsp;</td>
<?php
	}
     
  }
?>

</tr>

<?php 
} 
?>
</table>

<table width="100%" cellspacing="2" cellpadding="0" border="0">
<tr height="15">
	<td width="100%"></td>
    <td class="listViewCalCurrentApptLgnd"><img src="<?php echo SugarThemeRegistry::current()->getImageURL('blank.gif'); ?>" alt="<?php echo $mod_strings['LBL_SCHEDULED']; ?>" width="15" height="15">&nbsp;</td>
    <td>&nbsp;<?php echo $mod_strings['LBL_SCHEDULED']; ?>&nbsp;</td>
    <td class="listViewCalOtherApptLgnd"><img src="<?php echo SugarThemeRegistry::current()->getImageURL('blank.gif'); ?>" alt="<?php echo $mod_strings['LBL_BUSY']; ?>" width="15" height="15">&nbsp;</td>
    <td>&nbsp;<?php echo $mod_strings['LBL_BUSY']; ?>&nbsp;</td>
    <td class="listViewCalConflictApptLgnd"><img src="<?php echo SugarThemeRegistry::current()->getImageURL('blank.gif'); ?>" alt="<?php echo $mod_strings['LBL_CONFLICT']; ?>" width="15" height="15">&nbsp;</td>
    <td>&nbsp;<?php echo $mod_strings['LBL_CONFLICT']; ?></td>
</tr>
</table>
</p>
<?php

}

?>
