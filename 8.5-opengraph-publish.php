<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include_once("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$app_access_token = get_app_accesstoken(APP_ID, APP_SECRET);

$url = "https://graph.facebook.com/feed";
$params = array(
   "access_token" => $app_access_token,
   "message" => "Wall-Posting auf der Objekt-Seite",
   "id" => "http://apps.mycompany.com/8.1-opengraph-tags.php"
);
$result = curl ($url, $params, "POST");
print_r(json_decode($result));
?>