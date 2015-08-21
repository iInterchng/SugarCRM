<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Obter uma Chave API e um Segredo da App através do Facebook&#169; criando uma aplicação para a sua instância do Sugar.<br/><br>Passos para criar uma aplicação para a sua instância:<br/><br/><ol><li>Ir ao seguinte Facebook&#169; para criar a aplicação: <a href=\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a>.</li><li>Autenticar-se no Facebook&#169; utilizando a conta sob a qual será para criar a aplicação.</li><li>Dentro da página "Criar Aplicação", inserir um nome para a aplicação. Este é o nome que os utilizadores irão ver quando se autenticarem nas suas contas do Facebook de dentro do Sugar.</li><li>Seleccionar "Aceito" para aceitar os Termos do Facebook&#169;.</li><li>Clicar em "Criar App"</li><li>Inserir e submeter as palavras de segurança para passar na Verificação de Segurança.</li><li>Dentro da página da aplicação, ir à área "Web Site" (link no menu da esquerda) e inserir o URL local da instância do Sugar para "Site URL".</li><li>Carregar "Gravar Alterações"</li><li>Ir à página "Integração do Facebook" (link no menu da esquerda) e encontrar a Chave API e o Segredo da App. Inserir o ID da Aplicação e o Segredo da Aplicação em baixo.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'Chave API',
  'oauth_consumer_secret' => 'Segredo da App',
);


