<DOCTYPE html><html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><head>	<meta charset="utf-8">	<title>Hello Facebook JS-SDK!</title></head><body><h1>Social Plugins</h1><h2>Live Stream</h2><div class="fb-live-stream" data-event-app-id="214728715257742" data-width="400" data-height="500" data-xid="home" data-xvia-url="http://die.socialisten.at" data-always-post-to-friends="true"></div><div id="fb-root"></div><script>window.fbAsyncInit = function() {    FB.init({      appId      : '214728715257742',                    // Anwendungs-ID      channelUrl : '//apps.mycompany.com/channel.php',                    // Channel-Datei      status     : true, // Login Status prüfen      cookie     : true, // Cookies aktivieren      oauth      : true, // OAuth 2.0 aktivieren      xfbml      : true  // XFBML parsen    });    // Weitere Initalisierungen hier vornehmen...    };// Asynchrones Laden der SDK(function(d){ var js,id = 'facebook-jssdk'; if (d.getElementById(id)) {return;} js = d.createElement('script'); js.id = id; js.async = true; js.src = "//connect.facebook.net/en_US/all.js"; d.getElementsByTagName('head')[0].appendChild(js);}(document));</script></body></html>