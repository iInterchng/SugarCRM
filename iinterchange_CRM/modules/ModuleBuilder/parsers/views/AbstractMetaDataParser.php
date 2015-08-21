<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


abstract class AbstractMetaDataParser
{

	//Make these properties public for now until we can create some usefull accessors
	public $_fielddefs ;
	public $_viewdefs ;
	protected $_moduleName ;
    protected $implementation ; // the DeployedMetaDataImplementation or UndeployedMetaDataImplementation object to handle the reading and writing of files and field data

    function getLayoutAsArray ()
    {
        $viewdefs = $this->_panels ;
    }

    function getLanguage ()
    {
        return $this->implementation->getLanguage () ;
    }

    function getHistory ()
    {
        return $this->implementation->getHistory () ;
    }

    public function getFieldDefs()
    {
        return $this->_fielddefs;
    }
    
    function removeField ($fieldName)
    {
    	return false;
    }

    /*
     * Is this field something we wish to show in Studio/ModuleBuilder layout editors?
     * @param array $def    Field definition in the standard SugarBean field definition format - name, vname, type and so on
     * @return boolean      True if ok to show, false otherwise
     */
    static function validField ( $def, $view = "")
    {
        //Studio invisible fields should always be hidden
        if (isset ($def[ 'studio' ] ) )
        {
            if (is_array($def [ 'studio' ]))
            {
                if (!empty($view) && isset($def [ 'studio' ][$view]))
                   return $def [ 'studio' ][$view] !== false && $def [ 'studio' ][$view] !== 'false' && $def [ 'studio' ][$view] !== 'hidden';
                if (isset($def [ 'studio' ]['visible']))
                   return $def [ 'studio' ]['visible'];
            } else {
                return ($def [ 'studio' ] != 'false' && $def [ 'studio' ] != 'hidden' && $def [ 'studio' ] !== false) ;
			}
        }

        // bug 19656: this test changed after 5.0.0b - we now remove all ID type fields - whether set as type, or dbtype, from the fielddefs
        return 
		( 
		  ( 
		    (empty ( $def [ 'source' ] ) || $def [ 'source' ] == 'db' || $def [ 'source' ] == 'custom_fields') 
			&& isset($def [ 'type' ]) && $def [ 'type' ] != 'id' && $def [ 'type' ] != 'parent_type'
			&& (empty ( $def [ 'dbType' ] ) || $def [ 'dbType' ] != 'id') 
			&& ( isset ( $def [ 'name' ] ) && strcmp ( $def [ 'name' ] , 'deleted' ) != 0 ) 
		  ) // db and custom fields that aren't ID fields
          ||
		  // exclude fields named *_name regardless of their type...just convention
          (isset ( $def [ 'name' ] ) && substr ( $def [ 'name' ], -5 ) === '_name' ) ) ;
    }

	protected function _standardizeFieldLabels ( &$fielddefs )
	{
		foreach ( $fielddefs as $key => $def )
		{
			if ( !isset ($def [ 'label' ] ) )
			{
				$fielddefs [ $key ] [ 'label'] = ( isset ( $def [ 'vname' ] ) ) ? $def [ 'vname' ] : $key ;
			}
		}
	}

	abstract static function _trimFieldDefs ( $def ) ;
	
	public function getRequiredFields(){
	    $fieldDefs = $this->implementation->getFielddefs();
	    $newAry = array();
	    foreach($fieldDefs as $field){
	        if(isset($field['required']) && $field['required'] && isset($field['name'])){
	            array_push($newAry , '"'.$field['name'].'"');
            }
        }
        return $newAry;
	}

}
?>