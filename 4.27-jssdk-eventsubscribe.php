<DOCTYPE html>
<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>Event-Handler Subscribe:</h1>

<fb:like href="http://www.facebook.com/diesocialisten" send="false" width="450" show_faces="true"></fb:like>

<p>
	<fb:login-button/>
</p>
<p>
	<a href="#" onclick="FB.Event.unsubscribe('edge.create', edgeCreateHandler);">Unsubscribe!</a>
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
    // Events abonnieren...
    FB.Event.subscribe('edge.create', edgeCreateHandler);        
    FB.Event.subscribe('auth.prompt', function(response) {
    	console.debug('auth.prompt');
    	console.debug(response);
    });
    FB.Event.subscribe('auth.login', function(response) {
    	console.debug('auth.login');
    	console.debug(response);
    });
    FB.Event.subscribe('auth.authResponseChange', function(response) {
    	console.debug('auth.authResponseChange');
    	console.debug(response);
    });
    FB.Event.subscribe('auth.statusChange', function(response) {
    	console.debug('auth.statusChange');
    	console.debug(response);
    });
    FB.Event.subscribe('auth.logout', function(response) {
    	console.debug('auth.logout');
    	console.debug(response);
    });
};

var edgeCreateHandler = function(response) {
   alert('Event: edge.create, response: '+response);	
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