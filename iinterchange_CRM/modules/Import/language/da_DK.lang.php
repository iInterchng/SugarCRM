<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FAILURE' => 'Import fejl:',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Er du sikker på du vil slette denne tilknytning?',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_OUTLOOK_NUM_1' => 'Start <b>Outlook</b>',
  'LBL_' => '',
  'LBL_GOOD_FILE' => 'Importfilen blev læst',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Poster springes over på grund af fejl',
  'LBL_UPDATE_SUCCESSFULLY' => 'Poster blev opdateret',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Poster blev oprettet',
  'LBL_STEP_4_TITLE' => 'Trin 4: Importér fil',
  'LBL_STEP_5_TITLE' => 'Trin 5: Vis resultater',
  'LBL_CUSTOM_ENCLOSURE' => 'Felter kvalificeret efter:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Kan ikke udgives. Der er udgivet en anden importtilknytning med samme navn.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Udgivelsen af en tilknytning, der ejes af en anden bruger, kan ikke annulleres. Du ejer en importtilknytning med samme navn.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importer er ikke konfigureret for denne modultype',
  'LBL_IMPORT_TYPE' => 'Importhandling',
  'LBL_IMPORT_BUTTON' => 'Opret poster',
  'LBL_UPDATE_BUTTON' => 'Opret og opdater poster',
  'LBL_ERROR_INVALID_BOOL' => 'Ugyldig værdi "skal være et 1 eller 0"',
  'LBL_NO_ID' => 'Id påkrævet',
  'LBL_PRE_CHECK_SKIPPED' => 'Forhåndstjek springes over',
  'LBL_IMPORT_ERROR' => 'Der opstod importfejl',
  'LBL_ERROR' => 'Fejl:',
  'LBL_NOLOCALE_NEEDED' => 'Ingen lokal-konvertering er nødvendig',
  'LBL_FIELD_NAME' => 'Feltnavn',
  'LBL_VALUE' => 'Værdi',
  'LBL_ROW_NUMBER' => 'Rækkenummer',
  'LBL_NONE' => 'Ingen',
  'LBL_REQUIRED_VALUE' => 'Obligatorisk værdi mangler',
  'LBL_ID_EXISTS_ALREADY' => 'Id findes allerede i denne tabel',
  'LBL_ASSIGNED_USER' => 'Hvis brugeren ikke findes, skal du bruge den aktuelle bruger',
  'LBL_SHOW_HIDDEN' => 'Vis felter, der normalt ikke kan importeres',
  'LBL_UPDATE_RECORDS' => 'Opdater eksisterende poster i stedet for at importere dem "ikke Fortryd"',
  'LBL_TEST' => 'Test import "gem eller rediger ikke data"',
  'LBL_TRUNCATE_TABLE' => 'Tøm tabel før import "slette alle poster"',
  'LBL_RELATED_ACCOUNTS' => 'Opret ikke relaterede konti',
  'LBL_NO_DATECHECK' => 'Spring over datokontrol "hurtigere, men virker ikke, hvis en dato er forkert"',
  'LBL_NO_WORKFLOW' => 'Undlad at køre arbejdsgangen under denne import',
  'LBL_NO_EMAILS' => 'Undlad at sende e-mail-beskeder under denne import',
  'LBL_NO_PRECHECK' => 'Tilstanden Indbygget format',
  'LBL_STRICT_CHECKS' => 'Brug strenge regelsæt "tjek også e-mail-adresser og telefonnumre"',
  'LBL_ERROR_SELECTING_RECORD' => 'Fejl under valg af post:',
  'LBL_ERROR_DELETING_RECORD' => 'Fejl under sletning af post:',
  'LBL_NOT_SET_UP' => 'Import er ikke konfigureret for denne modultype',
  'LBL_ARE_YOU_SURE' => 'Er du sikker? Dette vil slette alle data i dette modul.',
  'LBL_NO_RECORD' => 'Der er ingen post med dette id at opdatere',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import er ikke konfigureret for denne modultype',
  'LBL_DEBUG_MODE' => 'Tilstanden Aktivér fejlfinding',
  'LBL_ERROR_INVALID_ID' => 'Id\'et er for langt til feltet "den maksimale længde er 36 tegn"',
  'LBL_ERROR_INVALID_PHONE' => 'Ugyldigt telefonnummer',
  'LBL_ERROR_INVALID_NAME' => 'Strengen er for lang til feltet',
  'LBL_ERROR_INVALID_VARCHAR' => 'Strengen er for lang til feltet',
  'LBL_ERROR_INVALID_DATE' => 'Ugyldig datostreng',
  'LBL_ERROR_INVALID_DATETIME' => 'Ugyldig dato og klokkeslæt',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ugyldig dato og klokkeslæt',
  'LBL_ERROR_INVALID_TIME' => 'Ugyldigt klokkeslæt',
  'LBL_ERROR_INVALID_INT' => 'Ugyldig heltalsværdi',
  'LBL_ERROR_INVALID_NUM' => 'Ugyldig numerisk værdi',
  'LBL_ERROR_INVALID_EMAIL' => 'Ugyldig e-mail adresse',
  'LBL_ERROR_INVALID_USER' => 'Ugyldigt brugernavn eller id',
  'LBL_ERROR_INVALID_TEAM' => 'Ugyldigt teamnavn eller id',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Ugyldigt kundenavn eller id',
  'LBL_ERROR_INVALID_RELATE' => 'Ugyldigt relationelt felt',
  'LBL_ERROR_INVALID_CURRENCY' => 'Ugyldig valutaværdi',
  'LBL_ERROR_INVALID_FLOAT' => 'Ugyldigt tal med flydende decimal',
  'LBL_ERROR_NOT_IN_ENUM' => 'Værdi ikke på rulleliste. Tilladte værdier er:',
  'LBL_NOT_MULTIENUM' => 'Ikke en MultiEnum',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Import ikke er konfigureret for denne modultype',
  'LBL_IMPORT_MODULE_NO_USERS' => 'ADVARSEL! Du har ingen brugere defineret på dit system. Hvis du importerer uden først at tilføje brugere, bliver alle poster ejet af administratoren.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Kan ikke udgives. Der er udgivet en anden importtilknytning med samme navn.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Udgivelsen af en tilknytning, der ejes af en anden bruger, kan ikke annulleres. Du ejer en importtilknytning med samme navn.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Biblioteket',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'findes ikke eller kan ikke skrives',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Filen blev ikke uploadet. Det kan være, at indstillingen \'upload_max_filesize\' i filen php.ini er angivet til et lille antal',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Filen er for stor. Maks.:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Byte. Skift $sugar_config [ \'upload_maxsize\'] i config.php',
  'LBL_MODULE_NAME' => 'Importér',
  'LBL_TRY_AGAIN' => 'Prøv igen',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Du kan ikke importere en systemadministratorbruger',
  'ERR_MULTIPLE' => 'Flere kolonner er defineret med samme feltnavn.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Obligatoriske felter mangler:',
  'ERR_MISSING_MAP_NAME' => 'Brugerdefineret tilknytningsnavn mangler',
  'ERR_SELECT_FULL_NAME' => 'Du kan ikke vælge Fulde navn, når Fornavn og Efternavn er valgt.',
  'ERR_SELECT_FILE' => 'Vælg en fil, der skal uploades.',
  'LBL_SELECT_FILE' => 'Vælg fil:',
  'LBL_CUSTOM' => 'Brugerdefineret',
  'LBL_CUSTOM_CSV' => 'Brugerdefineret kommasepareret fil',
  'LBL_CSV' => 'Kommasepareret fil',
  'LBL_TAB' => 'Tabulatorsepareret fil',
  'LBL_CUSTOM_DELIMITED' => 'Brugerdefineret separeret fil',
  'LBL_CUSTOM_DELIMITER' => 'Felter separeret af:',
  'LBL_FILE_OPTIONS' => 'Filindstillinger',
  'LBL_CUSTOM_TAB' => 'Brugerdefineret tabulatorsepareret fil',
  'LBL_DONT_MAP' => '- Undlad at tilknytte dette felt -',
  'LBL_STEP_1_TITLE' => 'Trin 1: Vælg datakilde og importhandling',
  'LBL_WHAT_IS' => 'Hvad er datakilden?',
  'LBL_MY_SAVED' => 'Mine gemte tilknytninger:',
  'LBL_PUBLISH' => 'Udgiv',
  'LBL_DELETE' => 'Slet',
  'LBL_PUBLISHED_SOURCES' => 'Udgivne tilknytninger:',
  'LBL_UNPUBLISH' => 'Annuller udgivelse',
  'LBL_NEXT' => 'Næste >',
  'LBL_BACK' => '< Tilbage',
  'LBL_STEP_2_TITLE' => 'Trin 2: Upload importfil',
  'LBL_HAS_HEADER' => 'Har header:',
  'LBL_NOTES' => 'Noter:',
  'LBL_NOW_CHOOSE' => 'Nu skal du vælge den fil, der skal importeres:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 og 2000 kan eksportere data i formatet <b>Kommaseparerede værdier</b>, som kan bruges til at importere data i systemet. Du kan eksportere dine data fra Outlook ved at følge nedenstående trin:',
  'LBL_OUTLOOK_NUM_2' => 'Vælg menuen <b>Filer</b> og derefter menupunktet <b>Importér og eksportér...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Vælg <b>Eksportér til en fil</b>, og klik på Næste',
  'LBL_OUTLOOK_NUM_4' => 'Vælg <b>Kommaseparerede værdier "Windows"</b>, og klik på <b>Næste</b>.<br> Bemærk! Du kan blive bedt om at installere eksportkomponenten',
  'LBL_OUTLOOK_NUM_5' => 'Vælg mappen <b>Kontaktpersoner</b>, og klik på <b>Næste</b>. Du kan vælge forskellige kontaktpersonmapper, hvis dine kontakter er gemt i flere mapper',
  'LBL_OUTLOOK_NUM_6' => 'Vælg et filnavn, og klik på <b>Næste</b>',
  'LBL_OUTLOOK_NUM_7' => 'Klik på <b>Udfør</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kan eksportere data i formatet <b>Kommaseparerede værdier</b>, som kan bruges til at importere data i systemet. Du kan eksportere dine data fra Salesforce.com ved at følge nedenstående trin:',
  'LBL_SF_NUM_1' => 'Åben din browser, gå til http://www.salesforce.com, og log på med din e-mail-adresse og adgangskode',
  'LBL_SF_NUM_2' => 'Klik på fanen <b>Rapporter</b> i den øverste menu',
  'LBL_SF_NUM_3' => '<b>Sådan eksporteres konti:</b> Klik på linket <b>Aktive konti</b><br><b>Sådan eksporteres kontaktpersoner:</b> Klik på linket <b>Adresseliste</b>',
  'LBL_SF_NUM_4' => 'På <b>Trin 1: Vælg rapporttypen</b> skal du vælge <b>Rapport i tabelformat</b> og klikke på <b>Næste</b>',
  'LBL_SF_NUM_5' => 'På <b>Trin 2: Vælg rapportkolonnerne</b> skal du vælge de kolonner, du vil eksportere, og klikke på <b>Næste</b>',
  'LBL_SF_NUM_6' => 'På <b>Trin 3: Vælg de oplysninger, der skal opsummeres</b> skal du blot klikke på <b>Næste</b>',
  'LBL_SF_NUM_7' => 'På <b>Trin 4: Bestil rapportkolonnerne</b> skal du blot klikke på <b>Næste</b>',
  'LBL_SF_NUM_8' => 'På <b>Trin 5: Vælg rapportkriterierne</b> under <b>Startdato</b> skal du vælge en dato langt nok tilbage i tiden til at omfatte alle dine konti. Du kan også eksportere en delmængde af konti ved hjælp af mere avancerede kriterier. Når du er færdig, skal du klikke på <b>Kør rapport</b>',
  'LBL_SF_NUM_9' => 'En rapport vil blive genereret, og siden vil vise <b>Rapportgenereringsstatus: Fuldført.</b> Nu skal du klikke på <b>Eksportér til Excel</b>',
  'LBL_SF_NUM_10' => 'På <b>Eksportér rapport:</b> for <b>Eksportér filformat:</b> skal du vælge <b>Kommasepareret .csv</b>. Klik på <b>Eksportér</b>.',
  'LBL_SF_NUM_11' => 'En dialogboks vises og spørger dig, om du vil gemme eksportfilen på computeren.',
  'LBL_IMPORT_ACT_TITLE' => 'Act! kan eksportere data i formatet <b>Kommaseparerede værdier</b>, som kan bruges til at importere data til systemet. Du kan eksportere dine data fra Act! ved at følge nedenstående trin:',
  'LBL_ACT_NUM_1' => 'Start <b>ACT!</b>',
  'LBL_ACT_NUM_2' => 'Vælg menuen <b>Filer</b>, menupunktet <b>Dataudveksling</b> og derefter menupunktet <b>Eksportér...</b>',
  'LBL_ACT_NUM_3' => 'Vælg filtypen <b>Tekstsepareret</b>',
  'LBL_ACT_NUM_4' => 'Vælg et filnavn og en placering til de eksporterede data, og klik på <b>Næste</b>',
  'LBL_ACT_NUM_5' => 'Vælg <b>Kun kontaktpersonposter</b>',
  'LBL_ACT_NUM_6' => 'Klik på knappen <b>Indstillinger...</b>',
  'LBL_ACT_NUM_7' => 'Vælg <b>Komma</b> som feltseparatortegn',
  'LBL_ACT_NUM_8' => 'Markér afkrydsningsfeltet <b>Ja, eksportér feltnavne</b>, og klik på <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Klik på <b>Næste</b>',
  'LBL_ACT_NUM_10' => 'Vælg <b>Alle poster</b>, og klik derefter på <b>Udfør</b>',
  'LBL_IMPORT_CUSTOM_TITLE' => 'I mange programmer har du mulighed for at eksportere data til en <b>kommasepareret tekstfil ".csv"</b> ved at følge disse generelle trin:',
  'LBL_CUSTOM_NUM_1' => 'Start programmet, og åbn datafilen',
  'LBL_CUSTOM_NUM_2' => 'Vælg menupunktet <b>Gem som...</b> eller <b>Eksportér...</b>',
  'LBL_CUSTOM_NUM_3' => 'Gem filen i formatet <b>CSV</b> eller <b>Kommaseparerede værdier</b>',
  'LBL_IMPORT_TAB_TITLE' => 'I mange programmer har du mulighed for at eksportere data til en <b>tabulatorsepareret tekstfil ".tsv eller.tab"</b> ved at følge disse generelle trin:',
  'LBL_TAB_NUM_1' => 'Start programmet, og åbn datafilen',
  'LBL_TAB_NUM_2' => 'Vælg menupunktet <b>Gem som...</b> eller <b> Eksportér...</b>',
  'LBL_TAB_NUM_3' => 'Gem filen i formatet <b>TSV</b> eller <b>Tabulatorseparerede værdier</b>',
  'LBL_STEP_3_TITLE' => 'Trin 3: Bekræft felter og import',
  'LBL_SELECT_FIELDS_TO_MAP' => 'På listen nedenfor skal du vælge de felter i importfilen, der skal importeres til hvert felt i systemet. Når du er færdig, skal du klikke på <b>Importér nu</b>:',
  'LBL_DATABASE_FIELD' => 'Databasefelt',
  'LBL_HEADER_ROW' => 'Kolonneoverskrift',
  'LBL_ROW' => 'Række',
  'LBL_SAVE_AS_CUSTOM' => 'Gem som brugerdefineret tilknytning:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Navn på brugerdefineret tilknytning:',
  'LBL_CONTACTS_NOTE_1' => 'Enten efternavn eller fulde navn skal tilknyttes.',
  'LBL_CONTACTS_NOTE_2' => 'Hvis fulde navn er tilknyttet, ignoreres fornavn og efternavn.',
  'LBL_CONTACTS_NOTE_3' => 'Hvis fulde navn er tilknyttet, opdeles dataene under fulde navn i fornavn og efternavn, når de indsættes i databasen.',
  'LBL_CONTACTS_NOTE_4' => 'Felter, der ender i Gadeadresse 2 og Gadeadresse 3, sammenkædes med hovedfeltet Gadeadresse, når de indsættes i databasen.',
  'LBL_ACCOUNTS_NOTE_1' => 'Felter, der ender i Gadeadresse 2 og Gadeadresse 3, sammenkædes med hovedfeltet Gadeadresse, når de indsættes i databasen.',
  'LBL_REQUIRED_NOTE' => 'Obligatorisk"e" felt"er":',
  'LBL_IMPORT_NOW' => 'Importér nu',
  'LBL_CANNOT_OPEN' => 'Den importerede fil kan ikke åbnes til læsning',
  'LBL_NOT_SAME_NUMBER' => 'Der var ikke det samme antal felter pr. linje i din fil',
  'LBL_NO_LINES' => 'Der var ingen linjer i din importfil',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Importfilen er allerede blevet behandlet eller findes ikke',
  'LBL_SUCCESS' => 'Handlingen lykkedes:',
  'LBL_SUCCESSFULLY' => 'Blev importeret',
  'LBL_LAST_IMPORT_UNDONE' => 'Den sidste import blev ikke fuldført',
  'LBL_NO_IMPORT_TO_UNDO' => 'Der var ingen import at fortryde.',
  'LBL_FAIL' => 'Handlingen mislykkedes:',
  'LBL_RECORDS_SKIPPED' => 'Poster springes over, fordi de manglede et eller flere obligatoriske felter',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Poster springes over, fordi id\'erne enten fandtes eller var længere end 36 tegn',
  'LBL_RESULTS' => 'Resultater',
  'LBL_IMPORT_MORE' => 'Importér mere',
  'LBL_FINISHED' => 'Retur til',
  'LBL_UNDO_LAST_IMPORT' => 'Fortryd sidste import',
  'LBL_LAST_IMPORTED' => 'Senest oprettet',
  'ERR_MULTIPLE_PARENTS' => 'Du kan kun have et overordnet id defineret',
  'LBL_DUPLICATES' => 'Dubletter blev fundet',
  'LNK_DUPLICATE_LIST' => 'Download liste over dubletter',
  'LNK_ERROR_LIST' => 'Download liste over fejl',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download poster, der ikke kan importeres.',
  'LBL_UNIQUE_INDEX' => 'Vælg indeks for sammenligning af dubletter',
  'LBL_VERIFY_DUPS' => 'Kontrollér identiske poster i forhold til udvalgte indekser.',
  'LBL_INDEX_USED' => 'Indeks"er" anvendes:',
  'LBL_INDEX_NOT_USED' => 'Indeks"er" anvendes ikke:',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Filen blev ikke uploadet. Tjek filtillladelserne i din Sugar-installations cachemappe.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Entydigt id-nummer',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Navn eller id',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonnummer',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Teamnavn eller id',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Tekst',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Tekst',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Klokkeslæt',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Dato',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Dato/klokkeslæt',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Brugernavn eller id',
  'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' eller \'1\'',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-mail-adresse',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numerisk "ingen decimal"',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerisk "ingen decimal"',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numerisk "ingen decimal"',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerisk "decimal tilladt"',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerisk "decimal tilladt"',
  'LBL_DATE_FORMAT' => 'Datoformat:',
  'LBL_TIME_FORMAT' => 'Klokkeslætsformat:',
  'LBL_TIMEZONE' => 'Tidszone:',
  'LBL_ADD_ROW' => 'Tilføj felt',
  'LBL_REMOVE_ROW' => 'Fjern felt',
  'LBL_DEFAULT_VALUE' => 'Standardværdi',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Vis avancerede indstillinger',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Skjul avancerede indstillinger',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Vis forhåndsvisning af kolonner',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Skjul forhåndsvisning af kolonner',
  'LBL_SAVE_MAPPING_AS' => 'Gem tilknytning som',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Enkelt anførselstegn "\'"',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dobbelt anførselstegn "\'\'"',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Ingen',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Andet:',
  'LBL_IMPORT_COMPLETE' => 'Importen blev fuldført',
  'LBL_IMPORT_RECORDS' => 'Importerer poster',
  'LBL_IMPORT_RECORDS_OF' => 'af',
  'LBL_IMPORT_RECORDS_TO' => 'til',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Valutabetydende cifre',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Eksempel',
  'LBL_NUMBER_GROUPING_SEP' => 'Tusindtalsseparator',
  'LBL_DECIMAL_SEP' => 'Decimaltegn',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Visningsformat til navn',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"<i>""s"" tiltaleform, ""f"" fornavn, ""l"" efternavn</i>"',
  'LBL_CHARSET' => 'Filkodning',
  'LBL_MY_SAVED_HELP' => 'En gemt tilknytning angiver en tidligere anvendt kombination af en bestemt datakilde og et sæt databasefelter, der skal knyttes til felterne i importfilen.<br>Klik på <b>Udgiv</b> at gøre tilknytningen tilgængelig for andre brugere.<br> Klik på <b>Annuller udgivelse</b> at gøre tilknytningen utilgængelig for andre brugere.',
  'LBL_MY_PUBLISHED_HELP' => 'En udgivet tilknytning angiver en tidligere anvendt kombination af en bestemt datakilde og et sæt databasefelter, der skal knyttes felterne i importfilen.',
  'LBL_ENCLOSURE_HELP' => '"<p><b>Kvalifikatortegnet</b> bruges til at omslutte det påtænkte feltindhold, herunder alle tegn, der bruges som afgrænsningstegn.<br><br>Eksempel: Hvis afgrænsningstegnet er et komma "," og kvalifikatoren er et anførselstegn """",<br>importeres <b>""Cupertino, Californien""</b>til ét felt i programmet og vises som <b>Cupertino, Californien</b>.<br>Hvis der ikke er nogen kvalifikatortegn, eller hvis et andet tegn er kvalifikatoren, importeres<br><b>""Cupertino, Californien""</b> til to tilstødende felter som <b>""Cupertino</b> og <b>""Californien""</b>.<br><br>Bemærk! Importfilen indeholder måske ikke nogen kvalifikatortegn.<br>Standardkvalifikatortegnet til komma-og tabulatorseparerede filer oprettet i Excel er et anførselstegn.</p>"',
  'LBL_DELIMITER_COMMA_HELP' => 'Vælg denne indstilling, hvis det tegn, der adskiller felterne i importfilen, er et <b>komma</b>, eller hvis filtypenavnet er. csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Vælg denne indstilling, hvis det tegn, der adskiller felterne i importfilen, er et <b>tabulatorstop</b>, og filtypenavnet er. txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Vælg denne indstilling, hvis det tegn, der adskiller felterne i importfilen, hverken er et komma eller et tabulatorstop, og skriv tegnet i feltet ved siden af.',
  'LBL_DATABASE_FIELD_HELP' => 'Vælg et felt fra listen over alle de felter, der findes i databasen, til modulet.',
  'LBL_HEADER_ROW_HELP' => 'Dette er felttitlerne i importfilens række med kolonneoverskrifter.',
  'LBL_DEFAULT_VALUE_HELP' => 'Angiv en værdi til brug for feltet i den oprettede eller opdaterede post, hvis feltet i importfilen ikke indeholder data.',
  'LBL_ROW_HELP' => 'Dette er dataene i importfilens første række uden kolonneoverskrifter.',
  'LBL_SAVE_MAPPING_HELP' => 'Indtast et navn til det sæt databasefelter, der bruges ovenfor ved tilknytning til felterne i importfilens felter.<br>Sættet af felter, herunder felternes rækkefølge og den datakilde, der er valgt under Import i trin 1, gemmes under importforsøget.<br>Den gemte tilknytning kan derefter vælges under Import i trin 1 til en anden import.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Angiv indstillingerne i importfilen for at sikre, at dataene importeres<br>korrekt. Disse indstillinger tilsidesætter ikke dine indstillinger. De poster<br>, der oprettes eller opdateres, indeholder de indstillinger, der er angivet på siden Min konto.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Importér filindstillinger',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Vælg de felter i importfilen, der skal bruges til at kontrollere for dubletter.<br>Hvis data i de valgte felter matcher data i felter i eksisterende poster, oprettes der ikke nye poster til de rækker, der indeholder de identiske feltdata.<br>De rækker, der indeholder identiske feltdata, identificeres i Importér resultater.',
  'LBL_IMPORT_STARTED' => 'Import startet:',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Posten kunne ikke opdateres på grund af problemer med tilladelser',
);

