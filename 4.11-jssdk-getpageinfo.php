<DOCTYPE html>

<h1>Autorisierung mit der JavaScript-SDK</h1>

<p>
	<a href="#" onclick="fbGetPageInfo()">fbGetPageInfo</a> | 
</p>
<div id="fb-root"></div>

var fbGetPageInfo = function() {
   FB.Canvas.getPageInfo( function(info) {
      console.debug(info);
   });   
};

</body>
</html>