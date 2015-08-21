<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/Expressions/Expression/AbstractExpression.php');
require_once('include/TimeDate.php');
abstract class DateExpression extends AbstractExpression
{
	/**
	 * All parameters have to be a string.
	 */
	function getParameterTypes() {
		return AbstractExpression::$DATE_TYPE;
	}

    /**
     * @static
     * @param  String $date
     * @return DateTime, returns the DateTime object representing the string passed in
     * or false if the string could not be converted to a valid date.
     */
    public static function parse($date)
    {
        if ($date instanceof DateTime)
            return $date;

        //String dates must be in User format.
        if (is_string($date)) {
            $timedate = TimeDate::getInstance();
            $split = $timedate->split_date_time($date);
            if(!empty($split[1])) {
                // have time
                $resdate = $timedate->fromUser($date);
            } else {
                // just date, no time
                $resdate = $timedate->fromUserDate($date);
            }
            /*if(!$resdate) {
                $resdate = $timedate->fromString($date);
            }*/
            if(!$resdate) {
                throw new Exception("attempt to convert invalid value to date: $date");
            }
            return $resdate;
        }
        throw new Exception("attempt to convert invalid value to date: $date");
        return false;
    }

    public static function roundTime($date)
    {
        if (!($date instanceof DateTime))
            return false;

        $min = $date->format("i");
        $offset = 0;
        if ($min < 16){
            $offset = 15 - $min;
        } else if ($min < 31)
        {
            $offset = 30 - $min;
        }
        else if ($min < 46)
        {
            $offset = 45 - $min;
        }
        else if ($min < 46)
        {
            $offset = 60 - $min;
        }
        if($offset != 0) {
            $date->modify("+$offset minutes");
        }

        return $date;
    }
}
?>