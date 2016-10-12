<?php

  require "chatConn.php";

  $id = $_SESSION["loggeduserid"];

  $query = "SELECT * FROM users WHERE users_id != :id";
  $stmt = $conn->prepare($query);
  $stmt->execute(array(":id" => $id));

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  


?>
