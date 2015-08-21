<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_ASSIGNED_TO' => 'Przydzielone do:',
  'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
  'LBL_EMAIL_ADDRESSES' => 'Adres(y) e-mail:',
  'LBL_RATING' => 'Rating',
  'LBL_FAX' => 'Fax:',
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć tego klienta z projektu?',
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć to konto.',
  'LBL_ACCOUNT_NAME' => 'Nazwa firmy:',
  'LBL_ACCOUNT' => 'Firma:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
  'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
  'LBL_ANNUAL_REVENUE' => 'Roczne przychody:',
  'LBL_ANY_ADDRESS' => 'Dowolny adres:',
  'LBL_ANY_EMAIL' => 'Dowolny adres e-mail:',
  'LBL_ANY_PHONE' => 'Dowolny telefon:',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do:',
  'LBL_ASSIGNED_USER' => 'Przydzielone do użytkownika:',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielone do:',
  'LBL_BILLING_ADDRESS_CITY' => 'Adres korespondencyjny miasto:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Adres korespondencyjny kraj:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adres korespondencyjny kod pocztowy:',
  'LBL_BILLING_ADDRESS_STATE' => 'Adres korespondencyjny woj.:',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Adres Korespondencyjny ulica 2:',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Adres Korespondencyjny ulica 3:',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Adres korespondencyjny ulica 4:',
  'LBL_BILLING_ADDRESS_STREET' => 'Adres Korespondencyjny ulica:',
  'LBL_BILLING_ADDRESS' => 'Adres korespondencyjny:',
  'LBL_ACCOUNT_INFORMATION' => 'Informacje o firmie',
  'LBL_CITY' => 'Miejscowość:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_COUNTRY' => 'Kraj:',
  'LBL_DATE_ENTERED' => 'Data wprowadzenia:',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klienci',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisujące',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Prawdopodobnie rekord już istnieje',
  'LBL_EMAIL' => 'E-mail:',
  'LBL_EMPLOYEES' => 'Pracownicy:',
  'LBL_INDUSTRY' => 'Branża:',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa klienta',
  'LBL_LIST_CITY' => 'Miejscowość',
  'LBL_LIST_EMAIL_ADDRESS' => 'Adres e-mail',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_STATE' => 'Województwo',
  'LBL_LIST_WEBSITE' => 'Strona WWW',
  'LBL_MEMBER_OF' => 'Członek:',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Organizacje członkowskie',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizacje członkowskie',
  'LBL_NAME' => 'Nazwa:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'E-mail 2:',
  'LBL_OTHER_PHONE' => 'Telefon 2:',
  'LBL_OWNERSHIP' => 'Forma prawna:',
  'LBL_PARENT_ACCOUNT_ID' => 'ID klienta nadrzędnego',
  'LBL_PHONE_ALT' => 'Alternatywny numer tel.:',
  'LBL_PHONE_FAX' => 'Fax do biura:',
  'LBL_PHONE_OFFICE' => 'Telefon do biura:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_POSTAL_CODE' => 'Kod pocztowy:',
  'LBL_PUSH_BILLING' => 'Kopiuj adres korespond.',
  'LBL_PUSH_SHIPPING' => 'Kopiuj adres dostawy',
  'LBL_SAVE_ACCOUNT' => 'Zapisz klienta',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Adres dostawy miasto:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Adres dostawy kraj:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Adres dostawy kod pocztowy:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Adres dostawy woj.:',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adres dostawy ulica:',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adres dostawy ulica:',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adres dostawy ulica:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Adres dostawy ulica:',
  'LBL_SHIPPING_ADDRESS' => 'Adres dostawy:',
  'LBL_STATE' => 'Województwo:',
  'LBL_TEAMS_LINK' => 'Zespoły',
  'LBL_TICKER_SYMBOL' => 'Symbol wprowadzającego:',
  'LBL_TYPE' => 'Typ:',
  'LBL_USERS_ASSIGNED_LINK' => 'Przydzieleni użytkownicy',
  'LBL_USERS_CREATED_LINK' => 'Utworzone przez użytkowników',
  'LBL_USERS_MODIFIED_LINK' => 'Zmodyfikowane przez użytkowników',
  'LBL_VIEW_FORM_TITLE' => 'Widok klienta',
  'LBL_WEBSITE' => 'Strona WWW:',
  'LNK_ACCOUNT_LIST' => 'Klienci',
  'LNK_NEW_ACCOUNT' => 'Utwórz klienta',
  'MSG_DUPLICATE' => 'Stworzenie tego wpisu może spowodować zduplikowanie danych. Możesz wybrać jedną z poniższych możliwości,  lub kliknąć na [Dodaj klienta], aby utworzyć nowego klienta, korzystając z danych wprowadzonych wcześniej.',
  'MSG_SHOW_DUPLICATES' => 'Wprowadzając tego użytkownika prawdopodobnie powielasz istniejące dane. Możesz wybrać dane z listy lub kliknąć [Dodaj Klienta] aby kontynuować wprowadzanie danych zachowując wartości z formularza.',
  'NTC_COPY_BILLING_ADDRESS' => 'Kopiuj adres fakturowania do adresu dostawy',
  'NTC_COPY_BILLING_ADDRESS2' => 'Kopiuj do adresu dostawy',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Kopiuj adres dostawy do adresu fakturowania',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopiuj do adresu fakturowania',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Czy na pewno chcesz usunąć informacje o członkostwie?',
);

