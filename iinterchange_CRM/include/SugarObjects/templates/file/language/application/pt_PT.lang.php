<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '-Nenhuma-',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Base de Conhecimento',
    'Sales' => 'Vendas',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '-Nenhuma-',
    'Marketing Collateral' => 'Acessório de Marketing',
    'Product Brochures' => 'Brochuras de Produtos',
    'FAQ' => 'FAQ',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Activo',
    'Draft' => 'Rascunho',
    'FAQ' => 'FAQ',
    'Expired' => 'Expirou',
    'Under Review' => 'Em Revisão',
    'Pending' => 'Pendente',
  ),
);

