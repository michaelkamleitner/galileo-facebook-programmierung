<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# galileo-playground: http://ogp.me/ns/fb/galileo-playground#">
  <meta property="fb:app_id"      content="214728715257742" /> 
  <meta property="og:type"        content="galileo-playground:ingredient" /> 
  <meta property="og:url"         content="http://apps.mycompany.com/8-opengraph-digitalbartender-kahlua.php" /> 
  <meta property="og:title"       content="Kahlua" /> 
  <meta property="og:description" content="Kahlúa is a Mexican coffee-flavored rum-based liqueur. It is dense and sweet, with the distinct taste of coffee, from which it is made. Kahlúa also contains sugar, corn syrup and vanilla bean." /> 
  <meta property="og:image"       content="http://upload.wikimedia.org/wikipedia/commons/3/39/Kahlua_bottle_200ml.jpg" /> 

  <meta property="og:site_name" content="DigitalBartender.com"/>
  <meta property="og:locale" content="en_US"/>
	<meta charset="utf-8"/>
	<title>Digital Bartender - Kahlua</title>

</head>
<body>

<? include_once("9-opengraph-digitalbartender-header.php"); ?>

<img style="float:left; margin:0px 10px 10px 0px;width:100px;" src="http://upload.wikimedia.org/wikipedia/commons/3/39/Kahlua_bottle_200ml.jpg"/><br/>
<h1 style="margin:0px;">Kahlua</h1>
Kahlúa is a Mexican coffee-flavored rum-based liqueur. It is dense and sweet, with the distinct taste of coffee, from which it is made. Kahlúa also contains sugar, corn syrup and vanilla bean.
<br/><br/>

<div class="fb-like" data-href="http://apps.mycompany.com/8-opengraph-digitalbartender-kahlua.php" data-layout="standard" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/>

<a href="https://developers.facebook.com/tools/debug/og/object?q=http%3A%2F%2Fapps.mycompany.com%2F8-opengraph-digitalbartender-kahlua.php" target="_blank">Im Linter prüfen...</a>

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