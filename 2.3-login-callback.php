<?
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');
?>
<DOCTYPE html>
<html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml"> <head>
   <meta charset="utf-8">
   <title>Hello Facebook!</title>
</head>
<body>
<? if (!empty($_REQUEST["code"])) {
  $url = "https://graph.facebook.com/oauth/access_token". "?client_id=".APP_ID. "&redirect_uri=".urlencode(SITE_URL."/2.3-login-callback.php"). "&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
  $access_token = curl($url);
  $access_token = substr($access_token,0,strpos($access_token,"&")); 
  ?>

  <h1>Erfolgreich autorisiert!</h1>
  <p>Dein Access Token: <?= $access_token ?></p>

  <?
  $url = "https://graph.facebook.com/me?".$access_token; $me = curl($url);
  ?>

  <pre><? print_r(json_decode($me)); ?></pre> 

<? } else { ?>
  
  <h1>Fehler beim Autorisieren!</h1>
  <pre><? print_r($_REQUEST); ?></pre>

<? } ?>

</body>

</html>
<?
function curl($url, $postargs=false, $method=null) {
  $ch = curl_init($url);
  if ($postargs !== false) {
    curl_setopt ($ch, CURLOPT_POST, true);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $postargs); 
  }
  if ($method)
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));

  curl_setopt($ch, CURLOPT_VERBOSE, 0); 
  curl_setopt($ch, CURLOPT_HEADER, 0); 
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

  $response = curl_exec($ch); 
  $responseInfo=curl_getinfo($ch); 
  curl_close($ch);
  
  if( intval( $responseInfo['http_code'] ) == 200 )
    return $response;
  else
    return false;
} ?>