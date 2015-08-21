<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_MODULE_NAME' => 'Dokümanlar',
  'LBL_MODULE_TITLE' => 'Dokümanlar: Ana Sayfa',
  'LNK_NEW_DOCUMENT' => 'Doküman Oluştur',
  'LNK_DOCUMENT_LIST' => 'Dokümanları Görüntüle',
  'LBL_DOC_REV_HEADER' => 'Doküman Revizyonları',
  'LBL_SEARCH_FORM_TITLE' => 'Doküman Arama',
  'LBL_DOCUMENT_ID' => 'Doküman ID',
  'LBL_NAME' => 'Doküman Adı',
  'LBL_DESCRIPTION' => 'Tanım',
  'LBL_CATEGORY' => 'Kategori',
  'LBL_SUBCATEGORY' => 'Alt Kategori',
  'LBL_STATUS' => 'Durum',
  'LBL_CREATED_BY' => 'Oluşturan:',
  'LBL_DATE_ENTERED' => 'Oluşturulma Tarihi',
  'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_DELETED' => 'Silindi',
  'LBL_MODIFIED' => 'Değiştiren ID',
  'LBL_MODIFIED_USER' => 'Değiştiren',
  'LBL_CREATED' => 'Oluşturan:',
  'LBL_REVISIONS' => 'Revizyonlar',
  'LBL_RELATED_DOCUMENT_ID' => 'Bağlantılı Doküman ID',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Bağlantılı Doküman Revizyon ID',
  'LBL_IS_TEMPLATE' => 'Şablon mu?',
  'LBL_TEMPLATE_TYPE' => 'Doküman Tipi',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_REVISION_NAME' => 'Revizyon Numarası',
  'LBL_MIME' => 'Mime Tipi',
  'LBL_REVISION' => 'Revizyon',
  'LBL_DOCUMENT' => 'İlişkili Doküman',
  'LBL_LATEST_REVISION' => 'En Son Revizyon',
  'LBL_CHANGE_LOG' => 'Değişiklik Tarihçesi',
  'LBL_ACTIVE_DATE' => 'Yayın Tarihi',
  'LBL_EXPIRATION_DATE' => 'Son Geçerlilik Tarihi',
  'LBL_FILE_EXTENSION' => 'Dosya Uzantısı',
  'LBL_LAST_REV_MIME_TYPE' => 'Son revizyon MIME tipi',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Belirtilmemiş',
  'LBL_NEW_FORM_TITLE' => 'Yeni Doküman',
  'LBL_DOC_NAME' => 'Doküman Adı:',
  'LBL_FILENAME' => 'Dosya Adı:',
  'LBL_DOC_VERSION' => 'Revizyon:',
  'LBL_CATEGORY_VALUE' => 'Kategori:',
  'LBL_SUBCATEGORY_VALUE' => 'Alt Kategori:',
  'LBL_DOC_STATUS' => 'Durum:',
  'LBL_LAST_REV_CREATOR' => 'Revizyonu Oluşturan:',
  'LBL_LASTEST_REVISION_NAME' => 'Son revizyonun adı:',
  'LBL_SELECTED_REVISION_NAME' => 'Seçili revizyon ismi:',
  'LBL_CONTRACT_STATUS' => 'Kontrat durumu:',
  'LBL_CONTRACT_NAME' => 'Kontrat Adı:',
  'LBL_LAST_REV_DATE' => 'Revizyon Tarihi:',
  'LBL_DOWNNLOAD_FILE' => 'Dosya İndir:',
  'LBL_DET_RELATED_DOCUMENT' => 'İlgili Doküman:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Bağlantılı Doküman Revizyonu:',
  'LBL_DET_IS_TEMPLATE' => 'Şablon? :',
  'LBL_DET_TEMPLATE_TYPE' => 'Doküman Tipi:',
  'LBL_TEAM' => 'Takım:',
  'LBL_DOC_DESCRIPTION' => 'Tanım:',
  'LBL_DOC_ACTIVE_DATE' => 'Yayın Tarihi:',
  'LBL_DOC_EXP_DATE' => 'Son Geçerlilik Tarihi:',
  'LBL_LIST_FORM_TITLE' => 'Doküman Listesi',
  'LBL_LIST_DOCUMENT' => 'Doküman',
  'LBL_LIST_CATEGORY' => 'Kategori',
  'LBL_LIST_SUBCATEGORY' => 'Alt Kategori',
  'LBL_LIST_REVISION' => 'Revizyon',
  'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan:',
  'LBL_LIST_LAST_REV_DATE' => 'Revizyon Tarihi',
  'LBL_LIST_VIEW_DOCUMENT' => 'Görünüm',
  'LBL_LIST_DOWNLOAD' => 'İndir',
  'LBL_LIST_ACTIVE_DATE' => 'Yayın Tarihi',
  'LBL_LIST_EXP_DATE' => 'Son Geçerlilik Tarihi',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LINKED_ID' => 'Bağlantı ID',
  'LBL_SELECTED_REVISION_ID' => 'Seçili revizyon ID',
  'LBL_LATEST_REVISION_ID' => 'Son revizyon ID',
  'LBL_SELECTED_REVISION_FILENAME' => 'Seçili revizyon dosya adı',
  'LBL_FILE_URL' => 'Dosya url',
  'LBL_REVISIONS_PANEL' => 'Revizyon Detayları',
  'LBL_REVISIONS_SUBPANEL' => 'Revizyonlar',
  'LBL_SF_DOCUMENT' => 'Doküman Adı:',
  'LBL_SF_CATEGORY' => 'Kategori:',
  'LBL_SF_SUBCATEGORY' => 'Alt Kategori:',
  'LBL_SF_ACTIVE_DATE' => 'Yayın Tarihi:',
  'LBL_SF_EXP_DATE' => 'Son Geçerlilik Tarihi:',
  'DEF_CREATE_LOG' => 'Doküman Oluşturuldu',
  'ERR_DOC_NAME' => 'Doküman Adı',
  'ERR_DOC_ACTIVE_DATE' => 'Yayın Tarihi',
  'ERR_DOC_EXP_DATE' => 'Son Geçerlilik Tarihi',
  'ERR_FILENAME' => 'Dosya Adı',
  'ERR_DOC_VERSION' => 'Doküman Sürümü',
  'ERR_DELETE_CONFIRM' => 'Bu revizyonu silmek istediğinizden emin misiniz?',
  'ERR_DELETE_LATEST_VERSION' => 'Dokümanın son revize edilmiş halini silmeye izniniz yok.',
  'LNK_NEW_MAIL_MERGE' => 'Posta Birleştir',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Posta Birleştir Şablonu:',
  'LBL_TREE_TITLE' => 'Dokümanlar',
  'LBL_LIST_DOCUMENT_NAME' => 'Doküman Adı',
  'LBL_LIST_IS_TEMPLATE' => 'Şablon?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Doküman Tipi',
  'LBL_LIST_SELECTED_REVISION' => 'Seçili Revizyon',
  'LBL_LIST_LATEST_REVISION' => 'En Son Revizyon',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'İlişkili Kontratlar',
  'LBL_LAST_REV_CREATE_DATE' => 'Son revizyon oluşturulma tarihi',
  'LBL_CONTRACTS' => 'Kontratlar',
  'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Revizyonlar',
  'LBL_DOCUMENT_INFORMATION' => 'Doküman Genel Bakış',
);

