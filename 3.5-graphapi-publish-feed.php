<?
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth?scope=publish_stream&client_id=".APP_ID."&redirect_uri=".SITE_URL."/3.5-graphapi-publish-feed.php";

if (empty($_REQUEST["code"])) {
   header("Location: ".$login_url);
   exit;

} else {

	$url = "https://graph.facebook.com/oauth/access_token?client_id=".APP_ID."&redirect_uri=".urlencode(SITE_URL."/3.5-graphapi-publish-feed.php")."&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
	$access_token = curl($url); 
	$access_token = substr($access_token,0,strpos($access_token,"&"));
	$access_token = substr($access_token,strrpos($access_token,"=")+1);

	$params = array(
		"access_token" => $access_token,
		"message" => "Das ist ein Test-Wall-Posting!!!" 
	);

	$url = "https://graph.facebook.com/me/feed"; 

	$result = curl($url, $params, "POST");
	print_r(json_decode($result));
}
?>