<?
include_once("sdk/facebook.php");

$config = array();
$config['appId'] = '214728715257742';
$config['secret'] = '********************************';
$config['fileUpload'] = false; 

$facebook = new Facebook($config);

if (!($uid = $facebook->getUser())) {
  $params = array(
    'scope' => 'email,publish_stream,user_photos',
    'redirect_uri' => 'https://apps.mycompany.com/C-phpsdk-testing.php'
  );

  $loginUrl = $facebook->getLoginUrl($params);
  header("Location: ".$loginUrl);
} else {
  print "Hello User #".$uid;
  print "<pre>";
  print_r($facebook->getSignedRequest());
  print_r($facebook->api("/me"));
  
  //$facebook->api("/10150665257130864", "DELETE");
  //print_r($facebook->api("/me/feed", "POST", array("message" => "Testing")));
  //print_r($facebook->api("/me/photos", "POST", array("source" => "@./img/orangejuice.jpg", "message" => "Orange Juice")));
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