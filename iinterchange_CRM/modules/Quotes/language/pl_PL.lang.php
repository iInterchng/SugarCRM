<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => 'Obniżka',
  'LBL_CONTRACTS' => 'Kontratky',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontratky',
  'ERR_DELETE_RECORD' => 'Numer rekordu musi być określony, aby usunąć kalkulację.',
  'LBL_ACCOUNT_ID' => 'ID Klienta',
  'LBL_ACCOUNT_NAME' => 'Nazwa klienta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
  'LBL_ADD_COMMENT' => 'Dodaj komentarz',
  'LBL_ADD_GROUP' => 'Dodaj grupę',
  'LBL_ADD_ROW' => 'Dodaj wiersz',
  'LBL_ADDRESS_INFORMATION' => 'Adres',
  'LBL_AMOUNT' => 'Kwota kalkulacji:',
  'LBL_AMOUNT_USDOLLAR' => 'Kwota:',
  'LBL_ANY_ADDRESS' => 'Dowolny adres:',
  'LBL_BILL_TO' => 'Wyślij fakturę do',
  'LBL_BILLING_ACCOUNT_NAME' => 'Nazwa klienta na fakturze',
  'LBL_BILLING_ACCOUNT' => 'Konto:',
  'LBL_BILLING_ADDRESS_CITY' => 'Miasto na fakturze',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Kraj na fakturze',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'kod pocztowy na fakturze',
  'LBL_BILLING_ADDRESS_STATE' => 'Województwo na fakturze',
  'LBL_BILLING_ADDRESS_STREET' => 'Adres na fakturze',
  'LBL_BILLING_ADDRESS' => 'Adres na fakturze:',
  'LBL_BILLING_CONTACT_ID' => 'ID kontaktu na fakturze:',
  'LBL_BILLING_CONTACT_NAME' => 'Nazwa kontaktu na fakturze:',
  'LBL_BILLING_CONTACT' => 'Kontakt:',
  'LBL_BUNDLE_NAME' => 'Nazwa grupy:',
  'LBL_BUNDLE_STAGE' => 'Etap grupy:',
  'LBL_BUNDLE_DISCOUNT' => 'Obniżka:',
  'LBL_CALC_GRAND' => 'Wyświetl łączną sumę:',
  'LBL_CHECK_DATA' => 'Nieprawidłowe wprowadzenie danych: proszę sprawdź swoje dane i upewnij się, że masz poprawne cyfry (0-9 lub &#39;.&#39;)',
  'LBL_CITY' => 'Miasto:',
  'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Kontakt-Kalkulacja:',
  'LBL_CONTACT_ROLE' => 'Rola kontaktu:',
  'LBL_COUNTRY' => 'Kraj:',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_QUOTE_CLOSED' => 'Rzeczywista data zamknięcia:',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Ważne do:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kalkulacje',
  'LBL_DELETE_GROUP' => 'Usuń grupę',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisowe',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Możliwa duplikacja kalkulacji',
  'LBL_EMAIL_QUOTE_FOR' => 'Kalkulacja dla:',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Oto kalkulacja, o którą prosiłeś(aś) (Możesz zmienić ten tekst)',
  'LBL_EMAIL_ATTACHMENT' => 'Załącznik wiadomości:',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'Historia',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_INVOICE' => 'Faktura',
  'LBL_LEAD_SOURCE' => 'Źródło leadu:',
  'LBL_LINE_ITEM_INFORMATION' => 'Pozycje',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa klienta',
  'LBL_LIST_AMOUNT' => 'Kwota kalkulacji',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Łączna kwota',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_LIST_COST_PRICE' => 'Koszt',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Rzeczywiste zamknięcie',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Ważne do',
  'LBL_LIST_DISCOUNT_PRICE' => 'Cena jednostki',
  'LBL_LIST_DEAL_TOT' => 'Obniżka',
  'LBL_LIST_FORM_TITLE' => 'Lista kalkulacji',
  'LBL_LIST_GRAND_TOTAL' => 'Łączna suma',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Liczna Mtf',
  'LBL_LIST_PRICING_FACTOR' => 'Faktor',
  'LBL_LIST_PRICING_FORMULA' => 'Formuła wyceny',
  'LBL_LIST_PRODUCT_NAME' => 'Produkt',
  'LBL_LIST_QUANTITY' => 'Ilość',
  'LBL_LIST_QUOTE_NAME' => 'Temat',
  'LBL_LIST_QUOTE_NUM' => 'Numer',
  'LBL_LIST_QUOTE_STAGE' => 'Etap',
  'LBL_LIST_TAXCLASS' => 'Grupa podatkowa',
  'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
  'LBL_MODULE_NAME' => 'Kalkulacje',
  'LBL_MODULE_TITLE' => 'Kalkulacje: Strona główna',
  'LBL_NAME' => 'Nazwa kalkuacji',
  'LBL_NEW_FORM_TITLE' => 'Utwórz kalkulację',
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa okazji:',
  'LBL_ORDER_STAGE' => 'Etap zamówienia',
  'LBL_ORIGINAL_PO_DATE' => 'Oryginalna data zamówienia:',
  'LBL_PAYMENT_TERMS' => 'Warunki płatności:',
  'LBL_PDF_BILLING_ADDRESS' => 'Wyślij fakturę do',
  'LBL_PDF_CURRENCY' => 'Waluta:',
  'LBL_PDF_GRAND_TOTAL' => 'Łączna suma',
  'LBL_PDF_INVOICE_NUMBER' => 'Numer faktury',
  'LBL_PDF_INVOICE_TITLE' => 'Faktura',
  'LBL_PDF_ITEM_DISCOUNT' => 'Obniżka:',
  'LBL_PDF_ITEM_LIST_PRICE' => 'Cena katalogowa:',
  'LBL_PDF_ITEM_PRODUCT' => 'Produkt',
  'LBL_PDF_ITEM_QUANTITY' => 'Ilość',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Cena jednostki',
  'LBL_PDF_PART_NUMBER' => 'Numer części:',
  'LBL_PDF_QUOTE_CLOSE' => 'Ważne do:',
  'LBL_PDF_QUOTE_DATE' => 'Data:',
  'LBL_PDF_QUOTE_NUMBER' => 'Numer kalkulacji:',
  'LBL_PDF_QUOTE_TITLE' => 'Kalkulacja',
  'LBL_PDF_SALES_PERSON' => 'Sprzedawca:',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Wyślij do',
  'LBL_PDF_SHIPPING_COMPANY' => 'Dostawca transportu:',
  'LBL_PDF_SHIPPING' => 'Dostawa:',
  'LBL_PDF_SUBTOTAL' => 'Suma częściowa:',
  'LBL_PDF_DISCOUNT' => 'Obniżka:',
  'LBL_PDF_NEW_SUB' => 'Obniżona suma częściowa:',
  'LBL_PDF_TAX_RATE' => 'Stawka podatkowa:',
  'LBL_PDF_TAX' => 'Podatek:',
  'LBL_PDF_TOTAL' => 'Razem:',
  'LBL_POSTAL_CODE' => 'Kod pocztowy:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROPOSAL' => 'Kalkulacja',
  'LBL_PURCHASE_ORDER_NUM' => 'Numer zamówienia:',
  'LBL_QUOTE_NAME' => 'Temat kalkulacji:',
  'LBL_QUOTE_NUM' => 'Numer kalkulacji:',
  'LBL_QUOTE_STAGE' => 'Etap kalkulacji:',
  'LBL_QUOTE_TYPE' => 'Typ kalkulacji',
  'LBL_TAXABLE' => 'Opodatkowane',
  'LBL_NON_TAXABLE' => 'Nieopodatkowane',
  'LBL_QUOTE' => 'Kalkulacja:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'plik układu kalkulacji nie istnieje: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'plik układu kalkulacji nie jest zarejestrowany w modules/Quotes/Layouts.php',
  'LBL_REMOVE_COMMENT' => 'Usuń komentarz',
  'LBL_REMOVE_ROW' => 'Usuń wiersz',
  'LBL_RENAME_ERROR' => 'BŁĄD: nie można przenieść pdf do destynacji. Należy spróbować zmienić katalog na zapisywalny przez webserwer',
  'LBL_SALES_STAGE' => 'Etap kalkulacji:',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie kalkulacji',
  'LBL_SHIP_TO' => 'Wyślij do',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Nazwa klienta dostawy:',
  'LBL_SHIPPING_ACCOUNT' => 'Klient:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Miasto dostawy',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Kraj dostawy',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Kod pocztowy dostawy',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Województwo dostawy',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Adres dostawy',
  'LBL_SHIPPING_ADDRESS' => 'Adres dostawy:',
  'LBL_SHIPPING_CONTACT_ID' => 'ID kontaktu dostawy:',
  'LBL_SHIPPING_CONTACT_NAME' => 'Nazwa kontaktu dostawy:',
  'LBL_SHIPPING_CONTACT' => 'Kontakt:',
  'LBL_SHIPPING_PROVIDER' => 'Dostawca transportu:',
  'LBL_SHIPPING_USDOLLAR' => 'Dostawa (Dolary US)',
  'LBL_DEAL_TOT' => 'obniżka łącznie',
  'LBL_DEAL_TOT_USDOLLAR' => 'obniżka łącznie (Dolary US)',
  'LBL_SHIPPING' => 'Dostawa:',
  'LBL_DISCOUNT_TOTAL' => 'Obniżka:',
  'LBL_NEW_SUB' => 'Obniżona suma częściowa:',
  'LBL_SHOW_LINE_NUMS' => 'Wyświetl numery pozycji:',
  'LBL_STATE' => 'Województwo',
  'LBL_SUBTOTAL_USDOLLAR' => 'Suma częściowa (Dolary US)',
  'LBL_SUBTOTAL' => 'Suma częściowa:',
  'LBL_SYSTEM_ID' => 'ID systemu',
  'LBL_TAX_USDOLLAR' => 'Podatek (Dolary US)',
  'LBL_TAX' => 'Podatek:',
  'LBL_TAXRATE' => 'Stawka podatkowa:',
  'LBL_TOTAL_USDOLLAR' => 'Razem (Dolary US)',
  'LBL_TOTAL' => 'Razem:',
  'LBL_TYPE' => 'Typ:',
  'LNK_NEW_QUOTE' => 'Utwórz kalkulację',
  'LNK_QUOTE_LIST' => 'Zobacz kalkulacje',
  'MSG_DUPLICATE' => 'Tworzysz zduplikowaną kalkulację. Możesz wybrać kalkulację z listy poniżej lub możesz kliknąć Zapisz, aby duplikować kalkulację.',
  'NTC_COPY_BILLING_ADDRESS' => 'Kopiuj adres na fakturze do adresu dostawy',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Kopiuj adres dostawy do adresu na fakturze',
  'NTC_COPY_BILLING_ADDRESS2' => 'Kopiuj do adresu dostawy',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopiuj do adresu na fakturze',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten komentarz z kalkulacji?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => 'Czy na pewno chcesz usunąć tą pozycję z kalkulacji?',
  'NTC_REMOVE_GROUP_CONFIRMATION' => 'Czy na pewno chcesz usunąć tą grupę z kalkulacji?',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt z kalkulacji?',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć tą kalkulację z projektu?',
  'LNK_QUOTE_REPORTS' => 'Zobacz raporty kalkulacji',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do',
  'PDF_FORMAT' => 'Format PDF:',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_QUOTE_INFORMATION' => 'Przegląd kalkulacji',
  'LBL_LIST_MY_QUOTES' => 'Moje kalkulacje',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ten rekord obecnie zawiera wartości w polach adresu. Aby nadpisać te wartości z następującym adresem klienta, którego wybrałeś, kliknij "OK". Aby zachować obecne wartości, kliknij "Anuluj".',
);
