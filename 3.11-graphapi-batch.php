<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth?scope=publish_stream&client_id=".APP_ID."&redirect_uri=".SITE_URL."/3.11-graphapi-batch.php";

if (empty($_REQUEST["code"])) {
   header("Location: ".$login_url);
   exit;

} else {

	$url = "https://graph.facebook.com/oauth/access_token?client_id=".APP_ID."&redirect_uri=".urlencode(SITE_URL."/3.11-graphapi-batch.php")."&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
	$access_token = curl($url); 
	$access_token = substr($access_token,0,strpos($access_token,"&"));
	$access_token = substr($access_token,strrpos($access_token,"=")+1);
die($access_token);
	$batch = array(
	   array("method" => "POST", "relative_url" => "me/feed", "body" => "message=Mein Wall Posting!&http://www.testing.at"),
	   array("method" => "GET", "relative_url" => "me/feed?limit=1"),
	);

	$url = "https://graph.facebook.com";
	$params = array(
	   "access_token" => $access_token,
	   "batch" => json_encode($batch)
	);

	print "<pre>Batch:\n";
	print_r($batch);
	print "\nResult:\n";	
	print_r(json_decode(curl($url, $params)));
}	
?>