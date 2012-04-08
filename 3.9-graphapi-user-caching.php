<?
// Facebook Programmierung - Galileo Verlag, Michael Kamleitner
// Weitere Informationen sowie Aktualisierungen zu diesem Code-Beispiel finden Sie unter http://book.socialisten.at

include("tools.php");

// Herstellung der Verbindung zur Datenbank
mysql_connect("localhost", "myapp", "mypassword");
mysql_select_db("mydatabase");

function createUser($id) {
   $url = "https://graph.facebook.com/".$id;
   $user = json_decode(curl($url));
   mysql_query("insert into users set id=".$id.",first_name='".$user->first_name."',last_name='".$user->last_name."',gender='".$user->gender."',created=now(),modified=now()");
   return $user;
}

function updateUser($id) {
   $url = "https://graph.facebook.com/".$id;
   $user = json_decode(curl($url));
   mysql_query("insert into users set first_name='".$user->first_name."',last_name='".$user->last_name."',gender='".$user->gender."',modified=now() where id=".$id);
   return $user;
}

function getUser($id) {
	 // Einlesen des Benutzers-Objektes aus der lokalen DB
   $res = mysql_query("select * from users where id=".$id);

   if ($user = mysql_fetch_object($res)) {

      // Benutzer-Eintrag älter als 24h - Zugriff über Graph API & Update
      if (date("U") - strtotime($user->modified) > 24*60*60) {
         return updateUser($id);
      } else {
         return $user;
      }
   } else {

     // Benutzer wurde nicht in DB gefunden - Zugriff über Graph API & Anlegen
	   return createUser($id);
   }
}

print_r(getUser(609190863));
?>