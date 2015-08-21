<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class ParserFactory
{

    /*
     * Create a new parser
     *
     * @param string $view          The view, for example EditView or ListView. For search views, use advanced_search or basic_search
     * @param string $moduleName    Module name
     * @param string $packageName   Package name. If present implies that we are being called from ModuleBuilder
     * @return AbstractMetaDataParser
     */

    function getParser ( $view , $moduleName , $packageName = null , $subpanelName = null )
    {
        $GLOBALS [ 'log' ]->info ( "ParserFactory->getParser($view,$moduleName,$packageName,$subpanelName )" ) ;
		if ( empty ( $packageName ) || ( $packageName == 'studio' ) )
			$packageName = null ;
        switch ( strtolower ( $view ))
        {
            case MB_EDITVIEW :
            case MB_DETAILVIEW :
            case MB_QUICKCREATE :
                require_once 'modules/ModuleBuilder/parsers/views/GridLayoutMetaDataParser.php' ;
                return new GridLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_WIRELESSEDITVIEW :
            case MB_WIRELESSDETAILVIEW :
                require_once 'modules/ModuleBuilder/parsers/views/WirelessGridLayoutMetaDataParser.php' ;
                return new WirelessGridLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_WIRELESSLISTVIEW:
                require_once 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php' ;
                return new ListLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_BASICSEARCH :
            case MB_ADVANCEDSEARCH :
            case MB_WIRELESSBASICSEARCH :
            case MB_WIRELESSADVANCEDSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/SearchViewMetaDataParser.php' ;
                return new SearchViewMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_LISTVIEW :
                if ($subpanelName == null)
                {
                    require_once 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php' ;
                    return new ListLayoutMetaDataParser ( MB_LISTVIEW, $moduleName, $packageName ) ;
                } else
                {
                    require_once 'modules/ModuleBuilder/parsers/views/SubpanelMetaDataParser.php' ;
                    return new SubpanelMetaDataParser ( $subpanelName, $moduleName, $packageName ) ;
                }
            case MB_DASHLET :
            case MB_DASHLETSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/DashletMetaDataParser.php' ;
                return new DashletMetaDataParser($view, $moduleName, $packageName  );
            case MB_POPUPLIST :
            case MB_POPUPSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/PopupMetaDataParser.php' ;
                return new PopupMetaDataParser($view, $moduleName, $packageName  );
            case MB_LABEL :
                require_once 'modules/ModuleBuilder/parsers/parser.label.php' ;
                return new ParserLabel ( $moduleName, $packageName ) ;
            case MB_VISIBILITY :
                require_once 'modules/ModuleBuilder/parsers/parser.visibility.php' ;
                return new ParserVisibility ( $moduleName, $packageName ) ;
            default :
                $prefix = '';
                if(!is_null ( $packageName )){
                    $prefix = empty($packageName) ? 'build' :'modify';
                }
                $fileName = "modules/ModuleBuilder/parsers/parser." . strtolower ( $prefix . $view ) . ".php" ;
                if (file_exists ( $fileName ))
                {
                    require_once $fileName ;
                    $class = 'Parser' . $prefix . ucfirst ( $view ) ;
                    if (class_exists ( $class ))
                    {
                        $GLOBALS [ 'log' ]->debug ( 'Using ModuleBuilder Parser ' . $fileName ) ;
                        $parser = new $class ( ) ;
                        return $parser ;
                    }
                }

        }

        $GLOBALS [ 'log' ]->fatal ( get_class ( $this ) . ": cannot create ModuleBuilder Parser $fileName" ) ;

    }

}
?>