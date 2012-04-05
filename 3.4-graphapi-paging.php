<?
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth?client_id=".APP_ID."&redirect_uri=".SITE_URL."/3.4-graphapi-paging.php";

if (empty($_REQUEST["code"])) {
   header("Location: ".$login_url);
   exit;

} else {

	$url = "https://graph.facebook.com/oauth/access_token?client_id=".APP_ID."&redirect_uri=".urlencode(SITE_URL."/3.4-graphapi-paging.php")."&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
	$access_token = curl($url); 
	$access_token = substr($access_token,0,strpos($access_token,"&"));

	$url = "https://graph.facebook.com/me/friends?limit=10&offset=0&".$access_token;

	while ($url) {
		
		$friends = json_decode(curl($url)); 
		foreach ($friends->data as $f) {
			print $f->name."<br/>";
		}
		$url = (isset($friends->paging->next) ? $friends->paging->next : null);
		
	}
}
?>