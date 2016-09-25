<?php

  // load account data
  function getAccountData($dbHandler, $sequelHandler){
    if(valid($_SESSION["loggeduserid"])){
      $sql = "SELECT
      accounts_name,accounts_tussenvoegsel,
      accounts_lastname,
      accounts_mobnr2,accounts_birthdate,
      accounts_email,accounts_email2,
      accounts_lastname,accounts_mobnr,
      accounts_phonenr,accounts_phonenr2,
      DATE_FORMAT(accounts_prev_loggedintime, '%d-%m-%Y %T') AS accounts_prev_loggedintime
      FROM accounts
      INNER JOIN accounts_contact_info
      ON accounts.accounts_id = accounts_contact_info.accounts_id
      WHERE accounts.accounts_id = :id";
      $data = $dbHandler->handleQuery($sql, array(':id' => $_SESSION["loggeduserid"]));
      return $data;
    }
  }


  //save account data
  if(isset($_POST["saveAccData"]) && !empty($_POST["saveAccData"])){
    if(isset($_SESSION["loggeduserid"]) && $_SESSION["loggeduserid"] != "") {
      $dataArray = json_decode($_POST["saveAccData"]);
      $accountsHandling = new connectionHandler();
      $sql = "UPDATE
      accounts acc
      JOIN
      accounts_contact_info acc_con
      ON acc.accounts_id = acc_con.accounts_id
      SET
      acc.accounts_name = :accounts_name,
      acc.accounts_tussenvoegsel = :accounts_tussenvoegsel,
      acc.accounts_lastname = :accounts_lastname,
      acc.accounts_birthdate = :accounts_birthdate,
      acc_con.accounts_email = :accounts_email,
      acc_con.accounts_email2 = :accounts_email2,
      acc_con.accounts_phonenr = :accounts_phonenr,
      acc_con.accounts_phonenr2 = :accounts_phonenr2,
      acc_con.accounts_mobnr = :accounts_mobnr,
      acc_con.accounts_mobnr2 = :accounts_mobnr2
      WHERE acc.accounts_id = :id
      ";
      $data = $accountsHandling->processQuery($sql, array(
        ":accounts_name" => $dataArray->accounts_name,
        ":accounts_tussenvoegsel" => $dataArray->accounts_tussenvoegsel,
        ":accounts_lastname" => $dataArray->accounts_lastname,
        ":accounts_birthdate" => $dataArray->accounts_birthdate,
        ":accounts_email" => $dataArray->accounts_email,
        ":accounts_email2" => $dataArray->accounts_email2,
        ":accounts_phonenr" => $dataArray->accounts_phonenr,
        ":accounts_phonenr2" => $dataArray->accounts_phonenr2,
        ":accounts_mobnr" => $dataArray->accounts_mobnr,
        ":accounts_mobnr2" => $dataArray->accounts_mobnr2,
        ":id" => $_SESSION["loggeduserid"]
      ));
    } else { exit(); }
  }

  function getNotifications($dbHandler){
    if(valid(isset($_SESSION["loggeduserid"]))){
      $sql = "SELECT
      notifications_content, notifications_time
      FROM acc_notif
      INNER JOIN notifications
      ON acc_notif.notifications_id = notifications.notifications_id
      WHERE acc_notif.accounts_id = :id ORDER BY notifications_time DESC";
      $data = $dbHandler->handleQuery($sql, array(':id' => $_SESSION["loggeduserid"]), true, PDO::FETCH_OBJ);
      $return = "";
      if($data !== false){
        foreach ($data as $key => $value) {
          $return.= "<tr>
                  <td>".$value->notifications_time."</td>
                  <td>".$value->notifications_content."</td>
                </tr>";
        }
      } else {
        $return.= "<tr>
                  <td>".date("Y-m-d H:i:s")."</td>
                  <td>Momenteel geen meldingen.</td>
              </tr>";
     }
     return $return;
    }
  }


?>
