<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class Basic extends SugarBean
{
    /** 
     * Constructor
     */
	public function Basic()
	{
		parent::SugarBean();
	}

	/**
	 * @see SugarBean::get_summary_text()
	 */
	public function get_summary_text()
	{
		return "$this->name";
	}
}