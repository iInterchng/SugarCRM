<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Zpřízněné revize dokumentů:',
  'LBL_KBDOC_ATTACHMENT' => 'Kbdoc_attahment',
  'LBL_ID' => 'ID',
  'LBL_NUMBER' => 'LBL_NUMBER',
  'LBL_TEXT_BODY' => 'LBL_TEXT_BODY',
  'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
  'LBL_TAG_ID' => 'LBL_TAG_ID',
  'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
  'LBL_MODULE_NAME' => 'Znalostní báze',
  'LBL_MODULE_TITLE' => 'Článek znalostní báze',
  'LNK_NEW_ARTICLE' => 'Vytvořit článek',
  'LNK_KBDOCUMENT_LIST' => 'Zobrazit dokumenty',
  'LBL_DOC_REV_HEADER' => 'Revize dokumentu',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat dokument',
  'LBL_KBDOC_TAGS' => 'Štítky:',
  'LBL_KBDOC_BODY' => 'Tělo:',
  'LBL_KBDOC_APPROVED_BY' => 'Schváleno:',
  'LBL_KBDOC_ATTS_TITLE' => 'Stáhnout přílohy:',
  'LBL_SEND_EMAIL' => 'Odeslat e-mail',
  'LBL_SELECT_TAG_BUTTON_TITLE' => 'Zvolit',
  'LBL_ATTACHMENTS' => 'Přílohy:',
  'LBL_EMBEDED_IMAGES' => 'Vložené obrázky:',
  'LBL_SHOW_ARTICLE_DETAILS' => 'Zobrazit více podrobností',
  'LBL_HIDE_ARTICLE_DETAILS' => 'Skrýt podrobnosti',
  'LBL_TAGS' => 'Štítky:',
  'LBL_NOT_AN_ADMIN_USER' => 'Ne-admin uživatel',
  'LBL_NOT_A_VALID_FILE' => 'Není platný soubor',
  'LBL_SELECT_A_NODE_FROM_TREE' => 'Vytvořit nový štítek',
  'LBL_SEARCH' => 'Vyhledat',
  'LBL_NEW_TAG_NAME' => 'Nové jméno štítku:',
  'LBL_KBDOCUMENT_ID' => 'ID dokumentu',
  'LBL_ARTICLE_TITLE' => 'Název:',
  'LBL_ARTICLE_AUTHOR' => 'Autor:',
  'LBL_ARTICLE_APPROVED_BY' => 'Schvalující:',
  'LBL_ARTICLE_BODY' => 'Tělo článku:',
  'LBL_NAME' => 'Jméno dokumentu:',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_CATEGORY' => 'Kategorie',
  'LBL_SUBCATEGORY' => 'Pod-kategorie',
  'LBL_STATUS' => 'Stav',
  'LBL_CREATED_BY' => 'Vytvořeno',
  'LBL_DATE_ENTERED' => 'Datum vložení',
  'LBL_DATE_MODIFIED' => 'Datum upravení',
  'LBL_DELETED' => 'Smazáno',
  'LBL_MODIFIED' => 'Upraveno podle ID',
  'LBL_MODIFIED_USER' => 'Upraveno',
  'LBL_CREATED' => 'Vytvořeno',
  'LBL_RELATED_DOCUMENT_ID' => 'ID souvisejícího dokumentu',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revize souvisejícího dokumentu',
  'LBL_IS_TEMPLATE' => 'Je šablona',
  'LBL_TEMPLATE_TYPE' => 'Typ dokumentu',
  'LBL_PARENT_TYPE' => 'Rodičovský typ',
  'LBL_REVISION_NAME' => 'Číslo revize',
  'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDokument číslo revize',
  'LBL_MIME' => 'MIME typ',
  'LBL_REVISION' => 'Revize',
  'LBL_DOCUMENT' => 'Související dokument',
  'LBL_LATEST_REVISION' => 'ID poslední revize',
  'LBL_LATEST_REVISION_NAME' => 'Jméno poslední revize',
  'LBL_SELECTED_REVISION_NAME' => 'Zvolené jméno revize',
  'LBL_CHANGE_LOG' => 'Protokol o z měnách',
  'LBL_ACTIVE_DATE' => 'Datum publikace',
  'LBL_EXPIRATION_DATE' => 'Datum vypršení platnosti',
  'LBL_FILE_EXTENSION' => 'Přípona souboru',
  'LBL_KNOWLEDGE_BASE_SEARCH' => 'Znalostní báze',
  'LBL_KNOWLEDGE_BASE_ADMIN' => 'Znalostní báze admin',
  'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Správa znalostní báze',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nespecifikovaný',
  'LBL_DOC_NAME' => 'Jméno dokumentu:',
  'LBL_FILENAME' => 'Jméno souboru:',
  'LBL_DOC_VERSION' => 'Revize:',
  'LBL_CATEGORY_VALUE' => 'Kategorie:',
  'LBL_SUBCATEGORY_VALUE' => 'Pod-kategorie:',
  'LBL_DOC_STATUS' => 'Stav:',
  'LBL_LAST_REV_CREATOR' => 'Revizi vytvořil:',
  'LBL_LAST_REV_DATE' => 'Datum revize:',
  'LBL_DOWNNLOAD_FILE' => 'Přílohy:',
  'LBL_DET_RELATED_DOCUMENT' => 'Související dokument:',
  'LBL_DET_IS_TEMPLATE' => 'Šablona? :',
  'LBL_DET_TEMPLATE_TYPE' => 'Typ dokumentu:',
  'LBL_IS_EXTERNAL_ARTICLE' => 'Externí článek?:',
  'LBL_SHOW_TAGS' => 'Zobraz více štítků',
  'LBL_HIDE_TAGS' => 'Skryj štítky',
  'LBL_TEAM' => 'Tým:',
  'LBL_DOC_DESCRIPTION' => 'Popis:',
  'LBL_KBDOC_SUBJECT' => 'Předmět:',
  'LBL_DOC_ACTIVE_DATE' => 'Publikováno:',
  'LBL_DOC_EXP_DATE' => 'Datum vypršení platnosti:',
  'LBL_LIST_ARTICLES' => 'Zobrazit články',
  'LBL_LIST_FORM_TITLE' => 'Seznam dokumentů',
  'LBL_LIST_DOCUMENT' => 'Dokument',
  'LBL_LIST_CATEGORY' => 'Kategorie',
  'LBL_LIST_SUBCATEGORY' => 'Pod-kategorie',
  'LBL_LIST_REVISION' => 'Revize',
  'LBL_LIST_LAST_REV_CREATOR' => 'Vydal',
  'LBL_LIST_LAST_REV_DATE' => 'Datum revize',
  'LBL_LIST_VIEW_DOCUMENT' => 'Zobrazit',
  'LBL_LIST_DOWNLOAD' => 'Stáhnout',
  'LBL_LIST_ACTIVE_DATE' => 'Datum vydání',
  'LBL_LIST_EXP_DATE' => 'Datum vypršení platnosti',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
  'LBL_LIST_MOST_VIEWED' => 'Nejsledovanější články',
  'LBL_LIST_MOST_RECENT' => 'Nejnovější články',
  'LBL_SF_DOCUMENT' => 'Jméno dokumentu:',
  'LBL_SF_CATEGORY' => 'Kategorie:',
  'LBL_SF_SUBCATEGORY' => 'Pod-kategorie:',
  'LBL_SF_ACTIVE_DATE' => 'Datum vydání:',
  'LBL_SF_EXP_DATE' => 'Datum vypršení platnosti:',
  'DEF_CREATE_LOG' => 'Dokument vytvořen',
  'LBL_TAB_SEARCH' => 'Vyhledat',
  'LBL_TAB_BROWSE' => 'Prozkoumat',
  'LBL_TAB_ADVANCED' => 'Rozšířené',
  'LBL_MENU_FTS' => 'Full-textové vyhledávání',
  'LBL_FTS_EMPTY_STRING' => 'Nelze provést fulltextové vyhledávání na prázdný řetězec',
  'LBL_SEARCH_WITHIN' => 'Hledat v:',
  'LBL_CONTAINING_THESE_WORDS' => 'Obsahující tato slova:',
  'LBL_EXCLUDING_THESE_WORDS' => 'Kromě těchto slov:',
  'LBL_UNDER_THIS_TAG' => 'Použití tohoto štítku:',
  'LBL_PUBLISHED' => 'Publikováno:',
  'LBL_EXPIRES' => 'Vyprší:',
  'LBL_TIMES_VIEWED' => 'Četnost prohlížení',
  'LBL_SAVE_SEARCH_AS' => 'Ulož toto hledání jako:',
  'LBL_SAVE_SEARCH_AS_HELP' => 'Tímto uložíte nastavení zobrazení a všechny filtry pro Bázi znalostí.',
  'LBL_PREVIOUS_SAVED_SEARCH' => 'Předchozí uložená hledání:',
  'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Upravit nebo smazat stávající uložená hledání.',
  'LBL_UPDATE' => 'Aktualizovat',
  'LBL_DELETE' => 'Odstranit',
  'LBL_SHOW_OPTIONS' => 'Další možnosti',
  'LBL_AND' => 'a',
  'LBL_CLEAR' => 'Vyčistit',
  'LBL_LIST_KBDOC_APPROVER_NAME' => 'Jméno schvalovatele',
  'LBL_LIST_VIEWING_FREQUENCY' => 'Četnost',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Náhled není k dispozici, záznam o byl dokumentu nebyl nalezen.',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Náhled není k dispozici, dokument existuje, ale je prázdný.',
  'LBL_UNTAGGED_ARTICLES_NODE' => 'Neoznačené články',
  'LBL_TOP_TEN_LIST_TITLE' => 'Top10 nejčtenejších článků',
  'LBL_SHOW_SYNTAX_HELP' => 'Nápověda k syntaxy',
  'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Další štítek',
  'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Další štítek',
  'LBL_ARTICLE_IN_TREE_HOVER' => 'Článek',
  'LBL_ARTICLES_IN_TREE_HOVER' => 'Články',
  'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Tento štítek obsahuje',
  'ERR_DOC_NAME' => 'Název dokumentu',
  'ERR_DOC_ACTIVE_DATE' => 'Datum publikace',
  'ERR_DOC_EXP_DATE' => 'Datum vypršení platnosti',
  'ERR_FILENAME' => 'Název souboru',
  'ERR_DOC_VERSION' => 'Verze dokumentu',
  'ERR_DELETE_CONFIRM' => 'Opravdu chcete smazat tuto revizi dokumentu ?',
  'ERR_DELETE_LATEST_VERSION' => 'Nemáte oprávnění mazat poslední revizi dokumentu.',
  'LNK_NEW_MAIL_MERGE' => 'Hromadná korespondence',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Šablona Hromadná korespondence',
  'LBL_TREE_TITLE' => 'Dokumenty',
  'LBL_LIST_DOCUMENT_NAME' => 'Jméno dokumentu',
  'LBL_CONTRACT_NAME' => 'Jméno kontraktu:',
  'LBL_LIST_IS_TEMPLATE' => 'Šablona?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Typ dokumentu',
  'LBL_LIST_SELECTED_REVISION' => 'Zvolená revize',
  'LBL_LIST_LATEST_REVISION' => 'Poslední revize',
  'LBL_CASES_SUBPANEL_TITLE' => 'Související případy',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Související e-maily',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Související kontrakty',
  'LBL_LAST_REV_CREATE_DATE' => 'Datum vytvoření - poslední revize',
  'LBL_KEYWORDS' => 'Klíčová slova:',
  'LBL_CASES' => 'Případy',
  'LBL_EMAILS' => 'E-maily',
  'LBL_DEFAULT_ADMIN_MESSAGE' => 'Vyberte akci z rozbalovacího seznamu',
  'LBL_SELECT_PARENT_TAG_MESSAGE' => 'Vyberte nadřazený štítek ze stromu',
  'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Vyberte štítek pro vymazání ze stromu',
  'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' => 'Vyberte štítek pro přejmenování ze stromu',
  'LBL_TAG_ALREADY_EXISTS' => 'Štítek již existuje',
  'LBL_TYPE_THE_NEW_TAG_NAME' => 'Napište nové jméno štítku',
  'LBL_SAVING_THE_TAG' => 'Ukládám štítek...',
  'LBL_CREATING_NEW_TAG' => 'Vytvářím nový štítek....',
  'LBL_TAGS_ROOT_LABEL' => 'Štítky',
  'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQ štítek nemůže být přejmenován',
  'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Nejprve vyberte články',
  'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Vyberte články pro aktivaci štítků',
  'LBL_SELECT_ARTICLES_TO_DELETE' => 'Nejprve vyberte články',
  'LBL_SELECT_TAGS_TO_DELETE' => 'Vyber štítky na smazání',
  'LBL_SELECT_A_TAG_FROM_TREE' => 'Vyber štítky ze stromu',
  'LBL_SELECT_TAGS_FROM_TREE' => 'Vyber štítky ze stromu',
  'LBL_MOVING_ARTICLES_TO_TAG' => 'Přesouvám články ke štítku',
  'LBL_APPLYING_TAGS_TO_ARTICLES' => 'Aplikuji štítky na články',
  'LBL_ROOT_TAG_MESSAGE' => 'Kořenový štítek nemůže být vybran-přiřazen ke článku',
  'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Kořenový tag nelze přejmenovat',
  'LBL_TYPE_NEW_NODE_NAME' => 'Prosím vložte jméno štítku',
  'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Zdrojové a cílové štítky jsou stejné',
  'LBL_DELETE_TAG' => 'Smazat štítek',
  'LBL_SELECT_TAG' => 'Vybrat štítek',
  'LBL_APPLY_TAG' => 'Aplikovat štítek',
  'LBL_MOVE' => 'Přesunout',
  'LBL_LAUNCHING_TAG_BROWSING' => 'Spouštím procházení štítků',
  'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Chyba při označení štítky.',
  'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' => 'Chyba: Žádný vstupní soubor.',
  'LBL_CREATE_NEW_TAG' => 'Vytvořit nový štítek',
  'LBL_SEARCH_TAG' => 'Vyhledávání',
  'LBL_TAG_NAME' => 'Jméno štítku',
  'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Zadejte název štítku pro vyhledávání',
  'LBL_KB_NOTIFICATION' => 'Dokument byl zveřejněn',
  'LBL_KB_PUBLISHED_REQUEST' => 'přiřadil dokument pro Vaše schválení a publikaci.',
  'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Stav dokumentu byl změněn zpět na návrh',
  'LBL_CONTRACTS' => 'Kontrakty',
  'LBL_SELECT_PARENT_TREE_NOTICE' => 'Vyberte nadřazený štítek ze stromu',
  'LBL_CLICK_APPLY_TAG' => 'Klikněte aplikovat štítek',
  'LBL_HEAD_TAGS' => 'Štítky',
);

