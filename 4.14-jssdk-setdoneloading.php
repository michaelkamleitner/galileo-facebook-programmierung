<DOCTYPE html><html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"><head>	<meta charset="utf-8">	<title>Hello Facebook JS-SDK!</title></head><body><h1>JavaScript-SDK: setDoneLoading</h1><div id="fb-root"></div><script>window.fbAsyncInit = function() {   FB.init({      appId      : '214728715257742',                    // Anwendungs-ID      channelUrl : '//apps.mycompany.com/channel.php',                    // Channel-Datei      status     : true, // Login Status prüfen      cookie     : true, // Cookies aktivieren      oauth      : true, // OAuth 2.0 aktivieren      xfbml      : true  // XFBML parsen   });         FB.Canvas.setDoneLoading( function(results) {      console.debug(results);      alert(results.time_delta_ms);   });  };// Asynchrones Laden der SDK(function(d){ var js,id = 'facebook-jssdk'; if (d.getElementById(id)) {return;} js = d.createElement('script'); js.id = id; js.async = true; js.src = "//connect.facebook.net/en_US/all.js"; d.getElementsByTagName('head')[0].appendChild(js);}(document));</script></body></html><?// 10 Sekunden warten...sleep(10);?>