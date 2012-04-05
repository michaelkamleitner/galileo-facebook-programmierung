<DOCTYPE html>
<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>Autorisierung mit der JavaScript-SDK</h1>

<p>
	<a href="#" onclick="fbLogin()">Login</a> | 
	<a href="#" onclick="fbLogout()">Logout</a> | 
	<a href="#" onclick="fbLoginStatus()">Status</a> | 
	<a href="#" onclick="fbGetAuthResponse();">getAuthResponse</a>
</p>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '214728715257742', 
                   // Anwendungs-ID
      channelUrl : '//apps.mycompany.com/channel.php', 
                   // Channel-Datei
      status     : true, // Login Status prüfen
      cookie     : true, // Cookies aktivieren
      oauth      : true, // OAuth 2.0 aktivieren
      xfbml      : true  // XFBML parsen
    });    
};

var fbGetAuthResponse = function() {
   response = FB.getAuthResponse();
   console.debug(response);
};

var fbLoginStatus = function() {
   FB.getLoginStatus(function(response) {
      console.debug(response);
   });
};

var fbLogout = function() {
   FB.logout(function(response) {
      console.debug(response);
   });
};

var fbLogin = function() {
   FB.login(function(response) {
   	  console.debug(response);
      if (response.authResponse) {
         console.log('Login erfolgreich!');   
      } else {
         console.log('Login abgebrochen!');
      }
   }, {scope: 'email,publish_stream,rsvp_event,publish_actions'});
};
// Asynchrones Laden der SDK
(function(d){
 var js,id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
 js = d.createElement('script'); js.id = id; js.async = true;
 js.src = "//connect.facebook.net/en_US/all.js";
 d.getElementsByTagName('head')[0].appendChild(js);
}(document));
</script>
</body>
</html>