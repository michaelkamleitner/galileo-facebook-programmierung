<?
include_once("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$access_token = get_app_accesstoken(APP_ID, APP_SECRET);

$url = "https://graph.facebook.com/".APP_ID."/subscriptions?access_token=".$access_token;
curl($url, false, "DELETE");

$url = "https://graph.facebook.com/".APP_ID."/subscriptions?access_token=".$access_token;
$subscriptions = json_decode(curl($url));				
print "Alle Abonnements:\n\n";
print_r ($subscriptions);
?>