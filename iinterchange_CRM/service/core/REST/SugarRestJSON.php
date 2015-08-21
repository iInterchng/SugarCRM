<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('service/core/REST/SugarRestSerialize.php');

/**
 * This class is a JSON implementation of REST protocol
 *
 */
class SugarRestJSON extends SugarRestSerialize{

	/**
	 * It will json encode the input object and echo's it
	 *
	 * @param array $input - assoc array of input values: key = param name, value = param type
	 * @return String - echos json encoded string of $input
	 */
	function generateResponse($input){
		$json = getJSONObj();
		ob_clean();
		if (isset($this->faultObject)) {
			$this->generateFaultResponse($this->faultObject);
		} else {
			echo $json->encode($input);
		}
	} // fn

	/**
	 * This method calls functions on the implementation class and returns the output or Fault object in case of error to client
	 *
	 * @return unknown
	 */
	function serve(){
		$GLOBALS['log']->info('Begin: SugarRestJSON->serve');
		$json_data = !empty($_REQUEST['rest_data'])? $_REQUEST['rest_data']: '';
		if(empty($_REQUEST['method']) || !method_exists($this->implementation, $_REQUEST['method'])){
			$er = new SoapError();
			$er->set_error('invalid_call');
			$this->fault($er);
		}else{
			$method = $_REQUEST['method'];
			$json = getJSONObj();
			$data = $json->decode(from_html($json_data));
			if(!is_array($data))$data = array($data);
			$GLOBALS['log']->info('End: SugarRestJSON->serve');
			return call_user_func_array(array( $this->implementation, $method),$data);
		} // else
	} // fn

	/**
	 * This function sends response to client containing error object
	 *
	 * @param SoapError $errorObject - This is an object of type SoapError
	 * @access public
	 */
	function fault($errorObject){
		$this->faultServer->faultObject = $errorObject;
	} // fn
	
	function generateFaultResponse($errorObject){
		$error = $errorObject->number . ': ' . $errorObject->name . '<br>' . $errorObject->description;
		$GLOBALS['log']->error($error);
		$json = getJSONObj();
		ob_clean();
		echo $json->encode($errorObject);
	} // fn


} // class
