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

<p>Like-Button per iframe (ohne SDK):</p>

<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdie.socialisten.at&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

<p>Like-Button per XFBML-Tag (erfordert SDK):</p>

<fb:like href="http://die.socialisten.at" send="false" width="450" show_faces="true"></fb:like>

<p>Like-Button per HTML5-Tag (erfordert SDK):</p>

<div class="fb-like" data-href="http://die.socialisten.at" data-send="true" data-width="450" data-show-faces="true"></div>

<p>Layout: standard, show_faces</p>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="standard" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/><p>Layout: standard, send</p>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="standard" data-send="true" data-width="450" data-show-faces="false"></div>

<hr/><p>Layout: button_count</p>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="button_count" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/><p>Layout: box_count</p>

<div class="fb-like" data-href="http://www.facebook.com" data-layout="box_count" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/><p>Layout: box_count</p>

<div class="fb-like" data-href="http://www.facebook.com" data-action="recommend" data-layout="box_count" data-send="false" data-width="450" data-show-faces="true"></div>

<hr/>


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
    
    FB.Event.subscribe('edge.create', function(response) {
      alert('edge.create');
    	console.debug('edge.create');
    	console.debug(response);
    });
    FB.Event.subscribe('edge.remove', function(response) {
    	alert('edge.remove');
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