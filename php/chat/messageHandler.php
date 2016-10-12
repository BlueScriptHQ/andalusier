<?php
  $id = $_SESSION["userid"];
  require "chatConn.php";
  $text = $_POST['msg'];

  $query = "INSERT INTO messages(messages_content) VALUES(:content)";
  $stmt = $conn->prepare($query);
  $stmt->execute(array(":content" => $text));
  $lastId = $conn->lastInsertId();

  $query = "INSERT INTO users_messages(messages_id, users_id) VALUES(:lastID, :userid)";
  $stmt = $conn->prepare($query);
  $stmt->execute(array(":lastID" => $lastId, ":userid" => $id));
  var_dump($stmt);
?>
