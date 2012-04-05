<?
include_once("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$access_token = get_app_accesstoken(APP_ID, APP_SECRET);

$url = "https://graph.facebook.com/".APP_ID."/subscriptions";
$params = array("object" => "user",
                "fields" => "name",
                "access_token" => $access_token,
                "verify_token" => "thisisoursecret",
                "callback_url" => SITE_URL.'/3.16-graphapi-realtime-callback.php');
$result = curl($url, $params, "POST");	

$url = "https://graph.facebook.com/".APP_ID."/subscriptions?access_token=".$access_token;
$subscriptions = json_decode(curl($url));				
print "Alle Abonnements:\n\n";
print_r ($subscriptions);
?>