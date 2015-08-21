<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_LIST_NAME' => 'Name',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_NAME' => 'Name:',
  'LBL_FULL_NAME' => 'Name',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_CONVERT_BUTTON_KEY' => 'V',
  'LBL_MODULE_NAME' => 'Zielkontakte',
  'LBL_MODULE_ID' => 'Zielkontakte',
  'LBL_INVITEE' => 'Direkt-Unterstellte',
  'LBL_MODULE_TITLE' => 'Zielkontakte: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Zielkontakte Suche',
  'LBL_LIST_FORM_TITLE' => 'Kontaktliste',
  'LBL_NEW_FORM_TITLE' => 'Neuer Zielkontakt',
  'LBL_PROSPECT' => 'Ziel:',
  'LBL_BUSINESSCARD' => 'Visitenkarte',
  'LBL_LIST_LAST_NAME' => 'Nachname',
  'LBL_LIST_PROSPECT_NAME' => 'Zielkontakt Name',
  'LBL_LIST_TITLE' => 'Funktion',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_PROSPECT_ROLE' => 'Rolle',
  'LBL_LIST_FIRST_NAME' => 'Vorname',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
  'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
  'LBL_CAMPAIGN_ID' => 'Kampagnen ID',
  'LBL_EXISTING_PROSPECT' => 'Vorhandener Kontakt ausgewählt',
  'LBL_CREATED_PROSPECT' => 'Neuer Kontakt angelegt',
  'LBL_EXISTING_ACCOUNT' => 'Vorhandene Firma ausgewählt',
  'LBL_CREATED_ACCOUNT' => 'Neue Firma angelegt',
  'LBL_CREATED_CALL' => 'Neuer Anruf angelegt',
  'LBL_CREATED_MEETING' => 'Neues Meeting angelegt',
  'LBL_ADDMORE_BUSINESSCARD' => 'Weitere Visitenkarte anlegen',
  'LBL_ADD_BUSINESSCARD' => 'Eingabe Visitenkarte',
  'LBL_PROSPECT_NAME' => 'Zielkontakt Name:',
  'LBL_PROSPECT_INFORMATION' => 'Zielkontakt Information',
  'LBL_MORE_INFORMATION' => 'Mehr Informationen',
  'LBL_FIRST_NAME' => 'Vorname:',
  'LBL_OFFICE_PHONE' => 'Bürotelefon:',
  'LBL_ANY_PHONE' => 'Irgendeine Telefonnummer:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_LAST_NAME' => 'Nachname:',
  'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
  'LBL_HOME_PHONE' => 'Privat:',
  'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Strasse:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Stadt:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ:',
  'LBL_ALT_ADDRESS_STREET' => '2. Adresse Strasse:',
  'LBL_ALT_ADDRESS_CITY' => '2. Adresse Stadt:',
  'LBL_ALT_ADDRESS_COUNTRY' => '2. Adresse Land:',
  'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland:',
  'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse PLZ:',
  'LBL_TITLE' => 'Funktion:',
  'LBL_DEPARTMENT' => 'Abteilung:',
  'LBL_BIRTHDATE' => 'Geburtstag:',
  'LBL_EMAIL_ADDRESS' => 'E-Mail:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
  'LBL_ANY_EMAIL' => 'Irgendeine E-Mail:',
  'LBL_ASSISTANT' => 'Assistent:',
  'LBL_ASSISTANT_PHONE' => 'Telefonnr. Assistent:',
  'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
  'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
  'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
  'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
  'LBL_ANY_ADDRESS' => 'Irgendeine Adresse:',
  'LBL_CITY' => 'Stadt:',
  'LBL_STATE' => 'Bundesland:',
  'LBL_POSTAL_CODE' => 'PLZ:',
  'LBL_COUNTRY' => 'Land:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
  'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_PROSPECT_ROLE' => 'Beruf:',
  'LBL_OPP_NAME' => 'Verkaufschance Name:',
  'LBL_IMPORT_VCARD' => 'vCard importieren',
  'LBL_IMPORT_VCARDTEXT' => 'Durch Import einer vCard neuen Kontakt automatisch anlegen.',
  'LBL_DUPLICATE' => 'Möglicher doppelter Zielkontakt',
  'MSG_SHOW_DUPLICATES' => 'Der Zielkontakt den Sie gerade erstellen, könnte eine Dublette eines bereits bestehenden Zielkontakts sein. Zielkontakte mit ähnlichen Namen / E-Mail Adressen sind unten aufgeführt.<br>Drücken Sie auf Speichern um fortzusetzen oder auf Abbrechen um zum Modul zurückzukehren ohne den Zielkontakt zu speichern.',
  'MSG_DUPLICATE' => 'Der Zielkontakt den Sie gerade erstellen, könnte eine Dublette eines bereits bestehenden Zielkontakts sein. Zielkontakte mit ähnlichen Namen / E-Mail Adressen sind unten aufgeführt.<br>Drücken Sie auf Speichern um fortzusetzen oder auf Abbrechen um zum Modul zurückzukehren ohne den Zielkontakt zu speichern.',
  'LNK_IMPORT_VCARD' => 'vCard importieren',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_NEW_CASE' => 'Neues Ticket',
  'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_EMAIL' => 'E-Mail archivieren',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_TASK' => 'Neue Aufgabe',
  'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
  'LNK_IMPORT_PROSPECTS' => 'Interessenten Importieren',
  'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
  'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich von diesem Ticket entfernen?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Möchten Sie diesen Eintrag wirklich als direkten Bericht entfernen?',
  'ERR_DELETE_RECORD' => 'Um einen Kontakt zu löschen, muss die Nummer des Datensatzes angegeben werden.',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Hauptadresse in weitere Adresse kopieren',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Weitere Adresse in Hauptadresse kopieren',
  'LBL_SALUTATION' => 'Anrede',
  'LBL_SAVE_PROSPECT' => 'Zielkontakt speichern',
  'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Zum erstellen einer Verkaufschance benötigen Sie eine Firma. Bitte erstellen Sie eine Firma oder wählen Sie eine existierende aus.',
  'LNK_SELECT_ACCOUNT' => 'Firma auswählen',
  'LNK_NEW_PROSPECT' => 'Neuer Zielkontakt',
  'LNK_PROSPECT_LIST' => 'Zielkontakte',
  'LNK_NEW_CAMPAIGN' => 'Neue Kampagne',
  'LNK_CAMPAIGN_LIST' => 'Kampagnen',
  'LNK_NEW_PROSPECT_LIST' => 'Kontaktliste erstellen',
  'LNK_PROSPECT_LIST_LIST' => 'Kontaktlisten',
  'LNK_IMPORT_PROSPECT' => 'Zielpersonen importieren',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Zielkontakte auswählen',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Zielkontakte auswählen',
  'LBL_INVALID_EMAIL' => 'Ungültige E-Mail:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zielkontakte',
  'LBL_PROSPECT_LIST' => 'Kontaktliste',
  'LBL_CONVERT_BUTTON_TITLE' => 'Zielkontakt konvertieren',
  'LBL_CONVERT_BUTTON_LABEL' => 'Zielkontakt konvertieren',
  'LBL_CONVERTPROSPECT' => 'Zielkontakt konvertieren',
  'LNK_NEW_CONTACT' => 'Neuer Kontakt',
  'LBL_CREATED_CONTACT' => 'Neuer Kontakt angelegt',
  'LBL_BACKTO_PROSPECTS' => 'Zurück zu Zielkontakten',
  'LBL_CAMPAIGNS' => 'Kampagnen',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnen Log',
  'LBL_TRACKER_KEY' => 'Tracker-Schlüssel',
  'LBL_LEAD_ID' => 'Interessent-ID',
  'LBL_CONVERTED_LEAD' => 'Konvertierter Interessent',
  'LBL_ACCOUNT_NAME' => 'Firmenname',
  'LBL_EDIT_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_MODIFIED_USER' => 'Veränderter Benutzer',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagnen',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
);

