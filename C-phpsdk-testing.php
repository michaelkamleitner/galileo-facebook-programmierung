<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include_once("sdk/facebook.php");

$config = array();
$config['appId'] = '214728715257742';
$config['secret'] = '********************************';
$config['fileUpload'] = false; 

$facebook = new Facebook($config);

if (!($uid = $facebook->getUser())) {
  // Wenn der Benutzer noch nicht autorisiert ist, erfolgt eine Weiterleitung auf den OAuth-Dialog
  $params = array(
    'scope' => 'email,publish_stream,user_photos',
    'redirect_uri' => 'https://apps.mycompany.com/C-phpsdk-testing.php'
  );

  $loginUrl = $facebook->getLoginUrl($params);
  header("Location: ".$loginUrl);

} else {
  // Wenn der Benutzer bereits autorisiert ist, kann seine ID ausgegeben werden...
  print "Hello User #".$uid;
  print "<pre>";
  print_r($facebook->getSignedRequest());
  
  // ...sowie weitere Informationen über den Benutzer per Graph API bezogen werden.
  print_r($facebook->api("/me"));  
  print "</pre>";
}
?><!DOCTYPE html>
<html lang="de-de" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
   <meta charset="utf-8">
   <title>Hello Facebook!</title>
</head>
<body>
   <h1>Hello Facebook!</h1>
   <p>Willkommen bei meiner ersten SDK-Anwendung!</p>
</body>
</html>