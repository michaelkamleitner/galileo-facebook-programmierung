<p>DigitalBartender.com </p>

<div class="fb-add-to-timeline" data-show-faces="true" data-perms="email" data-mode="box"></div>

<hr/>

<?
function rating($url=null) {
  echo '
  Rating: <select id="rating" onchange="if (document.getElementById(\'rating\').value) { FB.api(\'/me/galileo-playground:rate?cocktail='.$url.'&rating=\'+document.getElementById(\'rating\').value, \'post\', function (response) { console.log(response); }); }">
    <option value="">Choose</option>
    <option value="1">*</option>
    <option value="2">**</option>
    <option value="3">***</option>
    <option value="4">****</option>
    <option value="5">*****</option>
  </select>
  ';  
}

function mixing($url=null) {
  echo '
  <input value="Mix!" type="button" onclick="FB.api(\'/me/galileo-playground:mix?cocktail='.$url.'\', \'post\', function (response) { console.log(response); });"/>
  ';  
}
?>