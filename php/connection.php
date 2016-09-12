<?php
  // live mode
  error_reporting(0);

  try {
     $user = "root";
     $pass = "";
     $conn = new PDO('mysql:host=localhost;dbname=gerrizo42_andalusier', $user, $pass);
     //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
     echo "Er is een probleem met de verbinding, probeer het later opnieuw.";
     die();
   }
?>
<?php
  /*try {
     $user = "gerrizo42_admin";
     $pass = "gsijberen17";
     $conn = new PDO('mysql:host=localhost;dbname=gerrizo42_andalusier', $user, $pass);
   } catch (PDOException $e) {
     echo "Er is een probleem met de verbinding, probeer het later opnieuw.";
     die();
   }*/
?>
