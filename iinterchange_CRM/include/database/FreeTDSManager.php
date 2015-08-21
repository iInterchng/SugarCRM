<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


include_once('include/database/MssqlManager.php');

class FreeTDSManager extends MssqlManager
{

	public $isFreeTDS = true;

	/**
     * @see DBManager::query()
     */
    public function query(
        $sql,
        $dieOnError = false,
        $msg = '',
        $suppress = false
        )
    {
        $sql = $this->appendN($sql);
        parent::countQuery($sql);
        $GLOBALS['log']->info('Query:' . $sql);
        $this->checkConnection();
        $this->query_time = microtime(true);

        if ($suppress) {
        }
        else {
            $result = @mssql_query($sql,$this->database);
        }

        if (!$result) {

            // awu Bug 10657: ignoring mssql error message 'Changed database context to' - an intermittent
            // 				  and difficult to reproduce error. The message is only a warning, and does
            //				  not affect the functionality of the query
            $sqlmsg = mssql_get_last_message();
            $sqlpos = strpos($sqlmsg, 'Changed database context to');

            if($dieOnError)
                if ($sqlpos !== false)
                    // if sqlmsg has 'Changed database context to', just log it
                    $GLOBALS['log']->debug(mssql_get_last_message() . ": " . $sql );
                else {
                    $GLOBALS['log']->fatal('SQL Error : ' . mssql_get_last_message());
                    sugar_die($GLOBALS['app_strings']['ERR_DB_FAIL']);
                }
            else
                echo 'SQL Error : ' . mssql_get_last_message();

            $GLOBALS['log']->fatal(mssql_get_last_message() . ": " . $sql );
        }
        $this->lastmysqlrow = -1;

        $this->query_time = microtime(true) - $this->query_time;
        $GLOBALS['log']->info('Query Execution Time:'.$this->query_time);

        if ($this->dump_slow_queries($sql)) {
           $this->track_slow_queries($sql);
        }

        $this->checkError($msg.' Query Failed:' . $sql, $dieOnError);

        return $result;
    }


    /**
     * This is a utility function to prepend the "N" character in front of SQL values that are
     * surrounded by single quotes.
     *
     * @param  $sql string SQL statement
     * @return string SQL statement with single quote values prepended with "N" character for nvarchar columns
     */
    public function appendN(
        $sql
        )
    {
        // If there are no single quotes, don't bother, will just assume there is no character data
        if (strpos($sql, '\'') === false)
            return $sql;

        $sql = str_replace('\\\'', '<@#@#@ESCAPED_QUOTE@#@#@>', $sql);

        //The only location of three subsequent ' will be at the begning or end of a value.
        $sql = preg_replace('/(?<!\')(\'{3})(?!\')/', "'<@#@#@PAIR@#@#@>", $sql);

        // Flag if there are odd number of single quotes, just continue w/o trying to append N
        if ((substr_count($sql, '\'') & 1)) {
            $GLOBALS['log']->error('SQL statement[' . $sql . '] has odd number of single quotes.');
            return $sql;
        }

        // Remove any remaining '' and do not parse... replace later (hopefully we don't even have any)
        $pairs        = array();
        $regexp       = '/(\'{2})/';
        $pair_matches = array();
        preg_match_all($regexp, $sql, $pair_matches);
        if ($pair_matches) {
            foreach (array_unique($pair_matches[0]) as $key=>$value) {
               $pairs['<@PAIR-'.$key.'@>'] = $value;
            }
            if (!empty($pairs)) {
               $sql = str_replace($pairs, array_keys($pairs), $sql);
            }
        }

        $regexp  = "/(N?\'.+?\')/is";
        $matches = array();
        preg_match_all($regexp, $sql, $matches);
        $replace = array();
        if (!empty($matches)) {
            foreach ($matches[0] as $key=>$value) {
                // We are assuming that all nvarchar columns are no more than 200 characters in length
                // One problem we face is the image column type in reports which cannot accept nvarchar data
                if (!empty($value) && !is_numeric(trim(str_replace(array('\'', ','), '', $value))) && !preg_match('/^\'[\,]\'$/', $value)) {
                      $replace[$value] = 'N' . trim($value, 'N');
                }
            }
        }

        if (!empty($replace))
            $sql = str_replace(array_keys($replace), $replace, $sql);

        if (!empty($pairs))
            $sql = str_replace(array_keys($pairs), $pairs, $sql);

        if(strpos($sql, '<@#@#@PAIR@#@#@>'))
            $sql = str_replace(array('<@#@#@PAIR@#@#@>'), array('\'\''), $sql);

        if(strpos($sql, '<@#@#@ESCAPED_QUOTE@#@#@>'))
            $sql = str_replace(array('<@#@#@ESCAPED_QUOTE@#@#@>'), array('\\\''), $sql);

        return $sql;
    }
}
