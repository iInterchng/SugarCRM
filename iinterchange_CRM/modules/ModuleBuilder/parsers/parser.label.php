<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once ('modules/ModuleBuilder/parsers/ModuleBuilderParser.php') ;

class ParserLabel extends ModuleBuilderParser
{

    function ParserLabel ($moduleName, $packageName = '' )
    {
        $this->moduleName = $moduleName;
        if (!empty($packageName))
            $this->packageName = $packageName ;
    }
    
    /**
     * Takes in the request params from a save request and processes
     * them for the save.
     * @param REQUEST $params       Labels as "label_".System label => Display label pairs
     * @param string $language      Language key, for example 'en_us'
     */
    function handleSave ($params , $language)
    {
        $labels = array ( ) ;
        foreach ( $params as $key => $value )
        {
            if (preg_match ( '/^label_/', $key ) && strcmp ( $value, 'no_change' ) != 0)
            {
                $labels [ strtoupper(substr ( $key, 6 )) ] = $value ;
            }
        }

        if (!empty($this->packageName)) //we are in Module builder
        {
            return self::addLabels ( $language, $labels, $this->moduleName, "custom/modulebuilder/packages/{$this->packageName}/modules/{$this->moduleName}/language" ) ;
        } else
        {
            return self::addLabels ( $language, $labels, $this->moduleName ) ;
        }
    }

    /*
     * Add a set of labels to the language pack for a module, deployed or undeployed
     * @param string $language      Language key, for example 'en_us'
     * @param array $labels         The labels to add in the form of an array of System label => Display label pairs
     * @param string $moduleName    Name of the module to which to add these labels
     * @param string $packageName   If module is undeployed, name of the package to which it belongs
     */
    static function addLabels ($language , $labels , $moduleName , $basepath = null, $forRelationshipLabel = false)
    {

        $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels($language, \$labels, $moduleName, $basepath );" ) ;
        $GLOBALS [ 'log' ]->debug ( "\$labels:" . print_r ( $labels, true ) ) ;
        
        $deployedModule = false ;
        if (is_null ( $basepath ))
        {
            $deployedModule = true ;
            $basepath = "custom/modules/$moduleName/language" ;
            if($forRelationshipLabel){
            	$basepath = "custom/modules/$moduleName/Ext/Language" ;
            }
            if (! is_dir ( $basepath ))
            {
                mkdir_recursive($basepath);
            }
        }

        $filename = "$basepath/$language.lang.php" ;
        if($forRelationshipLabel){
        	$filename = "$basepath/$language.lang.ext.php" ;
     	}
        $dir_exists = is_dir ( $basepath ) ;

        $mod_strings = array ( ) ;

        if ($dir_exists)
        {
            if (file_exists ( $filename ))
            {
                // obtain $mod_strings
                include ($filename) ;
            }else if($forRelationshipLabel){
            	$fh = fopen ($filename, 'a');
            	fclose($fh);
            }
        } else
        {
            return false ;
        }

        	$changed = false ;

        //$charset = (isset($app_strings['LBL_CHARSET'])) ? $app_strings['LBL_CHARSET'] : $GLOBALS['sugar_config']['default_charset'] ;

	        foreach ( $labels as $key => $value )
	        {
            if (! isset ( $mod_strings [ $key ] ) || strcmp ( $value, $mod_strings [ $key ] ) != 0)
	            {
                $mod_strings [$key] = html_entity_decode_utf8($value, ENT_QUOTES ); // must match encoding used in view.labels.php
	                $changed = true ;
	            }
	        }

	        if ($changed)
	        {
            $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels: writing new mod_strings to $filename" ) ;
	            $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels: mod_strings=".print_r($mod_strings,true) ) ;            
            if (! write_array_to_file ( "mod_strings", $mod_strings, $filename ))
	            {
                $GLOBALS [ 'log' ]->fatal ( "Could not write $filename" ) ;
	            } else
	            {
	                // if we have a cache to worry about, then clear it now
                if ($deployedModule)
	                {
	                    $GLOBALS [ 'log' ]->debug ( "PaserLabel->addLabels: clearing language cache" ) ;
	                    $cache_key = "module_language." . $language . $moduleName ;
	                    sugar_cache_clear ( $cache_key ) ;
	                    LanguageManager::clearLanguageCache ( $moduleName, $language ) ;
	                }
	            }
	        }

        return true ;
    }
    
    /**
     * Takes in the request params from a save request and processes
     * them for the save.
     * @param $metadata 
     * @param string $language      Language key, for example 'en_us'
     */
    function handleSaveRelationshipLabels ($metadata , $language)
        {
        foreach ( $metadata as $definition )
            {
        	$labels = array();
        	$labels[$definition [ 'system_label' ]] = $definition [ 'display_label' ];
        	self::addLabels ( $language, $labels, $definition [ 'module' ],null,true );
            }
        }

    function addLabelsToAllLanguages($labels)
            {
    	$langs = get_languages();
    	foreach($langs as $lang_key => $lang_display)
        {
    		$this->addLabels($lang_key, $labels, $this->moduleName);
        }
    }
}

?>
