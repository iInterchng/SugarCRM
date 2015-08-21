<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry) die ( 'Not A Valid Entry Point' ) ;
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once ('modules/DynamicFields/templates/Fields/TemplateField.php') ;
require_once ('modules/DynamicFields/templates/Fields/TemplateAddressCountry.php') ;

class TemplateAddress extends TemplateField
{
    var $type = 'varchar' ;

    function save ($df)
    {
        $this->type = 'varchar' ;

        require_once 'modules/ModuleBuilder/parsers/parser.label.php' ;
        $parser = new ParserLabel ( $df->getModuleName() , $df->getPackageName() ) ;
        foreach ( array ( 'City' , 'State' , 'PostalCode' , 'Country' ) as $addressFieldName )
        {
            $systemLabel = strtoupper( "LBL_" . $this->name . '_' . $addressFieldName );
            $parser->handleSave ( array( "label_" . $systemLabel => $this->label_value . ' ' . $addressFieldName ) , $GLOBALS [ 'current_language' ] ) ;
            $addressField = new TemplateField ( ) ;
            $addressField->len = ($addressFieldName == 'PostalCode') ? 20 : 100 ;
            $addressField->name = $this->name . '_' . strtolower ( $addressFieldName ) ;
            $addressField->label = $addressField->vname = $systemLabel ;
            $addressField->save ( $df ) ;
        }
        // finally save the base street address field
        parent::save($df);      
        
    }
}

?>
