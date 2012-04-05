<? 
include_once('tools.php');
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

// Verarbeiten der eingehenden Anwendungs-Anfragen

// Anhand der übergebenen Anfrage-IDs, kann erkannt werden ob ein Benutzer über eine Anfrage zur Anwendung gelangt ist

if (isset($_REQUEST["request_ids"])) {
	// Trennen der Anfrage-IDs, falls mehrere vorhanden

	print "<pre>";
	$request_ids = split(",", $_REQUEST["request_ids"]);
	
	print "Request-IDs:<br/><br/>";
	print_r($request_ids);	
	
	foreach ($request_ids as $id) {
		print "<br/>ID ".$id."<br/><br/>";
		$request = json_decode(curl("https://graph.facebook.com/".$id."?access_token=".get_app_accesstoken(APP_ID, APP_SECRET)));
		print_r ($request);

	}
	print "</pre>";
}

?>