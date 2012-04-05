<?
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

$login_url = "http://www.facebook.com/dialog/oauth?scope=user_photos&client_id=".APP_ID."&redirect_uri=".SITE_URL."/3.6-graphapi-publish-photo.php";

if (empty($_REQUEST["code"])) {
   header("Location: ".$login_url);
   exit;

} else {

	if (isset($_FILES["source"]["tmp_name"])) {
		
		$url = "https://graph.facebook.com/oauth/access_token?client_id=".APP_ID."&redirect_uri=".urlencode(SITE_URL."/3.6-graphapi-publish-photo.php")."&client_secret=".APP_SECRET."&code=".$_REQUEST["code"];
		$access_token = curl($url); 
		$access_token = substr($access_token,0,strpos($access_token,"&"));
		$access_token = substr($access_token,strrpos($access_token,"=")+1);

		$url = "https://graph.facebook.com/me/photos";
	 
		$params = array(
			"access_token" => $access_token,
			"message" => "Test-Foto: ".$_FILES["source"]["name"],
			"source" => "@".$_FILES["source"]["tmp_name"]
		);

		$result = json_decode(curl($url, $params, "POST"));
		print "<pre>"; 
		print_r($result);
		print "</pre>";

	} else { ?>

	<form method="post" enctype="multipart/form-data" action="">
		Image-File: <input type="file" name="source"/><br/>
		<input type="submit"/>
	</form>

	<? } ?>

<? } ?>