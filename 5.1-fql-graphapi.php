<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include_once("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth?client_id=".APP_ID."&redirect_uri=".SITE_URL."/5.1-fql-graphapi.php";

if (empty($_REQUEST["code"])) {
 
   header("Location: ".$login_url);
   exit;

} else {
	
  $url = "https://graph.facebook.com/oauth/access_token?client_id=".APP_ID."&redirect_uri=".urlencode(SITE_URL."/5.1-fql-graphapi.php")."&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
	$access_token = curl($url); 
	$access_token = substr($access_token,0,strpos($access_token,"&"));
	
	$fql = "SELECT uid,name,pic FROM user WHERE uid=me()";
	$url = "https://graph.facebook.com/fql?q=".urlencode($fql)."&".$access_token;
	$result = json_decode(curl($url));
	
	print "FQL-Query: ".$fql."<br/><br/>";
	print "FQL-Ergebnis:<br/><pre>";
	print_r($result);
}
?>