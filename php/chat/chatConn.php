<?php

try {
  $user = "root";
  $pass = "";
  $conn = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
}
catch (PDOException $e) {
  echo "Het werkt niet";
  die();
}

?>
