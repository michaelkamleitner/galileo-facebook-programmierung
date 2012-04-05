<?
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

// Callback Listing 2.2 (Ausgabe des $_REQUEST)
//$login_url = "https://www.facebook.com/dialog/oauth?client_id=".APP_ID. "&redirect_uri=".SITE_URL."/2.2-login-callback.php";

// Callback Listing 2.3 (Verarbeitung des Autorisierungs-Codes & Bezug des Access Tokens)
$login_url = "https://www.facebook.com/dialog/oauth?client_id=".APP_ID. "&redirect_uri=".SITE_URL."/2.3-login-callback.php";

?>
<DOCTYPE html>
<html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
   <meta charset="utf-8">
   <title>Hello Facebook!</title>
</head>
<body>
  Sie sind nicht angemeldet!
  <a href="<?= $login_url ?>">Login mit Facebook</a>
</body>
</html>