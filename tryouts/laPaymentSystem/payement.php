<?php

  require "conn.php";

  if(isset($_POST["getPayements"])){

    $sql = "SELECT * FROM accounts
            INNER JOIN facturen ON facturen.facturen_id = accounts.accounts_id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $row){
      echo
        "<tr>
          <td>".$row["accounts_name"]."</td>
          <td>".$row["facturen_amount"]."</td>
          <td>".$row["facturen_paid"]."</td>
          <td onclick='paySomeMoney(".$row["facturen_id"].")'>Betalen</td>
        </tr>";
    }
  }

  if(isset($_POST["payMoney"])){
    $id = $_POST["id"];
    $money = $_POST["money"];

    // Eerst een nieuwe betaling invoegen...
    $sql = "INSERT INTO betalingen (betalingen_amount, factuur_id)
            VALUES (:amount, :id);";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":amount" => $money, ":id" => $id));

    // Update de facturen
    $sql = "UPDATE facturen
            SET facturen_amount = facturen_amount - :amount WHERE facturen_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":amount" => $money, ":id" => $id));

    // Zet paid op true.
    $sql = "SELECT facturen_amount FROM facturen WHERE facturen_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":id" => $id));

    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    if($res["facturen_amount"] <= 0){
      $sql = "UPDATE facturen
              SET facturen_paid = 1 WHERE facturen_id = :id";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array(":id" => $id));
    } else {
      $sql = "UPDATE facturen
              SET facturen_paid = 0 WHERE facturen_id = :id";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array(":id" => $id));
    }


  }

?>
