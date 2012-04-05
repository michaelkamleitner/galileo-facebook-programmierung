<?
include_once("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

if (@$_REQUEST["hub_mode"] == "subscribe" && 
    @$_REQUEST["hub_verify_token"] == "thisisoursecret") {
			
	print @$_REQUEST["hub_challenge"];
	exit;

} else {

	$buffer = (file_get_contents('php://input'));	
	$buffer = json_decode($buffer);	
	$log = fopen("realtime.log","a");
	fputs($log, print_r($buffer,true));
	fclose($log);
}
?>