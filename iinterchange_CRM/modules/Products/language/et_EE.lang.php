<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Mft Num',
  'LBL_MFT_PART_NUM' => 'Mft Part Number:',
  'LBL_ASSET_NUMBER' => 'Asset Number:',
  'LBL_MODULE_NAME' => 'Artiklid',
  'LBL_MODULE_TITLE' => 'Artiklid: Avaleht',
  'LBL_SEARCH_FORM_TITLE' => 'Artikli otsing',
  'LBL_LIST_FORM_TITLE' => 'Artikli loend',
  'LBL_NEW_FORM_TITLE' => 'Loo artikkel',
  'LBL_PRODUCT' => 'Artikkel:',
  'LBL_RELATED_PRODUCTS' => 'Seotud artiklid',
  'LBL_LIST_NAME' => 'Artikkel',
  'LBL_LIST_MANUFACTURER' => 'Tootja',
  'LBL_LIST_QUANTITY' => 'Kogus',
  'LBL_LIST_COST_PRICE' => 'Hind',
  'LBL_LIST_DISCOUNT_PRICE' => 'Hind',
  'LBL_LIST_LIST_PRICE' => 'Loend',
  'LBL_LIST_STATUS' => 'Olek',
  'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktisiku nimi',
  'LBL_LIST_QUOTE_NAME' => 'Pakkumise nimi',
  'LBL_LIST_DATE_PURCHASED' => 'Ostetud',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Aegub',
  'LBL_NAME' => 'Artikkel:',
  'LBL_URL' => 'Artikli URL:',
  'LBL_QUOTE_NAME' => 'Pakkumise nimi:',
  'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
  'LBL_DATE_PURCHASED' => 'Ostetud:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Tugi aegub:',
  'LBL_DATE_SUPPORT_STARTS' => 'Tugi algab:',
  'LBL_COST_PRICE' => 'Kulu:',
  'LBL_DISCOUNT_PRICE' => 'Ühiku hind:',
  'LBL_DEAL_TOT' => 'Allahindlus:',
  'LBL_DISCOUNT_RATE' => 'Allahindluse suurus',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Allahindluse suurus (US Dollar)',
  'LBL_DISCOUNT_TOTAL' => 'Allahindlus kokku',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Allahindlus (US Dollar)',
  'LBL_SELECT_DISCOUNT' => 'Allahindlus %',
  'LBL_LIST_PRICE' => 'Loendi hind:',
  'LBL_VENDOR_PART_NUM' => 'Müüja osa number:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Allahindlus hinna kuupäev:',
  'LBL_WEIGHT' => 'Kaal:',
  'LBL_DESCRIPTION' => 'Kirjeldus:',
  'LBL_TYPE' => 'Tüüp:',
  'LBL_CATEGORY' => 'Kategooria:',
  'LBL_QUANTITY' => 'Kogus:',
  'LBL_STATUS' => 'Olek:',
  'LBL_TAX_CLASS' => 'Maksuklass:',
  'LBL_MANUFACTURER' => 'Tootja:',
  'LBL_SUPPORT_DESCRIPTION' => 'Toe kirjeldus:',
  'LBL_SUPPORT_TERM' => 'Toe tingimused:',
  'LBL_SUPPORT_NAME' => 'Toe nimi:',
  'LBL_SUPPORT_CONTACT' => 'Toe kontakt:',
  'LBL_PRICING_FORMULA' => 'Hinnastamis valem:',
  'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
  'LNK_PRODUCT_LIST' => 'Vaata artikleid',
  'LNK_NEW_PRODUCT' => 'Loo artikkel',
  'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',
  'NTC_REMOVE_CONFIRMATION' => 'Kas oled kindel, et soovid selle artikli seose eemaldada?',
  'ERR_DELETE_RECORD' => 'Artikli kustutamiseks täpsusta kirje numbrit.',
  'LBL_CURRENCY' => 'Valuuta:',
  'LBL_SERIAL_NUMBER' => 'Seerianumber:',
  'LBL_BOOK_VALUE' => 'Raamatu väärtus:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Raamatu väärtus (US Dollar):',
  'LBL_BOOK_VALUE_DATE' => 'Raamatu väärtuse kuupäev:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Artiklid',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Seotud tooted',
  'LBL_WEBSITE' => 'Veebisait',
  'LBL_COST_USDOLLAR' => 'Kulu (USD)',
  'LBL_DISCOUNT_USDOLLAR' => 'Ühiku hind USD',
  'LBL_LIST_USDOLLAR' => 'Loendi hind (US Dollar)',
  'LBL_PRICING_FACTOR' => 'Hinnastamisfaktor',
  'LBL_ACCOUNT_ID' => 'Ettevõtte Id',
  'LBL_CONTACT_ID' => 'Kontakti ID',
  'LBL_CATEGORY_NAME' => 'Kategooria nimi:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Märkused',
  'LBL_MEMBER_OF' => 'Liige:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Lepingud',
  'LBL_CONTRACTS' => 'Lepingud',
  'LBL_PRODUCT_CATEGORIES' => 'Artiklite kategooriad',
  'LBL_PRODUCT_TYPES' => 'Artiklite tüübid',
  'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Artikli malli ID:',
  'LBL_QUOTE_ID' => 'Pakkumise ID',
  'LBL_CREATED_USER' => 'Loodud kasutaja',
  'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
  'LBL_QUOTE' => 'Pakkumine',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_DISCOUNT_AMOUNT' => 'Allahindlus kokku',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Valuuta sümboli nimi',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Artiklid',
  'LNK_IMPORT_PRODUCTS' => 'Impordi artiklid',
);

