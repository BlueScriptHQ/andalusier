<?php
  $_SESSION["userid"] = 1;
  require "chatConn.php";
  $text = $_POST['msg'];

  $query = "INSERT INTO messages(messages_content) VALUES(:content)";
  $stmt = $conn->prepare($query);
  $stmt->execute(array(":content" => $text));
  $lastId = $conn->lastInsertId();

  $query = "INSERT INTO users_messages(messages_id, users_id) VALUES(:lastID, :userid)";
  $stmt = $conn->prepare($query);
  $stmt->execute(array(":lastID" => $lastId, ":userid" => $_SESSION["userid"]));
  var_dump($stmt);
?>
