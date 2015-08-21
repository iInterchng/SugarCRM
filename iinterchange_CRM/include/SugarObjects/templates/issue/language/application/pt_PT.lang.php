<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Administração',
    'Product' => 'Produto',
    'User' => 'Utilizador',
  ),
  $object_name.'_status_dom' => 
  array (
    'New' => 'Novo',
    'Assigned' => 'Atribuído',
    'Closed' => 'Fechado',
    'Pending Input' => 'A Aguardar Resposta',
    'Rejected' => 'Rejeitado',
    'Duplicate' => 'Duplicar',
  ),
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Alta',
    'P2' => 'Média',
    'P3' => 'Baixa',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '-Nenhuma-',
    'Accepted' => 'Aceite',
    'Duplicate' => 'Duplicar',
    'Closed' => 'Fechado',
    'Out of Date' => 'Obsoleto',
    'Invalid' => 'Inválido',
  ),
);

