<?php

  try {
     $user = "root";
     $pass = "";
     $conn = new PDO('mysql:host=localhost;dbname=gerrizo42_andalusier', $user, $pass);
   } catch (PDOException $e) {
     echo "Er is een probleem met de verbinding, probeer het later opnieuw.";
     die();
   }
   
?>
