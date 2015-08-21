<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_MODULE_NAME' => 'Ürünler',
  'LBL_MODULE_TITLE' => 'Ürünler: Ana Sayfa',
  'LBL_SEARCH_FORM_TITLE' => 'Ürün Ara',
  'LBL_LIST_FORM_TITLE' => 'Ürün Listesi',
  'LBL_NEW_FORM_TITLE' => 'Ürün Yarat',
  'LBL_PRODUCT' => 'Ürün',
  'LBL_RELATED_PRODUCTS' => 'İlişkili Ürünler',
  'LBL_LIST_NAME' => 'Ürün',
  'LBL_LIST_MANUFACTURER' => 'Üretici',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Ürtc No',
  'LBL_LIST_QUANTITY' => 'Miktar',
  'LBL_LIST_COST_PRICE' => 'Maliyet',
  'LBL_LIST_DISCOUNT_PRICE' => 'Fiyat',
  'LBL_LIST_LIST_PRICE' => 'Liste',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
  'LBL_LIST_CONTACT_NAME' => 'Kontak Adı',
  'LBL_LIST_QUOTE_NAME' => 'Teklif Adı',
  'LBL_LIST_DATE_PURCHASED' => 'Satın Alınmış',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Son Geçerlik',
  'LBL_NAME' => 'Ürün:',
  'LBL_URL' => 'Ürün URL:',
  'LBL_QUOTE_NAME' => 'Teklif Adı:',
  'LBL_CONTACT_NAME' => 'Kontak Adı:',
  'LBL_DATE_PURCHASED' => 'Satın Alınmış:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Destek Son Geçerlik:',
  'LBL_DATE_SUPPORT_STARTS' => 'Destek Başlama:',
  'LBL_COST_PRICE' => 'Maliyet:',
  'LBL_DISCOUNT_PRICE' => 'Birim Fiyatı:',
  'LBL_DEAL_TOT' => 'İndirim:',
  'LBL_DISCOUNT_RATE' => 'İndirim Oranı',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'İndirim Oranı (Dolar)',
  'LBL_DISCOUNT_TOTAL' => 'Toplam İndirim',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'İndirim (Dolar)',
  'LBL_SELECT_DISCOUNT' => 'İndirim %',
  'LBL_LIST_PRICE' => 'Liste Fiyatı:',
  'LBL_VENDOR_PART_NUM' => 'Satıcı Parça Numarası:',
  'LBL_MFT_PART_NUM' => 'Ürtc Parça Numarası:',
  'LBL_DISCOUNT_PRICE_DATE' => 'İndirim Fİyat Tarihi:',
  'LBL_WEIGHT' => 'Ağırlık:',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_TYPE' => 'Tip',
  'LBL_CATEGORY' => 'Kategori',
  'LBL_QUANTITY' => 'Miktar:',
  'LBL_STATUS' => 'Durum:',
  'LBL_TAX_CLASS' => 'Vergi Sınıfı:',
  'LBL_MANUFACTURER' => 'Üretici:',
  'LBL_SUPPORT_DESCRIPTION' => 'Destek Tanımı:',
  'LBL_SUPPORT_TERM' => 'Destek Şartı:',
  'LBL_SUPPORT_NAME' => 'Destek Başlığı:',
  'LBL_SUPPORT_CONTACT' => 'Destek Anlaşması:',
  'LBL_PRICING_FORMULA' => 'Fiyat Formülü',
  'LBL_ACCOUNT_NAME' => 'Hesap Adı:',
  'LNK_PRODUCT_LIST' => 'Ürünü görüntüle',
  'LNK_NEW_PRODUCT' => 'Ürün Oluştur',
  'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
  'NTC_REMOVE_CONFIRMATION' => 'Bu ürün ilişkisini silmek istediğinizden emin misiniz?',
  'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt numarası belirtilmelidir.',
  'LBL_CURRENCY' => 'Para Birimi',
  'LBL_ASSET_NUMBER' => 'Varlık Numarası',
  'LBL_SERIAL_NUMBER' => 'Seri Numarası',
  'LBL_BOOK_VALUE' => 'Defter Değeri',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Defter Değeri (Dolar)',
  'LBL_BOOK_VALUE_DATE' => 'Defter Değer Tarihi:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ürünler',
  'LBL_RELATED_PRODUCTS_TITLE' => 'İlgili Ürünler',
  'LBL_WEBSITE' => 'Web Sitesi',
  'LBL_COST_USDOLLAR' => 'Maliyet (Dolar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Birim Fiyatı (Dolar)',
  'LBL_LIST_USDOLLAR' => 'Liste Fiyatı (Dolar)',
  'LBL_PRICING_FACTOR' => 'Fiyatlandırma Faktörü',
  'LBL_ACCOUNT_ID' => 'Müşteri ID',
  'LBL_CONTACT_ID' => 'Kontak ID',
  'LBL_CATEGORY_NAME' => 'Kategori Adı:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notlar',
  'LBL_MEMBER_OF' => 'Üyesi:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontratlar',
  'LBL_CONTRACTS' => 'Kontratlar',
  'LBL_PRODUCT_CATEGORIES' => 'Ürün Kategorileri',
  'LBL_PRODUCT_TYPES' => 'Ürün Tipleri',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Ürün Şalon ID:',
  'LBL_QUOTE_ID' => 'Kota ID:',
  'LBL_CREATED_USER' => 'Oluşturulan Kullanıcı',
  'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
  'LBL_QUOTE' => 'Kota',
  'LBL_CONTACT' => 'Kontak',
  'LBL_DISCOUNT_AMOUNT' => 'İndirim Miktarı',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Para Sembol Adı',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Ürünler',
  'LNK_IMPORT_PRODUCTS' => 'Ürünleri içeri al',
);

