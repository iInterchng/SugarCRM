<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



    $app_list_strings = array (
    $object_name.'_type_dom' => array (
        'Administration' => 'Administration',
        'Product' => 'Produit',
        'User' => 'Utilisateur'
    ),
    $object_name.'_status_dom' => array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending Input' => 'En attente',
        'Rejected' => 'Rejeté',
        'Duplicate' => 'Doublon'
    ),
    $object_name.'_priority_dom' => array (
        'P1' => 'Haute',
        'P2' => 'Moyenne',
        'P3' => 'Basse'
    ),
    $object_name.'_resolution_dom' => array (
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Doublon',
        'Closed' => 'Fermé',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalide'
    ),
);

?>