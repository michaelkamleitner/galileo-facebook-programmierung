<DOCTYPE html>

<!-- Facebook Programmierung - Galileo Verlag, Michael Kamleitner
     Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at  -->

<html lang="de-de" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"> <title>Mobile Facebook</title>
</head>
<body>
  <h1>Mobile Web-Apps auf Facebook</h1>
  
  <p>
    <a href="#" onclick="fbInvite();">fbInvite</a> |
    <a href="#" onclick="fbLogin()">fbLogin</a> |
    <a href="#" onclick="fbUiDialog()">fbUiDialog</a> |
    <a href="#" onclick="fbPay()">fbPay</a> |
  </p>

  <div id="fb-root"></div>
   
<script>
var fbLogin = function() {
   FB.login(function(response) {
   }, {scope: 'email'});
};
// Feed-Dialog
var fbUiDialog = function() {
   var  options = {
        method: 'feed',
        link: 'http://www.orf.at',
        picture: 'http://orf.at/mojo/1_1/storyserver/...', name: 'ORF.at',
        caption: 'News-Portal des österreichischen Rundfunks'
   };
   FB.ui(options, function(result) {
   }); 
};

// Requests-Dialog
function fbInvite() {
  var options = {
       method: 'apprequests',
       message: 'Einladung zu meiner mobilen App',
  };
  FB.ui(options, function(result) {
  });
}

// Payment-Dialog
function fbPay() {
  var order_info = 'produkt-1';
  var obj = {
       method: 'pay',
       order_info: order_info,
       purchase_type: 'item',
       dev_purchase_params: {'oscif': false} };
  FB.ui(obj, function (data) {
  });
}

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