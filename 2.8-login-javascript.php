<?
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth". "?client_id=".APP_ID."&response_type=token". "&redirect_uri=".SITE_URL."/2.8-login-javascript.php";
?>
<DOCTYPE html>
<html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml"> <head>
   <meta charset="utf-8">
   <title>Hello Facebook!</title>
</head>
<body>
   <script type="text/javascript">
   if (window.location.hash.length == 0) {
      document.write('Sie sind nicht angemeldet! <a href="<?= $login_url ?>">Login mit Facebook</a>.'); 
   } else {
      var accessToken = window.location.hash.substring(1);
      var path = "https://graph.facebook.com/me?";
      var queryParams = [accessToken, 'callback=displayUser']; var query = queryParams.join('&');
      var url = path + query;
      var script = document.createElement('script'); script.src = url;
      document.body.appendChild(script);
   }
   function displayUser(user) {
      var p = document.createElement('p');
      p.innerHTML = 'Sie sind angemeldet als <b>'+user.name+'</b>!';
      document.body.appendChild(p);
   }
   </script>
</body>
</html>