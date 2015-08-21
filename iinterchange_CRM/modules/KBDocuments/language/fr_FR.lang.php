<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$mod_strings = array (
	'LBL_MODULE_NAME'										=> 'KBDocuments',
	'LBL_MODULE_TITLE'										=> 'Base de Connaissances - Article',
	'LNK_NEW_ARTICLE'										=> 'Créer un Article',
	'LNK_KBDOCUMENT_LIST'									=> 'Liste des Documents',
	'LBL_DOC_REV_HEADER'									=> 'Versions',
	'LBL_SEARCH_FORM_TITLE'									=> 'Recherche Document',
	'LBL_KBDOC_TAGS'										=> 'Tags:',
	'LBL_KBDOC_BODY'										=> 'Corps:',
	'LBL_KBDOC_APPROVED_BY'									=> 'Approuvé par:',
	'LBL_KBDOC_ATTACHMENT'									=> 'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE'									=> 'Télécharger les Pièces Jointes:',
	'LBL_SEND_EMAIL'										=> 'Envoyer par Email',
	'LBL_SELECT_TAG_BUTTON_TITLE'							=> 'Sélectionner',
	'LBL_ATTACHMENTS'										=> 'Pièces Jointes:',
	'LBL_EMBEDED_IMAGES'									=> 'Images embarquées:',
	'LBL_SHOW_ARTICLE_DETAILS'								=> 'Plus d&#39;informations',
	'LBL_HIDE_ARTICLE_DETAILS'								=> 'Moins d&#39;informations',
	'LBL_TAGS'												=> 'Tags:',
	'LBL_NOT_AN_ADMIN_USER'									=> 'Pas administrateur',
	'LBL_NOT_A_VALID_FILE'									=> 'Fichier invalide',
	'LBL_SELECT_A_NODE_FROM_TREE'							=> 'Créer un nouveau Tag',
	'LBL_SEARCH'											=> 'Rechercher',
	'LBL_NEW_TAG_NAME'										=> 'Nom du nouveau Tag:',
	'LBL_ID'												=> 'ID',
	'LBL_KBDOCUMENT_ID'										=> 'ID du Document',
	'LBL_ARTICLE_TITLE'										=> 'Titre:',
	'LBL_ARTICLE_AUTHOR'									=> 'Auteur:',
	'LBL_ARTICLE_APPROVED_BY'								=> 'Approbateur:',
	'LBL_ARTICLE_BODY'										=> 'Corps de l&#39;Article:',
	'LBL_NAME'												=> 'Nom du Document:',
	'LBL_DESCRIPTION'										=> 'Description',
	'LBL_CATEGORY'											=> 'Catégorie',
	'LBL_SUBCATEGORY'										=> 'Sous-catégorie',
	'LBL_STATUS'											=> 'Statut',
	'LBL_CREATED_BY'										=> 'Créer par',
	'LBL_DATE_ENTERED'										=> 'Date de création',
	'LBL_DATEENTERED'										=> 'Date de création:',
	'LBL_DATE_MODIFIED'										=> 'Date de modification',
	'LBL_DELETED'											=> 'Supprimé',
	'LBL_MODIFIED'											=> 'Modifié par (ID)',
	'LBL_MODIFIED_USER'										=> 'Modifié par',
	'LBL_CREATED'											=> 'Créé par',
	'LBL_RELATED_DOCUMENT_ID'								=> 'Id du document lié',
	'LBL_RELATED_DOCUMENT_REVISION_ID'						=> 'Id de la version du Document lié',
	'LBL_IS_TEMPLATE'										=> 'Est un Modèle',
	'LBL_TEMPLATE_TYPE'										=> 'Type de Document',
	'LBL_PARENT_TYPE'										=> 'Type du Parent',
	'LBL_NUMBER'											=> 'LBL_NUMBER',
	'LBL_TEXT_BODY'											=> 'LBL_TEXT_BODY',
	'LBL_CREATED_BY_NAME'									=> 'LBL_CREATED_BY_NAME',
	'LBL_TAG_ID'											=> 'LBL_TAG_ID',
	'LBL_KBDOCUMENTS_KBTAGS_ID'								=> 'LBL_KBDOCUMENTS_KBTAGS_ID',
	'LBL_REVISION_NAME'										=> 'Numéro de version',
	'LBL_KBDOCUMENT_REVISION_NUMBER'						=> 'KBDocument Numéro de version',
	'LBL_MIME'												=> 'Type Mime',
	'LBL_REVISION'											=> 'Version',
	'LBL_DOCUMENT'											=> 'Document lié',
	'LBL_LATEST_REVISION'									=> 'ID de la dernière version',
	'LBL_LATEST_REVISION_NAME'								=> 'Nom de la dernière version',
	'LBL_SELECTED_REVISION_NAME'							=> 'Nom de la version sélectionnée',
	'LBL_CHANGE_LOG'										=> 'Log des Modifications',
	'LBL_ACTIVE_DATE'										=> 'Date de publication',
	'LBL_EXPIRATION_DATE'									=> 'Date d&#39;expiration',
	'LBL_FILE_EXTENSION'									=> 'Extension du ficheir',
	'LBL_KNOWLEDGE_BASE_SEARCH'								=> 'Base De Connaissances',
	'LBL_KNOWLEDGE_BASE_ADMIN'								=> 'Base De Connaissances Admin',
	'LBL_KNOWLEDGE_BASE_ADMIN_MENU'							=> 'Admin',
	'LBL_CAT_OR_SUBCAT_UNSPEC'								=> 'Non spécifié',
	'LBL_DOC_NAME'											=> 'Nom du Document:',
	'LBL_FILENAME'											=> 'Nom du Fichier:',
	'LBL_DOC_VERSION'										=> 'Version:',
	'LBL_CATEGORY_VALUE'									=> 'Catégorie:',
	'LBL_SUBCATEGORY_VALUE'									=> 'Sous-catégorie:',
	'LBL_DOC_STATUS'										=> 'Statut:',
	'LBL_LAST_REV_CREATOR'									=> 'Version créée par:',
	'LBL_LAST_REV_DATE'										=> 'Date de la version:',
	'LBL_DOWNNLOAD_FILE'									=> 'Pièces Jointes:',
	'LBL_DET_RELATED_DOCUMENT'								=> 'Document lié:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'						=> 'Version du document lié:',
	'LBL_DET_IS_TEMPLATE'									=> 'Modèle? :',
	'LBL_DET_TEMPLATE_TYPE'									=> 'Type de document:',
	'LBL_IS_EXTERNAL_ARTICLE'								=> 'Article externe? :',
	'LBL_SHOW_TAGS'											=> 'Voir plus de Tags',
	'LBL_HIDE_TAGS'											=> 'Cacher les Tags',
	'LBL_TEAM'												=> 'Equipe:',
	'LBL_TEAM_ID'											=> 'Equipe (ID):',
	'LBL_DOC_DESCRIPTION'									=> 'Description:',
	'LBL_KBDOC_SUBJECT'										=> 'Sujet:',
	'LBL_DOC_ACTIVE_DATE'									=> 'Date de Publication:',
	'LBL_DOC_EXP_DATE'										=> 'Date d&#39;expiration:',
	'LBL_LIST_ARTICLES'										=> 'Articles',
	'LBL_LIST_FORM_TITLE'									=> 'Liste des Documents',
	'LBL_LIST_DOCUMENT'										=> 'Document',
	'LBL_LIST_CATEGORY'										=> 'Catégorie',
	'LBL_LIST_SUBCATEGORY'									=> 'Sous-Catégorie',
	'LBL_LIST_REVISION'										=> 'version',
	'LBL_LIST_LAST_REV_CREATOR'								=> 'Publié par',
	'LBL_LIST_LAST_REV_DATE'								=> 'Date de la version',
	'LBL_LIST_VIEW_DOCUMENT'								=> 'Voir',
	'LBL_LIST_DOWNLOAD'										=> 'Télécharger',
	'LBL_LIST_ACTIVE_DATE'									=> 'Date de Publication',
	'LBL_LIST_EXP_DATE'										=> 'Date d&#39;expiration',
	'LBL_LIST_STATUS'										=> 'Statut',
	'LBL_ARTICLE_AUTHOR_LIST'								=> 'Auteur',
		'LBL_LIST_MOST_VIEWED'									=> 'Articles les plus vus',
	'LBL_LIST_MOST_RECENT'									=> 'Articles les plus récents',

	'LBL_SF_DOCUMENT'										=> 'Nom du Document:',
	'LBL_SF_CATEGORY'										=> 'Catégorie:',
	'LBL_SF_SUBCATEGORY'									=> 'Sous-Catégorie:',
	'LBL_SF_ACTIVE_DATE'									=> 'Date de Publication:',
	'LBL_SF_EXP_DATE'										=> 'Date d&#39;expiration:',
	'DEF_CREATE_LOG'										=> 'Document créé',
	'LBL_TAB_SEARCH'										=> 'Recherches',
	'LBL_TAB_BROWSE'										=> 'Naviguer',
	'LBL_TAB_ADVANCED'										=> 'Avancé',
	'LBL_MENU_FTS'											=> 'Recherche Full Texte',
	'LBL_FTS_EMPTY_STRING'									=> 'Impossible de faire une recherche sur un texte vide',
	'LBL_SEARCH_WITHIN'										=> 'Recherche dans:',
	'LBL_CONTAINING_THESE_WORDS'							=> 'Doit contenir les mots:',
	'LBL_EXCLUDING_THESE_WORDS'								=> 'Ne doit pas contenir les mots:',
	'LBL_UNDER_THIS_TAG'									=> 'Doit avoir le Tag:',
	'LBL_PUBLISHED'											=> 'Publié:',
	'LBL_EXPIRES'											=> 'Expiré:',
	'LBL_TIMES_VIEWED'										=> 'Popularité:',
	'LBL_SAVE_SEARCH_AS'									=> 'Sauver cette recherche en tant que:',
	'LBL_SAVE_SEARCH_AS_HELP'								=> 'Ceci sauverarde les critères de recherche en tant que Recherche Sauvegardée dans la Base de Connaissances.',
	'LBL_PREVIOUS_SAVED_SEARCH'								=> 'Recherches Sauvegardées:',
	'LBL_PREVIOUS_SAVED_SEARCH_HELP'						=> 'Editer ou Supprimer une Recherche Sauvegardée.',
	'LBL_UPDATE'											=> 'Mise à jour',
	'LBL_DELETE'											=> 'Supprimer',
	'LBL_SHOW_OPTIONS'										=> 'Voir plus d&#39;options',
	'LBL_HIDE_OPTIONS'										=> 'Voir moins d&#39;options',
	'LBL_AND'												=> 'et',
	'LBL_CLEAR'												=> 'Vider',
	'LBL_LIST_KBDOC_APPROVER_NAME'							=> 'Nom de l&#39;approbateur',
	'LBL_LIST_VIEWING_FREQUENCY'							=> 'Popularité',
	'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT'			=> 'Prévisualistion impossible - Document non trouvé.',
	'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT'				=> 'Prévisualistion impossible - Document sans contenu.',
	'LBL_UNTAGGED_ARTICLES_NODE'							=> 'Articles non taggés',
	'LBL_TOP_TEN_LIST_TITLE'								=> 'Top 10 des Articles',
	'LBL_SHOW_SYNTAX_HELP'									=> 'Voir l&#39;Aide de la Syntaxe',
	'LBL_HIDE_SYNTAX_HELP'									=> 'Cacher l&#39;Aide de la Syntaxe',
	'LBL_MISMATCH_QUOTES_ERR'								=> 'Votre requète ne peut pas être executer tel quel. Il manque un double guillement de fermeture. Pour chercher un guillemet vous devez utiliser un \\ devant (").',
	'LBL_SYNTAX_CHEAT_SHEET'								=> "<B>Aide:</b><P>\n\n\n\n		1.   \"+\"  doit contenir <br>\n\n		2.   \"-\" ne doit pas contenir<br>\n\n		3.   Les Mots entre double gullemets (\" \") seront traités comme groupes. Notez que la recherche doit contenir un nombre pair de double guillemets. <br>Pour chercher un guillemet vous devez utiliser un \ devant (\")<br>\n\n		4.   Les guillemets simples (&#39;) seront traités comme de simples guillemets.\n\n		</p>\n\n\n\n		<p><b>Exemple: </b><br>\n\n		pour rechercher tous les articles ayant les mots \"Sugar\" ou \"CRM\", et qui doivent aussi avoir les mots \"Base de connaissance\" et \"cool\" mais qui ne contiennent pas les mots \"test\", vous devez entrer la syntaxe suivante:<br>\n\n		Sugar CRM +\"Base de connaissance\" +cool -test</p>\n\n\n\n		<p><b>Notes: </b><br>\n\n		Les majuscules - minuscules ne sont pas importantes<br>\n\n		Les espaces et les virugles sont les délimiteurs de rechreches acceptés<br>\n\n		Ne pas mettre d&#39;espace entre \"-\" ou \"+\" et les mots</p>",
	'LBL_CHILD_TAG_IN_TREE_HOVER'							=> 'Tag enfant',
	'LBL_CHILD_TAGS_IN_TREE_HOVER'							=> 'Tags enfant',
	'LBL_ARTICLE_IN_TREE_HOVER'								=> 'Article',
	'LBL_ARTICLES_IN_TREE_HOVER'							=> 'Articles',
	'LBL_THIS_TAG_CONTAINS_TREE_HOVER'						=> 'Ce Tag contient',
	'ERR_DOC_NAME'											=> 'Name du Document',
	'ERR_DOC_ACTIVE_DATE'									=> 'Date de Publication',
	'ERR_DOC_EXP_DATE'										=> 'Date d&#39;expiration',
	'ERR_FILENAME'											=> 'Nom du fichier',
	'ERR_DOC_VERSION'										=> 'Version du Document',
	'ERR_DELETE_CONFIRM'									=> 'Voulez vous supprimer cette version du document?',
	'ERR_DELETE_LATEST_VERSION'								=> 'Vous ne pouvez pas supprimer cette version du document.',
	'LNK_NEW_MAIL_MERGE'									=> 'Publipostage',
	'LBL_MAIL_MERGE_DOCUMENT'								=> 'Modèle utilisable dans un publipostage:',
	'LBL_TREE_TITLE'										=> 'Documents',
	'LBL_LIST_DOCUMENT_NAME'								=> 'Nom du Document',
	'LBL_CONTRACT_NAME'										=> 'Nom du Contrat:',
	'LBL_LIST_IS_TEMPLATE'									=> 'Modèle?',
	'LBL_LIST_TEMPLATE_TYPE'								=> 'Type de Document',
	'LBL_LIST_SELECTED_REVISION'							=> 'version sélectionnée',
	'LBL_LIST_LATEST_REVISION'								=> 'Dernière version',
	'LBL_CASES_SUBPANEL_TITLE'								=> 'Ticket liés',
	'LBL_EMAILS_SUBPANEL_TITLE'								=> 'Emails liés',
	'LBL_CONTRACTS_SUBPANEL_TITLE'							=> 'Co,ntrats liés',
	'LBL_LAST_REV_CREATE_DATE'								=> 'Date de créationd e la dernière version',
	'LBL_KEYWORDS'											=> 'Mots clé:',
	'LBL_CASES'												=> 'Tickets',
	'LBL_EMAILS'											=> 'Emails',
	'LBL_DEFAULT_ADMIN_MESSAGE'								=> 'Sélectionnez un action de la liste déroulante',
	'LBL_SELECT_PARENT_TAG_MESSAGE'							=> 'Sélectionnez le Tag parent de l&#39;arbre',
	'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE'				=> 'Sélectionnez le(s) Tag(s) à supprimer de l&#39;arbre',
	'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE'				=> 'Sélectionnez le(s) Tag(s) à renommer de l&#39;arbre',
	'LBL_TAG_ALREADY_EXISTS'								=> 'Le Tag existe déjà',
	'LBL_TYPE_THE_NEW_TAG_NAME'								=> 'Entrez le nom du nouveau Tag',
	'LBL_SAVING_THE_TAG'									=> 'Sauvegarde du Tag...',
	'LBL_CREATING_NEW_TAG'									=> 'Création du Nouveau Tag...',
	'LBL_TAGS_ROOT_LABEL'									=> 'Tags',
	'LBL_FAQ_TAG_NOT_RENAME_MESSAGE'						=> 'FAQs Tag non renommable',
	'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG'			=> 'Sélectionnez les Articles en premier ',
	'LBL_SELECT_ARTICLES_TO_APPLY_TAGS'						=> 'Sélectionnez les articles à tagger',
	'LBL_SELECT_ARTICLES_TO_DELETE'							=> 'Sélectionnez les Articles en premier ',
	'LBL_SELECT_TAGS_TO_DELETE'								=> 'Sélectionnez les Tags à supprimer',
	'LBL_SELECT_A_TAG_FROM_TREE'							=> 'Sélectionnez un Tag de l&#39;arbre',
	'LBL_SELECT_TAGS_FROM_TREE'								=> 'Sélectionnez les Tags de l&#39;arbre',
	'LBL_MOVING_ARTICLES_TO_TAG'							=> 'Déplacement en cours...',
	'LBL_APPLYING_TAGS_TO_ARTICLES'							=> 'Application des tags sur les Articles ...',
	'LBL_ROOT_TAG_MESSAGE'									=> 'Le tag Racine ne peut pas être sélectionné ou lié à un Article',
	'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED'						=> 'Le tag Racine ne peut pas renommé',
	'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME'					=> 'Les Tags Source et Destination sont les mêmes...',
	'LBL_TYPE_NEW_NODE_NAME'								=> 'Merci de saisir un nom de Tag',
	'LBL_DELETE_TAG'										=> 'Supprimer Tag',
	'LBL_SELECT_TAG'										=> 'Sélectionner Tag',
	'LBL_APPLY_TAG'											=> 'Applicquer Tag',
	'LBL_MOVE'												=> 'Déplacer',
	'LBL_LAUNCHING_TAG_BROWSING'							=> 'Lancement de la navigation dans les Tags ...',
	'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS'					=> 'erreur sur la requète des Tags.',
	'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT'					=> 'Erreur: Not a file input element',
	'LBL_CREATE_NEW_TAG'									=> 'Créer un nouveau Tag',
	'LBL_SEARCH_TAG'										=> 'Rechercher',
	'LBL_TAG_NAME'											=> 'Nom du Tag:',
	'LBL_TYPE_TAG_NAME_TO_SEARCH'							=> 'Entrez le nom du Tag à rechercher',
	'LBL_KB_NOTIFICATION'									=> 'Document publié',
	'LBL_KB_PUBLISHED_REQUEST'								=> 'vous à assigné un Document: vous devez/pouvez l&#39;approuver et le publier.',
	'LBL_KB_STATUS_BACK_TO_DRAFT'							=> 'Le Statut du Document à été remis à Brouillon',
	'LBL_KB_STATUS_BACK_TO_DRAFT'							=> 'Le statut du document a été modifié en Brouillon',
	'LBL_CONTRACTS'											=> 'Contrats',
	'LBL_SELECT_PARENT_TREE_NOTICE'							=> 'Sélectionnez le flag parent dans l&#39;arbre ',
	'LBL_CLICK_APPLY_TAG'									=> 'Cliquer pour appliquer le tag',	
	'LBL_HEAD_TAGS'											=> ' Tags',	
);

?>