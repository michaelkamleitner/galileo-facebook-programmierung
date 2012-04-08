<DOCTYPE html>

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>Social Plugins</h1>

<h2>Like-Button</h2>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="box_count" data-send="false" data-width="150" data-show-faces="false"></div>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="box_count" data-send="false" data-width="150" data-action="recommend" data-show-faces="false"></div>

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '214728715257742', 
                   // Anwendungs-ID
      channelUrl : '//kamleitner.com/book/channel.php', 
                   // Channel-Datei
      status     : true, // Login Status prüfen
      cookie     : true, // Cookies aktivieren
      oauth      : true, // OAuth 2.0 aktivieren
      xfbml      : true  // XFBML parsen
    });
    // Weitere Initalisierungen hier vornehmen...
    
    FB.Event.subscribe('edge.create', function(response) {
    	console.debug('edge.create');
    	console.debug(response);
    });
    FB.Event.subscribe('edge.remove', function(response) {
    	console.debug('edge.remove');
    	console.debug(response);
    });
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