<? 

//
// tools.php - Eine Sammlung an nützlichen Funktionen für die Anwendungs-Entwicklung auf Facebook
//

function curl($url, $postargs=false, $method=null) {
   $ch = curl_init($url);
   if ($postargs !== false) {
      curl_setopt ($ch, CURLOPT_POST, true);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $postargs);
   }
   if ($method)
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
   
   curl_setopt($ch, CURLOPT_VERBOSE, 0);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   
   $response = curl_exec($ch);
   $responseInfo=curl_getinfo($ch);
   curl_close($ch);
   
   if( intval( $responseInfo['http_code'] ) == 200 )
       return $response;
   else
      return false;
}

function get_app_accesstoken($app_id, $app_secret) {
   $url =
   "https://graph.facebook.com/oauth/access_token?".
   "client_id=".$app_id.
   "&client_secret=".$app_secret.
   "&grant_type=client_credentials";

   $access_token = curl($url);
   $access_token = substr($access_token,strpos($access_token,"=")+1);
   return $access_token;
}

function parse_signed_request($signed_request, $secret) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

  // Decodieren der Daten
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    error_log('Unknown algorithm. Expected HMAC-SHA256');
    return null;
  }

  // Prüfen der Signatur anhand des App-Secrets
  $expected_sig = hash_hmac('sha256', $payload, $secret, 
                            $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }
  return $data;
}

function base64_url_decode($input) {
  return base64_decode(strtr($input, '-_', '+/'));
}
?>