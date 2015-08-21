<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FAILURE' => 'Import esuat:',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Sunteţi sigur că doriţi să ştergeţi această cartografiere?',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'EMail Address',
  'LBL_GOOD_FILE' => 'Fisierul importat a fost citit cu succes',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Inregistrari sarite datorita unei erori',
  'LBL_UPDATE_SUCCESSFULLY' => 'Inregistrari actualizate cu succes',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Inregistrari create cu succes',
  'LBL_STEP_4_TITLE' => 'Pasul 4: Importa Fisier',
  'LBL_STEP_5_TITLE' => 'Pasul 5: Vizualizeaza rezultate',
  'LBL_CUSTOM_ENCLOSURE' => 'Domenii calificate de:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nu poate fi publicat. Exista alta harta importata cu acelasi nume.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Imposibil de scoate din uz public o hartă deţinut de un alt utilizator. Detii o hartă de import cu acelaşi nume.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importurile nu sunt setate pentru acest tip de modul.',
  'LBL_IMPORT_TYPE' => 'Importa actiuni',
  'LBL_IMPORT_BUTTON' => 'Creeaza Inregistrari',
  'LBL_UPDATE_BUTTON' => 'Creeaza si Actualizeaza Inregistrari',
  'LBL_ERROR_INVALID_BOOL' => 'Valoare invalida (ar trebui sa fie 1 sau 0)',
  'LBL_NO_ID' => 'Este necesar ID',
  'LBL_PRE_CHECK_SKIPPED' => 'Pre-Verificare sarita',
  'LBL_IMPORT_ERROR' => 'Au aparut erori la importare',
  'LBL_ERROR' => 'Eroare',
  'LBL_NOLOCALE_NEEDED' => 'Nici o conversie locala necesara',
  'LBL_FIELD_NAME' => 'Nume camp',
  'LBL_VALUE' => 'Valoare',
  'LBL_ROW_NUMBER' => 'Nume rand',
  'LBL_NONE' => 'Niciunul',
  'LBL_REQUIRED_VALUE' => 'Valoare necesara lipsa',
  'LBL_ID_EXISTS_ALREADY' => 'ID-ul exista deja in acest tabel',
  'LBL_ASSIGNED_USER' => 'Daca utilizatorul nu exista, folositi utilizatorul curent',
  'LBL_SHOW_HIDDEN' => 'Arata campurile care nu sunt in mod normal importabile',
  'LBL_UPDATE_RECORDS' => 'Actualizeaza înregistrările existente în loc sa importi acestea (Nu Anulare)',
  'LBL_TEST' => 'Testeaza Importul (nu salveaza sau modifica datele)',
  'LBL_TRUNCATE_TABLE' => 'Goleste tabelul inaintea importului (sterge toate inregistrarile)',
  'LBL_RELATED_ACCOUNTS' => 'Nu crea conturi conexe',
  'LBL_NO_DATECHECK' => 'Treci peste verificarea datei (mai rapid, dar va esua daca orice data este gresita)',
  'LBL_NO_WORKFLOW' => 'Nu a rula debit de lucru în cursul acestui import',
  'LBL_NO_EMAILS' => 'Nu trimite notificari Email in timpul acestui import',
  'LBL_NO_PRECHECK' => 'Modul Format Nativ',
  'LBL_STRICT_CHECKS' => 'Foloseste setul de reguli strict (Verifica adresele de Email si numerele de telefon)',
  'LBL_ERROR_SELECTING_RECORD' => 'Eroare la selectarea inregistrarii:',
  'LBL_ERROR_DELETING_RECORD' => 'Eroare la stergerea inregistrarii:',
  'LBL_NOT_SET_UP' => 'Importul nu este configurat pentru acest tip de modul',
  'LBL_ARE_YOU_SURE' => 'Sunteti sigur? Aceasta va sterge toate datele din acest modul.',
  'LBL_NO_RECORD' => 'Nu exista inregistrare cu acest ID pentru actualizare',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Importul nu este configurat pentru acest tip de modul',
  'LBL_DEBUG_MODE' => 'Activează modul de depanare',
  'LBL_ERROR_INVALID_ID' => 'ID-ul dat este prea lung pentru a incapea in camp (lungimea maxima este 36 caractere)',
  'LBL_ERROR_INVALID_PHONE' => 'Numar de telefon invalid',
  'LBL_ERROR_INVALID_NAME' => 'Sirul este prea lung pentru a incapea in camp',
  'LBL_ERROR_INVALID_VARCHAR' => 'Sirul este prea lung pentru a incapea in camp',
  'LBL_ERROR_INVALID_DATE' => 'Sir data invalid',
  'LBL_ERROR_INVALID_DATETIME' => 'Data si ora invalide',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Data si ora invalide',
  'LBL_ERROR_INVALID_TIME' => 'Ora invalida',
  'LBL_ERROR_INVALID_INT' => 'Valoare intreaga invalida',
  'LBL_ERROR_INVALID_NUM' => 'Valoare numerica invalida',
  'LBL_ERROR_INVALID_EMAIL' => 'Adresa Email invalida',
  'LBL_ERROR_INVALID_USER' => 'Nume de utilizator sau ID invalide',
  'LBL_ERROR_INVALID_TEAM' => 'NUme de echipa sau ID invalide',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Nume cont sau ID invalide',
  'LBL_ERROR_INVALID_RELATE' => 'Camp relational invalid',
  'LBL_ERROR_INVALID_CURRENCY' => 'Valoare monedă nevalida',
  'LBL_ERROR_INVALID_FLOAT' => 'Numar punct mobil invalid',
  'LBL_ERROR_NOT_IN_ENUM' => 'Valoarea nu este în lista abandon. Valorile permise sunt:',
  'LBL_NOT_MULTIENUM' => 'Nu este un MultiEnum',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Importul nu este configurat pentru acest tip de modul',
  'LBL_IMPORT_MODULE_NO_USERS' => 'ATENTIE: Nu aveti utilizatori definiti in sistem. Daca importati fara sa adaugati mai intai utilizatori, toate inregistrarile vor fi detinute de catre Administrator.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Imposibil de a publica. Există o alta Harta Import publicata de către acelaşi nume.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Imposibil de scoate din uz public o hartă deţinuta de un alt utilizator. Detii o  Harta import cu acelaşi nume.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Directorul',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nu exista sau nu poate fi scris',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Fisierul nu a fost urcat cu succes. Poate fi din cauza ca \'upload_max_filesize\' din fisierul dumneavoastra php.ini e setata la un numar mic',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fisierul este prea mare. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Octeti. Modificati $sugar_config[\'upload_maxsize\'] din config.php',
  'LBL_MODULE_NAME' => 'Importa',
  'LBL_TRY_AGAIN' => 'Incercati din nou',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Nu puteti importa un utilizator administrator de sistem',
  'ERR_MULTIPLE' => 'Mai multe coloane au fost definite cu acelasi nume de camp.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Lipsesc campurile necesare:',
  'ERR_MISSING_MAP_NAME' => 'Lipseşte nume personalizat de cartografiere',
  'ERR_SELECT_FULL_NAME' => 'Nu puteţi selecta Nume complet atunci când Prenume şi Nume sunt selectate.',
  'ERR_SELECT_FILE' => 'Alegeti un fisier pentru urcare.',
  'LBL_SELECT_FILE' => 'Selecteaza fisier',
  'LBL_CUSTOM' => 'Personalizat',
  'LBL_CUSTOM_CSV' => 'FIsier delimitat prin virgula la comanda',
  'LBL_CSV' => 'Fisier delimitat prin virgula',
  'LBL_TAB' => 'Dosar delimitat de foaie',
  'LBL_CUSTOM_DELIMITED' => 'Dosar delimitat la comanda',
  'LBL_CUSTOM_DELIMITER' => 'Domenii delimitate de:',
  'LBL_FILE_OPTIONS' => 'Fişier opţiuni',
  'LBL_CUSTOM_TAB' => 'Dosar delimitat de foaie la comanda',
  'LBL_DONT_MAP' => '- Nu trece pe harta acest domeniu -',
  'LBL_STEP_1_TITLE' => 'Selectare sursă de date şi de acţiune de import',
  'LBL_WHAT_IS' => 'Care este sursa de date?',
  'LBL_ACT' => 'Actioneaza!',
  'LBL_MY_SAVED' => 'Trecerile mele pe harta salvate',
  'LBL_PUBLISH' => 'Publica',
  'LBL_DELETE' => 'Sterge',
  'LBL_PUBLISHED_SOURCES' => 'Trecerile mele pe carta publicate:',
  'LBL_UNPUBLISH' => 'Retrage din uz public',
  'LBL_NEXT' => 'Urmatorul>',
  'LBL_BACK' => 'Inapoi',
  'LBL_STEP_2_TITLE' => 'Pasul 2: Încărcaţi fişier Import',
  'LBL_HAS_HEADER' => 'Are Antet:',
  'LBL_NUM_1' => '1',
  'LBL_NUM_2' => '2',
  'LBL_NUM_3' => '3',
  'LBL_NUM_4' => '4',
  'LBL_NUM_5' => '5',
  'LBL_NUM_6' => '6',
  'LBL_NUM_7' => '7',
  'LBL_NUM_8' => '8',
  'LBL_NUM_9' => '9',
  'LBL_NUM_10' => '10',
  'LBL_NUM_11' => '11',
  'LBL_NUM_12' => '12',
  'LBL_NOTES' => 'Note',
  'LBL_NOW_CHOOSE' => 'Acum alege fisierul de importat:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 şi 2000 pot exporta date în format Comma Separated Values, care pot fi folosite pentru a importa date în sistem. Pentru a exporta datele din Outlook, urmaţi paşii de mai jos:',
  'LBL_OUTLOOK_NUM_1' => 'Porniţi Outlook',
  'LBL_OUTLOOK_NUM_2' => 'electaţi meniul File, apoi de import şi export ... opţiunea de meniu',
  'LBL_OUTLOOK_NUM_3' => 'Selectaţi Export într-un fişier şi faceţi clic pe Următorul',
  'LBL_OUTLOOK_NUM_4' => 'Alege Valori separate prin virgulă (Windows) şi faceţi clic pe Next.<br />Notă: Vi se poate cere să instalaţi componenta de export',
  'LBL_OUTLOOK_NUM_5' => 'Selectaţi folderul Contacte şi faceţi clic pe Următorul. Aveţi posibilitatea să selectaţi foldere diferite persoane de contact în cazul în care persoanele de contact sunt stocate în mai multe foldere',
  'LBL_OUTLOOK_NUM_6' => 'Alegeţi un nume de fişier şi faceţi clic pe Următorul',
  'LBL_OUTLOOK_NUM_7' => 'Faceţi clic pe Finish',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com pot exporta date în format Comma Separated Values, care pot fi folosite pentru a importa date în sistem. Pentru a exporta datele din Salesforce.com, urmaţi paşii de mai jos:',
  'LBL_SF_NUM_1' => 'Deschide browser-ul dvs., mergeţi la http://www.salesforce.com, şi login cu adresa dvs. de email şi parola',
  'LBL_SF_NUM_2' => 'Faceţi clic pe fila Rapoarte din meniul de sus',
  'LBL_SF_NUM_3' => 'Pentru a exporta Conturi: Faceţi clic pe link-ul Active Conturi<br />Pentru a exporta Contacte: Faceţi clic pe link-ul Mailing List',
  'LBL_SF_NUM_4' => 'La Pasul 1: Selectaţi tipul de raport, selectaţi tabulare Raport faceţi clic pe Următorul',
  'LBL_SF_NUM_5' => 'La Pasul 2: Selectaţi coloanele raportului, alege coloanele pe care doriţi să export şi faceţi clic pe Următorul',
  'LBL_SF_NUM_6' => 'Pe Pasul 3: Selectaţi informaţii pentru a rezuma, doar faceţi clic pe Următorul',
  'LBL_SF_NUM_7' => 'Pe Pasul 4: Ordonanţa coloanele raportului, faceţi clic pe Next',
  'LBL_SF_NUM_8' => 'Pe Pasul 5: Selectati criteriile de raport, sub Data de începere, alegeţi o dată destul de departe în trecut pentru a include toate conturile. Puteţi exporta, de asemenea, un subset de Conturi pe baza unor criterii mai avansate. Când aţi terminat, faceţi clic pe Executare Raport',
  'LBL_SF_NUM_9' => 'Un raport va fi generat, iar pagina va afişa Status Report Generation: Complete. Acum faceţi clic pe Export în Excel',
  'LBL_SF_NUM_10' => 'La export Raport:, pentru Export File Format:, alegeţi Comma Delimited csv.. Faceţi clic pe Export.',
  'LBL_SF_NUM_11' => 'Un dialog va pop-up pentru tine pentru a salva fişierul de export pe computer.',
  'LBL_IMPORT_ACT_TITLE' => 'Actioneaza! se pot exporta date în format Comma Separated Values, care pot fi folosite pentru a importa date în sistem. ! Pentru a exporta datele din actul, urmaţi paşii de mai jos:',
  'LBL_ACT_NUM_1' => 'Lanseaza ACT!',
  'LBL_ACT_NUM_2' => 'Selectaţi meniul File, de schimb de date opţiunea de meniu, apoi Export ... opţiunea de meniu',
  'LBL_ACT_NUM_3' => 'Selectaţi tipul de fişier text delimitat cu',
  'LBL_ACT_NUM_4' => 'Alegeţi un nume de fişier şi o locaţie pentru datele exportate şi faceţi clic pe Următorul',
  'LBL_ACT_NUM_5' => 'Selectaţi Contacte înregistrează numai',
  'LBL_ACT_NUM_6' => 'Faceţi clic pe Options ... butonul',
  'LBL_ACT_NUM_7' => 'Selectaţi Comma ca domeniu caracterul separator',
  'LBL_ACT_NUM_8' => 'Verificaţi Da, export caseta câmpul nume şi faceţi clic pe OK',
  'LBL_ACT_NUM_9' => 'Faceţi clic pe Înainte',
  'LBL_ACT_NUM_10' => 'Selectaţi toate înregistrările şi apoi faceţi clic pe Terminare',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Multe aplicaţii vă permit să exportaţi datele într-un fişier text delimitat prin virgule (. csv), urmând aceşti paşi generali:',
  'LBL_CUSTOM_NUM_1' => 'Lanseaza aplicaţia şi a deschide fişierul de date',
  'LBL_CUSTOM_NUM_2' => 'Selectaţi Salvare ca ... sau de export ... opţiunea de meniu',
  'LBL_CUSTOM_NUM_3' => 'Salvaţi fişierul într-un CSV sau Comma Separated format Valori',
  'LBL_IMPORT_TAB_TITLE' => 'Multe aplicaţii vă permit să exportaţi datele într-un fişier text delimitat Tab (TSV sau fila..), urmând aceşti paşi generali:',
  'LBL_TAB_NUM_1' => 'Lansa aplicaţia şi a deschide fişierul de date',
  'LBL_TAB_NUM_2' => 'Selectaţi Salvare ca ... sau de export ... opţiunea de meniu',
  'LBL_TAB_NUM_3' => 'Salvaţi fişierul într-un TSV sau Tab Separated format Valori',
  'LBL_STEP_3_TITLE' => 'Pasul 3: Confirmarea Domenii şi de import',
  'LBL_SELECT_FIELDS_TO_MAP' => 'În lista de mai jos, selectaţi câmpurile din fişierul de import care ar trebui să fie importate în fiecare domeniu în sistem. Când aţi terminat, faceţi clic pe Import acum:',
  'LBL_DATABASE_FIELD' => 'Baza de date Field',
  'LBL_HEADER_ROW' => 'Rând antet',
  'LBL_ROW' => 'Rand',
  'LBL_SAVE_AS_CUSTOM' => 'Salvare ca Mapping Custom:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Nume Custom Mapping',
  'LBL_CONTACTS_NOTE_1' => 'Fie Nume sau Numele complet trebuie să fie cartografiate.',
  'LBL_CONTACTS_NOTE_2' => 'Dacă numele completa este mapată, apoi Prenume şi Nume sunt ignorate.',
  'LBL_CONTACTS_NOTE_3' => 'Dacă numele completa este mapat, apoi datele în Numele complet va fi împărţită în Nume Nume si prenume atunci când este introdus în baza de date.',
  'LBL_CONTACTS_NOTE_4' => 'Domenii care se termină în Adresa Strada 2 şi Strada 3 sunt concatenate, împreună cu principalele Adresa Strada câmp, atunci când introduce în baza de date.',
  'LBL_ACCOUNTS_NOTE_1' => 'Domenii care se termină în Adresa Strada 2 şi Strada 3 sunt concatenate, împreună cu principalele Adresa Strada câmp, atunci când introduce în baza de date.',
  'LBL_REQUIRED_NOTE' => 'Camp obligatoriu (i):',
  'LBL_IMPORT_NOW' => 'Importa acum',
  'LBL_' => 'LBL_',
  'LBL_CANNOT_OPEN' => 'Nu pot deschide fişierul de importat pentru lectură',
  'LBL_NOT_SAME_NUMBER' => 'Nu s-au acelaşi număr de domenii pe linie în fişierul dvs.',
  'LBL_NO_LINES' => 'Nu au existat randuri în fişierul de import dvs.',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Fişier de import a fost deja prelucrate sau nu există',
  'LBL_SUCCESS' => 'Succes:',
  'LBL_SUCCESSFULLY' => 'Importate cu succes',
  'LBL_LAST_IMPORT_UNDONE' => 'Ultimul dvs. import a fost anulat',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nu a fost niciun import pentru a anula.',
  'LBL_FAIL' => 'Esuare:',
  'LBL_RECORDS_SKIPPED' => 'Înregistrări ignorate deoarece au fost lipsesc unul sau mai multe câmpuri obligatorii',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Înregistrări ignorate deoarece id-ul lui, fie au existat sau au fost mai mult de 36 de caractere',
  'LBL_RESULTS' => 'Rezultate',
  'LBL_IMPORT_MORE' => 'Importa mai mult',
  'LBL_FINISHED' => 'Intoarce-te la',
  'LBL_UNDO_LAST_IMPORT' => 'Anulaţi Ultima Importare',
  'LBL_LAST_IMPORTED' => 'Ultima Creata',
  'ERR_MULTIPLE_PARENTS' => 'Puteţi avea doar un singur părinte ID definit',
  'LBL_DUPLICATES' => 'Dubluri gasite',
  'LNK_DUPLICATE_LIST' => 'Descarca lista de dubluri',
  'LNK_ERROR_LIST' => 'Descarca Lista de Erori',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download înregistrările care nu au putut fi importate.',
  'LBL_UNIQUE_INDEX' => 'Indicele Alege pentru duplicat comparaţie',
  'LBL_VERIFY_DUPS' => 'Verificaţi duplicat intrări împotriva indici selectate.',
  'LBL_INDEX_USED' => 'Index (uri) folosite:',
  'LBL_INDEX_NOT_USED' => 'Index (uri) nu sunt utilizate:',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Dosar nu a fost încărcat cu succes. Verificaţi permisiunile fişierului în directorul de instalare cache Sugar.',
  'LBL_IMPORT_FIELDDEF_ID' => 'ID unic de numărul de',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Numele sau ID-ul',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Număr de telefon',

  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Echipa Numele sau ID-ul',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Orice text',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Orice text',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Orice text',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Timp:',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datatimp',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nume de utilizator sau ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' ori \'1\'',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numeric (nr zecimal)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeric (fara zecimal)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numeric (fara zecimal)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeric (zecimal permise)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeric (zecimal permise)',
  'LBL_DATE_FORMAT' => 'Formatul datei',
  'LBL_TIME_FORMAT' => 'Formatul timpului',
  'LBL_TIMEZONE' => 'Zoana timpului',
  'LBL_ADD_ROW' => 'Adauga camp',
  'LBL_REMOVE_ROW' => 'Inlatura Camp',
  'LBL_DEFAULT_VALUE' => 'Valoare implicita:',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Arata optiunile avansate',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Ascunde opţiuni avansate',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Arata Previzualizare Coloane',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Ascunde previzualizare coloane',
  'LBL_SAVE_MAPPING_AS' => 'Salvare trecere pe harta ca',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Citat simplu (\')',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Citat dublu (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Niciunul',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Alte:',
  'LBL_IMPORT_COMPLETE' => 'Import finalizat',
  'LBL_IMPORT_RECORDS' => 'Importul Inregistrari',
  'LBL_IMPORT_RECORDS_OF' => 'din',
  'LBL_IMPORT_RECORDS_TO' => 'catre:',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_CURRENCY_SIG_DIGITS' => 'Cifre semnificative a valutei',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplu',
  'LBL_NUMBER_GROUPING_SEP' => '1000 separator',
  'LBL_DECIMAL_SEP' => 'Simbol zecimal',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nume Format Ecran',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"S" Formula de adresare, "f" Prenume, "L" Nume',
  'LBL_CHARSET' => 'Encodare Fişier',
  'LBL_MY_SAVED_HELP' => 'O cartografiere salvata specifică o combinaţie utilizată anterior de o sursă de date specifice şi un set de câmpuri de baze de date pentru a mapa câmpurile din fişierul de import.<br />Faceţi clic pe Publicare pentru a face cartografiere la dispoziţia altor utilizatori.',
  'LBL_MY_PUBLISHED_HELP' => 'O cartografiere a publicat o combinaţie specifică utilizată anterior de o sursă de date specifice şi un set de câmpuri de baze de date pentru a mapa câmpurile din fişierul de import.',
  'LBL_ENCLOSURE_HELP' => 'Caracterul de calificare este folosit pentru a include conţinutul câmpului destinat, inclusiv orice caractere care sunt folosite ca delimitatori.<br /><br />Exemplu: Dacă delimitatorul este o virgulă (,) şi calificativul este ghilimele ("),<br />"Cupertino, California", este importat într-un câmp în aplicare şi apare ca Cupertino, California.<br />Dacă nu există caractere de calificare, sau în cazul în care un personaj este diferit de calificare,<br />"Cupertino, California", este importat în două domenii adiacente ca "Cupertino şi" California ".<br /><br />Notă: Fişierul de import nu s-ar putea să conţină orice caractere de calificare.<br />Caracterul de calificare implicit pentru fişiere virgulă-şi delimitat prin tab-create în Excel este o ghilimele.',
  'LBL_DELIMITER_COMMA_HELP' => 'Selectaţi această opţiune în cazul în care caracterul care separă câmpurile din fişierul de import este o virgulă, sau dacă extensia de fişier este. Csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Selectaţi această opţiune în cazul în care caracterul care separă câmpurile din fişierul de import este un TAB, şi extensia de fişier este. Txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Selectaţi această opţiune în cazul în care caracterul care separă câmpurile din fişierul de import nu este nici o virgulă sau un TAB, şi tipul de caractere în câmpul adiacent.',
  'LBL_DATABASE_FIELD_HELP' => 'Selectaţi un câmp din lista de toate domeniile existente în baza de date pentru modulul.',
  'LBL_HEADER_ROW_HELP' => 'Acestea sunt titlurile teren în rândul antet al fişierului de import.',
  'LBL_DEFAULT_VALUE_HELP' => 'Indică o valoare de utilizat pentru câmp în înregistrarea create sau actualizate în cazul în care domeniul în dosarul de import nu conţine date.',
  'LBL_ROW_HELP' => 'Aceasta sunt datele din primul rând a non-antetului fişierului de import.',
  'LBL_SAVE_MAPPING_HELP' => 'Set de domenii, inclusiv ordinea câmpurilor şi sos de date selectate în Pasul Import 1, va fi salvată în timpul încercarea de import.<br />Cartografiere salvate pot fi apoi selectate în Pasul de import de la 1 la import pentru un alt.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Specificaţi setările în fişierul de import pentru a se asigura că datele sunt importate<br />corect. Aceste setări nu vor suprascrie preferinţele dumneavoastră. Înregistrările<br />creată sau actualizată va conţine setările specificate în pagina Contul meu.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Import Setări fişiere',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Selectaţi câmpurile din fişierul de import care urmează să fie folosite pentru a verifica duplicatele.<br />Dacă datele în câmpurile selectate se potrivesc cu datele,noi inregistrari nu vor fi create pentru randurile care contin datele duplicat.<br />Rândurile care conţin date duplicat domeniu vor fi identificate în rezultatele de import.',
  'LBL_IMPORT_STARTED' => 'Importa incepute:',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Înregistrarea nu a putut fi actualizata din cauza unei probleme de permisiune',
);
