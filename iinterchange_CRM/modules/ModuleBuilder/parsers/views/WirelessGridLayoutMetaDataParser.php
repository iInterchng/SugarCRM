<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once 'modules/ModuleBuilder/parsers/views/GridLayoutMetaDataParser.php' ;
require_once 'modules/ModuleBuilder/parsers/views/MetaDataParserInterface.php' ;
require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class WirelessGridLayoutMetaDataParser extends GridLayoutMetaDataParser implements MetaDataParserInterface
{

    static $variableMap = array (
    	MB_WIRELESSEDITVIEW => 'EditView' ,
    	MB_WIRELESSDETAILVIEW => 'DetailView' ,
    	) ;

    /*
     * Save a draft layout
     */
    function writeWorkingFile ()
    {
        $this->_populateFromRequest ( $this->_fielddefs ) ;
        $viewdefs = $this->_viewdefs ;

        $panels = each ( $this->_convertToCanonicalForm ( $this->_viewdefs [ 'panels' ] , $this->_fielddefs ) ) ;
        $viewdefs [ 'panels' ] = $panels [ 'value' ] ;
        $this->implementation->save ( array ( self::$variableMap [ $this->_view ] => $viewdefs ) ) ;
    }

    /*
     * Deploy the layout
     * @param boolean $populate If true (default), then update the layout first with new layout information from the $_REQUEST array
     */
    function handleSave ($populate = true)
    {
    	$GLOBALS [ 'log' ]->info ( get_class ( $this ) . "->handleSave()" ) ;

        if ($populate)
            $this->_populateFromRequest ( $this->_fielddefs ) ;

        $viewdefs = $this->_viewdefs ;
        $panels = each ( $this->_convertToCanonicalForm ( $this->_viewdefs [ 'panels' ] , $this->_fielddefs ) ) ;
        $viewdefs [ 'panels' ] = $panels [ 'value' ] ;
        $this->implementation->deploy ( array ( self::$variableMap [ $this->_view ] => $viewdefs ) ) ;
    }

}

?>