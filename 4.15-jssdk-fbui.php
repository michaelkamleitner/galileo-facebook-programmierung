<DOCTYPE html>
<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<title>Hello Facebook JS-SDK!</title>
</head>
<body>

<h1>FB.ui</h1>

<h2>Feed Dialog</h2>

<p>
	<a href="#" onclick="fbUiDialogSimple();">fbUiDialogSimple();</a><br/>
	<a href="#" onclick="fbUiDialogPropertiesAndActions();">fbUiDialogPropertiesAndActions();</a>
</p>

Caption: <input type="text" id="caption" value="Das ist der Caption-Text"/><br/>
Name: <input type="text" id="name" value="Das ist der Link-Text"/><br/>
Picture: <input type="text" id="picture" value="http://fbrell.com/f8.jpg"/><br/>
Link: <input type="text" id="link" value="https://developers.facebook.com/docs/reference/dialogs/"/><br/>
Description: <textarea id="description">Das ist der Description-Text. Er darf ruhig etwas länger sein, wird jedoch von Facebook nach ca. 270 Zeichen abgeschnitten. Der überschüssige Text verbirgt sich hinter einem mit "Read More" betitelten Link und erscheint, wenn dieser Link vom Benutzer angeklickt wird. Normalerweise sind 270 Zeichen aber völlig ausreichend, um den geteilten Link genauer zu beschreiben.</textarea></br>
<input type="button" value="Post!" onclick="fbUiDialog();"/>

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
};

var fbUiDialog = function() {
   var options = {
       method: 'feed',
       link: document.getElementById('link').value,
       picture: document.getElementById('picture').value,
       name: document.getElementById('name').value,
       caption: document.getElementById('caption').value,
       description: document.getElementById('description').value,
   };
        
   FB.ui(options, function(result) {
       console.debug(result);
   });   
};

var fbUiDialogSimple = function() {
   var options = {
       method: 'feed',       
   };        
   FB.ui(options);   
};

var fbUiDialogPropertiesAndActions = function() {
   var options = {
       method: 'feed',   
       link: document.getElementById('link').value,
       picture: document.getElementById('picture').value,
       name: document.getElementById('name').value,
       caption: document.getElementById('caption').value,    
       properties: [ { text: 'Link #1', href: 'http://www.facebook.com' },       							        							 
       							 { text: 'Link #2', href: 'http://developers.facebook.com' }	],
       actions: { name: 'Action #1', link: 'http://www.facebook.com' },
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