<?
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth". "?client_id=".APP_ID. "&redirect_uri=".SITE_URL."/2.5-login-session-callback.php"; 
session_start();
?>
<DOCTYPE html>
<html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml"> 
  <head>
    <meta charset="utf-8">
    <title>Hello Facebook!</title>
  </head>
  <body>
    <? if (@$_SESSION["access_token"]) { ?>
      Sie sind angemeldet als <?= @$_SESSION["me"]->name ?>! <a href="./2.7-logout-session.php">Logout</a>.
      <pre><? print_r($_SESSION); ?></pre>
    <? } else { ?>
      Sie sind nicht angemeldet!
      <a href="<?= $login_url ?>">Login mit Facebook</a>.
      <pre><? print_r($_SESSION); ?></pre>
    <? } ?>
  </body>
</html>