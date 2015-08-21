<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_COPY_AND_PASTE_CODE' => 'Arba įkelkite html kodą į esamą puslapį',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Įkeldami naujienlaiškį į Galimus naujienlaiškius / Nutrauktus naujienlaiškius pridėsite kontaktą į prenumeratos atsisakymo sąrašą.',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'El. pašto marketingas',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Rodyti eilę',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Pasirinkta',
  'LBL_FROM_ADDR' => 'Siuntėjo adresas',
  'LBL_REPLY_ADDR' => '"Atsakyti-kam" Adresas:',
  'LBL_REPLY_NAME' => '"Atsakyti-kam" Vardas:',
  'LBL_MODULE_NAME' => 'Kampanijos',
  'LBL_MODULE_TITLE' => 'Kampanijos: Pradžia',
  'LBL_NEWSLETTER_TITLE' => 'Kampanijos: Naujienlaiškis',
  'LBL_SEARCH_FORM_TITLE' => 'Kampanijos paieška',
  'LBL_LIST_FORM_TITLE' => 'Kampanijų sąrašas',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Naujienlaiškių sąrašas',
  'LBL_CAMPAIGN_NAME' => 'Pavadinimas:',
  'LBL_CAMPAIGN' => 'Kampanija:',
  'LBL_NAME' => 'Pavadinimas:',
  'LBL_INVITEE' => 'Kontaktai',
  'LBL_LIST_CAMPAIGN_NAME' => 'Kampanija',
  'LBL_LIST_STATUS' => 'Statusas',
  'LBL_LIST_TYPE' => 'Tipas',
  'LBL_LIST_START_DATE' => 'Pradžios laikas',
  'LBL_LIST_END_DATE' => 'Pabaigos laikas',
  'LBL_DATE_ENTERED' => 'Sukurta',
  'LBL_DATE_MODIFIED' => 'Redaguota',
  'LBL_MODIFIED' => 'Redagavo:',
  'LBL_CREATED' => 'Sukūrė:',
  'LBL_TEAM' => 'Komanda:',
  'LBL_ASSIGNED_TO' => 'Atsakingas:',
  'LBL_ASSIGNED_TO_ID' => 'Atsakingas:',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
  'LBL_CAMPAIGN_START_DATE' => 'Pradžios laikas:',
  'LBL_CAMPAIGN_END_DATE' => 'Pabaigos data:',
  'LBL_CAMPAIGN_STATUS' => 'Statusas:',
  'LBL_CAMPAIGN_BUDGET' => 'Biudžetas:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Tikėtosios išlaidos:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Faktinės išlaidos:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Tikėtosios pajamos:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Puslapio peržiūrų skaičius:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Vienos peržiūros kaina:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Reklaminės nuorodos paspaudimo kaina:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Sėkmingi pardavimai:',
  'LBL_CAMPAIGN_TYPE' => 'Tipas:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Tikslas:',
  'LBL_CAMPAIGN_CONTENT' => 'Aprašymas:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Likę dienos',
  'LNK_NEW_CAMPAIGN' => 'Sukurti kampaniją (Klasikinė)',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Sukurti kampaniją (Vedlys)',
  'LNK_CAMPAIGN_LIST' => 'Kampanijos',
  'LNK_NEW_PROSPECT' => 'Sukurti adresatą',
  'LNK_PROSPECT_LIST' => 'Adresatai',
  'LNK_NEW_PROSPECT_LIST' => 'Sukurti adresatų sąrašą',
  'LNK_PROSPECT_LIST_LIST' => 'Adresatų sąrašas',
  'LBL_MODIFIED_BY' => 'Redagavo:',
  'LBL_CREATED_BY' => 'Sukūrė:',
  'LBL_DATE_CREATED' => 'Sukūrimo data:',
  'LBL_DATE_LAST_MODIFIED' => 'Redagavimo data:',
  'LBL_TRACKER_KEY' => 'Sekama nuoroda:',
  'LBL_TRACKER_URL' => 'Sekamos nuorodos adresas:',
  'LBL_TRACKER_TEXT' => 'Sekamos nuorodos pavadinimas:',
  'LBL_TRACKER_COUNT' => 'Sekamos nuorodos skaičius:',
  'LBL_REFER_URL' => 'Sekamos nuorodos URL:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kampanijos',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'El. kampanijos',
  'LBL_NEW_FORM_TITLE' => 'Nauja kampanija',
  'LBL_TRACKED_URLS' => 'Sekamos nuorodos adresas',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Sekamos nuorodos adresas',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Klientai',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Adresatų sąrašas',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'El. marketingas',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Sukurti laiško šabloną',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Laiško šablonai',
  'LBL_TRACK_BUTTON_TITLE' => 'Rodyti statusą',
  'LBL_TRACK_BUTTON_LABEL' => 'Rodyti statusą',
  'LBL_QUEUE_BUTTON_TITLE' => 'Siųsti laiškus',
  'LBL_QUEUE_BUTTON_LABEL' => 'Siųsti laiškus',
  'LBL_TEST_BUTTON_TITLE' => 'Siųsti testą',
  'LBL_TEST_BUTTON_LABEL' => 'Siųsti testą',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Rodyti detaliau',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Rodyti detaliau',
  'LBL_DEFAULT' => 'Visų adresatų sąrašas',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Laiškų eilė',
  'LBL_LOG_ENTRIES_TITLE' => 'Atsakymai',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Laiškas išsiųstas',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Nepasiekė adresato',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Neteisingas pašto adresas',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Paspaudė nuorodą',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Pažiūrėjo laišką',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Atsisakė naujienų',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Potencialūs kontaktai sukurti',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Potencialūs kontaktai',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Kontaktas sukurtas',
  'LBL_BACK_TO_CAMPAIGNS' => 'Atgal į kampanijas',
  'ERR_NO_EMAIL_MARKETING' => 'Turi būti bent vienas laiško šablonas susietas su kampanija.',
  'ERR_NO_TARGET_LISTS' => 'Turi būti bent vienas adresatų sąrašas susietas su kampanija.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Turi būti bent vienas testo tipo adresatų sąrašas susietas su kampanija.',
  'ERR_SENDING_NOW' => 'Žinutės yra pristatomos, prašome bandyti vėliau.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Nerasta marketingo laiškų šiame adresatų sąraše',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Yra nurodyta keltas marketingo laiškų  šiam adresatų sąrašui',
  'ERR_FIX_MESSAGES' => 'Prašome ištaisyti klaidas prieš tęsiant toliau.',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Rodyti ROI',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Ištrini testinius įrašus',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Ištrini testinius įrašus',
  'LBL_TRACK_DELETE_CONFIRM' => 'Tai ištrins visu išsiųstus testinius įrašus. Tęsti?',
  'ERR_NO_MAILBOX' => 'Ši kampanija neturi nurodytos pašto dėžutės.<BR>Prašome tai ištaisyti prieš tęsiant toliau.',
  'LBL_LIST_TO_ACTIVITY' => 'Rodyti statusą',
  'LBL_CURRENCY_ID' => 'Valiutos ID',
  'LBL_CURRENCY' => 'Valiuta:',
  'LBL_ROLLOVER_VIEW' => 'Užvesti ant juostelės, kad pamatyti išsamiau.',
  'LBL_TARGETED' => 'Pasirinkta',
  'LBL_TOTAL_TARGETED' => 'Iš viso pasirinkta',
  'LBL_CAMPAIGN_FREQUENCY' => 'Dažnumas:',
  'LBL_NEWSLETTERS' => 'Naujienlaiškai',
  'LBL_NEWSLETTER' => 'Naujienlaiškis',
  'LBL_NEWSLETTER_FORENTRY' => 'Naujienlaiškis',
  'LBL_MORE_DETAILS' => 'Detaliau',
  'LBL_CREATE_NEWSLETTER' => 'Sukurti naujienlaiškį',
  'LBL_LIST_NAME' => 'Vardas',
  'LBL_STATUS_TEXT' => 'Statusas:',
  'LBL_FROM_MAILBOX_NAME' => 'Panaudoti pašto dėžutę:',
  'LBL_FROM_NAME' => 'Siuntėjo vardas:',
  'LBL_START_DATE_TIME' => 'Pradžios data ir laikas:',
  'LBL_DATE_START' => 'Pradžios laikas',
  'LBL_TIME_START' => 'Pražios laikas',
  'LBL_TEMPLATE' => 'Laiško šablonas:',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Sukurti',
  'LBL_MESSAGE_FOR' => 'Siųsti žinutę kam:',
  'LBL_FINISH' => 'Pabaigti',
  'LBL_ALL_PROSPECT_LISTS' => 'Visi kampanijos adresatų sąrašai.',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Redaguoti',
  'LBL_EMAIL_SETUP_WIZARD' => 'El. pašto nustatymas',
  'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostika',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Užprenumeruota:',
  'LBL_UNSUBSCRIBED_HEADER' => 'Atsakyta prenumeratos',
  'LBL_FILTER_CHART_BY' => 'Filtruoti grafiką pagal:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Valdyti prenumeratas',
  'LBL_MARK_AS_SENT' => 'Pažymėti kaip išsiųstą',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Numatytas adresatų sąrašo tipas nerastas',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Nerasta jokių įrašų',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Įvykdyti įrašai',
  'LBL_EDIT_TRACKER_NAME' => 'Sekamos nuorodos pavadinimas:',
  'LBL_EDIT_TRACKER_URL' => 'Sekamos nuorodos adresas:',
  'LBL_EDIT_OPT_OUT_' => 'Atsisakymo nuoroda?',
  'LBL_EDIT_OPT_OUT' => 'Atsisakymo nuoroda:',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Prenumeratos atsisakymo sąrašas:',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Prenumeratos sąrašo pavadinimas:',
  'LBL_TEST_LIST_NAME' => 'Testinio sąrašo pavadinimas:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Prenumeratos atsisakymas',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Prenumerata',
  'LBL_TEST_TYPE_NAME' => 'Testas',
  'LBL_UNSUBSCRIPTION_LIST' => 'Prenumeratos atsisakymo sąrašas',
  'LBL_SUBSCRIPTION_LIST' => 'Prenumeratos sąrašas',
  'LBL_MRKT_NAME' => 'Pavadinimas',
  'LBL_TEST_LIST' => 'Testinis sąrašas',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Užpildykite kampanijos privalomus laukus.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Įveskite biudžetą, kad paskaičiuoti ROI.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Kiekvienas naujienlaiškis turi turėti tris adresatų sąrašus (prenumerata, prenumeratos atsisakymas ir testavimas). Galite priskirti esamą adresatų sąrašą. Jeigu ne, tuščias adresatų sąrašas bus sukurtas kai išsaugosite naujinelaiškį.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Pasirinkite ar sukurkite adresatų sąrašą kampanijos naudojimui. Šis adresatų sąrašas bus naudojamas kol siunčiamas laiškus su Jūsų marketingo žinutėmis.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Arba sukurkite naują naudojantis:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Nurodykite sekamos nuorodos adresą. Privalote įvesti pavadinimą ir tinklapio adresą.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Užpildykite formą, kad sukurti laiško pavyzdį, kada ir kaip jūsų naujienlaiškis tūrėtų būti paskirstytas.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Tai paskutinis proceso žingsnis. Pasirinkite ar norit išsiųsti bandomąjį laišką, suplanuoti naujienlaiškius paskirstymui, ar saugoti pasikeitimus ir keliauti į santraukos puslapį.',
  'LBL_HOME_START_MESSAGE' => 'Pasirinkite kampanijos tipą, kurį norėtumėte sukurti.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Jūs jau paskutiniame žingsnyje.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Jūs jau pirmame žingsnyje.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Kampanijos antraštė',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Kampanijos biudžetas',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Kampanijos sekamos nuorodos adresas',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Prenumeratos informacija',
  'LBL_WIZ_MARKETING_TITLE' => 'Marketingo laiškas',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Siųsti laišką',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Testinis laiškas',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Santrauka',
  'LBL_NAVIGATION_MENU_GEN1' => 'Kampanijos antraštė',
  'LBL_NAVIGATION_MENU_GEN2' => 'Biudžetas',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Sekamos nuorodos',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Marketingas',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Siųsti laišką',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Prenumeratos',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Santrauka',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Nurodykite Prenumeratos adresatų sąrašą.<br>  Šis adresatų sąrašas bus naudojamas siųsti paštą kampaniją.  <br>Jeigu dar neturite sąrašo, tai tuščias sąrašas jums bus sukurtas.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Nurodykite Prenumeratos atsisakymo adresatų sąrašą. <br>Šis adresatų sąrašas talpina žmonių vardus, kurie buvo pašalinti iš jūsų kampanijos <br>Jeigu dar neturite sąrašo, tai tuščias sąrašas jums bus sukurtas.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Nurodykite Testinį adresatų sąrašą. <br>Šis adresatų sąrašas bus naudojamas siųsti testinis jūsų kampanijos laiškus.  <br>Jeigu dar neturite sąrašo, tai tuščias sąrašas jums bus sukurtas.',
  'LBL_TRACKERS' => 'Sekamos nuorodos',
  'LBL_ADD_TRACKER' => 'Sukurti sekamą nuorodą',
  'LBL_ADD_TARGET' => 'Pridėti',
  'LBL_CREATE_TARGET' => 'Sukurti',
  'LBL_SELECT_TARGET' => 'Naudoti esamą adresatų sąrašą.',
  'LBL_REMOVE' => 'trint',
  'LBL_CONFIRM' => 'Pradėti',
  'LBL_START' => 'Pradėti',
  'LBL_TOTAL_ENTRIES' => 'Įrašai',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Išsaugoti duomenis ir keliauti į marketingo laišką',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Išsaugoti nustatymus',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Ar norite išsaugoti informaciją ir išeiti?',
  'LBL_CONFIRM_SEND_SAVE' => 'Jūs ketinate keliauti į kampanijos siuntimo puslapį. Ar norite išsaugoti ir tęsti ?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Naujienlaiškis:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Redaguoti naujienlaiškį:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Redaguoti kampaniją:',
  'LBL_SEND_AS_TEST' => 'Siųsti testinį marketingo laišką',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Užbaigti',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Išsaugoti ir tęsti',
  'LBL_TARGET_LISTS' => 'Adresatų sąrašai',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Negalima siųsti marketingo laiško kol Jūsų prenumeratos sąrašas neturės bent vieno įrašo. Jūs galite užpildyti sąrašą po užbaigimo.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Negalima siųsti marketingo laiško kol jūsų adresatų sąrašas neturės bent vieno įrašo. Jūs galite užpildyti sąrašą po užbaigimo.',
  'LBL_NO_TARGETS_WARNING' => 'Negalima siųsti marketingo laiško  kol jūsų kampanija neturės bent vieno adresatų sąrašo.',
  'LBL_NONE' => 'Nieko nesukurta',
  'LBL_CAMPAIGN_WIZARD' => 'Kampanijos vedlys',
  'LBL_EMAIL' => 'El. paštas',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Kampanija nesiunčianti laiškus',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Kampanijos tipas',
  'LBL_TARGET_LIST' => 'Adresatų sąrašas',
  'LBL_TARGET_TYPE' => 'Adresatų sąrašo tipas',
  'LBL_TARGET_NAME' => 'Adresatų sąrašo pavadinimas',
  'LBL_EMAILS_SCHEDULED' => 'Suplanuoti laiškai',
  'LBL_TEST_EMAILS_SENT' => 'Išsiųsti testiniai laiškai',
  'LBL_USERS_CANNOT_OPTOUT' => 'Sistemos vartotojai negali atsisakyti gauti laiškus',
  'LBL_ELECTED_TO_OPTOUT' => 'Jūs atsisakėte gauti iš mūsų laiškus',
  'LBL_COPY_OF' => 'Kopija',
  'LBL_SAVED_SEARCH' => 'Išsaugota paieška ir išdėstymas',
  'LBL_WIZ_FROM_NAME' => 'Siuntėjo vardas:',
  'LBL_WIZ_FROM_ADDRESS' => 'Siuntėjo adresas:',
  'LBL_EMAILS_PER_RUN' => 'Vienu metu išsiunčiamų laiškų skaičius:',
  'LBL_CUSTOM_LOCATION' => 'Vartotojo pasirinktas',
  'LBL_DEFAULT_LOCATION' => 'Numatytas',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Tik sveikus skaičius galima įvesti',
  'LBL_LOCATION_TRACK' => 'Kampanijos sekimo failų vieta (panašiai kaip campaign_tracker.php):',
  'LBL_MAIL_SENDTYPE' => 'Pašto siuntimo agentas:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Naudoti SMTP identifikaciją?',
  'LBL_MAIL_SMTPPASS' => 'SMTP slaptažodis:',
  'LBL_MAIL_SMTPPORT' => 'SMTP portas',
  'LBL_MAIL_SMTPSERVER' => 'SMTP serveris',
  'LBL_MAIL_SMTPUSER' => 'SMTP vartotojo vardas',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Kampanijoms laiško nustatymas',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php reikšmė nustatanti  site_url',
  'LBL_NOTIFY_TITLE' => 'Laiškų perspėjimų pasirinkimai',
  'LBL_MASS_MAILING_TITLE' => 'Masinio siuntimo nustatymai',
  'LBL_SERVER_TYPE' => 'Pašto serverio protokolas',
  'LBL_SERVER_URL' => 'Pašto serverio adresas',
  'LBL_LOGIN' => 'Vartotojo vardas',
  'LBL_PORT' => 'Pašto serverio portas',
  'LBL_MAILBOX_NAME' => 'Pašto kliento vardas:',
  'LBL_PASSWORD' => 'Slaptažodis',
  'LBL_MAILBOX_DEFAULT' => 'Gauti laiškai',
  'LBL_MAILBOX' => 'Stebimi aplankai',
  'LBL_NAVIGATION_MENU_SETUP' => 'Nustatyti el. paštą',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nauja pašto dėžutė',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Aptiktos pašto dėžutės skirtos valdyti nepasiekusius laiškus. Jums nereikia sukurti dar vienos.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Neaptikta nė viena pašto dėžutė skirta valdyti nepasiekusius laiškus.  Prašome sukurti naują.',
  'LBL_CAMP_MESSAGE_COPY' => 'Kaupti išsiųstų kampanijų laiškų kopijas:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Ar norėtumėte kaupti išsiųstų kampanijų laiškų kopijas visoms kampanijoms?  Mes rekomenduojame nekaupti. Pasirinkus nekaupti bus saugomi tik šablonai ir kintamieji reikalingi perkurti žinutę.',
  'LBL_YES' => 'Taip',
  'LBL_NO' => 'Ne',
  'LBL_DEFAULT_FROM_ADDR' => 'Numatytas:',
  'LBL_EMAIL_SETUP_DESC' => 'Užpildykite žemiau formą, kad pakoreguoti sistemos nustatymus kampanijų laiškų išsiuntimui.',
  'LBL_CREATE_MAILBOX' => 'Sukurti naują pašto dėžutę',
  'LBL_SSL_DESC' => 'Jeigu Jūsų pašto serveris palaiko SSL, tai įjungus SSL jungtis bus naudojama importuojant laiškus.',
  'LBL_SSL' => 'Naudoti SSL',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Kampanija gali neveikti dėl šių priežasčių:',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Kampanijos diagnostika',
  'LBL_DIAGNOSTIC' => 'Diagnostika',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Aptiktos pašto dėžutės skirtos valdyti nepasiekusius laiškus',
  'LBL_MAILBOX_CHECK1_BAD' => 'Neaptikta nė viena pašto dėžutė skirta valdyti nepasiekusius laiškus',
  'LBL_MAILBOX_CHECK2_GOOD' => 'El. pašto nustatymai buvo sutvarkyti:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Prašome sutvarkyti savo sistemos pašto adresą. El. pašto nustatymai nėra nustatyti.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Suplanavimai aptikti',
  'LBL_SCHEDULER_CHECK_BAD' => 'Jokių suplanavimų neaptikta',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Nesuplanuotas nepasiekusių kampanijos laiškų vykdymas.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Nesuplanuotas kampanijos laiškų vykdymas.',
  'LBL_SCHEDULER_NAME' => 'Planuotojas',
  'LBL_SCHEDULER_STATUS' => 'Statusas',
  'LBL_MARKETING_CHECK1_GOOD' => 'Marketingo komponentai rasti.',
  'LBL_MARKETING_CHECK1_BAD' => 'Nerasta marketingo komponentų. Jums reikės sukurti, kad galėtumėte siųsti kampaniją.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Adresatų sąrašas aptiktas.',
  'LBL_MARKETING_CHECK2_BAD' => 'Jokių adresatų sąrašų neaptikta. Jums reikia jį sukurti.',
  'LBL_EMAIL_SETUP_WIZ' => 'Pradėti el. pašto nustatymus',
  'LBL_SCHEDULER_LINK' => 'Eiti į planuotoją administracinėje zonoje.',
  'LBL_TO_WIZARD' => 'Paleisti',
  'LBL_TO_WIZARD_TITLE' => 'Paleisti vedlį',
  'LBL_EDIT_EXISTING' => 'Redaguoti kampaniją',
  'LBL_EDIT_TARGET_LIST' => 'Redaguoti adresatų sąrašą',
  'LBL_SEND_EMAIL' => 'Suplanuoti el. paštą',
  'LBL_USE_EXISTING' => 'Naudoti esamą',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Sukurti naują marketingo laišką',
  'LBL_CHOOSE_NEXT_STEP' => 'Pasirinkti kitą žingsnį',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Prašome įspėti sistemos administratorių, kad pašalintų gedimus',
  'LBL_EMAIL_COMPONENTS' => 'El. pašto komponentai',
  'LBL_SCHEDULER_COMPONENTS' => 'Planuotojo komponentai',
  'LBL_RECHECK_BTN' => 'Patikrinti',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Sukurti formą iš: pasirinktų laukų',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Sukurti formą iš: iš savybių',
  'LBL_DRAG_DROP_COLUMNS' => 'Tempti ir mesti laukus iš 1 ir 2 stulpelių',
  'LBL_DEFINE_LEAD_HEADER' => 'Formos antraštė:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Registracijos forma',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Siuntimo mygtuko etiketė:',
  'LBL_DEFINE_LEAD_POST_URL' => 'Siuntimo nuoroda:',
  'LBL_EDIT_LEAD_POST_URL' => 'Redaguoti siuntimo nuorodą?',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'nukreipimo adresas:',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Susijusi kampanija:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Siųsti',
  'LBL_WEB_TO_LEAD' => 'Sukurti registracijos formą',
  'LBL_LEAD_FOOTER' => 'Formos apatinė puslapio eilutė',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Pasirinkti ir susieti kampaniją:',
  'NTC_NO_LEGENDS' => 'Joks',
  'LBL_SELECT_LEAD_FIELDS' => 'Prašome pasirinkti iš galimų laukų',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Formos aprašymas:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Užpildžius šią formą susikurs potencialus kontaktas susietas su kampanija',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Prašome nusikrauti registracijos formą',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Registracijos forma',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Prašome užpildyti visus privalomus laukus',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Neteisingas pašto adresas',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Galimi laukai',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Registracijos forma (Pirmas stulpelis)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Registracijos forma (Antras stulpelis)',
  'LBL_LEAD_MODULE' => 'Potencialūs kontaktai',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Registracijos forma',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Prašome pasirinkti privalomus laukus:',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Kampanijos investicijų grąža',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Kampanijos reakcijos pagal gavėjo veiklą',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Įtrauktas į nesiunčiamų adresų ar domenų sąrašą',
  'LBL_AMOUNT_IN' => 'Suma',
  'LBL_ROI_CHART_REVENUE' => 'Pajamos',
  'LBL_ROI_CHART_INVESTMENT' => 'Investicijos',
  'LBL_ROI_CHART_BUDGET' => 'Biudžetas',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Tikėtosios pajamos',
  'LBL_TOP_CAMPAIGNS' => 'Top kampanijos',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Kampanijos pavadinimas',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Pajamos',
  'LBL_LEADS' => 'Potencialūs kontaktai',
  'LBL_CONTACTS' => 'Kontaktai',
  'LBL_ACCOUNTS' => 'Klientai',
  'LBL_OPPORTUNITIES' => 'Pardavimai',
  'LBL_CREATED_USER' => 'Sukūrė',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'LBL_LOG_ENTRIES' => 'Žurnalo įrašai',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Adresatų sąrašas',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Peržiūrėta',
  'LBL_LINK_SUBPANEL_TITLE' => 'Nuoroda',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Potencialus kontaktas',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontaktas',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Neteisingas pašto adresas',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Siuntimo klaida',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Išimtas',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Blokuotas',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klientai',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialūs kontaktai',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_IMPORT_PROSPECTS' => 'Importuoti adresatus',
  'LBL_LEAD_FORM_WIZARD' => 'Potencialaus kontakto formos vedlys',
  'LBL_CAMPAIGN_INFORMATION' => 'Kampanijos apžvalga',
  'LBL_MONTH' => 'Mėnesis',
  'LBL_YEAR' => 'Metai',
  'LBL_DAY' => 'Diena',
);

