<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Quotes/sugarpdf/sugarpdf.quotes.php');

class QuotesSugarpdfStandard extends QuotesSugarpdfQuotes{
    /**
     * Options array for the header table.
     * @var Array
     */
    protected $headerOptions;
     /**
     * Options array for the addresses table.
     * @var Array
     */
    private $addressOptions;
     /**
     * Options array for the table containing all the items.
     * @var Array
     */
    private $itemOptions;
     /**
     * Options array for the total table.
     * @var Array
     */
    private $totalOptions;
     /**
     * Options array for the grand total table.
     * @var Array
     */
    private $grandTotalOptions;

    private function _initOptions(){
        global $mod_strings;
        $this->headerOptions = array(
                      "isheader"=>false,
                      "TD"=>array("bgcolor"=>"#DCDCDC"),
                      "table"=>array("cellspacing"=>"2", "border"=>"0","width"=>"100%"),
        );
        $this->addressOptions = array(
                      "isheader"=>true,
                      "header"=>array("tr"=>array("bgcolor"=>"#4B4B4B"), "td"=>array("style"=>"color:#FFFFFF; font-weight:bold","rowspan"=>"0")),
                      "table"=>array("cellspacing"=>"0", "cellpadding"=>"5" ,"border"=>"1", "width"=>"100%"),
        );
        $this->itemOptions = array(
                        //"evencolor"=>"#FF0000",
                        //"oddcolor"=>"#FF00FF",
                        "header"=>array("fill"=>"#4B4B4B", "fontStyle"=>"B", "textColor"=>"#FFFFFF"),
                        //"table"=>array("cellspacing"=>"0", "cellpadding"=>"5" ,"border"=>"1", "width"=>"100%"),
                        //"table"=>array("border"=>"1"),
                        "width"=>array(
                            $mod_strings["LBL_PDF_ITEM_QUANTITY"] => "8%",
                            $mod_strings["LBL_PDF_PART_NUMBER"] => "15%",
                            $mod_strings["LBL_PDF_ITEM_PRODUCT"] => "10%",
                            $mod_strings["LBL_PDF_ITEM_LIST_PRICE"] => "10%",
                            $mod_strings["LBL_PDF_ITEM_UNIT_PRICE"] => "10%",
                            $mod_strings["LBL_PDF_ITEM_EXT_PRICE"] => "10%",
                            $mod_strings["LBL_PDF_ITEM_DISCOUNT"] =>"10%"
                            
         //                   $mod_strings["LBL_PDF_ITEM_SELECT_DISCOUNT"]=>"8%"

                        ),
                        "border"=>"1",
        );
        $this->totalOptions = array(
                            "isheader"=>false,
                            "width"=>array(
                                "BLANK"=>"70%",
                                "TITLE"=>"15%",
                                "VALUE"=>"15%",
                            ),
        );
        $this->grandTotalOptions = array(
                "isheader"=>false,
                "width"=>array(
                    "BLANK"=>"40%",
                    "TITLE0"=>"15%",
                    "VALUE0"=>"15%",
                    "TITLE"=>"15%",
                    "VALUE"=>"15%",
                ),
                "border"=>"1",
        );
    }
    function preDisplay(){
        global $mod_strings, $timedate;
        parent::preDisplay();
        $this->_initOptions();


        //$quote[0]['TITLE'] = $mod_strings['LBL_PDF_QUOTE_NUMBER'];
        //$quote[1]['TITLE'] = $mod_strings['LBL_PDF_QUOTE_DATE'];
       // $quote[2]['TITLE'] = $mod_strings['LBL_PDF_SALES_PERSON'];
        //$quote[3]['TITLE'] = $mod_strings['LBL_PDF_QUOTE_CLOSE'];

       // $quote[0]['VALUE']['value'] = format_number_display($this->bean->quote_num,$this->bean->system_id);
       // $quote[1]['VALUE']['value'] = $timedate->to_display_date(date($GLOBALS['timedate']->dbDayFormat, time()), false);
        //$quote[2]['VALUE']['value'] = $rep->first_name.' '.$rep->last_name;
       // $quote[3]['VALUE']['value'] = $this->bean->date_quote_expected_closed;

        // these options override the params of the $options array.
        $quote[0]['VALUE']['options'] = array();
       // $quote[1]['VALUE']['options'] = array();
        //$quote[2]['VALUE']['options'] = array();
       // $quote[3]['VALUE']['options'] = array();
       //$logo=$this->bean->companylogo_c;
       $html = $this->writeHTMLTable($quote, true, $this->headerOptions);
        $this->SetHeaderData(PDF_HEADER_LOGO, 180, $html);
        //$this->SetHeaderData($logo, 180, $html);
        $this->header_margin = 0;

    }
    function display(){

// if ($this->bean->approvedstatus_c == 0){
        global $mod_strings, $app_strings, $app_list_strings;
        global $locale;

        require_once('modules/Quotes/Quote.php');
        require('modules/Quotes/config.php');

        parent::display();
        //retrieve the sales person's first name
        global $beanFiles;
        require_once($beanFiles['User']);
        $rep = new User;
        $rep->retrieve($this->bean->assigned_user_id);

        // cn: bug 8587 handle strings for export
        /*$mod_strings        = $locale->translateStringPack($mod_strings, $locale->getExportCharset());
        $app_strings        = $locale->translateStringPack($app_strings, $locale->getExportCharset());
        $app_list_strings   = $locale->translateStringPack($app_list_strings, $locale->getExportCharset());
        */
        $GLOBALS['log']->info("Quote layout view: Invoice");

        $addressBS[0][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = $this->bean->billing_account_name;
        $addressBS[1][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = $this->bean->billing_address_street;
        $addressBS[2][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = $this->bean->billing_address_city;
        if(!empty($this->bean->billing_address_city) || !empty($this->bean->billing_address_state) || !empty($this->bean->billing_address_postalcode)) {
            $addressBS[3][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = $this->bean->billing_address_state."  ".$this->bean->billing_address_postalcode;
        }else{
            $addressBS[3][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = '';
        }
       // $addressBS[4][$mod_strings['LBL_PDF_BILLING_ADDRESS']]  = $this->bean->billing_address_country;

        $addressBS[0][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'Quote No: '.$this->bean->name;
        $addressBS[1][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'Date: '.$this->bean->date_quote_expected_closed;
        $addressBS[2][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = '';
        if(!empty($this->bean->shipping_address_city) || !empty($this->bean->shipping_address_state) || !empty($this->bean->shipping_address_postalcode)) {
           // $addressBS[3][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'Sales Person: '.$rep->first_name.' '.$rep->last_name;
        }else{
            //$addressBS[3][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'Sales Person: '.$rep->first_name.' '.$rep->last_name;
        }
        //$addressBS[4][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'Contact No: '.$rep->phone_mobile;
        //$addressS[4][$mod_strings['LBL_PDF_SHIPPING_ADDRESS']]  = 'contact No: '.$rep->mobile_phone;
        $this->Ln(5);
        //$this->MultiCell(150,10, "<b>"."Quotation"."</b>" ,0,'C',0,1,"","",true,0,true);
	//$cust=$this->bean->quote_stage;
        //if($cust!='Closed Accepted')
        //{

        //}
        //else
        //{
        // $this->MultiCell(150,5, "<b>"."Sales Order"."</b>" ,0,'C',0,1,"","",true,0,true);
		//}

      //pdf->Ln(10);
      //$this->Ln(2);
      ///$this->MultiCell(150,5, "<b>"."Quotation"."</b>" ,0,'C',0,1,"","",true,0,true);
        ///$this->writeHTMLTable($addressBS, false, $this->addressOptions);
        //$this->writeHTMLTable($this->bean->terms_c,false, $this->addressOptions);
       //$this->writeHTML($txt, true, 0, $reseth, true, $align);
       //$this->writeHTML(trim(utf8_encode($this->bean->terms_c)), false, true, true, false, '');

       //$html='<p><strong>Sample Html pri<span class="st">nt</span></strong></p>';
       $html = html_entity_decode($this->bean->terms_c);
       //echo htmlentities($html);
       $this->writeHTML($html, true, 0, false, false, '');
       $footer='<img border="0" src="file:///C:/Documents%20and%20Settings/Administrator.SALVE-B5CC8AF91/Desktop/neel2.JPG" width="1500" height="99">
';
$footer = html_entity_decode($footer);
$this->MultiCell(0,0,$footer, 0, 'C',0,0,0,241,true,0,true);
       $this->AddPage();
       //$this->writeHTMLCell(0, '', '', '', $html, 0, 0, 0, true, 'J', true);
       $this->MultiCell(150,5, "<b>"."Quotation"."</b>" ,0,'C',0,1,"","",true,0,true);
       $this->writeHTMLTable($addressBS, false, $this->addressOptions);
      //$this->writeHTMLCell($this->bean->terms_c);
        //$this->MultiCell(0,0,"'                      Sub: ".$this->bean->quotesubject_c ,0,'L',0,1,"","",true,0,true);
      //$this->MultiCell(0,0,"<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sub:".$this->bean->quotesubject_c."</p>" ,0,'L',0,1,"","",true,0,true);

    $this->MultiCell(0,0, "<b>Kind Attn: ".$this->bean->billing_contact_name."</b>" ,0,'L',0,1,"","",true,0,true);

    $this->MultiCell(0,0, "<b>Sub:  Offer for 50 KVA Servo Controlled Voltage Stabilizer</b>" ,0,'L',0,1,"","",true,0,true);




        require_once('modules/Currencies/Currency.php');
        $currency = new Currency();
        ////    settings
        $format_number_array = array(
            'currency_symbol' => true,
            'type' => 'sugarpdf',
            'currency_id' => $this->bean->currency_id,
            'charset_convert' => true, /* UTF-8 uses different bytes for Euro and Pounds */
        );
        $currency->retrieve($this->bean->currency_id);
        //kbrill Bug#11569 - When Quotes are printed as Proposals or Invoices, multiple product groups are out of order from the original quote
        //$product_bundle_list = $this->bean->get_product_bundles();
        $product_bundle_list = $this->bean->get_linked_beans('product_bundles','ProductBundle');

        if(is_array($product_bundle_list)){
            $ordered_bundle_list = array();
            for ($cnt = 0; $cnt < count($product_bundle_list); $cnt++) {
                $index = $product_bundle_list[$cnt]->get_index($this->bean->id);
                $ordered_bundle_list[(int)$index[0]['bundle_index']] = $product_bundle_list[$cnt];
            } //for
            ksort($ordered_bundle_list);

            foreach ($ordered_bundle_list as $product_bundle) {

                if(isset($this->bean->show_line_nums) && $this->bean->show_line_nums == 1){
                    //$item['showRowCount']=1;
                }
                if(key_exists($product_bundle->bundle_stage, $in_total_group_stages)){
                    $count = 0;
                    $count1 = 1;
                    $count2 = 0;
                    $item = array();
                    $product_list = $product_bundle->get_products();
                    if (is_array($product_list)) {

                        $bundle_list = $product_bundle->get_product_bundle_line_items();
                        if (is_array($bundle_list)) {
                            while (list($key, $line_item) = each ($bundle_list)) {

                                if ($line_item->object_name == "Product") {
                                    //$item[$count]["SrNo"] = "1";
                                    $item[$count]['Sr No.'] = $count1.") ";
                                    //$item[$count]['Model No'] = $line_item->mft_part_num;
                                     $item[$count]['Rating'] =stripslashes($line_item->name);
                                    $item[$count]['Qty'] = " ".format_number_sugarpdf($line_item->quantity, 0, 0);
                                    //if(!empty($line_item->description)){
                                        //$item[$count]['Description'] =stripslashes($line_item->description);
                                    //}

                                    $item[$count]['Unit Price'] = format_number_sugarpdf($line_item->discount_usdollar, $locale->getPrecision(), $locale->getPrecision(), array_merge($format_number_array, array('convert' => true)));
                                     if(format_number($product_bundle->deal_tot, $locale->getPrecision(), $locale->getPrecision())!= 0.00){
		                                if($line_item->discount_select){
		                                //$item[$count][$mod_strings['LBL_PDF_ITEM_DISCOUNT']]['value'] = format_number($line_item->discount_amount, $locale->getPrecision(), $locale->getPrecision())."%";
		                                }
		                                else{
		                                //$item[$count][$mod_strings['LBL_PDF_ITEM_DISCOUNT']]['value'] = format_number_sugarpdf($line_item->discount_amount, $locale->getPrecision(), array_merge($format_number_array, array('convert' => false)));
		                                }
	                                    //$item[$count][$mod_strings['LBL_PDF_ITEM_DISCOUNT']]['options'] = array("align"=>"R");
		                            }
                                    //$item[$count]['Tax'] = format_number_sugarpdf($line_item->discount_usdollar, $locale->getPrecision(), $locale->getPrecision(), array_merge($format_number_array, array('convert' => true)));
                                    //$count2 = format_number_sugarpdf($line_item->discount_usdollar-((($line_item->discount_usdollar * $line_item->quantity)*$line_item->discount_amount)/100), $locale->getPrecision(), $locale->getPrecision(), array_merge($format_number_array, array('convert' => true))) ;
                                    //$count2 = format_number_sugarpdf(($line_item->discount_usdollar * $line_item->quantity)-((($line_item->discount_usdollar * $line_item->quantity)*$line_item->discount_amount)/100), $locale->getPrecision(), $locale->getPrecision(), array_merge($format_number_array, array('convert' => true))) ;
                                    //$item[$count]['Amount'] = "Rs. ".format_number_sugarpdf($line_item->discount_usdollar * $line_item->quantity, array_merge($format_number_array, array('convert' => true)));
                                  $count2 = format_number_sugarpdf(($line_item->discount_usdollar-(($line_item->cost_usdollar*$line_item->discount_amount)/100))*$line_item->quantity, $locale->getPrecision(), $locale->getPrecision(), array_merge($format_number_array, array('convert' => true))) ;  
					$item[$count]['Total Basic Price'] = $count2;


                                    //$item[$count][$mod_strings['LBL_PDF_ITEM_LIST_PRICE']]['options'] = array("align"=>"R");
                                    //$item[$count][$mod_strings['LBL_PDF_ITEM_UNIT_PRICE']]['options'] = array("align"=>"R");
                                   // $item[$count][$mod_strings['LBL_PDF_ITEM_EXT_PRICE']]['options'] = array("align"=>"R");
                                    $count++;
                                    $count1++;
                                    $count2=0;
                                }
                                else if ($line_item->object_name == "ProductBundleNote") {
                                //$item[$count]["SrNo"] = "";
                                    $item[$count][$mod_strings['LBL_PDF_ITEM_QUANTITY']] = "";
                                    $item[$count][$mod_strings['LBL_PDF_PART_NUMBER']] = "";
                                    $item[$count][$mod_strings['LBL_PDF_ITEM_PRODUCT']] = stripslashes($line_item->description);
                                    $item[$count][$mod_strings['LBL_PDF_ITEM_LIST_PRICE']] = "";
                                    $item[$count][$mod_strings['LBL_PDF_ITEM_UNIT_PRICE']] = "";
                                    $item[$count][$mod_strings['LBL_PDF_ITEM_EXT_PRICE']] = "";
        							$item[$count][$mod_strings['LBL_PDF_ITEM_DISCOUNT']] = "";
        		                    //$item[$count][$mod_strings['LBL_PDF_ITEM_SELECT_DISCOUNT']] = "";
                                    $count++;
                                    $count1++;
                                    $count2=0;
                                }
                            }
                        }
                    }
                    //$this->MultiCell(0,0, "<b>".$product_bundle->name."</b>" ,0,'L',0,1,"","",true,0,true);

				    if(format_number($product_bundle->deal_tot, $locale->getPrecision(), $locale->getPrecision())== 0.00){
						//$this->itemOptions["width"]['Product Code'] = "10%";
						//$this->itemOptions["width"]['Model No'] = "10%";
                        //"border"=>"1",
				    }
				    $this->itemOptions["width"]['Product Code'] = "15%";
					$this->itemOptions["width"]['Unit Price'] = "15%";
					$this->itemOptions["align"]['Unit Price'] = "center";
					$this->itemOptions["width"]['Sr No.'] = "8%";
					$this->itemOptions["width"]['Qty'] = "8%";
					$this->itemOptions["align"]['Qty'] = "center";
					$this->itemOptions["width"]['Total Basic Price'] = "18%";
					$this->itemOptions["align"]['Total Basic Price'] = "center";
				    $this->itemOptions["width"]["Rating"] = "50%";
                    $this->itemOptions["border"] = "1";
                    //$this->itemOptions["showRowCount"] = "1";
					if (count($item) > 0)
                    	$this->writeCellTable($item, $this->itemOptions);


                        $html1 = html_entity_decode($this->bean->proddesc_c);
                    	$this->writeHTML($html1, true, 0, false, false, '');
                    	

                    	
                    if($pdf_group_subtotal){
                        $total = array();

                        $total[0]['BLANK'] = ' ';
                        $total[0]['TITLE'] =  $mod_strings['LBL_PDF_SUBTOTAL'];
                        $total[0]['VALUE']['value'] = format_number_sugarpdf($product_bundle->subtotal, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
                        $total[0]['VALUE']['options'] = array("align"=>"R");
						$i = 1;
						if(format_number_sugarpdf($product_bundle->deal_tot, $locale->getPrecision(), $locale->getPrecision())!= 0.00){
	                        $total[1]['BLANK'] = ' ';
	                		$total[1]['TITLE'] =  $mod_strings['LBL_PDF_DISCOUNT'];
	                		$total[1]['VALUE']['value'] = format_number_sugarpdf($product_bundle->deal_tot, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
	                        $total[1]['VALUE']['options'] = array("align"=>"R");

	                        $total[2]['BLANK'] = ' ';
	                		$total[2]['TITLE'] =  $mod_strings['LBL_PDF_NEW_SUB'];
	                		$total[2]['VALUE']['value'] = format_number_sugarpdf($product_bundle->new_sub, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
	                        $total[2]['VALUE']['options'] = array("align"=>"R");
	                        $i = 3;
						}
                        $total[$i]['BLANK'] = ' ';
                        $total[$i]['TITLE'] = $mod_strings['LBL_PDF_TAX'];
                        $total[$i]['VALUE']['value'] =  format_number_sugarpdf($product_bundle->tax, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
                        $total[$i]['VALUE']['options'] = array("align"=>"R");
                        $i++;
                        $total[$i]['BLANK'] = ' ';
                        $total[$i]['TITLE'] = $mod_strings['LBL_PDF_SHIPPING'];
                        $total[$i]['VALUE']['value'] =  format_number_sugarpdf($product_bundle->shipping, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
                        $total[$i]['VALUE']['options'] = array("align"=>"R");
                        $i++;
                        $total[$i]['BLANK'] = ' ';
                        $total[$i]['TITLE'] = $mod_strings['LBL_PDF_TOTAL'];
                        $total[$i]['VALUE']['value'] =  format_number_sugarpdf($product_bundle->total, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
                        $total[$i]['VALUE']['options'] = array("align"=>"R");


                        //$this->drawLine();

                        //$this->writeCellTable($total, $this->totalOptions);
                    }
                }
            }
        }

        if(isset($this->bean->calc_grand_total) && $this->bean->calc_grand_total == 1) {
            $total = array();

            $total[0]['BLANK'] = ' ';
            $total[0]['TITLE0'] = $mod_strings['LBL_PDF_CURRENCY'];
            $total[0]['VALUE0'] = $currency->iso4217;
            $total[0]['TITLE'] = $mod_strings['LBL_PDF_SUBTOTAL'];
            //$total[0]['VALUE']['value'] =format_number_sugarpdf($this->bean->subtotal, $locale->getPrecision(), $locale->getPrecision(),  $format_number_array);
	     $total[0]['VALUE']['value'] = format_number_sugarpdf($this->bean->new_sub, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);

            //$total[0]['VALUE']['options'] = array("align"=>"R");

			$i = 1;
			if(format_number_sugarpdf($this->bean->deal_tot, $locale->getPrecision(), $locale->getPrecision())!= 0.00){

	            //$total[1]['BLANK'] = ' ';
			    //$total[1]['TITLE0'] = '';
			    //$total[1]['VALUE0'] ='';
			    //$total[1]['TITLE'] = $mod_strings['LBL_PDF_DISCOUNT'];
			    //$total[1]['VALUE']['value'] = "Rs. ".format_number_sugarpdf($this->bean->deal_tot, $format_number_array);
	            ////$total[1]['VALUE']['options'] = array("align"=>"R");

	           // $total[1]['BLANK'] = ' ';
			   // $total[1]['TITLE0'] = '';
			    //$total[1]['VALUE0'] ='';
			    //$total[1]['TITLE'] = $mod_strings['LBL_PDF_NEW_SUB'];
			   // $total[1]['VALUE']['value'] = format_number_sugarpdf($this->bean->new_sub, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
	            //$total[2]['VALUE']['options'] = array("align"=>"R");
	            $i = 3;
			}
            //$total[$i]['BLANK'] = ' ';
           // $total[$i]['TITLE0'] = $mod_strings['LBL_PDF_TAX_RATE'];
            //$total[$i]['VALUE0'] = format_number_sugarpdf($this->bean->taxrate_value, $locale->getPrecision(), $locale->getPrecision(), array('percentage' => true));
            //$total[$i]['TITLE'] = $mod_strings['LBL_PDF_TAX'];
            //$total[$i]['VALUE']['value'] =  format_number_sugarpdf($this->bean->tax, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
            ///$total[$i]['VALUE']['options'] = array("align"=>"R");
            //$i++;
            //$total[$i]['BLANK'] = ' ';
            //$total[$i]['TITLE0'] = $mod_strings['LBL_PDF_SHIPPING_COMPANY'];
            //$total[$i]['VALUE0'] = $this->bean->shipper_name;
            //$total[$i]['TITLE'] = $mod_strings['LBL_PDF_SHIPPING'];
            //$total[$i]['VALUE']['value'] =  format_number_sugarpdf($this->bean->shipping, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
            ///$total[$i]['VALUE']['options'] = array("align"=>"R");
            $i++;
            $total[$i]['BLANK'] = ' ';
            $total[$i]['TITLE0'] = '';
            $total[$i]['VALUE0'] ='';
            $total[$i]['TITLE'] = $mod_strings['LBL_PDF_TOTAL'];
            $total[$i]['VALUE']['value'] = format_number_sugarpdf($this->bean->total, $locale->getPrecision(), $locale->getPrecision(), $format_number_array);
            //$total[$i]['VALUE']['options'] = array("align"=>"R");
            $this->Ln1();
            //$this->drawLine();

           // $this->MultiCell(0,0, "<b>".$mod_strings['LBL_PDF_GRAND_TOTAL']."</b>" ,1,'C',0,1,"","",true,0,true);

            $footer='<img border="0" src="file:///C:/Documents%20and%20Settings/Administrator.SALVE-B5CC8AF91/Desktop/neel2.JPG" width="1500" height="99">
';
$footer = html_entity_decode($footer);
$this->MultiCell(0,0,$footer, 0, 'C',0,0,0,241,true,0,true);

        }
           // $this->Ln1();
           // $this->drawLine();
            $this->AddPage();
           // $this->MultiCell(0,0, "<b>"."Terms and Conditions:"."</b>" ,1,'L',0,1,"","",true,0,true);

            $terms='<table id="table3" style="width: 100%;" border="0"><tbody><tr>
	<td width="1570" align="left" colspan="3">
	<span style="font-family: arial,helvetica,sans-serif; font-size:small; font-weight:700">
	COMMERCIAL TERMS:</span></td> </tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Prices</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;Ex-works Mumbai - Unpacked <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Delivery</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"> &nbsp;2 - 3 Weeks after receipt of techno-commercial clear purchase order.<br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Payment</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"> &nbsp;40% advance along with the P.O. & balance against proforma invoice prior to dispatch. <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Excise Duty</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong>:</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"> &nbsp;Extra @12.36 % OR as applicable at the time of dispatch. <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Sales Tax </span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;VAT Extra @12.50% OR as applicable at the time of dispatch. <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Freight &amp; Octroi </span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;Extra at actuals. <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Commissioning </span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;Extra Rs. 3000/- per day per engineer +12.36% Service Tax if applicable. <br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Validity </span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong>:</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;30 days<br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Warranty </span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"> &nbsp;15 months from the date of dispatch OR 12 months from the date of installation whichever is earlier<br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Inspection</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong>:</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"> &nbsp;At our works Mumbai.<br /></span></td></tr><tr><td width="350" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;Jurisdiction</span></td> <td width="50" align="center">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small"><strong> :</strong></span></td> <td width="1170" align="left">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">&nbsp;Subject to Mumbai jurisdiction.<br /></span></td></tr><tr>
		<td width="1570" align="left" colspan="3">&nbsp;</td> </tr><tr>
		<td width="1570" align="left" colspan="3">&nbsp;</td> </tr><tr>
		<td width="1570" align="left" colspan="3"><b>
		<font size="4" face="Arial">For UNITY
		CONTROLS PVT. LTD.</font></b></td> </tr><tr>
		<td width="1570" align="left" colspan="3" height="40">&nbsp;</td> </tr><tr>
		<td width="1570" align="left" colspan="3">
		<span style="font-family: arial,helvetica,sans-serif; font-size:small">
		Sales Coordinator</span></td> </tr></tbody></table>';

$html = html_entity_decode($terms);
$this->writeHTML($html, true, 0, false, false, '');
//$this->SetXY(15, -28);

            //parent::Footer();
            //public function Footer(){
//Set the footer position. After the image path you have x, y, w, and h. Other settings are on tcpdf
//$this->SetXY(15, -28);
//Insert an image for your footer
//$this->Image('D:/ecrm/htdocs/achrome/ecrm/modules/Quotes/sugarpdf/402f.jpg', '', '', 185, 34, '', '', 'F', false, 300, '', false, false, 0, false, false, false);
//$options = array(
//"isheader"=>false
//);
//$this->writeHTMLTable($table, false, $options);
//}
//$this->AddPage();
$footer='<img border="0" src="file:///C:/Documents%20and%20Settings/Administrator.SALVE-B5CC8AF91/Desktop/neel2.JPG" width="1500" height="99">
';
$footer = html_entity_decode($footer);
$this->MultiCell(0,0,$footer, 0, 'C',0,0,0,241,true,0,true);

      //}
    }

    /**
     * This method build the name of the PDF file to output.
     */
    function buildFileName(){
        global $mod_strings;

        $fileName = preg_replace("#[^A-Z0-9\-_\.]#i", "_", $this->bean->shipping_account_name);

        if (!empty($this->bean->quote_num)) {
            $fileName .= "_{$this->bean->quote_num}";
        }

        $fileName = $mod_strings['LBL_PROPOSAL']."_{$fileName}.pdf";

        if(isset($_SERVER['HTTP_USER_AGENT']) && preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
            //$fileName = $locale->translateCharset($fileName, $locale->getExportCharset());
            $fileName = urlencode($fileName);
        }

        $this->fileName = $fileName;
    }
}
