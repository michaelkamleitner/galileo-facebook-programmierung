<DOCTYPE html>
<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>Social Plugins</h1>

<h2>Like-Box</h2>

<div style="float:left;">

	<p>Standard-Layout</p>

	<div class="fb-like-box" data-href="http://www.facebook.com/diesocialisten" data-width="292" data-show-faces="true" data-stream="true" data-header="true"></div>



</div>

<div style="float:left;margin-left:20px;">

	<p>Mit Header und Faces, ohne Stream</p>
	
	<div class="fb-like-box" data-href="http://www.facebook.com/diesocialisten" data-width="292" data-show-faces="true" data-stream="false" data-header="true"></div>
	
	<hr/><p>Ohne Header, Stream, Faces</p>
	
	<div class="fb-like-box" data-href="http://www.facebook.com/diesocialisten" data-width="292" data-show-faces="false" data-stream="false" data-header="false" data-border-color="#ff0000"></div>


</div>
<div style="clear:both;"></div>

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