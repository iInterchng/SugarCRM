ACLAllowedModules = ["Leads","Cases","Bugs","Prospects","Project","ProjectTask","Campaigns","CampaignLog","Releases","Contacts","Accounts","Opportunities","Notes","Calls","Emails","Meetings","Tasks","Users","Documents","EmailAddresses","Teams","Quotes","Products","Forecasts","Contracts","KBDocuments","Currencies","DocumentRevisions","ProductCategories","ProductTypes","Trackers","TrackerPerfs","TrackerSessions","TrackerQueries"];
var module_defs = new Object();
default_summary_columns = ['count'];

var rel_defs = new Object();
var link_defs_Leads = new Object();
link_defs_Leads[ "created_by_link"] = {"name":"created_by_link","relationship_name":"leads_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Leads[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"leads_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Leads[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"leads_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Leads[ "team_link"] = {"name":"team_link","relationship_name":"leads_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Leads[ "email_addresses_primary"] = {"name":"email_addresses_primary","relationship_name":"leads_email_addresses_primary","bean_is_lhs":true,"link_type":"many","label":"Email Address"};

link_defs_Leads[ "reports_to_link"] = {"name":"reports_to_link","relationship_name":"lead_direct_reports","bean_is_lhs":false,"link_type":"one","label":"Reports To"};

link_defs_Leads[ "accounts"] = {"name":"accounts","relationship_name":"account_leads","bean_is_lhs":false,"link_type":"one","label":"Account"};

link_defs_Leads[ "campaign_leads"] = {"name":"campaign_leads","relationship_name":"campaign_leads","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_Leads[ "tasks"] = {"name":"tasks","relationship_name":"lead_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Leads[ "notes"] = {"name":"notes","relationship_name":"lead_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Leads[ "meetings"] = {"name":"meetings","relationship_name":"meetings_leads","bean_is_lhs":false,"link_type":"many","label":"Meetings"};

link_defs_Leads[ "calls"] = {"name":"calls","relationship_name":"calls_leads","bean_is_lhs":false,"link_type":"many","label":"Calls"};

link_defs_Leads[ "emails"] = {"name":"emails","relationship_name":"emails_leads_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Leads[ "campaigns"] = {"name":"campaigns","relationship_name":"lead_campaign_log","bean_is_lhs":true,"link_type":"many","label":"CampaignLog"};

link_defs_Leads[ "prospect_lists"] = {"name":"prospect_lists","relationship_name":"prospect_list_leads","bean_is_lhs":false,"link_type":"many","label":"Prospect List"};

var field_defs_Leads = new Object();
field_defs_Leads[ "account_description"] = {"name":"account_description","vname":"Account Description","type":"text","group":"account_name","unified_search":"1"};field_defs_Leads[ "account_name"] = {"name":"account_name","vname":"Account Name","type":"varchar","len":"255","unified_search":"1"};field_defs_Leads[ "alt_address_city"] = {"name":"alt_address_city","vname":"Alt Address City","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Leads[ "alt_address_country"] = {"name":"alt_address_country","vname":"Alt Address Country","type":"varchar","group":"alt_address","merge_filter":"enabled"};field_defs_Leads[ "alt_address_postalcode"] = {"name":"alt_address_postalcode","vname":"Alt Address Postalcode","type":"varchar","len":"20","group":"alt_address","merge_filter":"enabled"};field_defs_Leads[ "alt_address_state"] = {"name":"alt_address_state","vname":"Alt Address State","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Leads[ "alt_address_street"] = {"name":"alt_address_street","vname":"Alt Address Street","type":"varchar","len":"150","group":"alt_address","merge_filter":"enabled"};field_defs_Leads[ "assistant"] = {"name":"assistant","vname":"Assistant","type":"varchar","len":"75","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "assistant_phone"] = {"name":"assistant_phone","vname":"Assistant Phone","type":"phone","dbType":"varchar","len":"100","group":"assistant","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "birthdate"] = {"name":"birthdate","vname":"Birthdate","type":"date"};field_defs_Leads[ "converted"] = {"name":"converted","vname":"Converted","type":"bool"};field_defs_Leads[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Leads = new Array();

option_arr_Leads[option_arr_Leads.length] = { "value":"=", "text":"Equals"};
option_arr_Leads[option_arr_Leads.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Leads[option_arr_Leads.length] = { "value":"greater_than", "text":"After"};
option_arr_Leads[option_arr_Leads.length] = { "value":"less_than", "text":"Before"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"this_month", "text":"This Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"this_year", "text":"This Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"between", "text":"Is Between"};

field_defs_Leads[ "date_entered"].options=option_arr_Leads;

field_defs_Leads[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Leads = new Array();

option_arr_Leads[option_arr_Leads.length] = { "value":"=", "text":"Equals"};
option_arr_Leads[option_arr_Leads.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Leads[option_arr_Leads.length] = { "value":"greater_than", "text":"After"};
option_arr_Leads[option_arr_Leads.length] = { "value":"less_than", "text":"Before"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"this_month", "text":"This Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Leads[option_arr_Leads.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"this_year", "text":"This Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Leads[option_arr_Leads.length] = { "value":"between", "text":"Is Between"};

field_defs_Leads[ "date_modified"].options=option_arr_Leads;

field_defs_Leads[ "department"] = {"name":"department","vname":"Department","type":"varchar","len":"100","merge_filter":"enabled"};field_defs_Leads[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Leads[ "do_not_call"] = {"name":"do_not_call","vname":"Do Not Call","type":"bool","audited":"1"};field_defs_Leads[ "first_name"] = {"name":"first_name","vname":"First Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected"};field_defs_Leads[ "full_name"] = {"name":"full_name","rname":"full_name","vname":"Name","type":"fullname","fields":"Array","sort_on":"last_name","source":"non-db","group":"last_name","len":"510","db_concat_fields":"Array","studio":"Array"};field_defs_Leads[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Leads[ "last_name"] = {"name":"last_name","vname":"Last Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected","required":"1","importable":"required"};field_defs_Leads[ "lead_source"] = {"name":"lead_source","vname":"Lead Source","type":"enum","options":"lead_source_dom","len":"100","audited":"1","merge_filter":"enabled"};var option_arr_Leads = new Array();

option_arr_Leads[option_arr_Leads.length] = { "value":"", "text":""};
option_arr_Leads[option_arr_Leads.length] = { "value":"Cold Call", "text":"Cold Call"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Existing Customer", "text":"Existing Customer"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Self Generated", "text":"Self Generated"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Employee", "text":"Employee"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Partner", "text":"Partner"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Public Relations", "text":"Public Relations"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Direct Mail", "text":"Direct Mail"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Conference", "text":"Conference"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Trade Show", "text":"Trade Show"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Web Site", "text":"Web Site"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Word of mouth", "text":"Word of mouth"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Email", "text":"Email"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Campaign", "text":"Campaign"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Other", "text":"Other"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Chat", "text":"Chat"};

field_defs_Leads[ "lead_source"].options=option_arr_Leads;

field_defs_Leads[ "lead_source_description"] = {"name":"lead_source_description","vname":"Lead Source Description","type":"text","group":"lead_source"};field_defs_Leads[ "opportunity_amount"] = {"name":"opportunity_amount","vname":"Opportunity Amount","type":"varchar","group":"opportunity_name","len":"50"};field_defs_Leads[ "opportunity_name"] = {"name":"opportunity_name","vname":"Opportunity Name","type":"varchar","len":"255"};field_defs_Leads[ "phone_fax"] = {"name":"phone_fax","vname":"Fax","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "phone_home"] = {"name":"phone_home","vname":"Home Phone","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "phone_mobile"] = {"name":"phone_mobile","vname":"Mobile","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "phone_other"] = {"name":"phone_other","vname":"Other Phone","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "phone_work"] = {"name":"phone_work","vname":"Office Phone","type":"phone","dbType":"varchar","len":"100","audited":"1","unified_search":"1","merge_filter":"enabled"};field_defs_Leads[ "portal_app"] = {"name":"portal_app","vname":"Portal Application","type":"varchar","group":"portal","len":"255","studio":"false"};field_defs_Leads[ "portal_name"] = {"name":"portal_name","vname":"Portal Name","type":"varchar","len":"255","group":"portal","studio":"false"};field_defs_Leads[ "primary_address_city"] = {"name":"primary_address_city","vname":"Primary Address City","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Leads[ "primary_address_country"] = {"name":"primary_address_country","vname":"Primary Address Country","type":"varchar","group":"primary_address","merge_filter":"enabled"};field_defs_Leads[ "primary_address_postalcode"] = {"name":"primary_address_postalcode","vname":"Primary Address Postalcode","type":"varchar","len":"20","group":"primary_address","merge_filter":"enabled"};field_defs_Leads[ "primary_address_state"] = {"name":"primary_address_state","vname":"Primary Address State","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Leads[ "primary_address_street"] = {"name":"primary_address_street","vname":"Primary Address Street","type":"varchar","len":"150","group":"primary_address","merge_filter":"enabled"};field_defs_Leads[ "refered_by"] = {"name":"refered_by","vname":"Referred By","type":"varchar","len":"100","merge_filter":"enabled"};field_defs_Leads[ "salutation"] = {"name":"salutation","vname":"Salutation","type":"enum","options":"salutation_dom","len":"255"};var option_arr_Leads = new Array();

option_arr_Leads[option_arr_Leads.length] = { "value":"", "text":""};
option_arr_Leads[option_arr_Leads.length] = { "value":"Mr.", "text":"Mr."};
option_arr_Leads[option_arr_Leads.length] = { "value":"Ms.", "text":"Ms."};
option_arr_Leads[option_arr_Leads.length] = { "value":"Mrs.", "text":"Mrs."};
option_arr_Leads[option_arr_Leads.length] = { "value":"Dr.", "text":"Dr."};
option_arr_Leads[option_arr_Leads.length] = { "value":"Prof.", "text":"Prof."};

field_defs_Leads[ "salutation"].options=option_arr_Leads;

field_defs_Leads[ "status"] = {"name":"status","vname":"Status","type":"enum","len":"100","options":"lead_status_dom","audited":"1","merge_filter":"enabled"};var option_arr_Leads = new Array();

option_arr_Leads[option_arr_Leads.length] = { "value":"", "text":""};
option_arr_Leads[option_arr_Leads.length] = { "value":"New", "text":"New"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Assigned", "text":"Assigned"};
option_arr_Leads[option_arr_Leads.length] = { "value":"In Process", "text":"In Process"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Converted", "text":"Converted"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Recycled", "text":"Recycled"};
option_arr_Leads[option_arr_Leads.length] = { "value":"Dead", "text":"Dead"};

field_defs_Leads[ "status"].options=option_arr_Leads;

field_defs_Leads[ "status_description"] = {"name":"status_description","vname":"Status Description","type":"text","group":"status"};field_defs_Leads[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Leads[ "title"] = {"name":"title","vname":"Title","type":"varchar","len":"100"};field_defs_Leads[ "website"] = {"name":"website","vname":"Website","type":"url","dbType":"varchar","len":"255"};var default_table_columns_Leads = [""];




module_defs['Leads'] = new Object();
module_defs['Leads'].link_defs = link_defs_Leads;
module_defs['Leads'].field_defs = field_defs_Leads;
module_defs['Leads'].default_table_columns = default_table_columns_Leads;
module_defs['Leads'].summary_field_defs = new Object();
module_defs['Leads'].group_by_field_defs = new Object();
module_defs['Leads'].default_summary_columns = default_summary_columns;
module_defs['Leads'].label = "Leads";


var rel_defs = new Object();
var link_defs_Cases = new Object();
link_defs_Cases[ "created_by_link"] = {"name":"created_by_link","relationship_name":"cases_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Cases[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"cases_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Cases[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"cases_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Cases[ "team_link"] = {"name":"team_link","relationship_name":"cases_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Cases[ "tasks"] = {"name":"tasks","relationship_name":"case_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Cases[ "notes"] = {"name":"notes","relationship_name":"case_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Cases[ "meetings"] = {"name":"meetings","relationship_name":"case_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Cases[ "emails"] = {"name":"emails","relationship_name":"emails_cases_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Cases[ "documents"] = {"name":"documents","relationship_name":"documents_cases","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Cases[ "calls"] = {"name":"calls","relationship_name":"case_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Cases[ "bugs"] = {"name":"bugs","relationship_name":"cases_bugs","bean_is_lhs":true,"link_type":"many","label":"Bugs"};

link_defs_Cases[ "contacts"] = {"name":"contacts","relationship_name":"contacts_cases","bean_is_lhs":false,"link_type":"many","label":"Contacts"};

link_defs_Cases[ "accounts"] = {"name":"accounts","relationship_name":"account_cases","bean_is_lhs":false,"link_type":"one","label":"Account"};

link_defs_Cases[ "project"] = {"name":"project","relationship_name":"projects_cases","bean_is_lhs":false,"link_type":"many","label":"Projects"};

var field_defs_Cases = new Object();
field_defs_Cases[ "case_number"] = {"name":"case_number","vname":"Number","type":"int","len":"11","required":"1","auto_increment":"1","unified_search":"1","duplicate_merge":"disabled","disable_num_format":"1"};field_defs_Cases[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Cases = new Array();

option_arr_Cases[option_arr_Cases.length] = { "value":"=", "text":"Equals"};
option_arr_Cases[option_arr_Cases.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Cases[option_arr_Cases.length] = { "value":"greater_than", "text":"After"};
option_arr_Cases[option_arr_Cases.length] = { "value":"less_than", "text":"Before"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"this_month", "text":"This Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"this_year", "text":"This Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"between", "text":"Is Between"};

field_defs_Cases[ "date_entered"].options=option_arr_Cases;

field_defs_Cases[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Cases = new Array();

option_arr_Cases[option_arr_Cases.length] = { "value":"=", "text":"Equals"};
option_arr_Cases[option_arr_Cases.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Cases[option_arr_Cases.length] = { "value":"greater_than", "text":"After"};
option_arr_Cases[option_arr_Cases.length] = { "value":"less_than", "text":"Before"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"this_month", "text":"This Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Cases[option_arr_Cases.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"this_year", "text":"This Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Cases[option_arr_Cases.length] = { "value":"between", "text":"Is Between"};

field_defs_Cases[ "date_modified"].options=option_arr_Cases;

field_defs_Cases[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Cases[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Cases[ "name"] = {"name":"name","vname":"Subject","type":"name","dbType":"varchar","len":"255","audited":"1","unified_search":"1","merge_filter":"selected","required":"1","importable":"required"};field_defs_Cases[ "priority"] = {"name":"priority","vname":"Priority","type":"enum","options":"case_priority_dom","len":"100","audited":"1","merge_filter":"enabled"};var option_arr_Cases = new Array();

option_arr_Cases[option_arr_Cases.length] = { "value":"P1", "text":"High"};
option_arr_Cases[option_arr_Cases.length] = { "value":"P2", "text":"Medium"};
option_arr_Cases[option_arr_Cases.length] = { "value":"P3", "text":"Low"};

field_defs_Cases[ "priority"].options=option_arr_Cases;

field_defs_Cases[ "resolution"] = {"name":"resolution","vname":"Resolution","type":"text"};field_defs_Cases[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"case_status_dom","len":"100","audited":"1","merge_filter":"enabled"};var option_arr_Cases = new Array();

option_arr_Cases[option_arr_Cases.length] = { "value":"New", "text":"New"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Assigned", "text":"Assigned"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Closed", "text":"Closed"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Pending Input", "text":"Pending Input"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Rejected", "text":"Rejected"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Duplicate", "text":"Duplicate"};

field_defs_Cases[ "status"].options=option_arr_Cases;

field_defs_Cases[ "system_id"] = {"name":"system_id","vname":"System ID","type":"int"};field_defs_Cases[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Cases[ "type"] = {"name":"type","vname":"Type","type":"enum","options":"case_type_dom","len":"255","merge_filter":"enabled"};var option_arr_Cases = new Array();

option_arr_Cases[option_arr_Cases.length] = { "value":"Administration", "text":"Administration"};
option_arr_Cases[option_arr_Cases.length] = { "value":"Product", "text":"Product"};
option_arr_Cases[option_arr_Cases.length] = { "value":"User", "text":"User"};

field_defs_Cases[ "type"].options=option_arr_Cases;

field_defs_Cases[ "work_log"] = {"name":"work_log","vname":"Work Log","type":"text"};var default_table_columns_Cases = [""];




module_defs['Cases'] = new Object();
module_defs['Cases'].link_defs = link_defs_Cases;
module_defs['Cases'].field_defs = field_defs_Cases;
module_defs['Cases'].default_table_columns = default_table_columns_Cases;
module_defs['Cases'].summary_field_defs = new Object();
module_defs['Cases'].group_by_field_defs = new Object();
module_defs['Cases'].default_summary_columns = default_summary_columns;
module_defs['Cases'].label = "Cases";


var rel_defs = new Object();
var link_defs_Bugs = new Object();
link_defs_Bugs[ "created_by_link"] = {"name":"created_by_link","relationship_name":"bugs_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Bugs[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"bugs_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Bugs[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"bugs_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Bugs[ "team_link"] = {"name":"team_link","relationship_name":"bugs_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Bugs[ "tasks"] = {"name":"tasks","relationship_name":"bug_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Bugs[ "notes"] = {"name":"notes","relationship_name":"bug_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Bugs[ "meetings"] = {"name":"meetings","relationship_name":"bug_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Bugs[ "calls"] = {"name":"calls","relationship_name":"bug_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Bugs[ "emails"] = {"name":"emails","relationship_name":"emails_bugs_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Bugs[ "documents"] = {"name":"documents","relationship_name":"documents_bugs","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Bugs[ "contacts"] = {"name":"contacts","relationship_name":"contacts_bugs","bean_is_lhs":false,"link_type":"many","label":"Contacts"};

link_defs_Bugs[ "accounts"] = {"name":"accounts","relationship_name":"accounts_bugs","bean_is_lhs":false,"link_type":"many","label":"Accounts"};

link_defs_Bugs[ "cases"] = {"name":"cases","relationship_name":"cases_bugs","bean_is_lhs":false,"link_type":"many","label":"Cases"};

link_defs_Bugs[ "release_link"] = {"name":"release_link","relationship_name":"bugs_release","bean_is_lhs":false,"link_type":"one","label":"Found in Release"};

link_defs_Bugs[ "fixed_in_release_link"] = {"name":"fixed_in_release_link","relationship_name":"bugs_fixed_in_release","bean_is_lhs":false,"link_type":"one","label":"Fixed in Release"};

link_defs_Bugs[ "projects"] = {"name":"projects","relationship_name":"projects_bugs","bean_is_lhs":false,"link_type":"many","label":"Projects"};

var field_defs_Bugs = new Object();
field_defs_Bugs[ "bug_number"] = {"name":"bug_number","vname":"Number","type":"int","len":"11","required":"1","auto_increment":"1","unified_search":"1","duplicate_merge":"disabled","disable_num_format":"1"};field_defs_Bugs[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"=", "text":"Equals"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"greater_than", "text":"After"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"less_than", "text":"Before"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"this_month", "text":"This Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"this_year", "text":"This Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"between", "text":"Is Between"};

field_defs_Bugs[ "date_entered"].options=option_arr_Bugs;

field_defs_Bugs[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"=", "text":"Equals"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"greater_than", "text":"After"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"less_than", "text":"Before"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"this_month", "text":"This Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"this_year", "text":"This Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"between", "text":"Is Between"};

field_defs_Bugs[ "date_modified"].options=option_arr_Bugs;

field_defs_Bugs[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Bugs[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Bugs[ "name"] = {"name":"name","vname":"Subject","type":"name","dbType":"varchar","len":"255","audited":"1","unified_search":"1","merge_filter":"selected","required":"1","importable":"required"};field_defs_Bugs[ "priority"] = {"name":"priority","vname":"Priority","type":"enum","options":"bug_priority_dom","len":"100","audited":"1","merge_filter":"enabled"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"Urgent", "text":"Urgent"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"High", "text":"High"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Medium", "text":"Medium"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Low", "text":"Low"};

field_defs_Bugs[ "priority"].options=option_arr_Bugs;

field_defs_Bugs[ "product_category"] = {"name":"product_category","vname":"Category","type":"enum","options":"product_category_dom","len":"255"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"", "text":""};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Accounts", "text":"Accounts"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Activities", "text":"Activities"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Bug Tracker", "text":"Bug Tracker"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Calendar", "text":"Calendar"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Calls", "text":"Calls"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Campaigns", "text":"Campaigns"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Cases", "text":"Cases"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Contacts", "text":"Contacts"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Currencies", "text":"Currencies"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Dashboard", "text":"Dashboard"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Documents", "text":"Documents"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Emails", "text":"Emails"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Feeds", "text":"RSS"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Forecasts", "text":"Forecasts"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Help", "text":""};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Home", "text":"Home"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Leads", "text":"Leads"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Meetings", "text":"Meetings"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Notes", "text":"Notes"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Opportunities", "text":"Opportunities"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Outlook Plugin", "text":"Outlook Plugin"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Product Catalog", "text":"Product Catalog"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Products", "text":"Products"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Projects", "text":"Projects"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Quotes", "text":"Quotes"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Releases", "text":"Releases"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"RSS", "text":"RSS"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Studio", "text":"Studio"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Upgrade", "text":"Upgrade"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Users", "text":"Users"};

field_defs_Bugs[ "product_category"].options=option_arr_Bugs;

field_defs_Bugs[ "resolution"] = {"name":"resolution","vname":"Resolution","type":"enum","options":"bug_resolution_dom","len":"255","audited":"1","merge_filter":"enabled"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"", "text":""};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Accepted", "text":"Accepted"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Duplicate", "text":"Duplicate"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Fixed", "text":"Fixed"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Out of Date", "text":"Out of Date"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Invalid", "text":"Invalid"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Later", "text":"Later"};

field_defs_Bugs[ "resolution"].options=option_arr_Bugs;

field_defs_Bugs[ "source"] = {"name":"source","vname":"Source","type":"enum","options":"source_dom","len":"255"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"", "text":""};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Internal", "text":"Internal"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Forum", "text":"Forum"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Web", "text":"Web"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"InboundEmail", "text":"Email"};

field_defs_Bugs[ "source"].options=option_arr_Bugs;

field_defs_Bugs[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"bug_status_dom","len":"100","audited":"1","merge_filter":"enabled"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"New", "text":"New"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Assigned", "text":"Assigned"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Closed", "text":"Closed"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Pending", "text":"Pending"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Rejected", "text":"Rejected"};

field_defs_Bugs[ "status"].options=option_arr_Bugs;

field_defs_Bugs[ "system_id"] = {"name":"system_id","vname":"System ID","type":"int"};field_defs_Bugs[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Bugs[ "type"] = {"name":"type","vname":"Type","type":"enum","options":"bug_type_dom","len":"255","merge_filter":"enabled"};var option_arr_Bugs = new Array();

option_arr_Bugs[option_arr_Bugs.length] = { "value":"Defect", "text":"Defect"};
option_arr_Bugs[option_arr_Bugs.length] = { "value":"Feature", "text":"Feature"};

field_defs_Bugs[ "type"].options=option_arr_Bugs;

field_defs_Bugs[ "work_log"] = {"name":"work_log","vname":"Work Log","type":"text"};var default_table_columns_Bugs = [""];




module_defs['Bugs'] = new Object();
module_defs['Bugs'].link_defs = link_defs_Bugs;
module_defs['Bugs'].field_defs = field_defs_Bugs;
module_defs['Bugs'].default_table_columns = default_table_columns_Bugs;
module_defs['Bugs'].summary_field_defs = new Object();
module_defs['Bugs'].group_by_field_defs = new Object();
module_defs['Bugs'].default_summary_columns = default_summary_columns;
module_defs['Bugs'].label = "Bug Tracker";


var rel_defs = new Object();
var link_defs_Prospects = new Object();
link_defs_Prospects[ "created_by_link"] = {"name":"created_by_link","relationship_name":"prospects_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Prospects[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"prospects_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Prospects[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"prospects_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Prospects[ "team_link"] = {"name":"team_link","relationship_name":"prospects_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Prospects[ "email_addresses_primary"] = {"name":"email_addresses_primary","relationship_name":"prospects_email_addresses_primary","bean_is_lhs":true,"link_type":"many","label":"Email Address"};

link_defs_Prospects[ "campaigns"] = {"name":"campaigns","relationship_name":"prospect_campaign_log","bean_is_lhs":true,"link_type":"many","label":"CampaignLog"};

link_defs_Prospects[ "prospect_lists"] = {"name":"prospect_lists","relationship_name":"prospect_list_prospects","bean_is_lhs":false,"link_type":"many","label":"Prospect List"};

link_defs_Prospects[ "calls"] = {"name":"calls","relationship_name":"prospect_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Prospects[ "meetings"] = {"name":"meetings","relationship_name":"prospect_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Prospects[ "notes"] = {"name":"notes","relationship_name":"prospect_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Prospects[ "tasks"] = {"name":"tasks","relationship_name":"prospect_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Prospects[ "emails"] = {"name":"emails","relationship_name":"emails_prospects_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

var field_defs_Prospects = new Object();
field_defs_Prospects[ "account_name"] = {"name":"account_name","vname":"Account Name","type":"varchar","len":"150"};field_defs_Prospects[ "alt_address_city"] = {"name":"alt_address_city","vname":"Alternate Address City","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Prospects[ "alt_address_country"] = {"name":"alt_address_country","vname":"Alternate Address Country","type":"varchar","group":"alt_address","merge_filter":"enabled"};field_defs_Prospects[ "alt_address_postalcode"] = {"name":"alt_address_postalcode","vname":"Alternate Address Postal Code","type":"varchar","len":"20","group":"alt_address","merge_filter":"enabled"};field_defs_Prospects[ "alt_address_state"] = {"name":"alt_address_state","vname":"Alternate Address State","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Prospects[ "alt_address_street"] = {"name":"alt_address_street","vname":"Alternate Address Street","type":"varchar","len":"150","group":"alt_address","merge_filter":"enabled"};field_defs_Prospects[ "assistant"] = {"name":"assistant","vname":"Assistant","type":"varchar","len":"75","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "assistant_phone"] = {"name":"assistant_phone","vname":"Assistant Phone","type":"phone","dbType":"varchar","len":"100","group":"assistant","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "birthdate"] = {"name":"birthdate","vname":"Birthdate","type":"date"};field_defs_Prospects[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Prospects = new Array();

option_arr_Prospects[option_arr_Prospects.length] = { "value":"=", "text":"Equals"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"greater_than", "text":"After"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"less_than", "text":"Before"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"this_month", "text":"This Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"this_year", "text":"This Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"between", "text":"Is Between"};

field_defs_Prospects[ "date_entered"].options=option_arr_Prospects;

field_defs_Prospects[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Prospects = new Array();

option_arr_Prospects[option_arr_Prospects.length] = { "value":"=", "text":"Equals"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"greater_than", "text":"After"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"less_than", "text":"Before"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"this_month", "text":"This Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"this_year", "text":"This Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"between", "text":"Is Between"};

field_defs_Prospects[ "date_modified"].options=option_arr_Prospects;

field_defs_Prospects[ "department"] = {"name":"department","vname":"Department","type":"varchar","len":"255","merge_filter":"enabled"};field_defs_Prospects[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Prospects[ "do_not_call"] = {"name":"do_not_call","vname":"Do Not Call","type":"bool"};field_defs_Prospects[ "first_name"] = {"name":"first_name","vname":"First Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected"};field_defs_Prospects[ "full_name"] = {"name":"full_name","rname":"full_name","vname":"Name","type":"fullname","fields":"Array","sort_on":"last_name","source":"non-db","group":"last_name","len":"510","db_concat_fields":"Array","studio":"Array"};field_defs_Prospects[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Prospects[ "last_name"] = {"name":"last_name","vname":"Last Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected","required":"1","importable":"required"};field_defs_Prospects[ "phone_fax"] = {"name":"phone_fax","vname":"Fax","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "phone_home"] = {"name":"phone_home","vname":"Home","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "phone_mobile"] = {"name":"phone_mobile","vname":"Mobile","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "phone_other"] = {"name":"phone_other","vname":"Other Phone","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "phone_work"] = {"name":"phone_work","vname":"Office Phone","type":"phone","dbType":"varchar","len":"100","audited":"1","unified_search":"1","merge_filter":"enabled"};field_defs_Prospects[ "primary_address_city"] = {"name":"primary_address_city","vname":"Primary Address City","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Prospects[ "primary_address_country"] = {"name":"primary_address_country","vname":"Primary Address Country","type":"varchar","group":"primary_address","merge_filter":"enabled"};field_defs_Prospects[ "primary_address_postalcode"] = {"name":"primary_address_postalcode","vname":"Primary Address Postal Code","type":"varchar","len":"20","group":"primary_address","merge_filter":"enabled"};field_defs_Prospects[ "primary_address_state"] = {"name":"primary_address_state","vname":"Primary Address State","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Prospects[ "primary_address_street"] = {"name":"primary_address_street","vname":"Primary Address Street","type":"varchar","len":"150","group":"primary_address","merge_filter":"enabled"};field_defs_Prospects[ "salutation"] = {"name":"salutation","vname":"Salutation","type":"enum","options":"salutation_dom","len":"255"};var option_arr_Prospects = new Array();

option_arr_Prospects[option_arr_Prospects.length] = { "value":"", "text":""};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"Mr.", "text":"Mr."};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"Ms.", "text":"Ms."};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"Mrs.", "text":"Mrs."};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"Dr.", "text":"Dr."};
option_arr_Prospects[option_arr_Prospects.length] = { "value":"Prof.", "text":"Prof."};

field_defs_Prospects[ "salutation"].options=option_arr_Prospects;

field_defs_Prospects[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Prospects[ "title"] = {"name":"title","vname":"Title","type":"varchar","len":"100"};field_defs_Prospects[ "tracker_key"] = {"name":"tracker_key","vname":"Tracker Key","type":"int","len":"11","required":"1","auto_increment":"1","importable":"false","studio":"Array"};var default_table_columns_Prospects = [""];




module_defs['Prospects'] = new Object();
module_defs['Prospects'].link_defs = link_defs_Prospects;
module_defs['Prospects'].field_defs = field_defs_Prospects;
module_defs['Prospects'].default_table_columns = default_table_columns_Prospects;
module_defs['Prospects'].summary_field_defs = new Object();
module_defs['Prospects'].group_by_field_defs = new Object();
module_defs['Prospects'].default_summary_columns = default_summary_columns;
module_defs['Prospects'].label = "Targets";


var rel_defs = new Object();
var link_defs_Project = new Object();
link_defs_Project[ "team_link"] = {"name":"team_link","relationship_name":"project_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Project[ "accounts"] = {"name":"accounts","relationship_name":"projects_accounts","bean_is_lhs":true,"link_type":"many","label":"Accounts"};

link_defs_Project[ "quotes"] = {"name":"quotes","relationship_name":"projects_quotes","bean_is_lhs":true,"link_type":"many","label":"Quotes"};

link_defs_Project[ "contacts"] = {"name":"contacts","relationship_name":"projects_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Project[ "opportunities"] = {"name":"opportunities","relationship_name":"projects_opportunities","bean_is_lhs":true,"link_type":"many","label":"Opportunities"};

link_defs_Project[ "notes"] = {"name":"notes","relationship_name":"projects_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Project[ "tasks"] = {"name":"tasks","relationship_name":"projects_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Project[ "meetings"] = {"name":"meetings","relationship_name":"projects_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Project[ "calls"] = {"name":"calls","relationship_name":"projects_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Project[ "emails"] = {"name":"emails","relationship_name":"emails_projects_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Project[ "projecttask"] = {"name":"projecttask","relationship_name":"projects_project_tasks","bean_is_lhs":true,"link_type":"many","label":"Project Tasks"};

link_defs_Project[ "created_by_link"] = {"name":"created_by_link","relationship_name":"projects_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Project[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"projects_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Project[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"projects_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Project[ "cases"] = {"name":"cases","relationship_name":"projects_cases","bean_is_lhs":true,"link_type":"many","label":"Cases"};

link_defs_Project[ "bugs"] = {"name":"bugs","relationship_name":"projects_bugs","bean_is_lhs":true,"link_type":"many","label":"Bugs"};

link_defs_Project[ "products"] = {"name":"products","relationship_name":"projects_products","bean_is_lhs":true,"link_type":"many","label":"Products"};

link_defs_Project[ "user_resources"] = {"name":"user_resources","relationship_name":"projects_users_resources","bean_is_lhs":true,"link_type":"many","label":"User Resource"};

link_defs_Project[ "contact_resources"] = {"name":"contact_resources","relationship_name":"projects_contacts_resources","bean_is_lhs":true,"link_type":"many","label":"Contact Resource"};

link_defs_Project[ "project_holidays"] = {"name":"project_holidays","relationship_name":"projects_holidays","bean_is_lhs":true,"link_type":"many","label":"Holiday"};

var field_defs_Project = new Object();
field_defs_Project[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Project = new Array();

option_arr_Project[option_arr_Project.length] = { "value":"=", "text":"Equals"};
option_arr_Project[option_arr_Project.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Project[option_arr_Project.length] = { "value":"greater_than", "text":"After"};
option_arr_Project[option_arr_Project.length] = { "value":"less_than", "text":"Before"};
option_arr_Project[option_arr_Project.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Project[option_arr_Project.length] = { "value":"this_month", "text":"This Month"};
option_arr_Project[option_arr_Project.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Project[option_arr_Project.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Project[option_arr_Project.length] = { "value":"this_year", "text":"This Year"};
option_arr_Project[option_arr_Project.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Project[option_arr_Project.length] = { "value":"between", "text":"Is Between"};

field_defs_Project[ "date_entered"].options=option_arr_Project;

field_defs_Project[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Project = new Array();

option_arr_Project[option_arr_Project.length] = { "value":"=", "text":"Equals"};
option_arr_Project[option_arr_Project.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Project[option_arr_Project.length] = { "value":"greater_than", "text":"After"};
option_arr_Project[option_arr_Project.length] = { "value":"less_than", "text":"Before"};
option_arr_Project[option_arr_Project.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Project[option_arr_Project.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Project[option_arr_Project.length] = { "value":"this_month", "text":"This Month"};
option_arr_Project[option_arr_Project.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Project[option_arr_Project.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Project[option_arr_Project.length] = { "value":"this_year", "text":"This Year"};
option_arr_Project[option_arr_Project.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Project[option_arr_Project.length] = { "value":"between", "text":"Is Between"};

field_defs_Project[ "date_modified"].options=option_arr_Project;

field_defs_Project[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_Project[ "estimated_end_date"] = {"name":"estimated_end_date","vname":"End Date","required":"1","type":"date","importable":"required","enable_range_search":"1"};field_defs_Project[ "estimated_start_date"] = {"name":"estimated_start_date","vname":"Start Date","required":"1","validation":"Array","type":"date","importable":"required","enable_range_search":"1"};field_defs_Project[ "id"] = {"name":"id","vname":"Id","required":"1","type":"id","reportable":"1"};field_defs_Project[ "is_template"] = {"name":"is_template","vname":"Is Template","type":"bool"};field_defs_Project[ "name"] = {"name":"name","vname":"Name","required":"1","dbType":"varchar","type":"name","len":"50","unified_search":"1","importable":"required"};field_defs_Project[ "priority"] = {"name":"priority","vname":"Priority","type":"enum","options":"projects_priority_options"};var option_arr_Project = new Array();

option_arr_Project[option_arr_Project.length] = { "value":"high", "text":"High"};
option_arr_Project[option_arr_Project.length] = { "value":"medium", "text":"Medium"};
option_arr_Project[option_arr_Project.length] = { "value":"low", "text":"Low"};

field_defs_Project[ "priority"].options=option_arr_Project;

field_defs_Project[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"project_status_dom"};var option_arr_Project = new Array();

option_arr_Project[option_arr_Project.length] = { "value":"Draft", "text":"Draft"};
option_arr_Project[option_arr_Project.length] = { "value":"In Review", "text":"In Review"};
option_arr_Project[option_arr_Project.length] = { "value":"Published", "text":"Published"};

field_defs_Project[ "status"].options=option_arr_Project;

field_defs_Project[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Project = [""];




module_defs['Project'] = new Object();
module_defs['Project'].link_defs = link_defs_Project;
module_defs['Project'].field_defs = field_defs_Project;
module_defs['Project'].default_table_columns = default_table_columns_Project;
module_defs['Project'].summary_field_defs = new Object();
module_defs['Project'].group_by_field_defs = new Object();
module_defs['Project'].default_summary_columns = default_summary_columns;
module_defs['Project'].label = "Projects";


var rel_defs = new Object();
var link_defs_ProjectTask = new Object();
link_defs_ProjectTask[ "team_link"] = {"name":"team_link","relationship_name":"projecttask_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_ProjectTask[ "notes"] = {"name":"notes","relationship_name":"project_tasks_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_ProjectTask[ "tasks"] = {"name":"tasks","relationship_name":"project_tasks_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_ProjectTask[ "meetings"] = {"name":"meetings","relationship_name":"project_tasks_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_ProjectTask[ "calls"] = {"name":"calls","relationship_name":"project_tasks_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_ProjectTask[ "emails"] = {"name":"emails","relationship_name":"emails_project_task_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_ProjectTask[ "projects"] = {"name":"projects","relationship_name":"projects_project_tasks","bean_is_lhs":false,"link_type":"many","label":"Project"};

link_defs_ProjectTask[ "created_by_link"] = {"name":"created_by_link","relationship_name":"project_tasks_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_ProjectTask[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"project_tasks_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_ProjectTask[ "project_name_link"] = {"name":"project_name_link","relationship_name":"projects_project_tasks","bean_is_lhs":false,"link_type":"one","label":"Project Name"};

link_defs_ProjectTask[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"project_tasks_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

var field_defs_ProjectTask = new Object();
field_defs_ProjectTask[ "actual_duration"] = {"name":"actual_duration","vname":"Actual Duration","type":"int"};field_defs_ProjectTask[ "actual_effort"] = {"name":"actual_effort","vname":"Actual Effort (hrs)","type":"int"};field_defs_ProjectTask[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_ProjectTask = new Array();

option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"=", "text":"Equals"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"not_equal", "text":"Not On"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"greater_than", "text":"After"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"less_than", "text":"Before"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_month", "text":"Last Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"this_month", "text":"This Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_month", "text":"Next Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_year", "text":"Last Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"this_year", "text":"This Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_year", "text":"Next Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"between", "text":"Is Between"};

field_defs_ProjectTask[ "date_entered"].options=option_arr_ProjectTask;

field_defs_ProjectTask[ "date_finish"] = {"name":"date_finish","vname":"Finish Date","type":"date","validation":"Array","audited":"1","enable_range_search":"1"};field_defs_ProjectTask[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_ProjectTask = new Array();

option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"=", "text":"Equals"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"not_equal", "text":"Not On"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"greater_than", "text":"After"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"less_than", "text":"Before"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_month", "text":"Last Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"this_month", "text":"This Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_month", "text":"Next Month"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"last_year", "text":"Last Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"this_year", "text":"This Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"next_year", "text":"Next Year"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"between", "text":"Is Between"};

field_defs_ProjectTask[ "date_modified"].options=option_arr_ProjectTask;

field_defs_ProjectTask[ "date_start"] = {"name":"date_start","vname":"Start Date","type":"date","validation":"Array","audited":"1","enable_range_search":"1"};field_defs_ProjectTask[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_ProjectTask[ "duration"] = {"name":"duration","vname":"Duration","required":"1","type":"int"};field_defs_ProjectTask[ "duration_unit"] = {"name":"duration_unit","vname":"Duration Unit","options":"project_duration_units_dom","type":"text"};var option_arr_ProjectTask = new Array();

option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Days", "text":"Days"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Hours", "text":"Hours"};

field_defs_ProjectTask[ "duration_unit"].options=option_arr_ProjectTask;

field_defs_ProjectTask[ "estimated_effort"] = {"name":"estimated_effort","vname":"Estimated Effort (hrs)","type":"int"};field_defs_ProjectTask[ "id"] = {"name":"id","vname":"Id","required":"1","type":"id","reportable":"1"};field_defs_ProjectTask[ "milestone_flag"] = {"name":"milestone_flag","vname":"Milestone","type":"bool"};field_defs_ProjectTask[ "name"] = {"name":"name","vname":"Name","required":"1","dbType":"varchar","type":"name","len":"50","unified_search":"1","importable":"required"};field_defs_ProjectTask[ "order_number"] = {"name":"order_number","vname":"Order","type":"int"};field_defs_ProjectTask[ "parent_task_id"] = {"name":"parent_task_id","vname":"Parent Task Id","type":"int","reportable":"1"};field_defs_ProjectTask[ "percent_complete"] = {"name":"percent_complete","vname":"% Complete","type":"int","audited":"1"};field_defs_ProjectTask[ "predecessors"] = {"name":"predecessors","vname":"Predecessors","type":"text"};field_defs_ProjectTask[ "priority"] = {"name":"priority","vname":"Priority","type":"enum","options":"project_task_priority_options"};var option_arr_ProjectTask = new Array();

option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"High", "text":"High"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Medium", "text":"Medium"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Low", "text":"Low"};

field_defs_ProjectTask[ "priority"].options=option_arr_ProjectTask;

field_defs_ProjectTask[ "resource_id"] = {"name":"resource_id","vname":"Resource","type":"text"};field_defs_ProjectTask[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"project_task_status_options","audited":"1"};var option_arr_ProjectTask = new Array();

option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Not Started", "text":"Not Started"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"In Progress", "text":"In Progress"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Completed", "text":"Completed"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Pending Input", "text":"Pending Input"};
option_arr_ProjectTask[option_arr_ProjectTask.length] = { "value":"Deferred", "text":"Deferred"};

field_defs_ProjectTask[ "status"].options=option_arr_ProjectTask;

field_defs_ProjectTask[ "task_number"] = {"name":"task_number","vname":"Task Number","type":"int"};field_defs_ProjectTask[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_ProjectTask[ "utilization"] = {"name":"utilization","vname":"Utilization (%)","type":"int","validation":"Array","function":"Array"};var default_table_columns_ProjectTask = [""];




module_defs['ProjectTask'] = new Object();
module_defs['ProjectTask'].link_defs = link_defs_ProjectTask;
module_defs['ProjectTask'].field_defs = field_defs_ProjectTask;
module_defs['ProjectTask'].default_table_columns = default_table_columns_ProjectTask;
module_defs['ProjectTask'].summary_field_defs = new Object();
module_defs['ProjectTask'].group_by_field_defs = new Object();
module_defs['ProjectTask'].default_summary_columns = default_summary_columns;
module_defs['ProjectTask'].label = "Project Tasks";


var rel_defs = new Object();
var link_defs_Campaigns = new Object();
link_defs_Campaigns[ "created_by_link"] = {"name":"created_by_link","relationship_name":"campaigns_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Campaigns[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"campaigns_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Campaigns[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"campaigns_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Campaigns[ "team_link"] = {"name":"team_link","relationship_name":"campaigns_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Campaigns[ "prospectlists"] = {"name":"prospectlists","relationship_name":"prospect_list_campaigns","bean_is_lhs":false,"link_type":"many","label":"prospectlists"};

link_defs_Campaigns[ "emailmarketing"] = {"name":"emailmarketing","relationship_name":"campaign_email_marketing","bean_is_lhs":true,"link_type":"many","label":"emailmarketing"};

link_defs_Campaigns[ "queueitems"] = {"name":"queueitems","relationship_name":"campaign_emailman","bean_is_lhs":true,"link_type":"many","label":"queueitems"};

link_defs_Campaigns[ "log_entries"] = {"name":"log_entries","relationship_name":"campaign_campaignlog","bean_is_lhs":true,"link_type":"many","label":"Log Entries"};

link_defs_Campaigns[ "tracked_urls"] = {"name":"tracked_urls","relationship_name":"campaign_campaigntrakers","bean_is_lhs":true,"link_type":"many","label":"Tracker URLs"};

link_defs_Campaigns[ "leads"] = {"name":"leads","relationship_name":"campaign_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Campaigns[ "opportunities"] = {"name":"opportunities","relationship_name":"campaign_opportunities","bean_is_lhs":true,"link_type":"many","label":"Opportunities"};

link_defs_Campaigns[ "contacts"] = {"name":"contacts","relationship_name":"campaign_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Campaigns[ "accounts"] = {"name":"accounts","relationship_name":"campaign_accounts","bean_is_lhs":true,"link_type":"many","label":"Accounts"};

var field_defs_Campaigns = new Object();
field_defs_Campaigns[ "actual_cost"] = {"name":"actual_cost","vname":"Actual Cost: ","type":"currency","dbType":"double"};field_defs_Campaigns[ "budget"] = {"name":"budget","vname":"Budget: ","type":"currency","dbType":"double"};field_defs_Campaigns[ "campaign_type"] = {"name":"campaign_type","vname":"Type: ","type":"enum","options":"campaign_type_dom","len":"100","audited":"1","importable":"required","required":"1"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"", "text":""};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Telesales", "text":"Telesales"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Mail", "text":"Mail"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Email", "text":"Email"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Print", "text":"Print"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Web", "text":"Web"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Radio", "text":"Radio"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Television", "text":"Television"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"NewsLetter", "text":"Newsletter"};

field_defs_Campaigns[ "campaign_type"].options=option_arr_Campaigns;

field_defs_Campaigns[ "content"] = {"name":"content","vname":"Description: ","type":"text"};field_defs_Campaigns[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"=", "text":"Equals"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"greater_than", "text":"After"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"less_than", "text":"Before"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_month", "text":"This Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_year", "text":"This Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"between", "text":"Is Between"};

field_defs_Campaigns[ "date_entered"].options=option_arr_Campaigns;

field_defs_Campaigns[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"=", "text":"Equals"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"greater_than", "text":"After"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"less_than", "text":"Before"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_month", "text":"This Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_year", "text":"This Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"between", "text":"Is Between"};

field_defs_Campaigns[ "date_modified"].options=option_arr_Campaigns;

field_defs_Campaigns[ "end_date"] = {"name":"end_date","vname":"End Date: ","type":"date","audited":"1","importable":"required","required":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"=", "text":"Equals"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"greater_than", "text":"After"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"less_than", "text":"Before"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_month", "text":"This Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_year", "text":"This Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"between", "text":"Is Between"};

field_defs_Campaigns[ "end_date"].options=option_arr_Campaigns;

field_defs_Campaigns[ "expected_cost"] = {"name":"expected_cost","vname":"Expected Cost: ","type":"currency","dbType":"double"};field_defs_Campaigns[ "expected_revenue"] = {"name":"expected_revenue","vname":"Expected Revenue: ","type":"currency","dbType":"double"};field_defs_Campaigns[ "frequency"] = {"name":"frequency","vname":"Frequency","type":"enum","len":"100","options":"newsletter_frequency_dom"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"", "text":""};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Weekly", "text":"Weekly"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Monthly", "text":"Monthly"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Quarterly", "text":"Quarterly"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Annually", "text":"Annually"};

field_defs_Campaigns[ "frequency"].options=option_arr_Campaigns;

field_defs_Campaigns[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Campaigns[ "impressions"] = {"name":"impressions","vname":"Impressions: ","type":"int","reportable":"1"};field_defs_Campaigns[ "name"] = {"name":"name","vname":"Name","dbType":"varchar","type":"name","len":"50","importable":"required","required":"1","unified_search":"1"};field_defs_Campaigns[ "objective"] = {"name":"objective","vname":"Objective: ","type":"text"};field_defs_Campaigns[ "refer_url"] = {"name":"refer_url","vname":"Tracker Redirect URL: ","type":"varchar","len":"255"};field_defs_Campaigns[ "start_date"] = {"name":"start_date","vname":"Start Date: ","type":"date","audited":"1","validation":"Array","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"=", "text":"Equals"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"greater_than", "text":"After"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"less_than", "text":"Before"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_month", "text":"This Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"this_year", "text":"This Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"between", "text":"Is Between"};

field_defs_Campaigns[ "start_date"].options=option_arr_Campaigns;

field_defs_Campaigns[ "status"] = {"name":"status","vname":"Status: ","type":"enum","options":"campaign_status_dom","len":"100","audited":"1","importable":"required","required":"1"};var option_arr_Campaigns = new Array();

option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"", "text":""};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Planning", "text":"Planning"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Active", "text":"Active"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Inactive", "text":"Inactive"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Complete", "text":"Complete"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"In Queue", "text":"In Queue"};
option_arr_Campaigns[option_arr_Campaigns.length] = { "value":"Sending", "text":"Sending"};

field_defs_Campaigns[ "status"].options=option_arr_Campaigns;

field_defs_Campaigns[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Campaigns[ "tracker_count"] = {"name":"tracker_count","vname":"Tracker Count: ","type":"int","len":"11"};field_defs_Campaigns[ "tracker_key"] = {"name":"tracker_key","vname":"Tracker: ","type":"int","required":"1","studio":"Array","len":"11","auto_increment":"1"};field_defs_Campaigns[ "tracker_text"] = {"name":"tracker_text","vname":"Tracker Link Text: ","type":"varchar","len":"255"};var default_table_columns_Campaigns = [""];




module_defs['Campaigns'] = new Object();
module_defs['Campaigns'].link_defs = link_defs_Campaigns;
module_defs['Campaigns'].field_defs = field_defs_Campaigns;
module_defs['Campaigns'].default_table_columns = default_table_columns_Campaigns;
module_defs['Campaigns'].summary_field_defs = new Object();
module_defs['Campaigns'].group_by_field_defs = new Object();
module_defs['Campaigns'].default_summary_columns = default_summary_columns;
module_defs['Campaigns'].label = "Campaigns";


var rel_defs = new Object();
var link_defs_CampaignLog = new Object();
link_defs_CampaignLog[ "campaign"] = {"name":"campaign","relationship_name":"campaign_campaignlog","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_CampaignLog[ "created_contact"] = {"name":"created_contact","relationship_name":"campaignlog_contact","bean_is_lhs":true,"link_type":"many","label":"Created Contact"};

link_defs_CampaignLog[ "created_lead"] = {"name":"created_lead","relationship_name":"campaignlog_lead","bean_is_lhs":true,"link_type":"many","label":"Created Lead"};

var field_defs_CampaignLog = new Object();
field_defs_CampaignLog[ "activity_date"] = {"name":"activity_date","vname":"Activity Date","type":"datetime"};field_defs_CampaignLog[ "activity_type"] = {"name":"activity_type","vname":"Activity Type","type":"enum","options":"campainglog_activity_type_dom","len":"100"};var option_arr_CampaignLog = new Array();

option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"", "text":""};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"targeted", "text":"Message Sent/Attempted"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"send error", "text":"Bounced Messages,Other"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"invalid email", "text":"Bounced Messages,Invalid Email"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"link", "text":"Click-thru Link"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"viewed", "text":"Viewed Message"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"removed", "text":"Opted Out"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"lead", "text":"Leads Created"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"contact", "text":"Contacts Created"};
option_arr_CampaignLog[option_arr_CampaignLog.length] = { "value":"blocked", "text":"Suppressed by address or domain"};

field_defs_CampaignLog[ "activity_type"].options=option_arr_CampaignLog;

field_defs_CampaignLog[ "campaign_id"] = {"name":"campaign_id","vname":"campaign_id","type":"id"};field_defs_CampaignLog[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime"};field_defs_CampaignLog[ "hits"] = {"name":"hits","vname":"Hits","type":"int","reportable":"1"};field_defs_CampaignLog[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_CampaignLog[ "more_information"] = {"name":"more_information","vname":"More Information","type":"varchar","len":"100"};field_defs_CampaignLog[ "related_id"] = {"name":"related_id","vname":"Related Id","type":"varchar","len":"36"};field_defs_CampaignLog[ "related_type"] = {"name":"related_type","vname":"Related Type","type":"varchar","len":"100"};field_defs_CampaignLog[ "target_id"] = {"name":"target_id","vname":"Target ID","type":"varchar","len":"36"};field_defs_CampaignLog[ "target_tracker_key"] = {"name":"target_tracker_key","vname":"Target Tracker Key","type":"varchar","len":"36"};field_defs_CampaignLog[ "target_type"] = {"name":"target_type","vname":"Target Type","type":"varchar","len":"100"};var default_table_columns_CampaignLog = [""];




module_defs['CampaignLog'] = new Object();
module_defs['CampaignLog'].link_defs = link_defs_CampaignLog;
module_defs['CampaignLog'].field_defs = field_defs_CampaignLog;
module_defs['CampaignLog'].default_table_columns = default_table_columns_CampaignLog;
module_defs['CampaignLog'].summary_field_defs = new Object();
module_defs['CampaignLog'].group_by_field_defs = new Object();
module_defs['CampaignLog'].default_summary_columns = default_summary_columns;
module_defs['CampaignLog'].label = "Campaign Log";


var rel_defs = new Object();
var link_defs_Releases = new Object();
var field_defs_Releases = new Object();
field_defs_Releases[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_Releases[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Releases[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Releases[ "list_order"] = {"name":"list_order","vname":"Order","type":"int","len":"4","importable":"required"};field_defs_Releases[ "name"] = {"name":"name","vname":"Release version","dbType":"varchar","type":"name","len":"50","required":"1","importable":"required"};field_defs_Releases[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"release_status_dom","len":"100","importable":"required"};var option_arr_Releases = new Array();

option_arr_Releases[option_arr_Releases.length] = { "value":"Active", "text":"Active"};
option_arr_Releases[option_arr_Releases.length] = { "value":"Inactive", "text":"Inactive"};

field_defs_Releases[ "status"].options=option_arr_Releases;

var default_table_columns_Releases = [""];




module_defs['Releases'] = new Object();
module_defs['Releases'].link_defs = link_defs_Releases;
module_defs['Releases'].field_defs = field_defs_Releases;
module_defs['Releases'].default_table_columns = default_table_columns_Releases;
module_defs['Releases'].summary_field_defs = new Object();
module_defs['Releases'].group_by_field_defs = new Object();
module_defs['Releases'].default_summary_columns = default_summary_columns;
module_defs['Releases'].label = "Releases";


var rel_defs = new Object();
var link_defs_Contacts = new Object();
link_defs_Contacts[ "created_by_link"] = {"name":"created_by_link","relationship_name":"contacts_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Contacts[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"contacts_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Contacts[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"contacts_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Contacts[ "team_link"] = {"name":"team_link","relationship_name":"contacts_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Contacts[ "email_addresses_primary"] = {"name":"email_addresses_primary","relationship_name":"contacts_email_addresses_primary","bean_is_lhs":true,"link_type":"many","label":"Email Address"};

link_defs_Contacts[ "accounts"] = {"name":"accounts","relationship_name":"accounts_contacts","bean_is_lhs":false,"link_type":"one","label":"Account"};

link_defs_Contacts[ "reports_to_link"] = {"name":"reports_to_link","relationship_name":"contact_direct_reports","bean_is_lhs":false,"link_type":"one","label":"Reports To"};

link_defs_Contacts[ "opportunities"] = {"name":"opportunities","relationship_name":"opportunities_contacts","bean_is_lhs":false,"link_type":"many","label":"Opportunities"};

link_defs_Contacts[ "bugs"] = {"name":"bugs","relationship_name":"contacts_bugs","bean_is_lhs":true,"link_type":"many","label":"Bugs"};

link_defs_Contacts[ "calls"] = {"name":"calls","relationship_name":"calls_contacts","bean_is_lhs":false,"link_type":"many","label":"Calls"};

link_defs_Contacts[ "cases"] = {"name":"cases","relationship_name":"contacts_cases","bean_is_lhs":true,"link_type":"many","label":"Cases"};

link_defs_Contacts[ "direct_reports"] = {"name":"direct_reports","relationship_name":"contact_direct_reports","bean_is_lhs":true,"link_type":"many","label":"Direct Reports"};

link_defs_Contacts[ "emails"] = {"name":"emails","relationship_name":"emails_contacts_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Contacts[ "documents"] = {"name":"documents","relationship_name":"documents_contacts","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Contacts[ "leads"] = {"name":"leads","relationship_name":"contact_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Contacts[ "products"] = {"name":"products","relationship_name":"contact_products","bean_is_lhs":true,"link_type":"many","label":"Products"};

link_defs_Contacts[ "contracts"] = {"name":"contracts","relationship_name":"contracts_contacts","bean_is_lhs":false,"link_type":"many","label":"Contracts"};

link_defs_Contacts[ "meetings"] = {"name":"meetings","relationship_name":"meetings_contacts","bean_is_lhs":false,"link_type":"many","label":"Meetings"};

link_defs_Contacts[ "notes"] = {"name":"notes","relationship_name":"contact_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Contacts[ "project"] = {"name":"project","relationship_name":"projects_contacts","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Contacts[ "quotes"] = {"name":"quotes","relationship_name":"quotes_contacts_shipto","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Contacts[ "tasks"] = {"name":"tasks","relationship_name":"contact_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Contacts[ "tasks_parent"] = {"name":"tasks_parent","relationship_name":"contact_tasks_parent","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Contacts[ "campaigns"] = {"name":"campaigns","relationship_name":"contact_campaign_log","bean_is_lhs":true,"link_type":"many","label":"CampaignLog"};

link_defs_Contacts[ "campaign_contacts"] = {"name":"campaign_contacts","relationship_name":"campaign_contacts","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_Contacts[ "prospect_lists"] = {"name":"prospect_lists","relationship_name":"prospect_list_contacts","bean_is_lhs":false,"link_type":"many","label":"Prospect List"};

var field_defs_Contacts = new Object();
field_defs_Contacts[ "alt_address_city"] = {"name":"alt_address_city","vname":"Alternate Address City","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Contacts[ "alt_address_country"] = {"name":"alt_address_country","vname":"Alternate Address Country","type":"varchar","group":"alt_address","merge_filter":"enabled"};field_defs_Contacts[ "alt_address_postalcode"] = {"name":"alt_address_postalcode","vname":"Alternate Address Postal Code","type":"varchar","len":"20","group":"alt_address","merge_filter":"enabled"};field_defs_Contacts[ "alt_address_state"] = {"name":"alt_address_state","vname":"Alternate Address State","type":"varchar","len":"100","group":"alt_address","merge_filter":"enabled"};field_defs_Contacts[ "alt_address_street"] = {"name":"alt_address_street","vname":"Alternate Address Street","type":"varchar","len":"150","group":"alt_address","merge_filter":"enabled"};field_defs_Contacts[ "assistant"] = {"name":"assistant","vname":"Assistant","type":"varchar","len":"75","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "assistant_phone"] = {"name":"assistant_phone","vname":"Assistant Phone","type":"phone","dbType":"varchar","len":"100","group":"assistant","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "birthdate"] = {"name":"birthdate","vname":"Birthdate","type":"date"};field_defs_Contacts[ "campaign_id"] = {"name":"campaign_id","vname":"Campaign ID","rname":"id","id_name":"campaign_id","type":"id","table":"campaigns","isnull":"true","module":"Campaigns","duplicate_merge":"disabled"};field_defs_Contacts[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contacts = new Array();

option_arr_Contacts[option_arr_Contacts.length] = { "value":"=", "text":"Equals"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contacts[ "date_entered"].options=option_arr_Contacts;

field_defs_Contacts[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contacts = new Array();

option_arr_Contacts[option_arr_Contacts.length] = { "value":"=", "text":"Equals"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contacts[ "date_modified"].options=option_arr_Contacts;

field_defs_Contacts[ "department"] = {"name":"department","vname":"Department","type":"varchar","len":"255","merge_filter":"enabled"};field_defs_Contacts[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Contacts[ "do_not_call"] = {"name":"do_not_call","vname":"Do Not Call","type":"bool","audited":"1"};field_defs_Contacts[ "first_name"] = {"name":"first_name","vname":"First Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected"};field_defs_Contacts[ "full_name"] = {"name":"full_name","rname":"full_name","vname":"Name","type":"fullname","fields":"Array","sort_on":"last_name","source":"non-db","group":"last_name","len":"510","db_concat_fields":"Array","studio":"Array"};field_defs_Contacts[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Contacts[ "last_name"] = {"name":"last_name","vname":"Last Name","type":"varchar","len":"100","unified_search":"1","merge_filter":"selected","required":"1","importable":"required"};field_defs_Contacts[ "lead_source"] = {"name":"lead_source","vname":"Lead Source","type":"enum","options":"lead_source_dom","len":"255","merge_filter":"enabled"};var option_arr_Contacts = new Array();

option_arr_Contacts[option_arr_Contacts.length] = { "value":"", "text":""};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Cold Call", "text":"Cold Call"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Existing Customer", "text":"Existing Customer"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Self Generated", "text":"Self Generated"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Employee", "text":"Employee"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Partner", "text":"Partner"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Public Relations", "text":"Public Relations"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Direct Mail", "text":"Direct Mail"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Conference", "text":"Conference"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Trade Show", "text":"Trade Show"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Web Site", "text":"Web Site"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Word of mouth", "text":"Word of mouth"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Email", "text":"Email"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Campaign", "text":"Campaign"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Other", "text":"Other"};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Chat", "text":"Chat"};

field_defs_Contacts[ "lead_source"].options=option_arr_Contacts;

field_defs_Contacts[ "phone_fax"] = {"name":"phone_fax","vname":"Fax","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "phone_home"] = {"name":"phone_home","vname":"Home","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "phone_mobile"] = {"name":"phone_mobile","vname":"Mobile","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "phone_other"] = {"name":"phone_other","vname":"Other Phone","type":"phone","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "phone_work"] = {"name":"phone_work","vname":"Office Phone","type":"phone","dbType":"varchar","len":"100","audited":"1","unified_search":"1","merge_filter":"enabled"};field_defs_Contacts[ "primary_address_city"] = {"name":"primary_address_city","vname":"Primary Address City","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Contacts[ "primary_address_country"] = {"name":"primary_address_country","vname":"Primary Address Country","type":"varchar","group":"primary_address","merge_filter":"enabled"};field_defs_Contacts[ "primary_address_postalcode"] = {"name":"primary_address_postalcode","vname":"Primary Address Postal Code","type":"varchar","len":"20","group":"primary_address","merge_filter":"enabled"};field_defs_Contacts[ "primary_address_state"] = {"name":"primary_address_state","vname":"Primary Address State","type":"varchar","len":"100","group":"primary_address","merge_filter":"enabled"};field_defs_Contacts[ "primary_address_street"] = {"name":"primary_address_street","vname":"Primary Address Street","type":"varchar","len":"150","group":"primary_address","merge_filter":"enabled"};field_defs_Contacts[ "salutation"] = {"name":"salutation","vname":"Salutation","type":"enum","options":"salutation_dom","len":"255"};var option_arr_Contacts = new Array();

option_arr_Contacts[option_arr_Contacts.length] = { "value":"", "text":""};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Mr.", "text":"Mr."};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Ms.", "text":"Ms."};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Mrs.", "text":"Mrs."};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Dr.", "text":"Dr."};
option_arr_Contacts[option_arr_Contacts.length] = { "value":"Prof.", "text":"Prof."};

field_defs_Contacts[ "salutation"].options=option_arr_Contacts;

field_defs_Contacts[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Contacts[ "title"] = {"name":"title","vname":"Title","type":"varchar","len":"100"};var default_table_columns_Contacts = [""];




module_defs['Contacts'] = new Object();
module_defs['Contacts'].link_defs = link_defs_Contacts;
module_defs['Contacts'].field_defs = field_defs_Contacts;
module_defs['Contacts'].default_table_columns = default_table_columns_Contacts;
module_defs['Contacts'].summary_field_defs = new Object();
module_defs['Contacts'].group_by_field_defs = new Object();
module_defs['Contacts'].default_summary_columns = default_summary_columns;
module_defs['Contacts'].label = "Contacts";


var rel_defs = new Object();
var link_defs_Accounts = new Object();
link_defs_Accounts[ "created_by_link"] = {"name":"created_by_link","relationship_name":"accounts_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Accounts[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"accounts_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Accounts[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"accounts_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Accounts[ "team_link"] = {"name":"team_link","relationship_name":"accounts_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Accounts[ "email_addresses_primary"] = {"name":"email_addresses_primary","relationship_name":"accounts_email_addresses_primary","bean_is_lhs":true,"link_type":"many","label":"Email Address"};

link_defs_Accounts[ "members"] = {"name":"members","relationship_name":"member_accounts","bean_is_lhs":true,"link_type":"many","label":"Members"};

link_defs_Accounts[ "member_of"] = {"name":"member_of","relationship_name":"member_accounts","bean_is_lhs":false,"link_type":"one","label":"Member of"};

link_defs_Accounts[ "cases"] = {"name":"cases","relationship_name":"account_cases","bean_is_lhs":true,"link_type":"many","label":"Cases"};

link_defs_Accounts[ "tasks"] = {"name":"tasks","relationship_name":"account_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Accounts[ "notes"] = {"name":"notes","relationship_name":"account_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Accounts[ "meetings"] = {"name":"meetings","relationship_name":"account_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Accounts[ "calls"] = {"name":"calls","relationship_name":"account_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Accounts[ "emails"] = {"name":"emails","relationship_name":"emails_accounts_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Accounts[ "documents"] = {"name":"documents","relationship_name":"documents_accounts","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Accounts[ "bugs"] = {"name":"bugs","relationship_name":"accounts_bugs","bean_is_lhs":true,"link_type":"many","label":"Bugs"};

link_defs_Accounts[ "contacts"] = {"name":"contacts","relationship_name":"accounts_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Accounts[ "opportunities"] = {"name":"opportunities","relationship_name":"accounts_opportunities","bean_is_lhs":true,"link_type":"many","label":"Opportunity"};

link_defs_Accounts[ "quotes"] = {"name":"quotes","relationship_name":"quotes_billto_accounts","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Accounts[ "quotes_shipto"] = {"name":"quotes_shipto","relationship_name":"quotes_shipto_accounts","bean_is_lhs":false,"link_type":"many","label":"Quotes Ship to"};

link_defs_Accounts[ "project"] = {"name":"project","relationship_name":"projects_accounts","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Accounts[ "leads"] = {"name":"leads","relationship_name":"account_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Accounts[ "campaigns"] = {"name":"campaigns","relationship_name":"account_campaign_log","bean_is_lhs":true,"link_type":"many","label":"CampaignLog"};

link_defs_Accounts[ "campaign_accounts"] = {"name":"campaign_accounts","relationship_name":"campaign_accounts","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_Accounts[ "products"] = {"name":"products","relationship_name":"products_accounts","bean_is_lhs":true,"link_type":"many","label":"Products"};

link_defs_Accounts[ "contracts"] = {"name":"contracts","relationship_name":"account_contracts","bean_is_lhs":true,"link_type":"many","label":"Contracts"};

link_defs_Accounts[ "prospect_lists"] = {"name":"prospect_lists","relationship_name":"prospect_list_accounts","bean_is_lhs":false,"link_type":"many","label":"Prospect List"};

var field_defs_Accounts = new Object();
field_defs_Accounts[ "account_type"] = {"name":"account_type","vname":"Type","type":"enum","options":"account_type_dom","len":"50"};var option_arr_Accounts = new Array();

option_arr_Accounts[option_arr_Accounts.length] = { "value":"", "text":""};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Analyst", "text":"Analyst"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Competitor", "text":"Competitor"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Customer", "text":"Customer"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Integrator", "text":"Integrator"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Investor", "text":"Investor"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Partner", "text":"Partner"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Press", "text":"Press"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Prospect", "text":"Prospect"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Reseller", "text":"Reseller"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Other", "text":"Other"};

field_defs_Accounts[ "account_type"].options=option_arr_Accounts;

field_defs_Accounts[ "annual_revenue"] = {"name":"annual_revenue","vname":"Annual Revenue","type":"varchar","len":"100","merge_filter":"enabled"};field_defs_Accounts[ "billing_address_city"] = {"name":"billing_address_city","vname":"Billing City","type":"varchar","len":"100","group":"billing_address","merge_filter":"enabled"};field_defs_Accounts[ "billing_address_country"] = {"name":"billing_address_country","vname":"Billing Country","type":"varchar","group":"billing_address","merge_filter":"enabled"};field_defs_Accounts[ "billing_address_postalcode"] = {"name":"billing_address_postalcode","vname":"Billing Postal Code","type":"varchar","len":"20","group":"billing_address","merge_filter":"enabled"};field_defs_Accounts[ "billing_address_state"] = {"name":"billing_address_state","vname":"Billing State","type":"varchar","len":"100","group":"billing_address","merge_filter":"enabled"};field_defs_Accounts[ "billing_address_street"] = {"name":"billing_address_street","vname":"Billing Street","type":"varchar","len":"150","group":"billing_address","merge_filter":"enabled"};field_defs_Accounts[ "custtype_c"] = {"source":"custom_fields","name":"custtype_c","vname":"CustType","type":"enum","importable":"true","duplicate_merge":"disabled","audited":"1","reportable":"1","len":"100","size":"20","options":"custtype_list","studio":"visible","id":"Accountscusttype_c","custom_module":"Accounts"};var option_arr_Accounts = new Array();

option_arr_Accounts[option_arr_Accounts.length] = { "value":"Vendar", "text":"Vendar"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"", "text":""};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Supplier", "text":"Supplier"};

field_defs_Accounts[ "custtype_c"].options=option_arr_Accounts;

field_defs_Accounts[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Accounts = new Array();

option_arr_Accounts[option_arr_Accounts.length] = { "value":"=", "text":"Equals"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"greater_than", "text":"After"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"less_than", "text":"Before"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"between", "text":"Is Between"};

field_defs_Accounts[ "date_entered"].options=option_arr_Accounts;

field_defs_Accounts[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Accounts = new Array();

option_arr_Accounts[option_arr_Accounts.length] = { "value":"=", "text":"Equals"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"greater_than", "text":"After"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"less_than", "text":"Before"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"between", "text":"Is Between"};

field_defs_Accounts[ "date_modified"].options=option_arr_Accounts;

field_defs_Accounts[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Accounts[ "employees"] = {"name":"employees","vname":"Employees","type":"varchar","len":"10"};field_defs_Accounts[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Accounts[ "industry"] = {"name":"industry","vname":"Industry","type":"enum","options":"industry_dom","len":"50","merge_filter":"enabled"};var option_arr_Accounts = new Array();

option_arr_Accounts[option_arr_Accounts.length] = { "value":"", "text":""};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Apparel", "text":"Apparel"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Banking", "text":"Banking"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Biotechnology", "text":"Biotechnology"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Chemicals", "text":"Chemicals"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Communications", "text":"Communications"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Construction", "text":"Construction"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Consulting", "text":"Consulting"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Education", "text":"Education"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Electronics", "text":"Electronics"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Energy", "text":"Energy"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Engineering", "text":"Engineering"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Entertainment", "text":"Entertainment"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Environmental", "text":"Environmental"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Finance", "text":"Finance"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Government", "text":"Government"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Healthcare", "text":"Healthcare"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Hospitality", "text":"Hospitality"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Insurance", "text":"Insurance"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Machinery", "text":"Machinery"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Manufacturing", "text":"Manufacturing"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Media", "text":"Media"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Not For Profit", "text":"Not For Profit"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Recreation", "text":"Recreation"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Retail", "text":"Retail"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Shipping", "text":"Shipping"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Technology", "text":"Technology"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Telecommunications", "text":"Telecommunications"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Transportation", "text":"Transportation"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Utilities", "text":"Utilities"};
option_arr_Accounts[option_arr_Accounts.length] = { "value":"Other", "text":"Other"};

field_defs_Accounts[ "industry"].options=option_arr_Accounts;

field_defs_Accounts[ "name"] = {"name":"name","type":"name","dbType":"varchar","vname":"Name","len":"150","unified_search":"1","audited":"1","required":"1","importable":"required","merge_filter":"selected"};field_defs_Accounts[ "ownership"] = {"name":"ownership","vname":"Ownership","type":"varchar","len":"100"};field_defs_Accounts[ "phone_alternate"] = {"name":"phone_alternate","vname":"Alternate Phone","type":"phone","group":"phone_office","dbType":"varchar","len":"100","unified_search":"1","merge_filter":"enabled"};field_defs_Accounts[ "phone_fax"] = {"name":"phone_fax","vname":"Fax","type":"phone","dbType":"varchar","len":"100","unified_search":"1"};field_defs_Accounts[ "phone_office"] = {"name":"phone_office","vname":"Office Phone","type":"phone","dbType":"varchar","len":"100","audited":"1","unified_search":"1","merge_filter":"enabled"};field_defs_Accounts[ "rating"] = {"name":"rating","vname":"Rating","type":"varchar","len":"100"};field_defs_Accounts[ "shipping_address_city"] = {"name":"shipping_address_city","vname":"Shipping City","type":"varchar","len":"100","group":"shipping_address","merge_filter":"enabled"};field_defs_Accounts[ "shipping_address_country"] = {"name":"shipping_address_country","vname":"Shipping Country","type":"varchar","group":"shipping_address","merge_filter":"enabled"};field_defs_Accounts[ "shipping_address_postalcode"] = {"name":"shipping_address_postalcode","vname":"Shipping Postal Code","type":"varchar","len":"20","group":"shipping_address","merge_filter":"enabled"};field_defs_Accounts[ "shipping_address_state"] = {"name":"shipping_address_state","vname":"Shipping State","type":"varchar","len":"100","group":"shipping_address","merge_filter":"enabled"};field_defs_Accounts[ "shipping_address_street"] = {"name":"shipping_address_street","vname":"Shipping Street","type":"varchar","len":"150","group":"shipping_address","merge_filter":"enabled"};field_defs_Accounts[ "sic_code"] = {"name":"sic_code","vname":"SIC Code","type":"varchar","len":"10","merge_filter":"enabled"};field_defs_Accounts[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Accounts[ "ticker_symbol"] = {"name":"ticker_symbol","vname":"Ticker Symbol","type":"varchar","len":"10","merge_filter":"enabled"};field_defs_Accounts[ "website"] = {"name":"website","vname":"Website","type":"url","dbType":"varchar","len":"255"};var default_table_columns_Accounts = [""];




module_defs['Accounts'] = new Object();
module_defs['Accounts'].link_defs = link_defs_Accounts;
module_defs['Accounts'].field_defs = field_defs_Accounts;
module_defs['Accounts'].default_table_columns = default_table_columns_Accounts;
module_defs['Accounts'].summary_field_defs = new Object();
module_defs['Accounts'].group_by_field_defs = new Object();
module_defs['Accounts'].default_summary_columns = default_summary_columns;
module_defs['Accounts'].label = "Accounts";


var rel_defs = new Object();
var link_defs_Opportunities = new Object();
link_defs_Opportunities[ "created_by_link"] = {"name":"created_by_link","relationship_name":"opportunities_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Opportunities[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"opportunities_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Opportunities[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"opportunities_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Opportunities[ "team_link"] = {"name":"team_link","relationship_name":"opportunities_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Opportunities[ "campaign_opportunities"] = {"name":"campaign_opportunities","relationship_name":"campaign_opportunities","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_Opportunities[ "accounts"] = {"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Accounts"};

link_defs_Opportunities[ "contacts"] = {"name":"contacts","relationship_name":"opportunities_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Opportunities[ "tasks"] = {"name":"tasks","relationship_name":"opportunity_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Opportunities[ "notes"] = {"name":"notes","relationship_name":"opportunity_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Opportunities[ "meetings"] = {"name":"meetings","relationship_name":"opportunity_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Opportunities[ "calls"] = {"name":"calls","relationship_name":"opportunity_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Opportunities[ "emails"] = {"name":"emails","relationship_name":"emails_opportunities_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Opportunities[ "documents"] = {"name":"documents","relationship_name":"documents_opportunities","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Opportunities[ "quotes"] = {"name":"quotes","relationship_name":"quotes_opportunities","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Opportunities[ "project"] = {"name":"project","relationship_name":"projects_opportunities","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Opportunities[ "leads"] = {"name":"leads","relationship_name":"opportunity_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Opportunities[ "campaigns"] = {"name":"campaigns","relationship_name":"opportunities_campaign","bean_is_lhs":false,"link_type":"many","label":"Campaigns"};

link_defs_Opportunities[ "campaign_link"] = {"name":"campaign_link","relationship_name":"opportunities_campaign","bean_is_lhs":false,"link_type":"one","label":"Campaigns"};

link_defs_Opportunities[ "currencies"] = {"name":"currencies","relationship_name":"opportunity_currencies","bean_is_lhs":true,"link_type":"many","label":"Currencies"};

link_defs_Opportunities[ "contracts"] = {"name":"contracts","relationship_name":"contracts_opportunities","bean_is_lhs":false,"link_type":"many","label":"Contracts"};

var field_defs_Opportunities = new Object();
field_defs_Opportunities[ "amount"] = {"name":"amount","vname":"Opportunity Amount","type":"currency","dbType":"double","importable":"required","duplicate_merge":"1","required":"1","options":"numeric_range_search_dom","enable_range_search":"1"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"=", "text":"Equals"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"not_equal", "text":"Does Not Equal"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"greater_than", "text":"Greater Than"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"greater_than_equals", "text":"Greater Than Or Equal To"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"less_than", "text":"Less Than"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"less_than_equals", "text":"Less Than Or Equal To"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"between", "text":"Is Between"};

field_defs_Opportunities[ "amount"].options=option_arr_Opportunities;

field_defs_Opportunities[ "amount_usdollar"] = {"name":"amount_usdollar","vname":"Amount","type":"currency","group":"amount","dbType":"double","disable_num_format":"1","audited":"1"};field_defs_Opportunities[ "date_closed"] = {"name":"date_closed","vname":"Expected Close Date","type":"date","audited":"1","importable":"required","required":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"=", "text":"Equals"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"greater_than", "text":"After"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"less_than", "text":"Before"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_month", "text":"This Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_year", "text":"This Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"between", "text":"Is Between"};

field_defs_Opportunities[ "date_closed"].options=option_arr_Opportunities;

field_defs_Opportunities[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"=", "text":"Equals"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"greater_than", "text":"After"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"less_than", "text":"Before"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_month", "text":"This Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_year", "text":"This Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"between", "text":"Is Between"};

field_defs_Opportunities[ "date_entered"].options=option_arr_Opportunities;

field_defs_Opportunities[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"=", "text":"Equals"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"greater_than", "text":"After"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"less_than", "text":"Before"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_month", "text":"This Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"this_year", "text":"This Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"between", "text":"Is Between"};

field_defs_Opportunities[ "date_modified"].options=option_arr_Opportunities;

field_defs_Opportunities[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Opportunities[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Opportunities[ "lead_source"] = {"name":"lead_source","vname":"Lead Source","type":"enum","options":"lead_source_dom","len":"50","merge_filter":"enabled"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"", "text":""};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Cold Call", "text":"Cold Call"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Existing Customer", "text":"Existing Customer"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Self Generated", "text":"Self Generated"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Employee", "text":"Employee"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Partner", "text":"Partner"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Public Relations", "text":"Public Relations"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Direct Mail", "text":"Direct Mail"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Conference", "text":"Conference"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Trade Show", "text":"Trade Show"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Web Site", "text":"Web Site"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Word of mouth", "text":"Word of mouth"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Email", "text":"Email"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Campaign", "text":"Campaign"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Other", "text":"Other"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Chat", "text":"Chat"};

field_defs_Opportunities[ "lead_source"].options=option_arr_Opportunities;

field_defs_Opportunities[ "name"] = {"name":"name","vname":"Opportunity Name","type":"name","dbType":"varchar","len":"50","unified_search":"1","merge_filter":"selected","importable":"required","required":"1"};field_defs_Opportunities[ "next_step"] = {"name":"next_step","vname":"Next Step","type":"varchar","len":"100","merge_filter":"enabled"};field_defs_Opportunities[ "opportunity_type"] = {"name":"opportunity_type","vname":"Type","type":"enum","options":"opportunity_type_dom","len":"255","audited":"1","merge_filter":"enabled"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"", "text":""};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Existing Business", "text":"Existing Business"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"New Business", "text":"New Business"};

field_defs_Opportunities[ "opportunity_type"].options=option_arr_Opportunities;

field_defs_Opportunities[ "probability"] = {"name":"probability","vname":"Probability (%)","type":"int","dbType":"double","audited":"1","validation":"Array","merge_filter":"enabled"};field_defs_Opportunities[ "sales_stage"] = {"name":"sales_stage","vname":"Sales Stage","type":"enum","options":"sales_stage_dom","len":"255","audited":"1","merge_filter":"enabled","importable":"required","required":"1"};var option_arr_Opportunities = new Array();

option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Prospecting", "text":"Prospecting"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Qualification", "text":"Qualification"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Needs Analysis", "text":"Needs Analysis"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Value Proposition", "text":"Value Proposition"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Id. Decision Makers", "text":"Id. Decision Makers"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Perception Analysis", "text":"Perception Analysis"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Proposal/Price Quote", "text":"Proposal/Price Quote"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Negotiation/Review", "text":"Negotiation/Review"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Closed Won", "text":"Closed Won"};
option_arr_Opportunities[option_arr_Opportunities.length] = { "value":"Closed Lost", "text":"Closed Lost"};

field_defs_Opportunities[ "sales_stage"].options=option_arr_Opportunities;

field_defs_Opportunities[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Opportunities = [""];




module_defs['Opportunities'] = new Object();
module_defs['Opportunities'].link_defs = link_defs_Opportunities;
module_defs['Opportunities'].field_defs = field_defs_Opportunities;
module_defs['Opportunities'].default_table_columns = default_table_columns_Opportunities;
module_defs['Opportunities'].summary_field_defs = new Object();
module_defs['Opportunities'].group_by_field_defs = new Object();
module_defs['Opportunities'].default_summary_columns = default_summary_columns;
module_defs['Opportunities'].label = "Opportunities";


var rel_defs = new Object();
var link_defs_Notes = new Object();
link_defs_Notes[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"notes_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Notes[ "team_link"] = {"name":"team_link","relationship_name":"notes_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Notes[ "created_by_link"] = {"name":"created_by_link","relationship_name":"notes_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Notes[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"notes_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Notes[ "contact"] = {"name":"contact","relationship_name":"contact_notes","bean_is_lhs":false,"link_type":"many","label":"Contact"};

link_defs_Notes[ "cases"] = {"name":"cases","relationship_name":"case_notes","bean_is_lhs":false,"link_type":"many","label":"Cases"};

link_defs_Notes[ "accounts"] = {"name":"accounts","relationship_name":"account_notes","bean_is_lhs":false,"link_type":"many","label":"Accounts"};

link_defs_Notes[ "opportunities"] = {"name":"opportunities","relationship_name":"opportunity_notes","bean_is_lhs":false,"link_type":"many","label":"Opportunities"};

link_defs_Notes[ "leads"] = {"name":"leads","relationship_name":"lead_notes","bean_is_lhs":false,"link_type":"many","label":"Leads"};

link_defs_Notes[ "products"] = {"name":"products","relationship_name":"product_notes","bean_is_lhs":false,"link_type":"many","label":"Products"};

link_defs_Notes[ "quotes"] = {"name":"quotes","relationship_name":"quote_notes","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Notes[ "contracts"] = {"name":"contracts","relationship_name":"contract_notes","bean_is_lhs":false,"link_type":"many","label":"Contracts"};

link_defs_Notes[ "bugs"] = {"name":"bugs","relationship_name":"bug_notes","bean_is_lhs":false,"link_type":"many","label":"Bugs"};

link_defs_Notes[ "emails"] = {"name":"emails","relationship_name":"emails_notes_rel","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Notes[ "projects"] = {"name":"projects","relationship_name":"projects_notes","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Notes[ "project_tasks"] = {"name":"project_tasks","relationship_name":"project_tasks_notes","bean_is_lhs":false,"link_type":"many","label":"Project Tasks"};

link_defs_Notes[ "meetings"] = {"name":"meetings","relationship_name":"meetings_notes","bean_is_lhs":false,"link_type":"many","label":"Meetings"};

link_defs_Notes[ "calls"] = {"name":"calls","relationship_name":"calls_notes","bean_is_lhs":false,"link_type":"many","label":"Calls"};

var field_defs_Notes = new Object();
field_defs_Notes[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Notes = new Array();

option_arr_Notes[option_arr_Notes.length] = { "value":"=", "text":"Equals"};
option_arr_Notes[option_arr_Notes.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Notes[option_arr_Notes.length] = { "value":"greater_than", "text":"After"};
option_arr_Notes[option_arr_Notes.length] = { "value":"less_than", "text":"Before"};
option_arr_Notes[option_arr_Notes.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Notes[option_arr_Notes.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Notes[option_arr_Notes.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Notes[option_arr_Notes.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Notes[option_arr_Notes.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Notes[option_arr_Notes.length] = { "value":"this_month", "text":"This Month"};
option_arr_Notes[option_arr_Notes.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Notes[option_arr_Notes.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Notes[option_arr_Notes.length] = { "value":"this_year", "text":"This Year"};
option_arr_Notes[option_arr_Notes.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Notes[option_arr_Notes.length] = { "value":"between", "text":"Is Between"};

field_defs_Notes[ "date_entered"].options=option_arr_Notes;

field_defs_Notes[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","enable_range_search":"1"};field_defs_Notes[ "description"] = {"name":"description","vname":"Note","type":"text","rows":"30","cols":"90"};field_defs_Notes[ "embed_flag"] = {"name":"embed_flag","vname":"Embed in email?","type":"bool"};field_defs_Notes[ "file_mime_type"] = {"name":"file_mime_type","vname":"Mime Type","type":"varchar","len":"100"};field_defs_Notes[ "filename"] = {"name":"filename","vname":"Attachment","type":"file","dbType":"varchar","len":"255","reportable":"1"};field_defs_Notes[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Notes[ "name"] = {"name":"name","vname":"Subject","dbType":"varchar","type":"name","len":"255","unified_search":"1","importable":"required","required":"1"};field_defs_Notes[ "parent_id"] = {"name":"parent_id","vname":"Parent ID","type":"id","reportable":"1"};field_defs_Notes[ "parent_type"] = {"name":"parent_type","vname":"Parent Type","type":"parent_type","dbType":"varchar","group":"parent_name","len":"255"};	    	var option_arr_Notes = new Array();
	    	option_arr_Notes[option_arr_Notes.length] = { "value":"Accounts", "text":"Account"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Contacts", "text":"Contact"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Opportunities", "text":"Opportunity"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Tasks", "text":"Task"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"ProductTemplates", "text":"Product Catalog"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Quotes", "text":"Quote"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Products", "text":"Product"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Contracts", "text":"Contract"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Emails", "text":"Email"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Bugs", "text":"Bug"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Project", "text":"Projects"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"ProjectTask", "text":"Project Task"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Prospects", "text":"Target"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Cases", "text":"Case"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Leads", "text":"Lead"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Meetings", "text":"Meeting"};
				option_arr_Notes[option_arr_Notes.length] = { "value":"Calls", "text":"Call"};
								
field_defs_Notes[ "parent_type"].options=option_arr_Notes;
           field_defs_Notes[ "portal_flag"] = {"name":"portal_flag","vname":"Display in Portal?","type":"bool","required":"1"};field_defs_Notes[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Notes = [""];




module_defs['Notes'] = new Object();
module_defs['Notes'].link_defs = link_defs_Notes;
module_defs['Notes'].field_defs = field_defs_Notes;
module_defs['Notes'].default_table_columns = default_table_columns_Notes;
module_defs['Notes'].summary_field_defs = new Object();
module_defs['Notes'].group_by_field_defs = new Object();
module_defs['Notes'].default_summary_columns = default_summary_columns;
module_defs['Notes'].label = "Notes";


var rel_defs = new Object();
var link_defs_Calls = new Object();
link_defs_Calls[ "created_by_link"] = {"name":"created_by_link","relationship_name":"calls_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Calls[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"calls_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Calls[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"calls_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Calls[ "team_link"] = {"name":"team_link","relationship_name":"calls_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Calls[ "account"] = {"name":"account","relationship_name":"account_calls","bean_is_lhs":false,"link_type":"one","label":"Old Account"};

link_defs_Calls[ "opportunity"] = {"name":"opportunity","relationship_name":"opportunity_calls","bean_is_lhs":false,"link_type":"one","label":"Opportunity"};

link_defs_Calls[ "leads"] = {"name":"leads","relationship_name":"calls_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Calls[ "case"] = {"name":"case","relationship_name":"case_calls","bean_is_lhs":false,"link_type":"one","label":"Case"};

link_defs_Calls[ "accounts"] = {"name":"accounts","relationship_name":"account_calls","bean_is_lhs":false,"link_type":"many","label":"Account"};

link_defs_Calls[ "contacts"] = {"name":"contacts","relationship_name":"calls_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Calls[ "users"] = {"name":"users","relationship_name":"calls_users","bean_is_lhs":true,"link_type":"many","label":"Users"};

link_defs_Calls[ "notes"] = {"name":"notes","relationship_name":"calls_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

var field_defs_Calls = new Object();
field_defs_Calls[ "date_end"] = {"name":"date_end","vname":"Date End","type":"datetime","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"=", "text":"Equals"};
option_arr_Calls[option_arr_Calls.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Calls[option_arr_Calls.length] = { "value":"greater_than", "text":"After"};
option_arr_Calls[option_arr_Calls.length] = { "value":"less_than", "text":"Before"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_month", "text":"This Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_year", "text":"This Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"between", "text":"Is Between"};

field_defs_Calls[ "date_end"].options=option_arr_Calls;

field_defs_Calls[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"=", "text":"Equals"};
option_arr_Calls[option_arr_Calls.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Calls[option_arr_Calls.length] = { "value":"greater_than", "text":"After"};
option_arr_Calls[option_arr_Calls.length] = { "value":"less_than", "text":"Before"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_month", "text":"This Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_year", "text":"This Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"between", "text":"Is Between"};

field_defs_Calls[ "date_entered"].options=option_arr_Calls;

field_defs_Calls[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"=", "text":"Equals"};
option_arr_Calls[option_arr_Calls.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Calls[option_arr_Calls.length] = { "value":"greater_than", "text":"After"};
option_arr_Calls[option_arr_Calls.length] = { "value":"less_than", "text":"Before"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_month", "text":"This Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_year", "text":"This Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"between", "text":"Is Between"};

field_defs_Calls[ "date_modified"].options=option_arr_Calls;

field_defs_Calls[ "date_start"] = {"name":"date_start","vname":"Start Date","type":"datetimecombo","dbType":"datetime","importable":"required","required":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"=", "text":"Equals"};
option_arr_Calls[option_arr_Calls.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Calls[option_arr_Calls.length] = { "value":"greater_than", "text":"After"};
option_arr_Calls[option_arr_Calls.length] = { "value":"less_than", "text":"Before"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_month", "text":"This Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Calls[option_arr_Calls.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"this_year", "text":"This Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Calls[option_arr_Calls.length] = { "value":"between", "text":"Is Between"};

field_defs_Calls[ "date_start"].options=option_arr_Calls;

field_defs_Calls[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Calls[ "direction"] = {"name":"direction","vname":"Direction","type":"enum","len":"100","options":"call_direction_dom"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"Inbound", "text":"Inbound"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Outbound", "text":"Outbound"};

field_defs_Calls[ "direction"].options=option_arr_Calls;

field_defs_Calls[ "duration_hours"] = {"name":"duration_hours","vname":"Duration Hours","type":"int","len":"2","required":"1"};field_defs_Calls[ "duration_minutes"] = {"name":"duration_minutes","vname":"Duration Minutes","type":"int","function":"Array","len":"2","group":"duration_hours","importable":"required"};field_defs_Calls[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Calls[ "name"] = {"name":"name","vname":"Subject","dbType":"varchar","type":"name","len":"50","unified_search":"1","required":"1","importable":"required"};field_defs_Calls[ "parent_type"] = {"name":"parent_type","vname":"Parent Type","type":"parent_type","dbType":"varchar","group":"parent_name","options":"parent_type_display","len":"255"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"Accounts", "text":"Account"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Contacts", "text":"Contact"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Tasks", "text":"Task"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Opportunities", "text":"Opportunity"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Products", "text":"Product"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Quotes", "text":"Quote"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Bugs", "text":"Bug Tracker"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Cases", "text":"Case"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Leads", "text":"Lead"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Project", "text":"Projects"};
option_arr_Calls[option_arr_Calls.length] = { "value":"ProjectTask", "text":"Project Task"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Prospects", "text":"Target"};

field_defs_Calls[ "parent_type"].options=option_arr_Calls;

field_defs_Calls[ "status"] = {"name":"status","vname":"Status","type":"enum","len":"100","options":"call_status_dom","required":"1","importable":"required"};var option_arr_Calls = new Array();

option_arr_Calls[option_arr_Calls.length] = { "value":"Planned", "text":"Planned"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Held", "text":"Held"};
option_arr_Calls[option_arr_Calls.length] = { "value":"Not Held", "text":"Not Held"};

field_defs_Calls[ "status"].options=option_arr_Calls;

field_defs_Calls[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Calls = [""];




module_defs['Calls'] = new Object();
module_defs['Calls'].link_defs = link_defs_Calls;
module_defs['Calls'].field_defs = field_defs_Calls;
module_defs['Calls'].default_table_columns = default_table_columns_Calls;
module_defs['Calls'].summary_field_defs = new Object();
module_defs['Calls'].group_by_field_defs = new Object();
module_defs['Calls'].default_summary_columns = default_summary_columns;
module_defs['Calls'].label = "Calls";


var rel_defs = new Object();
var link_defs_Emails = new Object();
link_defs_Emails[ "team_link"] = {"name":"team_link","relationship_name":"emails_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Emails[ "created_by_link"] = {"name":"created_by_link","relationship_name":"emails_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Emails[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"emails_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Emails[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"emails_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Emails[ "accounts"] = {"name":"accounts","relationship_name":"emails_accounts_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Accounts"};

link_defs_Emails[ "bugs"] = {"name":"bugs","relationship_name":"emails_bugs_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Bugs"};

link_defs_Emails[ "cases"] = {"name":"cases","relationship_name":"emails_cases_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Cases"};

link_defs_Emails[ "contacts"] = {"name":"contacts","relationship_name":"emails_contacts_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Contacts"};

link_defs_Emails[ "leads"] = {"name":"leads","relationship_name":"emails_leads_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Leads"};

link_defs_Emails[ "opportunities"] = {"name":"opportunities","relationship_name":"emails_opportunities_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Opportunities"};

link_defs_Emails[ "project"] = {"name":"project","relationship_name":"emails_projects_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Project"};

link_defs_Emails[ "projecttask"] = {"name":"projecttask","relationship_name":"emails_project_task_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:ProjectTask"};

link_defs_Emails[ "prospects"] = {"name":"prospects","relationship_name":"emails_prospects_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Prospect"};

link_defs_Emails[ "quotes"] = {"name":"quotes","relationship_name":"emails_quotes","bean_is_lhs":true,"link_type":"many","label":"Emails:Quotes"};

link_defs_Emails[ "tasks"] = {"name":"tasks","relationship_name":"emails_tasks_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Tasks"};

link_defs_Emails[ "users"] = {"name":"users","relationship_name":"emails_users_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Users"};

link_defs_Emails[ "notes"] = {"name":"notes","relationship_name":"emails_notes_rel","bean_is_lhs":true,"link_type":"many","label":"Emails:Notes"};

var field_defs_Emails = new Object();
field_defs_Emails[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_Emails[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Emails[ "date_sent"] = {"name":"date_sent","vname":"Date Sent","type":"datetime"};field_defs_Emails[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Emails[ "intent"] = {"name":"intent","vname":"Intent","type":"varchar","len":"100"};field_defs_Emails[ "message_id"] = {"name":"message_id","vname":"Message ID","type":"varchar","len":"255"};field_defs_Emails[ "name"] = {"name":"name","vname":"Subject","type":"varchar","len":"255"};field_defs_Emails[ "status"] = {"name":"status","vname":"Email Status","type":"enum","len":"100","options":"dom_email_status"};var option_arr_Emails = new Array();

option_arr_Emails[option_arr_Emails.length] = { "value":"archived", "text":"Archived"};
option_arr_Emails[option_arr_Emails.length] = { "value":"closed", "text":"Closed"};
option_arr_Emails[option_arr_Emails.length] = { "value":"draft", "text":"In Draft"};
option_arr_Emails[option_arr_Emails.length] = { "value":"read", "text":"Read"};
option_arr_Emails[option_arr_Emails.length] = { "value":"replied", "text":"Replied"};
option_arr_Emails[option_arr_Emails.length] = { "value":"sent", "text":"Sent"};
option_arr_Emails[option_arr_Emails.length] = { "value":"send_error", "text":"Send Error"};
option_arr_Emails[option_arr_Emails.length] = { "value":"unread", "text":"Unread"};

field_defs_Emails[ "status"].options=option_arr_Emails;

field_defs_Emails[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Emails[ "type"] = {"name":"type","vname":"Type","type":"enum","options":"dom_email_types","len":"100"};var option_arr_Emails = new Array();

option_arr_Emails[option_arr_Emails.length] = { "value":"out", "text":"Sent"};
option_arr_Emails[option_arr_Emails.length] = { "value":"archived", "text":"Archived"};
option_arr_Emails[option_arr_Emails.length] = { "value":"draft", "text":"Draft"};
option_arr_Emails[option_arr_Emails.length] = { "value":"inbound", "text":"Inbound"};
option_arr_Emails[option_arr_Emails.length] = { "value":"campaign", "text":"Campaign"};

field_defs_Emails[ "type"].options=option_arr_Emails;

var default_table_columns_Emails = [""];




module_defs['Emails'] = new Object();
module_defs['Emails'].link_defs = link_defs_Emails;
module_defs['Emails'].field_defs = field_defs_Emails;
module_defs['Emails'].default_table_columns = default_table_columns_Emails;
module_defs['Emails'].summary_field_defs = new Object();
module_defs['Emails'].group_by_field_defs = new Object();
module_defs['Emails'].default_summary_columns = default_summary_columns;
module_defs['Emails'].label = "Emails";


var rel_defs = new Object();
var link_defs_Meetings = new Object();
link_defs_Meetings[ "created_by_link"] = {"name":"created_by_link","relationship_name":"meetings_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Meetings[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"meetings_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Meetings[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"meetings_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Meetings[ "team_link"] = {"name":"team_link","relationship_name":"meetings_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Meetings[ "contacts"] = {"name":"contacts","relationship_name":"meetings_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Meetings[ "users"] = {"name":"users","relationship_name":"meetings_users","bean_is_lhs":true,"link_type":"many","label":"Users"};

link_defs_Meetings[ "accounts"] = {"name":"accounts","relationship_name":"account_meetings","bean_is_lhs":false,"link_type":"many","label":"Account"};

link_defs_Meetings[ "leads"] = {"name":"leads","relationship_name":"meetings_leads","bean_is_lhs":true,"link_type":"many","label":"Leads"};

link_defs_Meetings[ "opportunity"] = {"name":"opportunity","relationship_name":"opportunity_meetings","bean_is_lhs":false,"link_type":"many","label":"Opportunity"};

link_defs_Meetings[ "case"] = {"name":"case","relationship_name":"case_meetings","bean_is_lhs":false,"link_type":"many","label":"Case"};

link_defs_Meetings[ "notes"] = {"name":"notes","relationship_name":"meetings_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

var field_defs_Meetings = new Object();
field_defs_Meetings[ "creator"] = {"name":"creator","vname":"Meeting Creator","type":"varchar","len":"50","studio":"false"};field_defs_Meetings[ "date_end"] = {"name":"date_end","vname":"Date End","type":"datetime","enable_range_search":"1"};field_defs_Meetings[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Meetings = new Array();

option_arr_Meetings[option_arr_Meetings.length] = { "value":"=", "text":"Equals"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"greater_than", "text":"After"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"less_than", "text":"Before"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"this_month", "text":"This Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"this_year", "text":"This Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"between", "text":"Is Between"};

field_defs_Meetings[ "date_entered"].options=option_arr_Meetings;

field_defs_Meetings[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Meetings = new Array();

option_arr_Meetings[option_arr_Meetings.length] = { "value":"=", "text":"Equals"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"greater_than", "text":"After"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"less_than", "text":"Before"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"this_month", "text":"This Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"this_year", "text":"This Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"between", "text":"Is Between"};

field_defs_Meetings[ "date_modified"].options=option_arr_Meetings;

field_defs_Meetings[ "date_start"] = {"name":"date_start","vname":"Start Date","type":"datetimecombo","dbType":"datetime","importable":"required","required":"1","enable_range_search":"1"};field_defs_Meetings[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Meetings[ "displayed_url"] = {"name":"displayed_url","vname":"Start/Join Meeting","type":"url","len":"400","studio":"Array"};field_defs_Meetings[ "duration_hours"] = {"name":"duration_hours","vname":"Duration Hours","type":"int","len":"2","importable":"required","required":"1"};field_defs_Meetings[ "duration_minutes"] = {"name":"duration_minutes","vname":"Duration Minutes","type":"int","group":"duration_hours","function":"Array","len":"2"};field_defs_Meetings[ "external_id"] = {"name":"external_id","vname":"External App ID","type":"varchar","len":"50","studio":"false"};field_defs_Meetings[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Meetings[ "location"] = {"name":"location","vname":"Location","type":"varchar","len":"50"};field_defs_Meetings[ "name"] = {"name":"name","vname":"Subject","required":"1","type":"name","dbType":"varchar","unified_search":"1","len":"50","importable":"required"};field_defs_Meetings[ "parent_type"] = {"name":"parent_type","vname":"Related to","type":"parent_type","dbType":"varchar","group":"parent_name","len":"100"};	    	var option_arr_Meetings = new Array();
	    	option_arr_Meetings[option_arr_Meetings.length] = { "value":"Accounts", "text":"Account"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Contacts", "text":"Contact"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Tasks", "text":"Task"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Opportunities", "text":"Opportunity"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Products", "text":"Product"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Quotes", "text":"Quote"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Bugs", "text":"Bug Tracker"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Cases", "text":"Case"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Leads", "text":"Lead"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Project", "text":"Projects"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"ProjectTask", "text":"Project Task"};
				option_arr_Meetings[option_arr_Meetings.length] = { "value":"Prospects", "text":"Target"};
								
field_defs_Meetings[ "parent_type"].options=option_arr_Meetings;
           field_defs_Meetings[ "password"] = {"name":"password","vname":"Meeting Password","type":"varchar","len":"50","studio":"Array"};field_defs_Meetings[ "status"] = {"name":"status","vname":"Status","type":"enum","len":"100","options":"meeting_status_dom"};var option_arr_Meetings = new Array();

option_arr_Meetings[option_arr_Meetings.length] = { "value":"Planned", "text":"Planned"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Held", "text":"Held"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Not Held", "text":"Not Held"};

field_defs_Meetings[ "status"].options=option_arr_Meetings;

field_defs_Meetings[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Meetings[ "type"] = {"name":"type","vname":"Meeting Type","type":"enum","len":"255","function":"getMeetingsExternalApiDropDown","options":"eapm_list","studio":"Array"};var option_arr_Meetings = new Array();

option_arr_Meetings[option_arr_Meetings.length] = { "value":"Sugar", "text":"CRM"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"WebEx", "text":"WebEx"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"GoToMeeting", "text":"GoToMeeting"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"LotusLive", "text":"LotusLive"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Google", "text":"Google Docs"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Box", "text":"Box.net"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Facebook", "text":"Facebook"};
option_arr_Meetings[option_arr_Meetings.length] = { "value":"Twitter", "text":"Twitter"};

field_defs_Meetings[ "type"].options=option_arr_Meetings;

var default_table_columns_Meetings = [""];




module_defs['Meetings'] = new Object();
module_defs['Meetings'].link_defs = link_defs_Meetings;
module_defs['Meetings'].field_defs = field_defs_Meetings;
module_defs['Meetings'].default_table_columns = default_table_columns_Meetings;
module_defs['Meetings'].summary_field_defs = new Object();
module_defs['Meetings'].group_by_field_defs = new Object();
module_defs['Meetings'].default_summary_columns = default_summary_columns;
module_defs['Meetings'].label = "Meetings";


var rel_defs = new Object();
var link_defs_Tasks = new Object();
link_defs_Tasks[ "created_by_link"] = {"name":"created_by_link","relationship_name":"tasks_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Tasks[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"tasks_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Tasks[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"tasks_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Tasks[ "team_link"] = {"name":"team_link","relationship_name":"tasks_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Tasks[ "contacts"] = {"name":"contacts","relationship_name":"contact_tasks","bean_is_lhs":false,"link_type":"many","label":"Contact"};

link_defs_Tasks[ "accounts"] = {"name":"accounts","relationship_name":"account_tasks","bean_is_lhs":false,"link_type":"many","label":"Account"};

link_defs_Tasks[ "opportunities"] = {"name":"opportunities","relationship_name":"opportunity_tasks","bean_is_lhs":false,"link_type":"many","label":"Opportunity"};

link_defs_Tasks[ "cases"] = {"name":"cases","relationship_name":"case_tasks","bean_is_lhs":false,"link_type":"many","label":"Case"};

link_defs_Tasks[ "bugs"] = {"name":"bugs","relationship_name":"bug_tasks","bean_is_lhs":false,"link_type":"many","label":"Bugs"};

link_defs_Tasks[ "leads"] = {"name":"leads","relationship_name":"lead_tasks","bean_is_lhs":false,"link_type":"many","label":"Leads"};

link_defs_Tasks[ "projects"] = {"name":"projects","relationship_name":"projects_tasks","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Tasks[ "project_tasks"] = {"name":"project_tasks","relationship_name":"project_tasks_tasks","bean_is_lhs":false,"link_type":"many","label":"Project Tasks"};

link_defs_Tasks[ "quotes"] = {"name":"quotes","relationship_name":"quote_tasks","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Tasks[ "contact_parent"] = {"name":"contact_parent","relationship_name":"contact_tasks_parent","bean_is_lhs":false,"link_type":"many","label":"contact_parent"};

var field_defs_Tasks = new Object();
field_defs_Tasks[ "date_due"] = {"name":"date_due","vname":"Due Date","type":"datetimecombo","dbType":"datetime","group":"date_due","studio":"Array","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"=", "text":"Equals"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"greater_than", "text":"After"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"less_than", "text":"Before"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_month", "text":"This Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_year", "text":"This Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"between", "text":"Is Between"};

field_defs_Tasks[ "date_due"].options=option_arr_Tasks;

field_defs_Tasks[ "date_due_flag"] = {"name":"date_due_flag","vname":"No Due Date","type":"bool","group":"date_due"};field_defs_Tasks[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"=", "text":"Equals"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"greater_than", "text":"After"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"less_than", "text":"Before"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_month", "text":"This Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_year", "text":"This Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"between", "text":"Is Between"};

field_defs_Tasks[ "date_entered"].options=option_arr_Tasks;

field_defs_Tasks[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"=", "text":"Equals"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"greater_than", "text":"After"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"less_than", "text":"Before"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_month", "text":"This Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_year", "text":"This Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"between", "text":"Is Between"};

field_defs_Tasks[ "date_modified"].options=option_arr_Tasks;

field_defs_Tasks[ "date_start"] = {"name":"date_start","vname":"Start Date","type":"datetimecombo","dbType":"datetime","group":"date_start","validation":"Array","studio":"Array","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"=", "text":"Equals"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"greater_than", "text":"After"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"less_than", "text":"Before"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_month", "text":"This Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"this_year", "text":"This Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"between", "text":"Is Between"};

field_defs_Tasks[ "date_start"].options=option_arr_Tasks;

field_defs_Tasks[ "date_start_flag"] = {"name":"date_start_flag","vname":"No Start Date","type":"bool","group":"date_start"};field_defs_Tasks[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Tasks[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Tasks[ "name"] = {"name":"name","vname":"Subject","dbType":"varchar","type":"name","len":"50","unified_search":"1","importable":"required","required":"true"};field_defs_Tasks[ "parent_type"] = {"name":"parent_type","vname":"Parent Type","type":"parent_type","dbType":"varchar","group":"parent_name","len":"255"};	    	var option_arr_Tasks = new Array();
	    	option_arr_Tasks[option_arr_Tasks.length] = { "value":"Accounts", "text":"Account"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Contacts", "text":"Contact"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Tasks", "text":"Task"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Opportunities", "text":"Opportunity"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Products", "text":"Product"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Quotes", "text":"Quote"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Bugs", "text":"Bug Tracker"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Cases", "text":"Case"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Leads", "text":"Lead"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Project", "text":"Projects"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"ProjectTask", "text":"Project Task"};
				option_arr_Tasks[option_arr_Tasks.length] = { "value":"Prospects", "text":"Target"};
								
field_defs_Tasks[ "parent_type"].options=option_arr_Tasks;
           field_defs_Tasks[ "priority"] = {"name":"priority","vname":"Priority","type":"enum","options":"task_priority_dom","len":"100","required":"true"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"High", "text":"High"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"Medium", "text":"Medium"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"Low", "text":"Low"};

field_defs_Tasks[ "priority"].options=option_arr_Tasks;

field_defs_Tasks[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"task_status_dom","len":"100","required":"true"};var option_arr_Tasks = new Array();

option_arr_Tasks[option_arr_Tasks.length] = { "value":"Not Started", "text":"Not Started"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"In Progress", "text":"In Progress"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"Completed", "text":"Completed"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"Pending Input", "text":"Pending Input"};
option_arr_Tasks[option_arr_Tasks.length] = { "value":"Deferred", "text":"Deferred"};

field_defs_Tasks[ "status"].options=option_arr_Tasks;

field_defs_Tasks[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Tasks = [""];




module_defs['Tasks'] = new Object();
module_defs['Tasks'].link_defs = link_defs_Tasks;
module_defs['Tasks'].field_defs = field_defs_Tasks;
module_defs['Tasks'].default_table_columns = default_table_columns_Tasks;
module_defs['Tasks'].summary_field_defs = new Object();
module_defs['Tasks'].group_by_field_defs = new Object();
module_defs['Tasks'].default_summary_columns = default_summary_columns;
module_defs['Tasks'].label = "Tasks";


var rel_defs = new Object();
var link_defs_Users = new Object();
link_defs_Users[ "team_link"] = {"name":"team_link","relationship_name":"users_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Users[ "team_memberships"] = {"name":"team_memberships","relationship_name":"team_memberships","bean_is_lhs":false,"link_type":"many","label":"Teams"};

link_defs_Users[ "calls"] = {"name":"calls","relationship_name":"calls_users","bean_is_lhs":false,"link_type":"many","label":"Calls"};

link_defs_Users[ "meetings"] = {"name":"meetings","relationship_name":"meetings_users","bean_is_lhs":false,"link_type":"many","label":"Meetings"};

link_defs_Users[ "reports_to_link"] = {"name":"reports_to_link","relationship_name":"user_direct_reports","bean_is_lhs":false,"link_type":"one","label":"Reports to"};

link_defs_Users[ "email_addresses_primary"] = {"name":"email_addresses_primary","relationship_name":"users_email_addresses_primary","bean_is_lhs":true,"link_type":"many","label":"Email Address"};

link_defs_Users[ "aclroles"] = {"name":"aclroles","relationship_name":"acl_roles_users","bean_is_lhs":false,"link_type":"many","label":"LBL_ROLES"};

link_defs_Users[ "prospect_lists"] = {"name":"prospect_lists","relationship_name":"prospect_list_users","bean_is_lhs":false,"link_type":"many","label":"Prospect List"};

link_defs_Users[ "holidays"] = {"name":"holidays","relationship_name":"users_holidays","bean_is_lhs":true,"link_type":"many","label":"LBL_HOLIDAYS"};

link_defs_Users[ "eapm"] = {"name":"eapm","relationship_name":"eapm_assigned_user","bean_is_lhs":true,"link_type":"many","label":"Assigned to User"};

var field_defs_Users = new Object();
field_defs_Users[ "address_city"] = {"name":"address_city","vname":"Address City","type":"varchar","len":"100"};field_defs_Users[ "address_country"] = {"name":"address_country","vname":"Address Country","type":"varchar","len":"100"};field_defs_Users[ "address_postalcode"] = {"name":"address_postalcode","vname":"Address Postal Code","type":"varchar","len":"20"};field_defs_Users[ "address_state"] = {"name":"address_state","vname":"Address State","type":"varchar","len":"100"};field_defs_Users[ "address_street"] = {"name":"address_street","vname":"Address Street","type":"varchar","len":"150"};field_defs_Users[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_Users[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Users[ "department"] = {"name":"department","vname":"Department","type":"varchar","len":"50"};field_defs_Users[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_Users[ "employee_status"] = {"name":"employee_status","vname":"Employee Status","type":"varchar","function":"Array","len":"100"};field_defs_Users[ "first_name"] = {"name":"first_name","vname":"First Name","dbType":"varchar","type":"name","len":"30"};field_defs_Users[ "full_name"] = {"name":"full_name","rname":"full_name","vname":"Full Name","type":"name","fields":"Array","source":"non-db","sort_on":"last_name","sort_on2":"first_name","db_concat_fields":"Array","len":"510"};field_defs_Users[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1"};field_defs_Users[ "is_admin"] = {"name":"is_admin","vname":"Is Administrator","type":"bool"};field_defs_Users[ "is_group"] = {"name":"is_group","vname":"Group User","type":"bool"};field_defs_Users[ "last_name"] = {"name":"last_name","vname":"Last Name","dbType":"varchar","type":"name","len":"30","importable":"required","required":"1"};field_defs_Users[ "messenger_id"] = {"name":"messenger_id","vname":"IM Name","type":"varchar","len":"100"};field_defs_Users[ "messenger_type"] = {"name":"messenger_type","vname":"IM Type","type":"varchar","function":"Array","len":"100"};field_defs_Users[ "phone_fax"] = {"name":"phone_fax","vname":"Fax","type":"phone","dbType":"varchar","len":"50"};field_defs_Users[ "phone_home"] = {"name":"phone_home","vname":"Home Phone","type":"phone","dbType":"varchar","len":"50"};field_defs_Users[ "phone_mobile"] = {"name":"phone_mobile","vname":"Mobile","type":"phone","dbType":"varchar","len":"50"};field_defs_Users[ "phone_other"] = {"name":"phone_other","vname":"Other Phone","type":"phone","dbType":"varchar","len":"50"};field_defs_Users[ "phone_work"] = {"name":"phone_work","vname":"Work Phone","type":"phone","dbType":"varchar","len":"50"};field_defs_Users[ "picture"] = {"name":"picture","vname":"Picture","type":"image","dbType":"varchar","len":"255"};field_defs_Users[ "portal_only"] = {"name":"portal_only","vname":"Portal API User","type":"bool"};field_defs_Users[ "pwd_last_changed"] = {"name":"pwd_last_changed","vname":"password last changed","type":"datetime"};field_defs_Users[ "receive_notifications"] = {"name":"receive_notifications","vname":"Notify on Assignment","type":"bool"};field_defs_Users[ "reports_to_id"] = {"name":"reports_to_id","vname":"Reports to ID","type":"id"};field_defs_Users[ "status"] = {"name":"status","vname":"Status","type":"enum","len":"100","options":"user_status_dom","importable":"required"};var option_arr_Users = new Array();

option_arr_Users[option_arr_Users.length] = { "value":"Active", "text":"Active"};
option_arr_Users[option_arr_Users.length] = { "value":"Inactive", "text":"Inactive"};

field_defs_Users[ "status"].options=option_arr_Users;

field_defs_Users[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false",invisible:true};field_defs_Users[ "title"] = {"name":"title","vname":"Title","type":"varchar","len":"50"};field_defs_Users[ "user_name"] = {"name":"user_name","vname":"User Name","type":"user_name","dbType":"varchar","len":"60","importable":"required"};var default_table_columns_Users = [""];




module_defs['Users'] = new Object();
module_defs['Users'].link_defs = link_defs_Users;
module_defs['Users'].field_defs = field_defs_Users;
module_defs['Users'].default_table_columns = default_table_columns_Users;
module_defs['Users'].summary_field_defs = new Object();
module_defs['Users'].group_by_field_defs = new Object();
module_defs['Users'].default_summary_columns = default_summary_columns;
module_defs['Users'].label = "Users";


var rel_defs = new Object();
var link_defs_Documents = new Object();
link_defs_Documents[ "created_by_link"] = {"name":"created_by_link","relationship_name":"documents_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Documents[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"documents_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by"};

link_defs_Documents[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"documents_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Documents[ "team_link"] = {"name":"team_link","relationship_name":"documents_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Documents[ "revisions"] = {"name":"revisions","relationship_name":"document_revisions","bean_is_lhs":true,"link_type":"many","label":"Revisions"};

link_defs_Documents[ "contracts"] = {"name":"contracts","relationship_name":"contracts_documents","bean_is_lhs":false,"link_type":"many","label":"Contracts"};

link_defs_Documents[ "leads"] = {"name":"leads","relationship_name":"leads_documents","bean_is_lhs":false,"link_type":"many","label":"Leads"};

link_defs_Documents[ "accounts"] = {"name":"accounts","relationship_name":"documents_accounts","bean_is_lhs":true,"link_type":"many","label":"Accounts"};

link_defs_Documents[ "contacts"] = {"name":"contacts","relationship_name":"documents_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Documents[ "opportunities"] = {"name":"opportunities","relationship_name":"documents_opportunities","bean_is_lhs":true,"link_type":"many","label":"Opportunities"};

link_defs_Documents[ "cases"] = {"name":"cases","relationship_name":"documents_cases","bean_is_lhs":true,"link_type":"many","label":"Cases"};

link_defs_Documents[ "bugs"] = {"name":"bugs","relationship_name":"documents_bugs","bean_is_lhs":true,"link_type":"many","label":"Bugs"};

link_defs_Documents[ "quotes"] = {"name":"quotes","relationship_name":"documents_quotes","bean_is_lhs":true,"link_type":"many","label":"Quotes"};

link_defs_Documents[ "products"] = {"name":"products","relationship_name":"documents_products","bean_is_lhs":true,"link_type":"many","label":"Products"};

var field_defs_Documents = new Object();
field_defs_Documents[ "active_date"] = {"name":"active_date","vname":"Publish Date","type":"date","importable":"required","required":"1","display_default":"now"};field_defs_Documents[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Documents = new Array();

option_arr_Documents[option_arr_Documents.length] = { "value":"=", "text":"Equals"};
option_arr_Documents[option_arr_Documents.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Documents[option_arr_Documents.length] = { "value":"greater_than", "text":"After"};
option_arr_Documents[option_arr_Documents.length] = { "value":"less_than", "text":"Before"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"this_month", "text":"This Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"this_year", "text":"This Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"between", "text":"Is Between"};

field_defs_Documents[ "date_entered"].options=option_arr_Documents;

field_defs_Documents[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Documents = new Array();

option_arr_Documents[option_arr_Documents.length] = { "value":"=", "text":"Equals"};
option_arr_Documents[option_arr_Documents.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Documents[option_arr_Documents.length] = { "value":"greater_than", "text":"After"};
option_arr_Documents[option_arr_Documents.length] = { "value":"less_than", "text":"Before"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"this_month", "text":"This Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Documents[option_arr_Documents.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"this_year", "text":"This Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Documents[option_arr_Documents.length] = { "value":"between", "text":"Is Between"};

field_defs_Documents[ "date_modified"].options=option_arr_Documents;

field_defs_Documents[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Documents[ "doc_id"] = {"name":"doc_id","vname":"Document Source ID","type":"varchar","len":"100","studio":"false"};field_defs_Documents[ "doc_type"] = {"name":"doc_type","vname":"Source","type":"enum","function":"getDocumentsExternalApiDropDown","len":"100","popupHelp":"LBL_DOC_TYPE_POPUP","options":"eapm_list","studio":"Array"};var option_arr_Documents = new Array();

option_arr_Documents[option_arr_Documents.length] = { "value":"Sugar", "text":"CRM"};
option_arr_Documents[option_arr_Documents.length] = { "value":"WebEx", "text":"WebEx"};
option_arr_Documents[option_arr_Documents.length] = { "value":"GoToMeeting", "text":"GoToMeeting"};
option_arr_Documents[option_arr_Documents.length] = { "value":"LotusLive", "text":"LotusLive"};
option_arr_Documents[option_arr_Documents.length] = { "value":"Google", "text":"Google Docs"};
option_arr_Documents[option_arr_Documents.length] = { "value":"Box", "text":"Box.net"};
option_arr_Documents[option_arr_Documents.length] = { "value":"Facebook", "text":"Facebook"};
option_arr_Documents[option_arr_Documents.length] = { "value":"Twitter", "text":"Twitter"};

field_defs_Documents[ "doc_type"].options=option_arr_Documents;

field_defs_Documents[ "doc_url"] = {"name":"doc_url","vname":"Document Source URL","type":"varchar","len":"255","studio":"false"};field_defs_Documents[ "document_name"] = {"name":"document_name","vname":"Document Name","type":"varchar","len":"255","required":"1","importable":"required","unified_search":"1"};field_defs_Documents[ "exp_date"] = {"name":"exp_date","vname":"Expiration Date","type":"date"};field_defs_Documents[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Documents[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_Documents = [""];




module_defs['Documents'] = new Object();
module_defs['Documents'].link_defs = link_defs_Documents;
module_defs['Documents'].field_defs = field_defs_Documents;
module_defs['Documents'].default_table_columns = default_table_columns_Documents;
module_defs['Documents'].summary_field_defs = new Object();
module_defs['Documents'].group_by_field_defs = new Object();
module_defs['Documents'].default_summary_columns = default_summary_columns;
module_defs['Documents'].label = "Documents";


var rel_defs = new Object();
var link_defs_EmailAddresses = new Object();
var field_defs_EmailAddresses = new Object();
field_defs_EmailAddresses[ "date_created"] = {"name":"date_created","type":"datetime","vname":"Date Create"};field_defs_EmailAddresses[ "date_modified"] = {"name":"date_modified","type":"datetime","vname":"Date Modified"};field_defs_EmailAddresses[ "deleted"] = {"name":"deleted","type":"bool","vname":"Delete"};field_defs_EmailAddresses[ "email_address"] = {"name":"email_address","type":"varchar","vname":"Email Address","length":"100","required":"1"};field_defs_EmailAddresses[ "id"] = {"name":"id","type":"id","vname":"ID","required":"1"};field_defs_EmailAddresses[ "invalid_email"] = {"name":"invalid_email","type":"bool","vname":"Invalid Email"};field_defs_EmailAddresses[ "opt_out"] = {"name":"opt_out","type":"bool","vname":"Opted Out"};var default_table_columns_EmailAddresses = [""];




module_defs['EmailAddresses'] = new Object();
module_defs['EmailAddresses'].link_defs = link_defs_EmailAddresses;
module_defs['EmailAddresses'].field_defs = field_defs_EmailAddresses;
module_defs['EmailAddresses'].default_table_columns = default_table_columns_EmailAddresses;
module_defs['EmailAddresses'].summary_field_defs = new Object();
module_defs['EmailAddresses'].group_by_field_defs = new Object();
module_defs['EmailAddresses'].default_summary_columns = default_summary_columns;
module_defs['EmailAddresses'].label = "Email Address";


var rel_defs = new Object();
var link_defs_Teams = new Object();
link_defs_Teams[ "users"] = {"name":"users","relationship_name":"team_memberships","bean_is_lhs":true,"link_type":"many","label":"Users"};

var field_defs_Teams = new Object();
field_defs_Teams[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_Teams[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Teams[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_Teams[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Teams[ "name"] = {"name":"name","vname":"Primary Team Name","type":"name","dbType":"varchar","len":"128"};field_defs_Teams[ "private"] = {"name":"private","vname":"Private","type":"bool"};field_defs_Teams[ "res_c"] = {"enforced":"false","source":"custom_fields","name":"res_c","vname":"Res","type":"text","importable":"true","duplicate_merge":"disabled","reportable":"1","size":"20","studio":"visible","rows":"4","cols":"20","id":"Teamsres_c","custom_module":"Teams"};field_defs_Teams[ "team_set_id"] = {"name":"team_set_id","type":"team_set_id","vname":"Teams","rname":"id","dbType":"id","id_name":"team_set_id"};var default_table_columns_Teams = [""];




module_defs['Teams'] = new Object();
module_defs['Teams'].link_defs = link_defs_Teams;
module_defs['Teams'].field_defs = field_defs_Teams;
module_defs['Teams'].default_table_columns = default_table_columns_Teams;
module_defs['Teams'].summary_field_defs = new Object();
module_defs['Teams'].group_by_field_defs = new Object();
module_defs['Teams'].default_summary_columns = default_summary_columns;
module_defs['Teams'].label = "Teams";


var rel_defs = new Object();
var link_defs_Quotes = new Object();
link_defs_Quotes[ "created_by_link"] = {"name":"created_by_link","relationship_name":"quotes_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_Quotes[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"quotes_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_Quotes[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"quotes_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Quotes[ "team_link"] = {"name":"team_link","relationship_name":"quotes_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Quotes[ "tasks"] = {"name":"tasks","relationship_name":"quote_tasks","bean_is_lhs":true,"link_type":"many","label":"Tasks"};

link_defs_Quotes[ "notes"] = {"name":"notes","relationship_name":"quote_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Quotes[ "meetings"] = {"name":"meetings","relationship_name":"quote_meetings","bean_is_lhs":true,"link_type":"many","label":"Meetings"};

link_defs_Quotes[ "calls"] = {"name":"calls","relationship_name":"quote_calls","bean_is_lhs":true,"link_type":"many","label":"Calls"};

link_defs_Quotes[ "emails"] = {"name":"emails","relationship_name":"emails_quotes","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_Quotes[ "project"] = {"name":"project","relationship_name":"projects_quotes","bean_is_lhs":false,"link_type":"many","label":"Projects"};

link_defs_Quotes[ "products"] = {"name":"products","relationship_name":"quote_products","bean_is_lhs":true,"link_type":"many","label":"Products"};

link_defs_Quotes[ "shipping_accounts"] = {"name":"shipping_accounts","relationship_name":"quotes_shipto_accounts","bean_is_lhs":true,"link_type":"one","label":"Ship to Account"};

link_defs_Quotes[ "billing_accounts"] = {"name":"billing_accounts","relationship_name":"quotes_billto_accounts","bean_is_lhs":true,"link_type":"one","label":"Bill to Account"};

link_defs_Quotes[ "shipping_contacts"] = {"name":"shipping_contacts","relationship_name":"quotes_contacts_shipto","bean_is_lhs":true,"link_type":"one","label":"Ship to Contact"};

link_defs_Quotes[ "billing_contacts"] = {"name":"billing_contacts","relationship_name":"quotes_contacts_billto","bean_is_lhs":true,"link_type":"one","label":"Bill to Contact"};

link_defs_Quotes[ "product_bundles"] = {"name":"product_bundles","relationship_name":"product_bundle_quote","bean_is_lhs":false,"link_type":"many","label":"Product Bundles"};

link_defs_Quotes[ "opportunities"] = {"name":"opportunities","relationship_name":"quotes_opportunities","bean_is_lhs":true,"link_type":"one","label":"Opportunity"};

link_defs_Quotes[ "documents"] = {"name":"documents","relationship_name":"documents_quotes","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Quotes[ "contracts"] = {"name":"contracts","relationship_name":"contracts_quotes","bean_is_lhs":false,"link_type":"one","label":"Contracts"};

var field_defs_Quotes = new Object();
field_defs_Quotes[ "billing_address_city"] = {"name":"billing_address_city","vname":"Billing City","type":"varchar","group":"billing_address","len":"100"};field_defs_Quotes[ "billing_address_country"] = {"name":"billing_address_country","vname":"Billing Country","type":"varchar","group":"billing_address","len":"100"};field_defs_Quotes[ "billing_address_postalcode"] = {"name":"billing_address_postalcode","vname":"Billing Postal Code","type":"varchar","group":"billing_address","len":"20"};field_defs_Quotes[ "billing_address_state"] = {"name":"billing_address_state","vname":"Billing State","type":"varchar","group":"billing_address","len":"100"};field_defs_Quotes[ "billing_address_street"] = {"name":"billing_address_street","vname":"Billing Address","type":"varchar","group":"billing_address","len":"150"};field_defs_Quotes[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"After"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Before"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_month", "text":"This Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_year", "text":"This Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "date_entered"].options=option_arr_Quotes;

field_defs_Quotes[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"After"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Before"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_month", "text":"This Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_year", "text":"This Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "date_modified"].options=option_arr_Quotes;

field_defs_Quotes[ "date_quote_expected_closed"] = {"name":"date_quote_expected_closed","vname":"Valid Until","type":"date","audited":"1","reportable":"1","importable":"required","required":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"After"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Before"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_month", "text":"This Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_year", "text":"This Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "date_quote_expected_closed"].options=option_arr_Quotes;

field_defs_Quotes[ "deal_tot"] = {"name":"deal_tot","vname":"discount total","dbType":"decimal","type":"decimal","len":"26,2"};field_defs_Quotes[ "deal_tot_usdollar"] = {"name":"deal_tot_usdollar","vname":"discount total (US Dollar)","dbType":"decimal","type":"decimal","len":"26,2"};field_defs_Quotes[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Quotes[ "discount"] = {"name":"discount","vname":"Discount","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Quotes[ "name"] = {"name":"name","vname":"Quote Subject","dbType":"varchar","type":"name","len":"50","unified_search":"1","importable":"required","required":"1"};field_defs_Quotes[ "new_sub"] = {"name":"new_sub","vname":"Discounted Subtotal","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "new_sub_usdollar"] = {"name":"new_sub_usdollar","vname":"Discounted Subtotal","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "order_stage"] = {"name":"order_stage","vname":"Order Stage","type":"enum","options":"order_stage_dom","len":"100"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"Pending", "text":"Pending"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Confirmed", "text":"Confirmed"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"On Hold", "text":"On Hold"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Shipped", "text":"Shipped"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Cancelled", "text":"Cancelled"};

field_defs_Quotes[ "order_stage"].options=option_arr_Quotes;

field_defs_Quotes[ "original_po_date"] = {"name":"original_po_date","vname":"Original P.O. Date","type":"date","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"After"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Before"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_month", "text":"This Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"this_year", "text":"This Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "original_po_date"].options=option_arr_Quotes;

field_defs_Quotes[ "payment_terms"] = {"name":"payment_terms","vname":"Payment Terms","type":"enum","options":"payment_terms","len":"128"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"", "text":""};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Net 15", "text":"Net 15"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Net 30", "text":"Net 30"};

field_defs_Quotes[ "payment_terms"].options=option_arr_Quotes;

field_defs_Quotes[ "proddesc_c"] = {"source":"custom_fields","name":"proddesc_c","vname":"Proddesc","type":"wysiwyg","importable":"true","duplicate_merge":"disabled","reportable":"1","size":"20","dbType":"text","id":"Quotesproddesc_c","custom_module":"Quotes"};field_defs_Quotes[ "purchase_order_num"] = {"name":"purchase_order_num","vname":"Purchase Order Num","type":"varchar","len":"50"};field_defs_Quotes[ "pymentterm_c"] = {"source":"custom_fields","name":"pymentterm_c","vname":"PymentTerm","type":"enum","importable":"true","duplicate_merge":"disabled","reportable":"1","len":"100","size":"20","options":"payment_terms","studio":"visible","id":"Quotespymentterm_c","custom_module":"Quotes"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"", "text":""};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Net 15", "text":"Net 15"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Net 30", "text":"Net 30"};

field_defs_Quotes[ "pymentterm_c"].options=option_arr_Quotes;

field_defs_Quotes[ "quote_num"] = {"name":"quote_num","vname":"Quote Number","type":"int","auto_increment":"1","required":"1","unified_search":"1","disable_num_format":"1","enable_range_search":"1","options":"numeric_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Does Not Equal"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"Greater Than"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than_equals", "text":"Greater Than Or Equal To"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Less Than"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than_equals", "text":"Less Than Or Equal To"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "quote_num"].options=option_arr_Quotes;

field_defs_Quotes[ "quote_stage"] = {"name":"quote_stage","vname":"Quote Stage","type":"enum","options":"quote_stage_dom","len":"100","audited":"1","importable":"required","required":"1"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"Draft", "text":"Draft"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Negotiation", "text":"Negotiation"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Delivered", "text":"Delivered"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"On Hold", "text":"On Hold"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Confirmed", "text":"Confirmed"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Closed Accepted", "text":"Closed Accepted"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Closed Lost", "text":"Closed Lost"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"Closed Dead", "text":"Closed Dead"};

field_defs_Quotes[ "quote_stage"].options=option_arr_Quotes;

field_defs_Quotes[ "quote_type"] = {"name":"quote_type","vname":"Quote Type","type":"varchar","len":"100"};field_defs_Quotes[ "shipping"] = {"name":"shipping","vname":"Shipping","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "shipping_address_city"] = {"name":"shipping_address_city","vname":"Shipping City","type":"varchar","group":"shipping_address","len":"100"};field_defs_Quotes[ "shipping_address_country"] = {"name":"shipping_address_country","vname":"Shipping Country","type":"varchar","group":"shipping_address","len":"100"};field_defs_Quotes[ "shipping_address_postalcode"] = {"name":"shipping_address_postalcode","vname":"Shipping Postal Code","type":"varchar","group":"shipping_address","len":"20"};field_defs_Quotes[ "shipping_address_state"] = {"name":"shipping_address_state","vname":"Shipping State","type":"varchar","group":"shipping_address","len":"100"};field_defs_Quotes[ "shipping_address_street"] = {"name":"shipping_address_street","vname":"Shipping Address","type":"varchar","group":"shipping_address","len":"150"};field_defs_Quotes[ "shipping_usdollar"] = {"name":"shipping_usdollar","vname":"Shipping (US Dollar)","group":"shipping","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "subtotal"] = {"name":"subtotal","vname":"Subtotal","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "subtotal_usdollar"] = {"name":"subtotal_usdollar","group":"subtotal","vname":"Subtotal (US Dollar)","dbType":"decimal","type":"currency","len":"26,6","audited":"1"};field_defs_Quotes[ "system_id"] = {"name":"system_id","vname":"System ID","type":"int"};field_defs_Quotes[ "tax"] = {"name":"tax","vname":"Tax","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "tax_usdollar"] = {"name":"tax_usdollar","vname":"Tax (US Dollar)","dbType":"decimal","group":"tax","type":"currency","len":"26,6","audited":"1"};field_defs_Quotes[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Quotes[ "terms_c"] = {"source":"custom_fields","name":"terms_c","vname":"Terms","type":"wysiwyg","importable":"true","duplicate_merge":"disabled","reportable":"1","size":"20","dbType":"text","id":"Quotesterms_c","custom_module":"Quotes"};field_defs_Quotes[ "total"] = {"name":"total","vname":"Total","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Quotes[ "total_usdollar"] = {"name":"total_usdollar","vname":"Total (US Dollar)","dbType":"decimal","group":"total","type":"currency","len":"26,6","audited":"1","enable_range_search":"1","options":"numeric_range_search_dom"};var option_arr_Quotes = new Array();

option_arr_Quotes[option_arr_Quotes.length] = { "value":"=", "text":"Equals"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"not_equal", "text":"Does Not Equal"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than", "text":"Greater Than"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"greater_than_equals", "text":"Greater Than Or Equal To"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than", "text":"Less Than"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"less_than_equals", "text":"Less Than Or Equal To"};
option_arr_Quotes[option_arr_Quotes.length] = { "value":"between", "text":"Is Between"};

field_defs_Quotes[ "total_usdollar"].options=option_arr_Quotes;

var default_table_columns_Quotes = [""];




module_defs['Quotes'] = new Object();
module_defs['Quotes'].link_defs = link_defs_Quotes;
module_defs['Quotes'].field_defs = field_defs_Quotes;
module_defs['Quotes'].default_table_columns = default_table_columns_Quotes;
module_defs['Quotes'].summary_field_defs = new Object();
module_defs['Quotes'].group_by_field_defs = new Object();
module_defs['Quotes'].default_summary_columns = default_summary_columns;
module_defs['Quotes'].label = "Quotes";


var rel_defs = new Object();
var link_defs_Products = new Object();
link_defs_Products[ "created_by_link"] = {"name":"created_by_link","relationship_name":"products_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Products[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"products_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Products[ "team_link"] = {"name":"team_link","relationship_name":"products_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Products[ "quotes"] = {"name":"quotes","relationship_name":"quote_products","bean_is_lhs":false,"link_type":"many","label":"Quotes"};

link_defs_Products[ "related_products"] = {"name":"related_products","relationship_name":"product_product","bean_is_lhs":false,"link_type":"many","label":"Related Products"};

link_defs_Products[ "notes"] = {"name":"notes","relationship_name":"product_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

link_defs_Products[ "documents"] = {"name":"documents","relationship_name":"documents_products","bean_is_lhs":false,"link_type":"many","label":"Documents"};

link_defs_Products[ "contracts"] = {"name":"contracts","relationship_name":"contracts_products","bean_is_lhs":false,"link_type":"one","label":"Contracts"};

link_defs_Products[ "account_link"] = {"name":"account_link","relationship_name":"products_accounts","bean_is_lhs":false,"link_type":"one","label":"Account"};

link_defs_Products[ "product_categories_link"] = {"name":"product_categories_link","relationship_name":"product_categories","bean_is_lhs":false,"link_type":"one","label":"Product Categories"};

link_defs_Products[ "product_types_link"] = {"name":"product_types_link","relationship_name":"product_types","bean_is_lhs":false,"link_type":"one","label":"Product Types"};

link_defs_Products[ "contact_link"] = {"name":"contact_link","relationship_name":"contact_products","bean_is_lhs":false,"link_type":"one","label":"Contact"};

link_defs_Products[ "projects"] = {"name":"projects","relationship_name":"projects_products","bean_is_lhs":false,"link_type":"many","label":"Projects"};

var field_defs_Products = new Object();
field_defs_Products[ "asset_number"] = {"name":"asset_number","vname":"Asset Number","type":"varchar","len":"50"};field_defs_Products[ "book_value"] = {"name":"book_value","vname":"Book Value","type":"currency","len":"26,6"};field_defs_Products[ "book_value_date"] = {"name":"book_value_date","vname":"Book Value Date","type":"date"};field_defs_Products[ "book_value_usdollar"] = {"name":"book_value_usdollar","vname":"Book Value (US Dollar)","dbType":"decimal","group":"book_value","type":"currency","len":"26,6","studio":"Array"};field_defs_Products[ "category_id"] = {"name":"category_id","vname":"Category","type":"id","group":"category_name","reportable":"1","function":"Array"};field_defs_Products[ "cost_price"] = {"name":"cost_price","vname":"Cost","type":"currency","len":"26,6","audited":"1"};field_defs_Products[ "cost_usdollar"] = {"name":"cost_usdollar","vname":"Cost (US Dollar)","dbType":"decimal","group":"cost_price","type":"currency","len":"26,6","studio":"Array"};field_defs_Products[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Products = new Array();

option_arr_Products[option_arr_Products.length] = { "value":"=", "text":"Equals"};
option_arr_Products[option_arr_Products.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Products[option_arr_Products.length] = { "value":"greater_than", "text":"After"};
option_arr_Products[option_arr_Products.length] = { "value":"less_than", "text":"Before"};
option_arr_Products[option_arr_Products.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Products[option_arr_Products.length] = { "value":"this_month", "text":"This Month"};
option_arr_Products[option_arr_Products.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Products[option_arr_Products.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Products[option_arr_Products.length] = { "value":"this_year", "text":"This Year"};
option_arr_Products[option_arr_Products.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Products[option_arr_Products.length] = { "value":"between", "text":"Is Between"};

field_defs_Products[ "date_entered"].options=option_arr_Products;

field_defs_Products[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Products = new Array();

option_arr_Products[option_arr_Products.length] = { "value":"=", "text":"Equals"};
option_arr_Products[option_arr_Products.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Products[option_arr_Products.length] = { "value":"greater_than", "text":"After"};
option_arr_Products[option_arr_Products.length] = { "value":"less_than", "text":"Before"};
option_arr_Products[option_arr_Products.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Products[option_arr_Products.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Products[option_arr_Products.length] = { "value":"this_month", "text":"This Month"};
option_arr_Products[option_arr_Products.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Products[option_arr_Products.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Products[option_arr_Products.length] = { "value":"this_year", "text":"This Year"};
option_arr_Products[option_arr_Products.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Products[option_arr_Products.length] = { "value":"between", "text":"Is Between"};

field_defs_Products[ "date_modified"].options=option_arr_Products;

field_defs_Products[ "date_purchased"] = {"name":"date_purchased","vname":"Purchased","type":"date"};field_defs_Products[ "date_support_expires"] = {"name":"date_support_expires","vname":"Support Expires","type":"date"};field_defs_Products[ "date_support_starts"] = {"name":"date_support_starts","vname":"Support Starts","type":"date"};field_defs_Products[ "deal_calc"] = {"name":"deal_calc","vname":"Discount Total","type":"currency","len":"26,6","group":"deal_calc","customCode":"{$fields.currency_symbol.value}{$fields.deal_calc.value}&nbsp;"};field_defs_Products[ "deal_calc_usdollar"] = {"name":"deal_calc_usdollar","vname":"Discount (US Dollar)","type":"currency","len":"26,6","group":"deal_calc","studio":"Array"};field_defs_Products[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Products[ "discount_amount"] = {"name":"discount_amount","vname":"Discount Rate","type":"decimal","options":"discount_amount_class_dom","len":"26,6","precision":"6"};var option_arr_Products = new Array();


field_defs_Products[ "discount_amount"].options=option_arr_Products;

field_defs_Products[ "discount_amount_usdollar"] = {"name":"discount_amount_usdollar","vname":"Discount Rate (US Dollar)","type":"decimal","len":"26,6","studio":"Array"};field_defs_Products[ "discount_price"] = {"name":"discount_price","vname":"Unit Price","type":"currency","len":"26,6","audited":"1"};field_defs_Products[ "discount_usdollar"] = {"name":"discount_usdollar","vname":"Unit Price (US Dollar)","dbType":"decimal","group":"discount_price","type":"currency","len":"26,6","studio":"Array"};field_defs_Products[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Products[ "list_price"] = {"name":"list_price","vname":"List Price","type":"currency","len":"26,6","audited":"1"};field_defs_Products[ "list_usdollar"] = {"name":"list_usdollar","vname":"List Price (US Dollar)","dbType":"decimal","type":"currency","group":"list_price","len":"26,6","studio":"Array"};field_defs_Products[ "mft_part_num"] = {"name":"mft_part_num","vname":"Mft Part Number","type":"varchar","len":"50"};field_defs_Products[ "name"] = {"name":"name","vname":"Product","dbType":"varchar","type":"name","len":"50","reportable":"1","importable":"required"};field_defs_Products[ "pricing_factor"] = {"name":"pricing_factor","vname":"Pricing Factor","type":"int","group":"pricing_formula","len":"4"};field_defs_Products[ "pricing_formula"] = {"name":"pricing_formula","vname":"Pricing Formula","type":"varchar","len":"100"};field_defs_Products[ "quantity"] = {"name":"quantity","vname":"Quantity","type":"int","len":"5"};field_defs_Products[ "serial_number"] = {"name":"serial_number","vname":"Serial Number","type":"varchar","len":"50"};field_defs_Products[ "status"] = {"name":"status","vname":"Status","type":"enum","options":"product_status_dom","len":"100","audited":"1"};var option_arr_Products = new Array();

option_arr_Products[option_arr_Products.length] = { "value":"Quotes", "text":"Quoted"};
option_arr_Products[option_arr_Products.length] = { "value":"Orders", "text":"Ordered"};
option_arr_Products[option_arr_Products.length] = { "value":"Ship", "text":"Shipped"};

field_defs_Products[ "status"].options=option_arr_Products;

field_defs_Products[ "support_contact"] = {"name":"support_contact","vname":"Support Contact","type":"varchar","len":"50"};field_defs_Products[ "support_description"] = {"name":"support_description","vname":"Support Desc","type":"varchar","len":"255"};field_defs_Products[ "support_name"] = {"name":"support_name","vname":"Support Title","type":"varchar","len":"50"};field_defs_Products[ "support_term"] = {"name":"support_term","vname":"Support Term","type":"varchar","len":"100","function":"Array"};field_defs_Products[ "tax_class"] = {"name":"tax_class","vname":"Tax Class","type":"enum","options":"tax_class_dom","len":"100"};var option_arr_Products = new Array();

option_arr_Products[option_arr_Products.length] = { "value":"Taxable", "text":"Taxable"};
option_arr_Products[option_arr_Products.length] = { "value":"Non-Taxable", "text":"Non-Taxable"};

field_defs_Products[ "tax_class"].options=option_arr_Products;

field_defs_Products[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Products[ "vendor_part_num"] = {"name":"vendor_part_num","vname":"Vendor Part Number","type":"varchar","len":"50"};field_defs_Products[ "website"] = {"name":"website","vname":"Product URL","type":"varchar","len":"255"};field_defs_Products[ "weight"] = {"name":"weight","vname":"Weight","type":"decimal","len":"12,2","precision":"2"};var default_table_columns_Products = [""];




module_defs['Products'] = new Object();
module_defs['Products'].link_defs = link_defs_Products;
module_defs['Products'].field_defs = field_defs_Products;
module_defs['Products'].default_table_columns = default_table_columns_Products;
module_defs['Products'].summary_field_defs = new Object();
module_defs['Products'].group_by_field_defs = new Object();
module_defs['Products'].default_summary_columns = default_summary_columns;
module_defs['Products'].label = "Products";


var rel_defs = new Object();
var link_defs_Forecasts = new Object();
link_defs_Forecasts[ "created_by_link"] = {"name":"created_by_link","relationship_name":"forecasts_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

var field_defs_Forecasts = new Object();
field_defs_Forecasts[ "best_case"] = {"name":"best_case","vname":"Best Case","type":"int"};field_defs_Forecasts[ "date_entered"] = {"name":"date_entered","vname":"Date Entered","type":"datetime","required":"1"};field_defs_Forecasts[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Forecasts[ "forecast_type"] = {"name":"forecast_type","vname":"Forecast Type","type":"enum","len":"100","options":"forecast_type_dom"};var option_arr_Forecasts = new Array();

option_arr_Forecasts[option_arr_Forecasts.length] = { "value":"Direct", "text":"Direct"};
option_arr_Forecasts[option_arr_Forecasts.length] = { "value":"Rollup", "text":"Rollup"};

field_defs_Forecasts[ "forecast_type"].options=option_arr_Forecasts;

field_defs_Forecasts[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Forecasts[ "likely_case"] = {"name":"likely_case","vname":"Likely Case","type":"int"};field_defs_Forecasts[ "opp_count"] = {"name":"opp_count","vname":"Opportunities","type":"int","len":"5"};field_defs_Forecasts[ "opp_weigh_value"] = {"name":"opp_weigh_value","vname":"Weighted Amount","type":"int"};field_defs_Forecasts[ "worst_case"] = {"name":"worst_case","vname":"Worst Case","type":"int"};var default_table_columns_Forecasts = [""];




module_defs['Forecasts'] = new Object();
module_defs['Forecasts'].link_defs = link_defs_Forecasts;
module_defs['Forecasts'].field_defs = field_defs_Forecasts;
module_defs['Forecasts'].default_table_columns = default_table_columns_Forecasts;
module_defs['Forecasts'].summary_field_defs = new Object();
module_defs['Forecasts'].group_by_field_defs = new Object();
module_defs['Forecasts'].default_summary_columns = default_summary_columns;
module_defs['Forecasts'].label = "Forecasts";


var rel_defs = new Object();
var link_defs_Contracts = new Object();
link_defs_Contracts[ "created_by_link"] = {"name":"created_by_link","relationship_name":"contracts_created_by","bean_is_lhs":false,"link_type":"one","label":"Created User"};

link_defs_Contracts[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"contracts_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified User"};

link_defs_Contracts[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"contracts_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Contracts[ "team_link"] = {"name":"team_link","relationship_name":"contracts_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_Contracts[ "quotes"] = {"name":"quotes","relationship_name":"contracts_quotes","bean_is_lhs":true,"link_type":"one","label":"Quotes"};

link_defs_Contracts[ "products"] = {"name":"products","relationship_name":"contracts_products","bean_is_lhs":true,"link_type":"one","label":"Products"};

link_defs_Contracts[ "opportunities"] = {"name":"opportunities","relationship_name":"contracts_opportunities","bean_is_lhs":true,"link_type":"one","label":"Opportunity"};

link_defs_Contracts[ "accounts"] = {"name":"accounts","relationship_name":"account_contracts","bean_is_lhs":false,"link_type":"one","label":"Accounts"};

link_defs_Contracts[ "contract_types"] = {"name":"contract_types","relationship_name":"contracts_contract_types","bean_is_lhs":true,"link_type":"one","label":"Products"};

link_defs_Contracts[ "contracts_documents"] = {"name":"contracts_documents","relationship_name":"contracts_documents","bean_is_lhs":true,"link_type":"many","label":"Documents"};

link_defs_Contracts[ "contacts"] = {"name":"contacts","relationship_name":"contracts_contacts","bean_is_lhs":true,"link_type":"many","label":"Contacts"};

link_defs_Contracts[ "notes"] = {"name":"notes","relationship_name":"contract_notes","bean_is_lhs":true,"link_type":"many","label":"Notes"};

var field_defs_Contracts = new Object();
field_defs_Contracts[ "company_signed_date"] = {"name":"company_signed_date","vname":"Company Signed Date","type":"date","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "company_signed_date"].options=option_arr_Contracts;

field_defs_Contracts[ "customer_signed_date"] = {"name":"customer_signed_date","vname":"Customer Signed Date","type":"date","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "customer_signed_date"].options=option_arr_Contracts;

field_defs_Contracts[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","group":"created_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "date_entered"].options=option_arr_Contracts;

field_defs_Contracts[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","group":"modified_by_name","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "date_modified"].options=option_arr_Contracts;

field_defs_Contracts[ "description"] = {"name":"description","vname":"Description","type":"text","rows":"6","cols":"80"};field_defs_Contracts[ "end_date"] = {"name":"end_date","vname":"End Date","type":"date","audited":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "end_date"].options=option_arr_Contracts;

field_defs_Contracts[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_Contracts[ "name"] = {"name":"name","vname":"Contract Name","dbType":"varchar","type":"name","len":"255","required":"1","importable":"required","unified_search":"1"};field_defs_Contracts[ "reference_code"] = {"name":"reference_code","vname":"Reference Code","type":"varchar","len":"255"};field_defs_Contracts[ "start_date"] = {"name":"start_date","vname":"Start Date","type":"date","validation":"Array","audited":"1","enable_range_search":"1","options":"date_range_search_dom"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"=", "text":"Equals"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"not_equal", "text":"Not On"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"greater_than", "text":"After"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"less_than", "text":"Before"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_7_days", "text":"Last 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_7_days", "text":"Next 7 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_30_days", "text":"Last 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_30_days", "text":"Next 30 Days"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_month", "text":"Last Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_month", "text":"This Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_month", "text":"Next Month"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"last_year", "text":"Last Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"this_year", "text":"This Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"next_year", "text":"Next Year"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"between", "text":"Is Between"};

field_defs_Contracts[ "start_date"].options=option_arr_Contracts;

field_defs_Contracts[ "status"] = {"name":"status","vname":"Status","type":"enum","len":"100","required":"1","options":"contract_status_dom","audited":"1","importable":"required"};var option_arr_Contracts = new Array();

option_arr_Contracts[option_arr_Contracts.length] = { "value":"notstarted", "text":"Not Started"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"inprogress", "text":"In Progress"};
option_arr_Contracts[option_arr_Contracts.length] = { "value":"signed", "text":"Signed"};

field_defs_Contracts[ "status"].options=option_arr_Contracts;

field_defs_Contracts[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};field_defs_Contracts[ "total_contract_value"] = {"name":"total_contract_value","vname":"Contract Value","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Contracts[ "total_contract_value_usdollar"] = {"name":"total_contract_value_usdollar","vname":"Contract Value (USD)","dbType":"decimal","type":"currency","len":"26,6"};field_defs_Contracts[ "type"] = {"name":"type","vname":"Type","type":"enum","function":"getContractTypesDropDown","merge_filter":"enabled","duplicate_merge":"disabled"};					var option_arr_Contracts = new Array();
	
option_arr_Contracts[option_arr_Contracts.length] = { "value":"", "text":""};
field_defs_Contracts[ "type"].options=option_arr_Contracts;
var default_table_columns_Contracts = [""];




module_defs['Contracts'] = new Object();
module_defs['Contracts'].link_defs = link_defs_Contracts;
module_defs['Contracts'].field_defs = field_defs_Contracts;
module_defs['Contracts'].default_table_columns = default_table_columns_Contracts;
module_defs['Contracts'].summary_field_defs = new Object();
module_defs['Contracts'].group_by_field_defs = new Object();
module_defs['Contracts'].default_summary_columns = default_summary_columns;
module_defs['Contracts'].label = "Contracts";


var rel_defs = new Object();
var link_defs_KBDocuments = new Object();
link_defs_KBDocuments[ "team_link"] = {"name":"team_link","relationship_name":"kbdocuments_team","bean_is_lhs":false,"link_type":"one","label":"Teams"};

link_defs_KBDocuments[ "revisions"] = {"name":"revisions","relationship_name":"kbdocument_revisions","bean_is_lhs":true,"link_type":"many","label":"LBL_REVISIONS"};

link_defs_KBDocuments[ "cases"] = {"name":"cases","relationship_name":"case_kbdocuments","bean_is_lhs":false,"link_type":"many","label":"Cases"};

link_defs_KBDocuments[ "emails"] = {"name":"emails","relationship_name":"email_kbdocuments","bean_is_lhs":false,"link_type":"many","label":"Emails"};

link_defs_KBDocuments[ "contracts"] = {"name":"contracts","relationship_name":"contracts_documents","bean_is_lhs":false,"link_type":"many","label":"Contracts"};

link_defs_KBDocuments[ "leads"] = {"name":"leads","relationship_name":"leads_documents","bean_is_lhs":false,"link_type":"many","label":"Leads"};

link_defs_KBDocuments[ "created_by_link"] = {"name":"created_by_link","relationship_name":"kbdocuments_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

link_defs_KBDocuments[ "modified_user_link"] = {"name":"modified_user_link","relationship_name":"kbdocuments_modified_user","bean_is_lhs":false,"link_type":"one","label":"Modified by User"};

link_defs_KBDocuments[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"kb_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_KBDocuments[ "kbdoc_approver_link"] = {"name":"kbdoc_approver_link","relationship_name":"kbdoc_approver_user","bean_is_lhs":false,"link_type":"one","label":"Approved By"};

var field_defs_KBDocuments = new Object();
field_defs_KBDocuments[ "active_date"] = {"name":"active_date","vname":"Publish Date","type":"date","importable":"required"};field_defs_KBDocuments[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime"};field_defs_KBDocuments[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime"};field_defs_KBDocuments[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_KBDocuments[ "exp_date"] = {"name":"exp_date","vname":"Expiration Date","type":"date"};field_defs_KBDocuments[ "id"] = {"name":"id","vname":"ID","type":"varchar","len":"36","required":"1","reportable":"1"};field_defs_KBDocuments[ "is_external_article"] = {"name":"is_external_article","vname":"External Article? ","type":"bool","reportable":"1","studio":"false"};field_defs_KBDocuments[ "kbdocument_name"] = {"name":"kbdocument_name","vname":"Document Name","type":"varchar","required":"1","importable":"required","unified_search":"1"};field_defs_KBDocuments[ "kbdocument_revision_number"] = {"name":"kbdocument_revision_number","vname":"KBDocument Revision Number","type":"varchar","len":"100"};field_defs_KBDocuments[ "parent_id"] = {"name":"parent_id","type":"id","reportable":"1"};field_defs_KBDocuments[ "team_set_id"] = {"name":"team_set_id","rname":"id","id_name":"team_set_id","vname":"Team Set ID","type":"team_set_id","audited":"1","studio":"false","dbType":"id",invisible:true};var default_table_columns_KBDocuments = [""];




module_defs['KBDocuments'] = new Object();
module_defs['KBDocuments'].link_defs = link_defs_KBDocuments;
module_defs['KBDocuments'].field_defs = field_defs_KBDocuments;
module_defs['KBDocuments'].default_table_columns = default_table_columns_KBDocuments;
module_defs['KBDocuments'].summary_field_defs = new Object();
module_defs['KBDocuments'].group_by_field_defs = new Object();
module_defs['KBDocuments'].default_summary_columns = default_summary_columns;
module_defs['KBDocuments'].label = "Knowledge Base";


var rel_defs = new Object();
var link_defs_Currencies = new Object();
var field_defs_Currencies = new Object();
field_defs_Currencies[ "conversion_rate"] = {"name":"conversion_rate","vname":"Conversion Rate","type":"float","dbType":"double","required":"1","importable":"required"};field_defs_Currencies[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_Currencies[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_Currencies[ "iso4217"] = {"name":"iso4217","vname":"ISO 4217 Code","type":"varchar","len":"3"};field_defs_Currencies[ "name"] = {"name":"name","vname":"Currency Name","type":"varchar","len":"36","required":"1","importable":"required"};field_defs_Currencies[ "status"] = {"name":"status","vname":"Status","type":"enum","dbType":"varchar","options":"currency_status_dom","len":"100","importable":"required"};var option_arr_Currencies = new Array();

option_arr_Currencies[option_arr_Currencies.length] = { "value":"Active", "text":"Active"};
option_arr_Currencies[option_arr_Currencies.length] = { "value":"Inactive", "text":"Inactive"};

field_defs_Currencies[ "status"].options=option_arr_Currencies;

field_defs_Currencies[ "symbol"] = {"name":"symbol","vname":"Currency Symbol","type":"varchar","len":"36","required":"1","importable":"required"};var default_table_columns_Currencies = [""];




module_defs['Currencies'] = new Object();
module_defs['Currencies'].link_defs = link_defs_Currencies;
module_defs['Currencies'].field_defs = field_defs_Currencies;
module_defs['Currencies'].default_table_columns = default_table_columns_Currencies;
module_defs['Currencies'].summary_field_defs = new Object();
module_defs['Currencies'].group_by_field_defs = new Object();
module_defs['Currencies'].default_summary_columns = default_summary_columns;
module_defs['Currencies'].label = "Currencies";


var rel_defs = new Object();
var link_defs_DocumentRevisions = new Object();
link_defs_DocumentRevisions[ "documents"] = {"name":"documents","relationship_name":"document_revisions","bean_is_lhs":false,"link_type":"many","label":"LBL_REVISIONS"};

link_defs_DocumentRevisions[ "created_by_link"] = {"name":"created_by_link","relationship_name":"revisions_created_by","bean_is_lhs":false,"link_type":"one","label":"Created by User"};

var field_defs_DocumentRevisions = new Object();
field_defs_DocumentRevisions[ "change_log"] = {"name":"change_log","vname":"Change Log","type":"varchar","len":"255"};field_defs_DocumentRevisions[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime"};field_defs_DocumentRevisions[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime"};field_defs_DocumentRevisions[ "doc_id"] = {"name":"doc_id","vname":"Document Source ID","type":"varchar","len":"100","studio":"false"};field_defs_DocumentRevisions[ "doc_type"] = {"name":"doc_type","vname":"Source","type":"enum","function":"getDocumentsExternalApiDropDown","len":"100"};					var option_arr_DocumentRevisions = new Array();
	
option_arr_DocumentRevisions[option_arr_DocumentRevisions.length] = { "value":"Sugar", "text":"CRM"};
field_defs_DocumentRevisions[ "doc_type"].options=option_arr_DocumentRevisions;
field_defs_DocumentRevisions[ "doc_url"] = {"name":"doc_url","vname":"Document Source URL","type":"varchar","len":"255","studio":"false"};field_defs_DocumentRevisions[ "file_ext"] = {"name":"file_ext","vname":"File Extension","type":"varchar","len":"100"};field_defs_DocumentRevisions[ "file_mime_type"] = {"name":"file_mime_type","vname":"Mime Type","type":"varchar","len":"100"};field_defs_DocumentRevisions[ "filename"] = {"name":"filename","vname":"File","type":"file","dbType":"varchar","required":"1","len":"255","allowEapm":"1","linkModuleOverride":"Documents"};field_defs_DocumentRevisions[ "revision"] = {"name":"revision","vname":"Revision","type":"varchar","len":"100","importable":"required"};var default_table_columns_DocumentRevisions = [""];




module_defs['DocumentRevisions'] = new Object();
module_defs['DocumentRevisions'].link_defs = link_defs_DocumentRevisions;
module_defs['DocumentRevisions'].field_defs = field_defs_DocumentRevisions;
module_defs['DocumentRevisions'].default_table_columns = default_table_columns_DocumentRevisions;
module_defs['DocumentRevisions'].summary_field_defs = new Object();
module_defs['DocumentRevisions'].group_by_field_defs = new Object();
module_defs['DocumentRevisions'].default_summary_columns = default_summary_columns;
module_defs['DocumentRevisions'].label = "Document Revisions";


var rel_defs = new Object();
var link_defs_ProductCategories = new Object();
link_defs_ProductCategories[ "categories"] = {"name":"categories","relationship_name":"member_categories","bean_is_lhs":true,"link_type":"many","label":"Categories"};

var field_defs_ProductCategories = new Object();
field_defs_ProductCategories[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_ProductCategories[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_ProductCategories[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_ProductCategories[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_ProductCategories[ "list_order"] = {"name":"list_order","vname":"Order","type":"int","len":"4","importable":"required"};field_defs_ProductCategories[ "name"] = {"name":"name","vname":"Product Category","type":"name","dbType":"varchar","len":"50","importable":"required"};field_defs_ProductCategories[ "parent_id"] = {"name":"parent_id","vname":"Parent Category","type":"varchar","len":"36","reportable":"1"};var default_table_columns_ProductCategories = [""];




module_defs['ProductCategories'] = new Object();
module_defs['ProductCategories'].link_defs = link_defs_ProductCategories;
module_defs['ProductCategories'].field_defs = field_defs_ProductCategories;
module_defs['ProductCategories'].default_table_columns = default_table_columns_ProductCategories;
module_defs['ProductCategories'].summary_field_defs = new Object();
module_defs['ProductCategories'].group_by_field_defs = new Object();
module_defs['ProductCategories'].default_summary_columns = default_summary_columns;
module_defs['ProductCategories'].label = "Product Categories";


var rel_defs = new Object();
var link_defs_ProductTypes = new Object();
var field_defs_ProductTypes = new Object();
field_defs_ProductTypes[ "date_entered"] = {"name":"date_entered","vname":"Date Created","type":"datetime","required":"1"};field_defs_ProductTypes[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","required":"1"};field_defs_ProductTypes[ "description"] = {"name":"description","vname":"Description","type":"text"};field_defs_ProductTypes[ "id"] = {"name":"id","vname":"ID","type":"id","required":"1","reportable":"1"};field_defs_ProductTypes[ "list_order"] = {"name":"list_order","vname":"Order","type":"int","len":"4","importable":"required"};field_defs_ProductTypes[ "name"] = {"name":"name","vname":"Product Type","type":"varchar","len":"50","importable":"required"};var default_table_columns_ProductTypes = [""];




module_defs['ProductTypes'] = new Object();
module_defs['ProductTypes'].link_defs = link_defs_ProductTypes;
module_defs['ProductTypes'].field_defs = field_defs_ProductTypes;
module_defs['ProductTypes'].default_table_columns = default_table_columns_ProductTypes;
module_defs['ProductTypes'].summary_field_defs = new Object();
module_defs['ProductTypes'].group_by_field_defs = new Object();
module_defs['ProductTypes'].default_summary_columns = default_summary_columns;
module_defs['ProductTypes'].label = "Product Types";


var rel_defs = new Object();
var link_defs_Trackers = new Object();
link_defs_Trackers[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"tracker_user_id","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

link_defs_Trackers[ "monitor_id_link"] = {"name":"monitor_id_link","relationship_name":"tracker_monitor_id","bean_is_lhs":false,"link_type":"one","label":"Monitor Id"};

var field_defs_Trackers = new Object();
field_defs_Trackers[ "action"] = {"name":"action","vname":"Action","type":"varchar","len":"255","isnull":"false"};field_defs_Trackers[ "date_modified"] = {"name":"date_modified","vname":"Date of Last Action","type":"datetime","isnull":"false"};field_defs_Trackers[ "id"] = {"name":"id","vname":"ID","type":"int","len":"11","isnull":"false","auto_increment":"1","reportable":"1"};field_defs_Trackers[ "item_id"] = {"name":"item_id","vname":"Item Id","type":"varchar","len":"36","isnull":"false"};field_defs_Trackers[ "item_summary"] = {"name":"item_summary","vname":"Item Summary","type":"varchar","len":"255","isnull":"false"};field_defs_Trackers[ "module_name"] = {"name":"module_name","vname":"Trackers","type":"varchar","len":"255","isnull":"false"};field_defs_Trackers[ "session_id"] = {"name":"session_id","vname":"Session Id","type":"varchar","len":"36","isnull":"true"};field_defs_Trackers[ "team_id"] = {"name":"team_id","vname":"Team id","type":"varchar","len":"36"};field_defs_Trackers[ "user_id"] = {"name":"user_id","vname":"User Id","type":"varchar","len":"36","isnull":"false"};field_defs_Trackers[ "visible"] = {"name":"visible","vname":"Record Visible","type":"bool","len":"1"};var default_table_columns_Trackers = [""];




module_defs['Trackers'] = new Object();
module_defs['Trackers'].link_defs = link_defs_Trackers;
module_defs['Trackers'].field_defs = field_defs_Trackers;
module_defs['Trackers'].default_table_columns = default_table_columns_Trackers;
module_defs['Trackers'].summary_field_defs = new Object();
module_defs['Trackers'].group_by_field_defs = new Object();
module_defs['Trackers'].default_summary_columns = default_summary_columns;
module_defs['Trackers'].label = "Trackers";


var rel_defs = new Object();
var link_defs_TrackerPerfs = new Object();
var field_defs_TrackerPerfs = new Object();
field_defs_TrackerPerfs[ "date_modified"] = {"name":"date_modified","vname":"Date of Last Action","type":"datetime","isnull":"false"};field_defs_TrackerPerfs[ "db_round_trips"] = {"name":"db_round_trips","vname":"Database Roundtrips","type":"int","len":"6","isnull":"false"};field_defs_TrackerPerfs[ "files_opened"] = {"name":"files_opened","vname":"Files Accessed","type":"int","len":"6","isnull":"false"};field_defs_TrackerPerfs[ "id"] = {"name":"id","vname":"ID","type":"int","len":"11","isnull":"false","auto_increment":"1","reportable":"1"};field_defs_TrackerPerfs[ "memory_usage"] = {"name":"memory_usage","vname":"Memory Usage (bytes)","type":"int","len":"12","isnull":"true"};field_defs_TrackerPerfs[ "server_response_time"] = {"name":"server_response_time","vname":"Server response time","type":"float","dbType":"double","isnull":"false"};var default_table_columns_TrackerPerfs = [""];




module_defs['TrackerPerfs'] = new Object();
module_defs['TrackerPerfs'].link_defs = link_defs_TrackerPerfs;
module_defs['TrackerPerfs'].field_defs = field_defs_TrackerPerfs;
module_defs['TrackerPerfs'].default_table_columns = default_table_columns_TrackerPerfs;
module_defs['TrackerPerfs'].summary_field_defs = new Object();
module_defs['TrackerPerfs'].group_by_field_defs = new Object();
module_defs['TrackerPerfs'].default_summary_columns = default_summary_columns;
module_defs['TrackerPerfs'].label = "Tracker Performance";


var rel_defs = new Object();
var link_defs_TrackerSessions = new Object();
link_defs_TrackerSessions[ "assigned_user_link"] = {"name":"assigned_user_link","relationship_name":"tracker_user_id","bean_is_lhs":false,"link_type":"one","label":"Assigned to User"};

var field_defs_TrackerSessions = new Object();
field_defs_TrackerSessions[ "active"] = {"name":"active","vname":"Session Active","type":"bool"};field_defs_TrackerSessions[ "client_ip"] = {"name":"client_ip","vname":"Client IP Address","type":"varchar","len":"20","isnull":"false"};field_defs_TrackerSessions[ "date_end"] = {"name":"date_end","vname":"Date of Last Action","type":"datetime","isnull":"false"};field_defs_TrackerSessions[ "date_start"] = {"name":"date_start","vname":"Date Start","type":"datetime","isnull":"false"};field_defs_TrackerSessions[ "id"] = {"name":"id","vname":"ID","type":"int","len":"11","reportable":"1","isnull":"false","auto_increment":"1"};field_defs_TrackerSessions[ "round_trips"] = {"name":"round_trips","vname":"Action Count","type":"int","len":"5","isnull":"false"};field_defs_TrackerSessions[ "seconds"] = {"name":"seconds","vname":"Seconds Active","type":"int","len":"9","isnull":"false"};field_defs_TrackerSessions[ "session_id"] = {"name":"session_id","vname":"Session Id","type":"varchar","len":"36","isnull":"false"};field_defs_TrackerSessions[ "user_id"] = {"name":"user_id","vname":"User Id","type":"varchar","len":"36","isnull":"false"};var default_table_columns_TrackerSessions = [""];




module_defs['TrackerSessions'] = new Object();
module_defs['TrackerSessions'].link_defs = link_defs_TrackerSessions;
module_defs['TrackerSessions'].field_defs = field_defs_TrackerSessions;
module_defs['TrackerSessions'].default_table_columns = default_table_columns_TrackerSessions;
module_defs['TrackerSessions'].summary_field_defs = new Object();
module_defs['TrackerSessions'].group_by_field_defs = new Object();
module_defs['TrackerSessions'].default_summary_columns = default_summary_columns;
module_defs['TrackerSessions'].label = "Tracker Sessions";


var rel_defs = new Object();
var link_defs_TrackerQueries = new Object();
var field_defs_TrackerQueries = new Object();
field_defs_TrackerQueries[ "date_modified"] = {"name":"date_modified","vname":"Date Modified","type":"datetime","isnull":"false"};field_defs_TrackerQueries[ "id"] = {"name":"id","vname":"ID","type":"int","len":"11","reportable":"1","isnull":"false","auto_increment":"1"};field_defs_TrackerQueries[ "run_count"] = {"name":"run_count","vname":"Query Count","type":"int","len":"6","isnull":"false"};field_defs_TrackerQueries[ "sec_avg"] = {"name":"sec_avg","vname":"Average Seconds","type":"float","dbType":"double","isnull":"false"};field_defs_TrackerQueries[ "sec_total"] = {"name":"sec_total","vname":"Total Seconds","type":"float","dbType":"double","isnull":"false"};field_defs_TrackerQueries[ "text"] = {"name":"text","vname":"SQL Text","type":"text","isnull":"false"};var default_table_columns_TrackerQueries = [""];




module_defs['TrackerQueries'] = new Object();
module_defs['TrackerQueries'].link_defs = link_defs_TrackerQueries;
module_defs['TrackerQueries'].field_defs = field_defs_TrackerQueries;
module_defs['TrackerQueries'].default_table_columns = default_table_columns_TrackerQueries;
module_defs['TrackerQueries'].summary_field_defs = new Object();
module_defs['TrackerQueries'].group_by_field_defs = new Object();
module_defs['TrackerQueries'].default_summary_columns = default_summary_columns;
module_defs['TrackerQueries'].label = "Tracker Queries";

rel_defs['leads_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Lead","id":"6a7b583c-47d8-0fa7-f07c-536ca7e39ffe","relationship_name":"leads_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['leads_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Lead","id":"6a3b8685-135a-9c8c-ab22-536ca7d42d75","relationship_name":"leads_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['leads_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Lead","id":"6ab6bc57-9e6a-566c-946f-536ca73a5d24","relationship_name":"leads_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['leads_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Lead","id":"6b59f145-81dd-d89f-3a11-536ca773cadf","relationship_name":"leads_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['leads_email_addresses_primary'] = {"lhs_bean_name":"Lead","rhs_bean_name":"EmailAddress","id":"6bc56334-04bd-b58e-5e42-536ca7f8c317","relationship_name":"leads_email_addresses_primary","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"EmailAddresses","rhs_table":"email_addresses","rhs_key":"id","join_table":"email_addr_bean_rel","join_key_lhs":"bean_id","join_key_rhs":"email_address_id","relationship_type":"many-to-many","relationship_role_column":"primary_address","relationship_role_column_value":"1","reverse":"0"};
rel_defs['lead_direct_reports'] = {"lhs_bean_name":"Lead","rhs_bean_name":"Lead","id":"6bfb43ea-23ac-7d71-014d-536ca764bd1c","relationship_name":"lead_direct_reports","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"reports_to_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['account_leads'] = {"lhs_bean_name":"Account","rhs_bean_name":"Lead","id":"e41f3d48-05bf-6f6d-e510-536ca7245973","relationship_name":"account_leads","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"account_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_leads'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"Lead","id":"f29ff67b-4e36-40b7-b485-536ca7ec7061","relationship_name":"campaign_leads","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['lead_tasks'] = {"lhs_bean_name":"Lead","rhs_bean_name":"Task","id":"6c2dfe02-b518-50bc-bf63-536ca762f7dd","relationship_name":"lead_tasks","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Leads","reverse":"0"};
rel_defs['lead_notes'] = {"lhs_bean_name":"Lead","rhs_bean_name":"Note","id":"6c6203b5-55d2-2331-a6dd-536ca7cf7645","relationship_name":"lead_notes","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Leads","reverse":"0"};
rel_defs['meetings_leads'] = {"lhs_bean_name":"Meeting","rhs_bean_name":"Lead","id":"9d5bbaf0-1375-f647-67a0-536ca7beb703","relationship_name":"meetings_leads","lhs_module":"Meetings","lhs_table":"meetings","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"id","join_table":"meetings_leads","join_key_lhs":"meeting_id","join_key_rhs":"lead_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_leads'] = {"lhs_bean_name":"Call","rhs_bean_name":"Lead","id":"9985af13-5e6d-63ff-42f1-536ca71b6974","relationship_name":"calls_leads","lhs_module":"Calls","lhs_table":"calls","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"id","join_table":"calls_leads","join_key_lhs":"call_id","join_key_rhs":"lead_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_leads_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Lead","id":"9b5e28a3-a171-1b21-ec7d-536ca7829dd8","relationship_name":"emails_leads_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Leads","reverse":"0"};
rel_defs['lead_campaign_log'] = {"lhs_bean_name":"Lead","rhs_bean_name":"CampaignLog","id":"6d368ca9-7cf6-80f0-af58-536ca746a962","relationship_name":"lead_campaign_log","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"CampaignLog","rhs_table":"campaign_log","rhs_key":"target_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_leads'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"Lead","id":"9eec3d2e-f22d-6ae1-cf56-536ca7ddde58","relationship_name":"prospect_list_leads","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"id","join_table":"prospect_lists_prospects","join_key_lhs":"prospect_list_id","join_key_rhs":"related_id","relationship_type":"many-to-many","relationship_role_column":"related_type","relationship_role_column_value":"Leads","reverse":"0"};
rel_defs['cases_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"aCase","id":"6ea63de4-3cde-4569-eedd-536ca7146926","relationship_name":"cases_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['cases_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"aCase","id":"6e6c9003-9e6f-a9f5-79b0-536ca7eb67b6","relationship_name":"cases_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['cases_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"aCase","id":"6edb7200-0adc-87a9-1d1c-536ca7c5efdc","relationship_name":"cases_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['cases_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"aCase","id":"6f7543e3-a62c-3974-1c5c-536ca71a10ac","relationship_name":"cases_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['case_tasks'] = {"lhs_bean_name":"aCase","rhs_bean_name":"Task","id":"6fe279cc-fe4d-d06d-3892-536ca767a8b5","relationship_name":"case_tasks","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['case_notes'] = {"lhs_bean_name":"aCase","rhs_bean_name":"Note","id":"701641ae-8e69-fd00-74bf-536ca79cd1d8","relationship_name":"case_notes","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['case_meetings'] = {"lhs_bean_name":"aCase","rhs_bean_name":"Meeting","id":"704964b4-4c55-b39b-09c1-536ca73b9505","relationship_name":"case_meetings","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['emails_cases_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"aCase","id":"9aff9eb5-25d2-9fa4-8509-536ca792e60a","relationship_name":"emails_cases_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['documents_cases'] = {"lhs_bean_name":"Document","rhs_bean_name":"aCase","id":"a5676c32-ed56-d6b5-6cd7-536ca722da48","relationship_name":"documents_cases","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"id","join_table":"documents_cases","join_key_lhs":"document_id","join_key_rhs":"case_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['case_calls'] = {"lhs_bean_name":"aCase","rhs_bean_name":"Call","id":"6face70d-4784-835f-e8f9-536ca7eb780a","relationship_name":"case_calls","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['cases_bugs'] = {"lhs_bean_name":"aCase","rhs_bean_name":"Bug","id":"99bac7f5-ec4b-5881-8556-536ca736c22e","relationship_name":"cases_bugs","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"cases_bugs","join_key_lhs":"case_id","join_key_rhs":"bug_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_cases'] = {"lhs_bean_name":"Contact","rhs_bean_name":"aCase","id":"9a29fb87-26f8-fd86-a5ce-536ca7422044","relationship_name":"contacts_cases","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"id","join_table":"contacts_cases","join_key_lhs":"contact_id","join_key_rhs":"case_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['account_cases'] = {"lhs_bean_name":"Account","rhs_bean_name":"aCase","id":"e2e0a511-3557-5689-9984-536ca760b96b","relationship_name":"account_cases","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"account_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_cases'] = {"lhs_bean_name":"Project","rhs_bean_name":"aCase","id":"9fef6377-221d-e50b-a852-536ca78b9697","relationship_name":"projects_cases","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Cases","rhs_table":"cases","rhs_key":"id","join_table":"projects_cases","join_key_lhs":"project_id","join_key_rhs":"case_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Bug","id":"7202f99f-4765-6898-8fa7-536ca79afc61","relationship_name":"bugs_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Bug","id":"71cb0e15-3229-0a28-867b-536ca7032c60","relationship_name":"bugs_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Bug","id":"7237c012-1c5d-bc97-0835-536ca7a54596","relationship_name":"bugs_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Bug","id":"72da0db9-d8ec-dc64-7a12-536ca7c0163a","relationship_name":"bugs_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bug_tasks'] = {"lhs_bean_name":"Bug","rhs_bean_name":"Task","id":"730f9f28-fd94-1086-e4ef-536ca7c8f9bd","relationship_name":"bug_tasks","lhs_module":"Bugs","lhs_table":"bugs","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Bugs","reverse":"0"};
rel_defs['bug_notes'] = {"lhs_bean_name":"Bug","rhs_bean_name":"Note","id":"73e28333-953a-f7d3-a463-536ca7ccb4a6","relationship_name":"bug_notes","lhs_module":"Bugs","lhs_table":"bugs","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Bugs","reverse":"0"};
rel_defs['bug_meetings'] = {"lhs_bean_name":"Bug","rhs_bean_name":"Meeting","id":"734424a7-1975-6dcc-3c6e-536ca79d38f5","relationship_name":"bug_meetings","lhs_module":"Bugs","lhs_table":"bugs","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Bugs","reverse":"0"};
rel_defs['bug_calls'] = {"lhs_bean_name":"Bug","rhs_bean_name":"Call","id":"73771fe9-bb8e-1e16-bc59-536ca7cc4f51","relationship_name":"bug_calls","lhs_module":"Bugs","lhs_table":"bugs","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Bugs","reverse":"0"};
rel_defs['emails_bugs_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Bug","id":"9acb2062-d5fb-dea3-ec49-536ca766f808","relationship_name":"emails_bugs_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Bugs","reverse":"0"};
rel_defs['documents_bugs'] = {"lhs_bean_name":"Document","rhs_bean_name":"Bug","id":"a5970650-5b27-30ab-8e4e-536ca7319dd9","relationship_name":"documents_bugs","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"documents_bugs","join_key_lhs":"document_id","join_key_rhs":"bug_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_bugs'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Bug","id":"99ea74dc-f7a4-d19b-92d7-536ca7021a04","relationship_name":"contacts_bugs","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"contacts_bugs","join_key_lhs":"contact_id","join_key_rhs":"bug_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_bugs'] = {"lhs_bean_name":"Account","rhs_bean_name":"Bug","id":"986234c3-be25-296b-5ab4-536ca70da913","relationship_name":"accounts_bugs","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"accounts_bugs","join_key_lhs":"account_id","join_key_rhs":"bug_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_release'] = {"lhs_bean_name":"Release","rhs_bean_name":"Bug","id":"74167238-515d-6518-11d2-536ca7e9e904","relationship_name":"bugs_release","lhs_module":"Releases","lhs_table":"releases","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"found_in_release","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['bugs_fixed_in_release'] = {"lhs_bean_name":"Release","rhs_bean_name":"Bug","id":"744a0cb4-f65a-99bf-b745-536ca71bd6ad","relationship_name":"bugs_fixed_in_release","lhs_module":"Releases","lhs_table":"releases","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"fixed_in_release","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_bugs'] = {"lhs_bean_name":"Project","rhs_bean_name":"Bug","id":"9fa82c2e-871b-070d-0bb9-536ca715221a","relationship_name":"projects_bugs","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Bugs","rhs_table":"bugs","rhs_key":"id","join_table":"projects_bugs","join_key_lhs":"project_id","join_key_rhs":"bug_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospects_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Prospect","id":"632405b5-2f1c-52ec-4aaa-536ca7649ed9","relationship_name":"prospects_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospects_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Prospect","id":"5f2d03b0-a4a0-d703-5479-536ca7704020","relationship_name":"prospects_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospects_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Prospect","id":"66cb0a14-4229-1c69-46a7-536ca75c73a5","relationship_name":"prospects_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospects_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Prospect","id":"717c043b-98c6-0053-b323-536ca78e3c2f","relationship_name":"prospects_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospects_email_addresses_primary'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"EmailAddress","id":"788a0da3-9f5d-7326-4bd1-536ca786b760","relationship_name":"prospects_email_addresses_primary","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"EmailAddresses","rhs_table":"email_addresses","rhs_key":"id","join_table":"email_addr_bean_rel","join_key_lhs":"bean_id","join_key_rhs":"email_address_id","relationship_type":"many-to-many","relationship_role_column":"primary_address","relationship_role_column_value":"1","reverse":"0"};
rel_defs['prospect_campaign_log'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"CampaignLog","id":"8e16065f-d347-45ea-85e8-536ca7d987e9","relationship_name":"prospect_campaign_log","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"CampaignLog","rhs_table":"campaign_log","rhs_key":"target_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_prospects'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"Prospect","id":"9ebfb1dd-fb1c-e80f-ab53-536ca79ea3b0","relationship_name":"prospect_list_prospects","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"id","join_table":"prospect_lists_prospects","join_key_lhs":"prospect_list_id","join_key_rhs":"related_id","relationship_type":"many-to-many","relationship_role_column":"related_type","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['prospect_calls'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"Call","id":"86ca00e6-add7-e87c-b6a5-536ca7fa5104","relationship_name":"prospect_calls","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['prospect_meetings'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"Meeting","id":"835303ad-7f61-0f93-18a3-536ca728c56e","relationship_name":"prospect_meetings","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['prospect_notes'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"Note","id":"7f9c0471-d951-65a6-225b-536ca730ec21","relationship_name":"prospect_notes","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['prospect_tasks'] = {"lhs_bean_name":"Prospect","rhs_bean_name":"Task","id":"7c120669-59e9-b939-b247-536ca7475b2d","relationship_name":"prospect_tasks","lhs_module":"Prospects","lhs_table":"prospects","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['emails_prospects_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Prospect","id":"9c8dd0ae-3bdb-4bfd-42b5-536ca7283e13","relationship_name":"emails_prospects_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Prospects","rhs_table":"prospects","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Prospects","reverse":"0"};
rel_defs['project_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Project","id":"78de25e6-585a-b085-4bcf-536ca723d555","relationship_name":"project_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Project","rhs_table":"project","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_accounts'] = {"lhs_bean_name":"Project","rhs_bean_name":"Account","id":"a05200dc-7e9c-6b0f-a34d-536ca79ea158","relationship_name":"projects_accounts","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"projects_accounts","join_key_lhs":"project_id","join_key_rhs":"account_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_quotes'] = {"lhs_bean_name":"Project","rhs_bean_name":"Quote","id":"a35b920b-3e3e-6cbf-5bbe-536ca7cdc636","relationship_name":"projects_quotes","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"id","join_table":"projects_quotes","join_key_lhs":"project_id","join_key_rhs":"quote_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_contacts'] = {"lhs_bean_name":"Project","rhs_bean_name":"Contact","id":"a0833099-e140-4f4f-46a8-536ca7c65c00","relationship_name":"projects_contacts","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"projects_contacts","join_key_lhs":"project_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_opportunities'] = {"lhs_bean_name":"Project","rhs_bean_name":"Opportunity","id":"a0b35052-db31-e491-65bf-536ca79f9614","relationship_name":"projects_opportunities","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"projects_opportunities","join_key_lhs":"project_id","join_key_rhs":"opportunity_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_notes'] = {"lhs_bean_name":"Project","rhs_bean_name":"Note","id":"7914bdea-c65c-da85-9371-536ca71d77bf","relationship_name":"projects_notes","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Project","reverse":"0"};
rel_defs['projects_tasks'] = {"lhs_bean_name":"Project","rhs_bean_name":"Task","id":"794aafbf-931b-2e2b-9356-536ca7392902","relationship_name":"projects_tasks","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Project","reverse":"0"};
rel_defs['projects_meetings'] = {"lhs_bean_name":"Project","rhs_bean_name":"Meeting","id":"7983f8ad-adcb-44d3-d255-536ca70a5734","relationship_name":"projects_meetings","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Project","reverse":"0"};
rel_defs['projects_calls'] = {"lhs_bean_name":"Project","rhs_bean_name":"Call","id":"79b9f514-07a2-44e1-02fd-536ca7ef8d8c","relationship_name":"projects_calls","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Project","reverse":"0"};
rel_defs['emails_projects_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Project","id":"9c5b91c7-e84b-433f-88da-536ca745b0ce","relationship_name":"emails_projects_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Project","rhs_table":"project","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Project","reverse":"0"};
rel_defs['projects_project_tasks'] = {"lhs_bean_name":"Project","rhs_bean_name":"ProjectTask","id":"7a26284d-b32a-afea-961c-536ca79dcccc","relationship_name":"projects_project_tasks","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"project_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Project","id":"7ad1f157-deea-d0a8-5500-536ca71a97a3","relationship_name":"projects_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Project","rhs_table":"project","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Project","id":"7a9cb5ec-8df9-5ae0-973b-536ca7514933","relationship_name":"projects_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Project","rhs_table":"project","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Project","id":"7a627285-99c8-69d3-dc21-536ca73a2644","relationship_name":"projects_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Project","rhs_table":"project","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_products'] = {"lhs_bean_name":"Project","rhs_bean_name":"Product","id":"a0233d25-54af-9e9f-9a9a-536ca7a799e6","relationship_name":"projects_products","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"id","join_table":"projects_products","join_key_lhs":"project_id","join_key_rhs":"product_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projects_users_resources'] = {"lhs_bean_name":"Project","rhs_bean_name":"User","id":"7b07f4d8-e85e-dcb7-9fdf-536ca7c2badd","relationship_name":"projects_users_resources","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"project_resources","join_key_lhs":"project_id","join_key_rhs":"resource_id","relationship_type":"many-to-many","relationship_role_column":"resource_type","relationship_role_column_value":"Users","reverse":"0"};
rel_defs['projects_contacts_resources'] = {"lhs_bean_name":"Project","rhs_bean_name":"Contact","id":"7b3e6c62-7468-1d80-a3f9-536ca794d18c","relationship_name":"projects_contacts_resources","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"project_resources","join_key_lhs":"project_id","join_key_rhs":"resource_id","relationship_type":"many-to-many","relationship_role_column":"resource_type","relationship_role_column_value":"Contacts","reverse":"0"};
rel_defs['projects_holidays'] = {"lhs_bean_name":"Project","rhs_bean_name":"Holiday","id":"7b7bc17e-65f8-807a-d4a8-536ca758a51b","relationship_name":"projects_holidays","lhs_module":"Project","lhs_table":"project","lhs_key":"id","rhs_module":"Holidays","rhs_table":"holidays","rhs_key":"related_module_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['projecttask_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"ProjectTask","id":"ede29f80-5d33-f918-97b6-536ca770b6f3","relationship_name":"projecttask_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['project_tasks_notes'] = {"lhs_bean_name":"ProjectTask","rhs_bean_name":"Note","id":"ee17aec7-087d-cc88-2337-536ca7c2b787","relationship_name":"project_tasks_notes","lhs_module":"ProjectTask","lhs_table":"project_task","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"ProjectTask","reverse":"0"};
rel_defs['project_tasks_tasks'] = {"lhs_bean_name":"ProjectTask","rhs_bean_name":"Task","id":"ee539e46-6bc3-c1a2-c729-536ca76c98e3","relationship_name":"project_tasks_tasks","lhs_module":"ProjectTask","lhs_table":"project_task","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"ProjectTask","reverse":"0"};
rel_defs['project_tasks_meetings'] = {"lhs_bean_name":"ProjectTask","rhs_bean_name":"Meeting","id":"ee8c6ab0-4390-0fe7-ef3f-536ca7a5164d","relationship_name":"project_tasks_meetings","lhs_module":"ProjectTask","lhs_table":"project_task","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"ProjectTask","reverse":"0"};
rel_defs['project_tasks_calls'] = {"lhs_bean_name":"ProjectTask","rhs_bean_name":"Call","id":"eec40772-e45c-830c-1917-536ca7906cbb","relationship_name":"project_tasks_calls","lhs_module":"ProjectTask","lhs_table":"project_task","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"ProjectTask","reverse":"0"};
rel_defs['emails_project_task_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"ProjectTask","id":"9c274d03-ae39-90a9-4ff3-536ca7a87813","relationship_name":"emails_project_task_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"ProjectTask","reverse":"0"};
rel_defs['project_tasks_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"ProjectTask","id":"efa527e4-943e-ef3a-44fc-536ca765cf2e","relationship_name":"project_tasks_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['project_tasks_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"ProjectTask","id":"ef6aa624-9126-73bc-87d9-536ca7eab3f2","relationship_name":"project_tasks_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['project_tasks_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"ProjectTask","id":"ef328564-5a4d-21ff-0e65-536ca734098f","relationship_name":"project_tasks_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"ProjectTask","rhs_table":"project_task","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaigns_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Campaign","id":"f1236d9f-2264-122b-f5a3-536ca7db88a8","relationship_name":"campaigns_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Campaigns","rhs_table":"campaigns","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaigns_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Campaign","id":"f0eb15e1-116f-8896-b1f7-536ca735071e","relationship_name":"campaigns_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Campaigns","rhs_table":"campaigns","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaigns_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Campaign","id":"f158d84e-9e2b-bbdb-8557-536ca7bce22e","relationship_name":"campaigns_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Campaigns","rhs_table":"campaigns","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaigns_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Campaign","id":"f1ff0d8b-24cb-d25c-dee9-536ca7c249ae","relationship_name":"campaigns_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Campaigns","rhs_table":"campaigns","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_campaigns'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"Campaign","id":"9e5d0fee-3ca8-644e-c7aa-536ca702366a","relationship_name":"prospect_list_campaigns","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Campaigns","rhs_table":"campaigns","rhs_key":"id","join_table":"prospect_list_campaigns","join_key_lhs":"prospect_list_id","join_key_rhs":"campaign_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_email_marketing'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"EmailMarketing","id":"f3419d47-a3c9-3f9d-6635-536ca7f812c6","relationship_name":"campaign_email_marketing","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"EmailMarketing","rhs_table":"email_marketing","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_emailman'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"EmailMan","id":"f3789577-36f3-04a2-a378-536ca7c2534e","relationship_name":"campaign_emailman","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"EmailMan","rhs_table":"emailman","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_campaignlog'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"CampaignLog","id":"f3ad384d-ac93-4400-9370-536ca7da9533","relationship_name":"campaign_campaignlog","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"CampaignLog","rhs_table":"campaign_log","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_campaigntrakers'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"CampaignTracker","id":"3a2f5af9-f99d-dab3-5320-536ca76655cd","relationship_name":"campaign_campaigntrakers","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"CampaignTrackers","rhs_table":"campaign_trkrs","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_opportunities'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"Opportunity","id":"f30b02ad-a3ee-be87-5968-536ca70dae64","relationship_name":"campaign_opportunities","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_contacts'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"Contact","id":"f269c3ee-56dc-cb52-4227-536ca748f63c","relationship_name":"campaign_contacts","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaign_accounts'] = {"lhs_bean_name":"Campaign","rhs_bean_name":"Account","id":"f2355fea-e41a-b830-c576-536ca7f344a2","relationship_name":"campaign_accounts","lhs_module":"Campaigns","lhs_table":"campaigns","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"campaign_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaignlog_contact'] = {"lhs_bean_name":"CampaignLog","rhs_bean_name":"Contact","id":"7709caa3-74c3-ff50-572e-536ca7312459","relationship_name":"campaignlog_contact","lhs_module":"CampaignLog","lhs_table":"campaign_log","lhs_key":"related_id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['campaignlog_lead'] = {"lhs_bean_name":"CampaignLog","rhs_bean_name":"Lead","id":"773fd791-0405-9b36-4d62-536ca74abb4a","relationship_name":"campaignlog_lead","lhs_module":"CampaignLog","lhs_table":"campaign_log","lhs_key":"related_id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Contact","id":"dc1bec54-c430-414f-bc15-536ca76ee71f","relationship_name":"contacts_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Contact","id":"dbdb28f4-f828-a3b3-f29d-536ca7ab180c","relationship_name":"contacts_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Contact","id":"dc52b971-a843-d828-1554-536ca710c0ab","relationship_name":"contacts_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Contact","id":"dcf7925c-0110-6b3d-1fab-536ca74dc990","relationship_name":"contacts_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contacts_email_addresses_primary'] = {"lhs_bean_name":"Contact","rhs_bean_name":"EmailAddress","id":"dd6739cd-202a-fac5-42a1-536ca7409ba2","relationship_name":"contacts_email_addresses_primary","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"EmailAddresses","rhs_table":"email_addresses","rhs_key":"id","join_table":"email_addr_bean_rel","join_key_lhs":"bean_id","join_key_rhs":"email_address_id","relationship_type":"many-to-many","relationship_role_column":"primary_address","relationship_role_column_value":"1","reverse":"0"};
rel_defs['accounts_contacts'] = {"lhs_bean_name":"Account","rhs_bean_name":"Contact","id":"98af0e43-80a1-80d1-73b2-536ca79273b4","relationship_name":"accounts_contacts","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"accounts_contacts","join_key_lhs":"account_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contact_direct_reports'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Contact","id":"dd9f945f-c508-d610-16e6-536ca7c39abb","relationship_name":"contact_direct_reports","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"reports_to_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunities_contacts'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Contact","id":"9d91ba3c-6e32-60d2-a991-536ca714b527","relationship_name":"opportunities_contacts","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"opportunities_contacts","join_key_lhs":"opportunity_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_contacts'] = {"lhs_bean_name":"Call","rhs_bean_name":"Contact","id":"99227731-9f1d-ec84-15f0-536ca7c14603","relationship_name":"calls_contacts","lhs_module":"Calls","lhs_table":"calls","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"calls_contacts","join_key_lhs":"call_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_contacts_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Contact","id":"9b2c5fe9-6a31-34f7-521b-536ca7eb0ab7","relationship_name":"emails_contacts_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Contacts","reverse":"0"};
rel_defs['documents_contacts'] = {"lhs_bean_name":"Document","rhs_bean_name":"Contact","id":"a507747f-97cf-2a70-f94c-536ca7c62a55","relationship_name":"documents_contacts","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"documents_contacts","join_key_lhs":"document_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contact_leads'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Lead","id":"ddd50938-3456-d23c-b25b-536ca7a55fe5","relationship_name":"contact_leads","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"contact_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contact_products'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Product","id":"dead96ad-4733-8143-9c0e-536ca74f678d","relationship_name":"contact_products","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"contact_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_contacts'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Contact","id":"a2c74cd2-3a4b-f9a6-4cc3-536ca71c9a0a","relationship_name":"contracts_contacts","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"contracts_contacts","join_key_lhs":"contract_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_contacts'] = {"lhs_bean_name":"Meeting","rhs_bean_name":"Contact","id":"9cf7d5cb-02db-8090-4b65-536ca7308ab0","relationship_name":"meetings_contacts","lhs_module":"Meetings","lhs_table":"meetings","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"meetings_contacts","join_key_lhs":"meeting_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contact_notes'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Note","id":"de0f6c50-1f52-5952-39b9-536ca75dae88","relationship_name":"contact_notes","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"contact_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_contacts_shipto'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Contact","id":"a20321dc-79c3-b6ac-952d-536ca77811e8","relationship_name":"quotes_contacts_shipto","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"quotes_contacts","join_key_lhs":"quote_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"contact_role","relationship_role_column_value":"Ship To","reverse":"0"};
rel_defs['contact_tasks'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Task","id":"de43ece7-b5a8-e86c-308b-536ca7c1c96d","relationship_name":"contact_tasks","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"contact_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contact_tasks_parent'] = {"lhs_bean_name":"Contact","rhs_bean_name":"Task","id":"de77a533-3b55-8fa0-27b1-536ca7be38ee","relationship_name":"contact_tasks_parent","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Contacts","reverse":"0"};
rel_defs['contact_campaign_log'] = {"lhs_bean_name":"Contact","rhs_bean_name":"CampaignLog","id":"dee2a6ae-195a-8831-c93a-536ca7d869fe","relationship_name":"contact_campaign_log","lhs_module":"Contacts","lhs_table":"contacts","lhs_key":"id","rhs_module":"CampaignLog","rhs_table":"campaign_log","rhs_key":"target_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_contacts'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"Contact","id":"9e927250-4e49-a84d-0155-536ca756d34c","relationship_name":"prospect_list_contacts","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"prospect_lists_prospects","join_key_lhs":"prospect_list_id","join_key_rhs":"related_id","relationship_type":"many-to-many","relationship_role_column":"related_type","relationship_role_column_value":"Contacts","reverse":"0"};
rel_defs['accounts_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Account","id":"e12f4c5e-7a3c-2680-a405-536ca7da1c31","relationship_name":"accounts_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Account","id":"e0f9a32b-fe3f-e979-2434-536ca70a82b7","relationship_name":"accounts_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Account","id":"e163f35c-c0b3-c977-2965-536ca7307201","relationship_name":"accounts_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Account","id":"e2092df2-e399-bd31-0434-536ca7696734","relationship_name":"accounts_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_email_addresses_primary'] = {"lhs_bean_name":"Account","rhs_bean_name":"EmailAddress","id":"e275079d-1c73-388e-d600-536ca772ac8c","relationship_name":"accounts_email_addresses_primary","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"EmailAddresses","rhs_table":"email_addresses","rhs_key":"id","join_table":"email_addr_bean_rel","join_key_lhs":"bean_id","join_key_rhs":"email_address_id","relationship_type":"many-to-many","relationship_role_column":"primary_address","relationship_role_column_value":"1","reverse":"0"};
rel_defs['member_accounts'] = {"lhs_bean_name":"Account","rhs_bean_name":"Account","id":"e2a94a08-3911-3e16-3cb3-536ca78f1ddc","relationship_name":"member_accounts","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['account_tasks'] = {"lhs_bean_name":"Account","rhs_bean_name":"Task","id":"e3144b8e-5765-ec71-8068-536ca7fee275","relationship_name":"account_tasks","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['account_notes'] = {"lhs_bean_name":"Account","rhs_bean_name":"Note","id":"e34b17d9-4c96-988a-5490-536ca73f2427","relationship_name":"account_notes","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['account_meetings'] = {"lhs_bean_name":"Account","rhs_bean_name":"Meeting","id":"e37f4282-db0b-89a5-1026-536ca787e90e","relationship_name":"account_meetings","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['account_calls'] = {"lhs_bean_name":"Account","rhs_bean_name":"Call","id":"e3b2ec78-6665-9566-8834-536ca7e1bddd","relationship_name":"account_calls","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['emails_accounts_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Account","id":"9a99b893-65f9-e64f-7bb8-536ca7af0474","relationship_name":"emails_accounts_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['documents_accounts'] = {"lhs_bean_name":"Document","rhs_bean_name":"Account","id":"a4d83515-ee6e-cfe0-e85e-536ca7bf8c5f","relationship_name":"documents_accounts","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"documents_accounts","join_key_lhs":"document_id","join_key_rhs":"account_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['accounts_opportunities'] = {"lhs_bean_name":"Account","rhs_bean_name":"Opportunity","id":"98e7e70c-ad46-8073-be4b-536ca7e8a52c","relationship_name":"accounts_opportunities","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"accounts_opportunities","join_key_lhs":"account_id","join_key_rhs":"opportunity_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_billto_accounts'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Account","id":"a1a20f34-88e4-957d-d030-536ca71af64d","relationship_name":"quotes_billto_accounts","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"quotes_accounts","join_key_lhs":"quote_id","join_key_rhs":"account_id","relationship_type":"many-to-many","relationship_role_column":"account_role","relationship_role_column_value":"Bill To","reverse":"0"};
rel_defs['quotes_shipto_accounts'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Account","id":"a1ce5618-a6e0-7cd5-1123-536ca739a744","relationship_name":"quotes_shipto_accounts","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"quotes_accounts","join_key_lhs":"quote_id","join_key_rhs":"account_id","relationship_type":"many-to-many","relationship_role_column":"account_role","relationship_role_column_value":"Ship To","reverse":"0"};
rel_defs['account_campaign_log'] = {"lhs_bean_name":"Account","rhs_bean_name":"CampaignLog","id":"e452ad41-2979-ed83-dcea-536ca7ae9944","relationship_name":"account_campaign_log","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"CampaignLog","rhs_table":"campaign_log","rhs_key":"target_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['products_accounts'] = {"lhs_bean_name":"Account","rhs_bean_name":"Product","id":"8f6de751-ac18-4166-f149-536ca7683135","relationship_name":"products_accounts","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"account_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['account_contracts'] = {"lhs_bean_name":"Account","rhs_bean_name":"Contract","id":"5c4cbf8f-59ef-45e3-8389-536ca79edb66","relationship_name":"account_contracts","lhs_module":"Accounts","lhs_table":"accounts","lhs_key":"id","rhs_module":"Contracts","rhs_table":"contracts","rhs_key":"account_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_accounts'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"Account","id":"9f44759b-c4b5-b8d8-ff03-536ca713931b","relationship_name":"prospect_list_accounts","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Accounts","rhs_table":"accounts","rhs_key":"id","join_table":"prospect_lists_prospects","join_key_lhs":"prospect_list_id","join_key_rhs":"related_id","relationship_type":"many-to-many","relationship_role_column":"related_type","relationship_role_column_value":"Accounts","reverse":"0"};
rel_defs['opportunities_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Opportunity","id":"e61ac4f9-3d91-9c89-a494-536ca73d26c8","relationship_name":"opportunities_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunities_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Opportunity","id":"e5e2f2f1-7555-320b-3baa-536ca70480f0","relationship_name":"opportunities_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunities_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Opportunity","id":"e651c868-d93d-caaa-075d-536ca744f47d","relationship_name":"opportunities_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunities_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Opportunity","id":"e6f425c6-81cf-5ad1-011c-536ca7740e2a","relationship_name":"opportunities_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunity_tasks'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Task","id":"e79a7fb3-f4c2-ea49-9cd2-536ca72515af","relationship_name":"opportunity_tasks","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Opportunities","reverse":"0"};
rel_defs['opportunity_notes'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Note","id":"e7d24fbe-aa5f-11d1-5087-536ca7efad27","relationship_name":"opportunity_notes","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Opportunities","reverse":"0"};
rel_defs['opportunity_meetings'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Meeting","id":"e766783b-8626-334a-d4d8-536ca7d8028b","relationship_name":"opportunity_meetings","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Opportunities","reverse":"0"};
rel_defs['opportunity_calls'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Call","id":"e72ed9d7-f8fe-0300-37c5-536ca71fd76a","relationship_name":"opportunity_calls","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Opportunities","reverse":"0"};
rel_defs['emails_opportunities_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Opportunity","id":"9b94cfbf-6fbb-2e3f-c706-536ca712e8dd","relationship_name":"emails_opportunities_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Opportunities","reverse":"0"};
rel_defs['documents_opportunities'] = {"lhs_bean_name":"Document","rhs_bean_name":"Opportunity","id":"a5369278-4c79-d0ad-b93b-536ca7757d74","relationship_name":"documents_opportunities","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"documents_opportunities","join_key_lhs":"document_id","join_key_rhs":"opportunity_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_opportunities'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Opportunity","id":"a2641423-9adb-d3e4-0bd2-536ca74cfc77","relationship_name":"quotes_opportunities","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"quotes_opportunities","join_key_lhs":"quote_id","join_key_rhs":"opportunity_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunity_leads'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Lead","id":"e83b01a2-d4a0-8fc8-c3e1-536ca7fc6c7d","relationship_name":"opportunity_leads","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"id","rhs_module":"Leads","rhs_table":"leads","rhs_key":"opportunity_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['opportunity_currencies'] = {"lhs_bean_name":"Opportunity","rhs_bean_name":"Currency","id":"e86db858-83ad-d24b-769a-536ca78eea47","relationship_name":"opportunity_currencies","lhs_module":"Opportunities","lhs_table":"opportunities","lhs_key":"currency_id","rhs_module":"Currencies","rhs_table":"currencies","rhs_key":"id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_opportunities'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Opportunity","id":"a2979b73-a04d-3006-5735-536ca76f8e37","relationship_name":"contracts_opportunities","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Opportunities","rhs_table":"opportunities","rhs_key":"id","join_table":"contracts_opportunities","join_key_lhs":"contract_id","join_key_rhs":"opportunity_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['notes_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Note","id":"546d0147-b234-48d7-290a-536ca7e087ab","relationship_name":"notes_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['notes_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Note","id":"5f98031b-a460-9c7c-48db-536ca794c04f","relationship_name":"notes_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['notes_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Note","id":"668f07bc-a0d7-a6df-3ad2-536ca7b182f6","relationship_name":"notes_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['notes_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Note","id":"63220263-ef0d-0d8d-89c3-536ca7255a3b","relationship_name":"notes_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['product_notes'] = {"lhs_bean_name":"Product","rhs_bean_name":"Note","id":"8f31386d-5712-1e6e-ba72-536ca7cf3106","relationship_name":"product_notes","lhs_module":"Products","lhs_table":"products","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Products","reverse":"0"};
rel_defs['quote_notes'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Note","id":"6abf7f45-c7e1-3ff3-b2ac-536ca79303bc","relationship_name":"quote_notes","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Quotes","reverse":"0"};
rel_defs['contract_notes'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Note","id":"5c1600fd-0565-cec8-5138-536ca7a7e6d8","relationship_name":"contract_notes","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Contracts","reverse":"0"};
rel_defs['emails_notes_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Note","id":"c02b71eb-1b6b-1426-957c-536ca71a6e44","relationship_name":"emails_notes_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_notes'] = {"lhs_bean_name":"Meeting","rhs_bean_name":"Note","id":"c337ced7-d939-9612-aca6-536ca776cf64","relationship_name":"meetings_notes","lhs_module":"Meetings","lhs_table":"meetings","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Meetings","reverse":"0"};
rel_defs['calls_notes'] = {"lhs_bean_name":"Call","rhs_bean_name":"Note","id":"94d40fbc-ea17-3e69-3a70-536ca7ecf83b","relationship_name":"calls_notes","lhs_module":"Calls","lhs_table":"calls","lhs_key":"id","rhs_module":"Notes","rhs_table":"notes","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Call","id":"83600edb-8f64-fcc2-b04f-536ca707b2b9","relationship_name":"calls_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Call","id":"7f6e0cd8-ad53-f44c-59e4-536ca7568d2d","relationship_name":"calls_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Call","id":"86f30992-f169-14ef-ef9d-536ca7755b2e","relationship_name":"calls_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Call","id":"917c0250-4a51-4a71-28d8-536ca7be3a76","relationship_name":"calls_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['calls_users'] = {"lhs_bean_name":"Call","rhs_bean_name":"User","id":"9952c918-8d36-75b5-ff8b-536ca761173c","relationship_name":"calls_users","lhs_module":"Calls","lhs_table":"calls","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"calls_users","join_key_lhs":"call_id","join_key_rhs":"user_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Email","id":"bf39c3c7-0651-078e-c33a-536ca7cca9d1","relationship_name":"emails_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Emails","rhs_table":"emails","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Email","id":"bfecf919-939c-c68a-54c8-536ca7777376","relationship_name":"emails_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Emails","rhs_table":"emails","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Email","id":"bfb2ebba-29e3-7375-f0d1-536ca7704877","relationship_name":"emails_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Emails","rhs_table":"emails","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Email","id":"bf75bf39-ecaf-4f36-0cb1-536ca75037ee","relationship_name":"emails_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Emails","rhs_table":"emails","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['emails_quotes'] = {"lhs_bean_name":"Email","rhs_bean_name":"Quote","id":"9cbf38d6-7071-ff62-649b-536ca7b73510","relationship_name":"emails_quotes","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Quotes","reverse":"0"};
rel_defs['emails_tasks_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"Task","id":"9bc73413-4bd5-b64a-4882-536ca7a325c6","relationship_name":"emails_tasks_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Tasks","reverse":"0"};
rel_defs['emails_users_rel'] = {"lhs_bean_name":"Email","rhs_bean_name":"User","id":"9bf785db-c77a-6481-bd2f-536ca70f05b2","relationship_name":"emails_users_rel","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"emails_beans","join_key_lhs":"email_id","join_key_rhs":"bean_id","relationship_type":"many-to-many","relationship_role_column":"bean_module","relationship_role_column_value":"Users","reverse":"0"};
rel_defs['meetings_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Meeting","id":"c2272c9c-5b35-3b29-ba3e-536ca72815c4","relationship_name":"meetings_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Meeting","id":"c1ea498a-6a65-bb71-14eb-536ca7a7dd5a","relationship_name":"meetings_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Meeting","id":"c25dba96-dded-0dea-dbf5-536ca76571cf","relationship_name":"meetings_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Meeting","id":"c3024a9d-a289-936a-3544-536ca78b2d52","relationship_name":"meetings_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['meetings_users'] = {"lhs_bean_name":"Meeting","rhs_bean_name":"User","id":"9d2af3b8-0075-224e-3189-536ca75c6dbf","relationship_name":"meetings_users","lhs_module":"Meetings","lhs_table":"meetings","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"meetings_users","join_key_lhs":"meeting_id","join_key_rhs":"user_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tasks_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Task","id":"c4a6dc8f-c0ae-4627-961d-536ca7220136","relationship_name":"tasks_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tasks_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Task","id":"c46a7b93-ef6d-b442-b5d8-536ca7b74172","relationship_name":"tasks_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tasks_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Task","id":"c4dec3b1-6024-2110-5b69-536ca76f402d","relationship_name":"tasks_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tasks_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Task","id":"c5800a65-e31a-df9f-3e62-536ca7cb84a8","relationship_name":"tasks_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quote_tasks'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Task","id":"6a86abc4-17f8-f07f-4bd5-536ca7f5f54f","relationship_name":"quote_tasks","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Tasks","rhs_table":"tasks","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Quotes","reverse":"0"};
rel_defs['team_memberships'] = {"lhs_bean_name":"Team","rhs_bean_name":"User","id":"5d0b6980-519e-3f43-f864-536ca78bfd7a","relationship_name":"team_memberships","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"team_memberships","join_key_lhs":"team_id","join_key_rhs":"user_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['user_direct_reports'] = {"lhs_bean_name":"User","rhs_bean_name":"User","id":"751eb3f5-1e79-0da7-695a-536ca7ef2114","relationship_name":"user_direct_reports","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"reports_to_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['users_email_addresses_primary'] = {"lhs_bean_name":"User","rhs_bean_name":"EmailAddress","id":"75b728ab-476d-52a8-e880-536ca7a4973c","relationship_name":"users_email_addresses_primary","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"EmailAddresses","rhs_table":"email_addresses","rhs_key":"id","join_table":"email_addr_bean_rel","join_key_lhs":"bean_id","join_key_rhs":"email_address_id","relationship_type":"many-to-many","relationship_role_column":"primary_address","relationship_role_column_value":"1","reverse":"0"};
rel_defs['acl_roles_users'] = {"lhs_bean_name":"ACLRole","rhs_bean_name":"User","id":"a3e7e385-2241-669e-d725-536ca79c8544","relationship_name":"acl_roles_users","lhs_module":"ACLRoles","lhs_table":"acl_roles","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"acl_roles_users","join_key_lhs":"role_id","join_key_rhs":"user_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['prospect_list_users'] = {"lhs_bean_name":"ProspectList","rhs_bean_name":"User","id":"9f1925b6-9463-db9e-3500-536ca7910c1c","relationship_name":"prospect_list_users","lhs_module":"ProspectLists","lhs_table":"prospect_lists","lhs_key":"id","rhs_module":"Users","rhs_table":"users","rhs_key":"id","join_table":"prospect_lists_prospects","join_key_lhs":"prospect_list_id","join_key_rhs":"related_id","relationship_type":"many-to-many","relationship_role_column":"related_type","relationship_role_column_value":"Users","reverse":"0"};
rel_defs['users_holidays'] = {"lhs_bean_name":"User","rhs_bean_name":"Holiday","id":"a38bab51-51e9-b7dd-1b37-536ca7d3c21e","relationship_name":"users_holidays","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Holidays","rhs_table":"holidays","rhs_key":"person_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"related_module","relationship_role_column_value":"","reverse":"0"};
rel_defs['eapm_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"EAPM","id":"364fbfc7-abea-6c17-649f-536ca7f1f6f7","relationship_name":"eapm_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"EAPM","rhs_table":"eapm","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['documents_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Document","id":"9d5d2aa1-d328-618b-1500-536ca706cd8a","relationship_name":"documents_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['documents_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Document","id":"9d20403f-8c32-0c1b-4e05-536ca78e1bc8","relationship_name":"documents_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['documents_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Document","id":"9d9792a3-e843-8d44-65c4-536ca7cbd41c","relationship_name":"documents_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['documents_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Document","id":"9e41493a-e684-8d83-3a3b-536ca74db822","relationship_name":"documents_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['document_revisions'] = {"lhs_bean_name":"Document","rhs_bean_name":"DocumentRevision","id":"9e793e08-d0ba-94ad-35e6-536ca79a8c69","relationship_name":"document_revisions","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"DocumentRevisions","rhs_table":"document_revisions","rhs_key":"document_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_documents'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Document","id":"a4505b32-6525-a9ab-f219-536ca745c982","relationship_name":"contracts_documents","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"id","join_table":"linked_documents","join_key_lhs":"parent_id","join_key_rhs":"document_id","relationship_type":"many-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Contracts","reverse":"0"};
rel_defs['leads_documents'] = {"lhs_bean_name":"Lead","rhs_bean_name":"Document","id":"a47d71b3-c6b7-a030-611d-536ca77dc300","relationship_name":"leads_documents","lhs_module":"Leads","lhs_table":"leads","lhs_key":"id","rhs_module":"Documents","rhs_table":"documents","rhs_key":"id","join_table":"linked_documents","join_key_lhs":"parent_id","join_key_rhs":"document_id","relationship_type":"many-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Leads","reverse":"0"};
rel_defs['documents_quotes'] = {"lhs_bean_name":"Document","rhs_bean_name":"Quote","id":"a5f4231b-ccb6-7d7e-c5b4-536ca7ecbafa","relationship_name":"documents_quotes","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"id","join_table":"documents_quotes","join_key_lhs":"document_id","join_key_rhs":"quote_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['documents_products'] = {"lhs_bean_name":"Document","rhs_bean_name":"Product","id":"a5c3dece-28db-090d-c5d8-536ca79c6826","relationship_name":"documents_products","lhs_module":"Documents","lhs_table":"documents","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"id","join_table":"documents_products","join_key_lhs":"document_id","join_key_rhs":"product_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Quote","id":"6971f7d2-f5cb-4182-8b8f-536ca7203f60","relationship_name":"quotes_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Quote","id":"6938ca78-7c00-dbcb-0671-536ca70110c7","relationship_name":"quotes_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Quote","id":"69a88e83-938a-4582-9122-536ca727eaf3","relationship_name":"quotes_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Quote","id":"6a4e11de-e74b-3a73-ef87-536ca77f1a7b","relationship_name":"quotes_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quote_meetings'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Meeting","id":"6af50092-b672-61de-3fa3-536ca7e23008","relationship_name":"quote_meetings","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Meetings","rhs_table":"meetings","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Quotes","reverse":"0"};
rel_defs['quote_calls'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Call","id":"6b29ec64-11ac-d8da-4264-536ca7f1d315","relationship_name":"quote_calls","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Calls","rhs_table":"calls","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Quotes","reverse":"0"};
rel_defs['quote_products'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Product","id":"6ba47675-a0be-06b3-dd6b-536ca702af91","relationship_name":"quote_products","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"quote_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['quotes_contacts_billto'] = {"lhs_bean_name":"Quote","rhs_bean_name":"Contact","id":"a2317fac-70f3-0874-3932-536ca7352cce","relationship_name":"quotes_contacts_billto","lhs_module":"Quotes","lhs_table":"quotes","lhs_key":"id","rhs_module":"Contacts","rhs_table":"contacts","rhs_key":"id","join_table":"quotes_contacts","join_key_lhs":"quote_id","join_key_rhs":"contact_id","relationship_type":"many-to-many","relationship_role_column":"contact_role","relationship_role_column_value":"Bill To","reverse":"0"};
rel_defs['product_bundle_quote'] = {"lhs_bean_name":"ProductBundle","rhs_bean_name":"Quote","id":"a13fb6c9-b6a0-1dbc-ebd9-536ca76c5ee8","relationship_name":"product_bundle_quote","lhs_module":"ProductBundles","lhs_table":"product_bundles","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"id","join_table":"product_bundle_quote","join_key_lhs":"bundle_id","join_key_rhs":"quote_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_quotes'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Quote","id":"a2f747b5-a65d-3e65-b3b6-536ca786f6f1","relationship_name":"contracts_quotes","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Quotes","rhs_table":"quotes","rhs_key":"id","join_table":"contracts_quotes","join_key_lhs":"contract_id","join_key_rhs":"quote_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['products_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Product","id":"8e23adf5-b249-b0e8-8cba-536ca72fa480","relationship_name":"products_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['products_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Product","id":"8dcb7cab-74f6-00f9-17fc-536ca78910ba","relationship_name":"products_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['products_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Product","id":"8eefea3b-27b3-9d82-e240-536ca727e964","relationship_name":"products_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['product_product'] = {"lhs_bean_name":"Product","rhs_bean_name":"Product","id":"a171de0d-90f6-879f-a374-536ca7844cbf","relationship_name":"product_product","lhs_module":"Products","lhs_table":"products","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"id","join_table":"product_product","join_key_lhs":"parent_id","join_key_rhs":"child_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"1"};
rel_defs['contracts_products'] = {"lhs_bean_name":"Contract","rhs_bean_name":"Product","id":"a329ae22-08c5-2b17-3673-536ca7829b3f","relationship_name":"contracts_products","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"id","join_table":"contracts_products","join_key_lhs":"contract_id","join_key_rhs":"product_id","relationship_type":"many-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['product_categories'] = {"lhs_bean_name":"ProductCategory","rhs_bean_name":"Product","id":"8fa67622-cb1e-d032-b9ae-536ca731b038","relationship_name":"product_categories","lhs_module":"ProductCategories","lhs_table":"product_categories","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"category_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['product_types'] = {"lhs_bean_name":"ProductType","rhs_bean_name":"Product","id":"8fe3b7ea-2de4-b1c0-62b5-536ca76d5149","relationship_name":"product_types","lhs_module":"ProductTypes","lhs_table":"product_types","lhs_key":"id","rhs_module":"Products","rhs_table":"products","rhs_key":"type_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['forecasts_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Forecast","id":"563760cc-6c03-1ac2-a73a-536ca7e2781e","relationship_name":"forecasts_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Forecasts","rhs_table":"forecasts","rhs_key":"user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"Contract","id":"5ab81bf7-9b3e-d9da-7037-536ca7d7e721","relationship_name":"contracts_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contracts","rhs_table":"contracts","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Contract","id":"5a7a935d-6086-3825-02c5-536ca7757759","relationship_name":"contracts_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contracts","rhs_table":"contracts","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"Contract","id":"5af0763b-52e5-97b3-06f5-536ca72348c1","relationship_name":"contracts_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"Contracts","rhs_table":"contracts","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"Contract","id":"5ba36596-345a-0fdb-215e-536ca75d2a20","relationship_name":"contracts_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"Contracts","rhs_table":"contracts","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['contracts_contract_types'] = {"lhs_bean_name":"Contract","rhs_bean_name":"ContractType","id":"5bdb8b40-ec7b-5405-6994-536ca75e71aa","relationship_name":"contracts_contract_types","lhs_module":"Contracts","lhs_table":"contracts","lhs_key":"type","rhs_module":"ContractTypes","rhs_table":"contract_types","rhs_key":"id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"type","relationship_role_column_value":"Contracts","reverse":"0"};
rel_defs['kbdocuments_team'] = {"lhs_bean_name":"Team","rhs_bean_name":"KBDocument","id":"975d47a5-9995-6ae5-e97e-536ca783678d","relationship_name":"kbdocuments_team","lhs_module":"Teams","lhs_table":"teams","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"team_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['kbdocument_revisions'] = {"lhs_bean_name":"KBDocument","rhs_bean_name":"KBDocumentRevision","id":"978f070a-3b33-8129-3096-536ca7933b54","relationship_name":"kbdocument_revisions","lhs_module":"KBDocuments","lhs_table":"kbdocuments","lhs_key":"id","rhs_module":"KBDocumentRevisions","rhs_table":"kbdocument_revisions","rhs_key":"kbdocument_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['case_kbdocuments'] = {"lhs_bean_name":"aCase","rhs_bean_name":"KBDocument","id":"98881db5-104b-a213-4eaf-536ca7612824","relationship_name":"case_kbdocuments","lhs_module":"Cases","lhs_table":"cases","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Cases","reverse":"0"};
rel_defs['email_kbdocuments'] = {"lhs_bean_name":"Email","rhs_bean_name":"KBDocument","id":"98c49784-a684-35ec-164c-536ca7b90036","relationship_name":"email_kbdocuments","lhs_module":"Emails","lhs_table":"emails","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"parent_type","relationship_role_column_value":"Emails","reverse":"0"};
rel_defs['kbdocuments_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"KBDocument","id":"97f74875-25c4-7bbe-891b-536ca7acf49f","relationship_name":"kbdocuments_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['kbdocuments_modified_user'] = {"lhs_bean_name":"User","rhs_bean_name":"KBDocument","id":"97c70541-e95d-13a6-f92e-536ca7128379","relationship_name":"kbdocuments_modified_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"modified_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['kb_assigned_user'] = {"lhs_bean_name":"User","rhs_bean_name":"KBDocument","id":"9827c01a-7686-7446-3690-536ca749f1e8","relationship_name":"kb_assigned_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"assigned_user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['kbdoc_approver_user'] = {"lhs_bean_name":"User","rhs_bean_name":"KBDocument","id":"985932f7-0fca-d81e-a342-536ca74f10bc","relationship_name":"kbdoc_approver_user","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"KBDocuments","rhs_table":"kbdocuments","rhs_key":"kbdoc_approver_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['revisions_created_by'] = {"lhs_bean_name":"User","rhs_bean_name":"DocumentRevision","id":"a025971d-7d98-b975-98b0-536ca773785f","relationship_name":"revisions_created_by","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"DocumentRevisions","rhs_table":"document_revisions","rhs_key":"created_by","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['member_categories'] = {"lhs_bean_name":"ProductCategory","rhs_bean_name":"ProductCategory","id":"66203b1e-06b8-94a7-d0d5-536ca743e8c8","relationship_name":"member_categories","lhs_module":"ProductCategories","lhs_table":"product_categories","lhs_key":"id","rhs_module":"ProductCategories","rhs_table":"product_categories","rhs_key":"parent_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tracker_user_id'] = {"lhs_bean_name":"User","rhs_bean_name":"TrackerSession","id":"4aec00fd-a7ae-7a6c-012d-536ca75ceb0a","relationship_name":"tracker_user_id","lhs_module":"Users","lhs_table":"users","lhs_key":"id","rhs_module":"TrackerSessions","rhs_table":"tracker","rhs_key":"user_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-many","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
rel_defs['tracker_monitor_id'] = {"lhs_bean_name":"TrackerPerf","rhs_bean_name":"Tracker","id":"3d7f02c6-ec96-a33c-d75f-536ca71478d2","relationship_name":"tracker_monitor_id","lhs_module":"TrackerPerfs","lhs_table":"tracker_perf","lhs_key":"monitor_id","rhs_module":"Trackers","rhs_table":"tracker","rhs_key":"monitor_id","join_table":"","join_key_lhs":"","join_key_rhs":"","relationship_type":"one-to-one","relationship_role_column":"","relationship_role_column_value":"","reverse":"0"};
var summary_types = {sum:'SUM',avg:'AVG',max:'MAX',min:'MIN'};
var date_summary_types = {day:'Day',month:'Month',year:'Year',quarter:'Quarter'};

// create summary_defs_field and group_by_field_defs for every module

for(module_name in module_defs)
{
	module_defs[module_name].summary_field_defs = new Object();
	// default summary column

	//alert(module_defs[module_name].field_defs.length);
	var got_probability = 0;
	var got_first_name = 0;
	var got_last_name = 0;
	var got_amount = 0;

	module_defs[module_name].summary_field_defs['count'] = { name:'count', vname: 'Count',"group_function":"count",summary_type:'group' };

	for(field_name in module_defs[module_name].field_defs)
	{
		var field_def =  module_defs[module_name].field_defs[field_name];
		// allow those of type 'int' for summary info
		var field_type = field_def.type;
        var field_source = (typeof field_def.source == 'undefined') ? '' : field_def.source;

		if(typeof(field_def.custom_type) != 'undefined')
		{
			field_type = field_def.custom_type;
		}

        // do not allow group bys of text fields or fields not from the db
        if(field_type != 'text' && (field_source != 'non-db' || typeof(field_def.ext2) != 'undefined') && field_def.name != 'full_name') {
		      module_defs[module_name].group_by_field_defs[ field_def.name] = field_def;
        }
        
		if(field_type == 'int' || field_type == 'float' || field_type=='currency' || field_type=='decimal')
		{
			// create a new "column" for each summary type
			for(stype in summary_types)
			{

				module_defs[module_name].summary_field_defs[ field_def.name+':'+stype] = { name: field_def.name+':'+stype, field_def_name: field_def.name, vname: summary_types[stype]+': '+ field_def.vname,group_function:stype,summary_type:'group', field_type:field_type};
			}

		}
		else if(field_type == 'date' || field_type == 'datetime' || field_type == 'datetimecombo')
		{

			// create a new "column" for each datetimecombo summary type
			for(stype in date_summary_types)
			{

				module_defs[module_name].group_by_field_defs[field_def.name+':'+stype] = { name: field_def.name+':'+stype, field_def_name: field_def.name, vname: date_summary_types[stype]+': '+ field_def.vname,column_function:stype,summary_type:'column',field_type:field_type };
			}


//			module_defs[module_name].group_by_field_defs[ field_def.name ] = field_def;
		}

		if(field_def.name == 'amount')
		{
			got_amount = 1;
		}

		if(field_def.name == 'probability')
		{
			got_probability = 1;
		}

	}


	if(got_probability == 1 && got_amount == 1)
	{
		module_defs[module_name].summary_field_defs['weighted_amount'] = { name: 'weighted_amount', vname: 'Weighted Avg Amount', group_function: 'weighted_amount' };
		module_defs[module_name].summary_field_defs['weighted_sum'] = { name: 'weighted_sum', vname: 'Weighted Sum Amount', group_function: 'weighted_sum' };
	}
}

var filter_defs = new Object();
var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'equals',value:'Equals'};
qualifiers[qualifiers.length] = {name:'not_equals_str',value:'Does Not Equal'};
qualifiers[qualifiers.length] = {name:'contains',value:'Contains'};
qualifiers[qualifiers.length] = {name:'does_not_contain',value:'Does Not Contain'};
qualifiers[qualifiers.length] = {name:'starts_with',value:'Starts With'};
qualifiers[qualifiers.length] = {name:'ends_with',value:'Ends With'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['varchar'] = qualifiers;
filter_defs['char'] = qualifiers;
filter_defs['text'] = qualifiers;
filter_defs['email'] = qualifiers;
filter_defs['yim'] = qualifiers;
filter_defs['time'] = qualifiers;
filter_defs['phone'] = qualifiers;
filter_defs['url'] = qualifiers;

var qualifiers_name = new Array();
var is_def = {name:'is',value:'Is'};
var is_not_def = {name:'is_not',value:"Is Not"};
var one_of_def = {name:'one_of',value:'Is One Of'};
var not_one_of_def = {name:'not_one_of',value:'Is Not One Of'};
qualifiers_name = qualifiers_name.concat(qualifiers);
qualifiers_name.unshift(is_not_def);
qualifiers_name.unshift(is_def);
filter_defs['name'] = qualifiers_name;
filter_defs['fullname'] = qualifiers_name;


var qualifiers_name = new Array();
//qualifiers_name = qualifiers_name.concat(qualifiers);
var is_not_empty_def = {name:'not_empty',value:'Is Not Empty'};
var is_empty_def = {name:'empty',value:'Is Empty'};
qualifiers_name.unshift(is_not_empty_def);
qualifiers_name.unshift(is_empty_def);
qualifiers_name.unshift(not_one_of_def);
qualifiers_name.unshift(one_of_def);
qualifiers_name.unshift(is_not_def);
qualifiers_name.unshift(is_def);
filter_defs['user_name'] = qualifiers_name;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'on',value:'On'};
qualifiers[qualifiers.length] = {name:'before',value:'Before'};
qualifiers[qualifiers.length] = {name:'after',value:'After'};
qualifiers[qualifiers.length] = {name:'between_dates',value:'Is Between'};
qualifiers[qualifiers.length] = {name:'not_equals_str',value:'Not On'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};



qualifiers[qualifiers.length] = {name:'tp_yesterday',value:'Yesterday'};
qualifiers[qualifiers.length] = {name:'tp_today',value:'Today'};
qualifiers[qualifiers.length] = {name:'tp_tomorrow',value:'Tomorrow'};
/*
qualifiers[qualifiers.length] = {name:'tp_last_week',value:'Last Week'};
qualifiers[qualifiers.length] = {name:'tp_next_week',value:'Next Week'};
*/
qualifiers[qualifiers.length] = {name:'tp_last_7_days',value:'Last 7 Days'};
qualifiers[qualifiers.length] = {name:'tp_next_7_days',value:'Next 7 Days'};
qualifiers[qualifiers.length] = {name:'tp_last_month',value:'Last Month'};
qualifiers[qualifiers.length] = {name:'tp_this_month',value:'This Month'};
qualifiers[qualifiers.length] = {name:'tp_next_month',value:'Next Month'};
qualifiers[qualifiers.length] = {name:'tp_last_30_days',value:'Last 30 Days'};
qualifiers[qualifiers.length] = {name:'tp_next_30_days',value:'Next 30 Days'};
/*
qualifiers[qualifiers.length] = {name:'tp_last_quarter',value:'Last Quarter'};
qualifiers[qualifiers.length] = {name:'tp_this_quarter',value:'This Quarter'};
*/
qualifiers[qualifiers.length] = {name:'tp_last_year',value:'Last Year'};
qualifiers[qualifiers.length] = {name:'tp_this_year',value:'This Year'};
qualifiers[qualifiers.length] = {name:'tp_next_year',value:'Next Year'};
filter_defs['date'] = qualifiers;
filter_defs['datetime'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'on',value:'On'};
qualifiers[qualifiers.length] = {name:'before',value:'Before'};
qualifiers[qualifiers.length] = {name:'after',value:'After'};
qualifiers[qualifiers.length] = {name:'between_datetimes',value:'Is Between'};
qualifiers[qualifiers.length] = {name:'not_equals_str',value:'Not On'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
qualifiers[qualifiers.length] = {name:'tp_yesterday',value:'Yesterday'};
qualifiers[qualifiers.length] = {name:'tp_today',value:'Today'};
qualifiers[qualifiers.length] = {name:'tp_tomorrow',value:'Tomorrow'};
qualifiers[qualifiers.length] = {name:'tp_last_7_days',value:'Last 7 Days'};
qualifiers[qualifiers.length] = {name:'tp_next_7_days',value:'Next 7 Days'};
qualifiers[qualifiers.length] = {name:'tp_last_month',value:'Last Month'};
qualifiers[qualifiers.length] = {name:'tp_this_month',value:'This Month'};
qualifiers[qualifiers.length] = {name:'tp_next_month',value:'Next Month'};
qualifiers[qualifiers.length] = {name:'tp_last_30_days',value:'Last 30 Days'};
qualifiers[qualifiers.length] = {name:'tp_next_30_days',value:'Next 30 Days'};

qualifiers[qualifiers.length] = {name:'tp_last_year',value:'Last Year'};
qualifiers[qualifiers.length] = {name:'tp_this_year',value:'This Year'};
qualifiers[qualifiers.length] = {name:'tp_next_year',value:'Next Year'};
filter_defs['datetimecombo'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'equals',value:'Equals'};
qualifiers[qualifiers.length] = {name:'not_equals',value:'Does Not Equal'};
qualifiers[qualifiers.length] = {name:'less',value:'Less Than'};
qualifiers[qualifiers.length] = {name:'greater',value:'Greater Than'};
qualifiers[qualifiers.length] = {name:'between',value:'Is Between'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['int'] = qualifiers;
filter_defs['float'] = qualifiers;
filter_defs['decimal'] = qualifiers;
filter_defs['currency'] = qualifiers;
filter_defs['num'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'is',value:'Is'};
qualifiers[qualifiers.length] = {name:'is_not',value:"Is Not"};
qualifiers[qualifiers.length] = {name:'one_of',value:'Is One Of'};
qualifiers[qualifiers.length] = {name:'not_one_of',value:"Is Not One Of"};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['enum'] = qualifiers;
filter_defs['radioenum'] = qualifiers;
filter_defs['parent_type'] = qualifiers;


var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'is',value:'Is'};
qualifiers[qualifiers.length] = {name:'is_not',value:"Is Not"};
qualifiers[qualifiers.length] = {name:'one_of',value:'Is One Of'};
qualifiers[qualifiers.length] = {name:'not_one_of',value:'Is Not One Of'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['multienum'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'is',value:'Is'};
qualifiers[qualifiers.length] = {name:'is_not',value:"Is Not"};
qualifiers[qualifiers.length] = {name:'one_of',value:'Is One Of'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['assigned_user_name'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'is',value:'Is'};
qualifiers[qualifiers.length] = {name:'is_not',value:"Is Not"};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['relate'] = qualifiers;
filter_defs['id'] = qualifiers;

var qualifiers =  new Array();
qualifiers[qualifiers.length] = {name:'equals',value:'Equals'};
qualifiers[qualifiers.length] = {name:'empty',value:'Is Empty'};
qualifiers[qualifiers.length] = {name:'not_empty',value:'Is Not Empty'};
filter_defs['bool'] = qualifiers;

var date_group_defs =  new Array();
date_group_defs[date_group_defs.length] = {name:'day', value:'By Day'};
date_group_defs[date_group_defs.length] = {name:'month', value:'By Month'};
date_group_defs[date_group_defs.length] = {name:'year', value:'By Year'};
date_group_defs[date_group_defs.length] = {name:'quarter', value:'By Quarter'};

var qualifiers = new Array();
qualifiers[qualifiers.length] = {name:'any',value:'Any'};
qualifiers[qualifiers.length] = {name:'all',value:'At Least'};
qualifiers[qualifiers.length] = {name:'exact',value:'Exact'};
filter_defs['team_set_id'] = qualifiers;

function in_array(n, h){
    var i = 0;
    while (i < h.length) {
        if (n == h[i]) return true;
        i++;
    }
    return false;
}

for(i in module_defs) {
    if(!in_array(i, ACLAllowedModules)) {
        delete module_defs[i];
    }
}
