<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => 'Twitter©でSugarインスタンスを新規アプリケーションとして登録し、Consumer KeyとSecretを取得してください。<br /><br />登録方法は下記の通りです。<br /><br />1. Twitter©ディベロッパーサイト（http://dev.twitter.com/apps/new）を訪問します。<br />2. アプリケーションを登録するアカウントでサインインします。<br />3. 登録フォームにアプリケーション名を入力します。これは、Sugar内部からTwitterを認証する際にユーザが識別する名前になります。<br />4. 備考を入力します。<br />5. アプリケーションのURLを入力します。<br />6. アプリケーションタイプとしてブラウザを選択します。<br />7. コールバックURLを入力します。（Sugarは認証の際にここをバイパスするので、何でも構いません）<br />8. セキュリティワードを入力します。<br />9. アプリケーションの登録をクリックします。<br />10. Twitter APIの利用規約に同意します。<br />11. アプリケーションページでConsumer KeyとConsumer Secretを確認し、以下に入力します。',
  'oauth_consumer_key' => 'Consumer Key',
  'oauth_consumer_secret' => 'Consumer Secret',
  'company_url' => 'URL',
  'LBL_NAME' => 'ツイッター・ユーザ名',
  'LBL_ID' => 'ツイッター・ユーザ名',
);

