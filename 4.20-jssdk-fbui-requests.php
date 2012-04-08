<DOCTYPE html>

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>FB.ui</h1>

<h2>Requests-Dialog</h2>

<p>
	<a href="#" onclick="fbInvite();">fbInvite();</a> - Normaler Request-Dialog mit gesetztem Titel & Message<br/>
	<a href="#" onclick="fbInviteData();">fbInviteData();</a> - Normaler Request-Dialog mit Tracking-Daten<br/>
	<a href="#" onclick="fbInviteBestFriends();">fbInviteBestFriends();</a> - Request-Dialog mit benutzerdefiniertem Filter der Empfänger-Auswahl<br/>
	<a href="#" onclick="fbInviteSelected();">fbInviteSelected();</a> - Request-Dialog mit vorselektierten Empfängern<br/>
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
      xfbml      : true,  // XFBML parsen
      frictionlessRequests : true,
    });    
};

var fbInviteBestFriends = function() {
   var options = {
       method: 'apprequests',
       title: 'Freunde Einladen ohne Vorauswahl',
       message: 'Einladung zu meiner App',
       //filters: ['app_users']
       //filters: ['app_non_users']
       filters: [{ name: 'Beste Freunde', user_ids: [532617296,633616172] }]
   };
        
   FB.ui(options, function(result) {
       console.debug(result);
   });   
};


var fbInvite = function() {
   var options = {
       method: 'apprequests',
       title: 'Freunde Einladen ohne Vorauswahl',
       message: 'Einladung zu meiner App',
   };
        
   FB.ui(options, function(result) {
       console.debug(result);
   });   
};

var fbInviteData = function() {
   var options = {
       method: 'apprequests',
       message: 'Einladung zu meiner App',
       data: { feld1: 123, feld2: 456 }
   };
        
   FB.ui(options, function(result) {
       console.debug(result);
   });   
};

var fbInviteSelected = function() {
   var options = {
       method: 'apprequests',
       title: 'Freunde Einladen mit Vorauswahl',       
       message: 'Einladung zu meiner App',
       //to: '633616172,532617296'
       to: '100001434672472'
   };
        
   FB.ui(options, function(result) {
       console.debug(result);
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