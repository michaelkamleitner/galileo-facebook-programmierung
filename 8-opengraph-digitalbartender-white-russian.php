<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# galileo-playground: http://ogp.me/ns/fb/galileo-playground#">
  
  <meta property="fb:app_id" content="214728715257742" /> 
  <meta property="og:type" 
        content="galileo-playground:cocktail" /> 
  <meta property="og:url" content="http://apps.mycompany.com/8-opengraph-digitalbartender-white-russian.php" /> 
  <meta property="og:title" content="White Russian" /> 
  <meta property="og:description" content="A White Russian is a sweet cocktail made with vodka, coffee liqueurs (e.g., Kahlúa or Tia Maria), and cream served with ice" /> 
  <meta property="og:image"     
        content="http://upload.wikimedia.org/wikipedia/commons/8/8e/White_Russian.jpg" />
  <meta property="galileo-playground:creator" content="609190863" /> 
  <meta property="galileo-playground:created" content="2012-01-21T06:48:20-08:00" />
  <meta property="galileo-playground:ingredients" content="http://apps.mycompany.com/8-opengraph-digitalbartender-vodka.php" />
  <meta property="galileo-playground:ingredients" content="http://apps.mycompany.com/8-opengraph-digitalbartender-kahlua.php" />
  <meta property="galileo-playground:ingredients" content="http://apps.mycompany.com/8-opengraph-digitalbartender-cream.php" />
  <meta property="og:site_name" content="DigitalBartender.com"/>
  <meta property="og:locale" content="en_US"/>
	<meta charset="utf-8"/>
	<title>Digital Bartender - White Russion</title>

</head>
<body>

<? include_once("9-opengraph-digitalbartender-header.php"); ?>

<img style="float:left; margin:0px 10px 10px 0px;width:100px;" src="http://upload.wikimedia.org/wikipedia/commons/8/8e/White_Russian.jpg"/><br/>
<h1 style="margin:0px;">White Russian</h1>
A White Russian is a sweet cocktail made with vodka, coffee liqueurs (e.g., Kahlúa or Tia Maria), and cream served with ice
<br/>
<?= rating("http://apps.mycompany.com/8-opengraph-digitalbartender-white-russian.php") ?>
<?= mixing("http://apps.mycompany.com/8-opengraph-digitalbartender-white-russian.php") ?>
<br/>

<div class="fb-like" data-href="http://apps.mycompany.com/8-opengraph-digitalbartender-white-russian.php" data-layout="standard" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/>

<a href="https://developers.facebook.com/tools/debug/og/object?q=http%3A%2F%2Fapps.mycompany.com%2F8-opengraph-digitalbartender-white-russian.php" target="_blank">Im Linter prüfen...</a>

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