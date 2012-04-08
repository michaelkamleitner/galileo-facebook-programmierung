<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8"/>
	<title>MyGuide.com - Gasthof zur goldenen Gans</title>
	<meta property="og:url" content="http://apps.mycompany.com/8.1-opengraph-tags.php" />
	<meta property="og:title" content="Gasthof zur goldenen Gans"/>
	<meta property="og:description" content="Im Gasthof zur goldenen Gans erwartet sie ganztägig Warm Küche und beste Hausmannskost!"/>
	<meta property="og:type" content="restaurant"/>
	<meta property="og:image" content="http://apps.mycompany.com/img/goldene-gans-logo.jpg"/>
	<meta property="og:site_name" content="MyGuide.com"/>
	<meta property="og:locale" content="de_DE"/>
	<meta property="fb:app_id" content="214728715257742"/>
	<meta property="fb:admins" content="michael.kamleitner"/>
	<!--
	<meta property="og:latitude" content="33.29802,56.601563"/>
  <meta property="og:longitude" content="40.756896"/>
  <meta property="og:street-address" content="Planegger Straße 31"/>
  <meta property="og:locality" content="München"/>
  <meta property="og:region" content="Bayner"/>
  <meta property="og:postal-code" content="81241"/>
  <meta property="og:country-name" content="Deutschland"/>
  -->
</head>
<body>

MyGuide.com


<img style="float:left; margin:0px 10px 10px 0px;width:100px;" src="http://apps.mycompany.com/img/goldene-gans-logo.jpg"/><br/>
<h1 style="margin:0px;">Gasthof zur Goldenen Gans</h1>
Planegger Straße 31<br/>
81241 München<br/><br/>


<div class="fb-like" data-href="http://apps.mycompany.com/8.1-opengraph-tags.php" data-layout="standard" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/>

<a href="http://developers.facebook.com/tools/debug/og/object?q=http%3A%2F%2Fapps.mycompany.com%2F8.1-opengraph-tags.php" target="_blank">Im Linter prüfen...</a>


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
    // Weitere Initalisierungen hier vornehmen...    
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