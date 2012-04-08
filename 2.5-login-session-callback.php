<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

if (!empty($_REQUEST["code"])) {
  $url = "https://graph.facebook.com/oauth/access_token"."?client_id=".APP_ID. "&redirect_uri=".urlencode(SITE_URL."/2.5-login-session-callback.php"). "&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];

  $access_token = curl($url);
  $access_token = substr($access_token,0,strpos($access_token,"&")); 

  $url = "https://graph.facebook.com/me?".$access_token;
  $me = json_decode(curl($url));
  
  session_start();
  $_SESSION["access_token"] = $access_token;
  $_SESSION["user"] = $me;
  header("Location: ./2.6-login-session.php");
  ?>

<? } else { ?>

  <DOCTYPE html>
  <html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml"> 
    <head>
      <meta charset="utf-8">
      <title>Hello Facebook!</title>
    </head>
    <body>
      <h1>Fehler beim Autorisieren!</h1>
      <pre><? print_r($_REQUEST); ?></pre>
    </body>
  </html>

<? } ?>