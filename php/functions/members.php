<?php

  // when the members table is being requested
  function getMembersTable($dbHandler){

    $sql = "SELECT
    members.members_id, members_titles_content, members_name, members_tussenvoegsel,
    members_lastname, members_types_content, members_contribution_amount, members_email,
    members_phonenr, members_paid, members_gift, members_reminder
    FROM members
    INNER JOIN members_contact_info
    ON members.members_id = members_contact_info.members_id
    INNER JOIN members_titles
    ON members.members_id = members_titles.members_id
    INNER JOIN members_status
    ON members.members_id = members_status.members_id
    INNER JOIN members_types
    ON members.members_types_id = members_types.members_types_id";

    $data = $dbHandler->handleQuery($sql, false, true);
    $return = "";
    if(empty($data) || $data == 0){
      $return.= "
      <tr>
          <td></td>
          <td>Momenteel geen leden in de database.</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      <tr>";
      die();
    }

    foreach ($data as $key => $value) {
      $package = ($value->members_gift == 1 ? "<img src='img/content-section/members-list/packet_received.png' alt='' />" : "<img src='img/content-section/members-list/packet_notreceived.png' alt='' />");
      $paid = ($value->members_paid == 1 ? "<img src='img/content-section/members-list/money_payed.png' alt='' />" : "<img src='img/content-section/members-list/money_notpayed.png' alt='' />");
      $reminder = ($value->members_reminder == 1 ? "<img src='img/content-section/members-list/reminder_received.png' alt='' />" : "<img src='img/content-section/members-list/reminder_notreceived.png' alt='' />");
      $spaceEnabled = (empty($value->titles_tussenvoegsel) ? '' : ' ');
      $name = "(".ucfirst($value->members_titles_content).") ".$value->members_name." ".$value->members_tussenvoegsel.$spaceEnabled.$value->members_lastname;
      $return.= "
        <tr>
    				<td>".$value->members_id."</td>
    				<td>".$name."</td>
    				<td>".$value->members_types_content."</td>
    				<td>".$value->members_email."</td>
    				<td>
    					".$package."
    					".$paid."
              ".$reminder."
    				</td>
    				<td><input type='button' onclick='openMember(".$value->members_id.");'></td>
    		<tr>";
    }

    return $return;

  }

  function getMembersInfo($dbHandler, $param){
    $sql = "SELECT
    members.members_id, members_titles_content, members_name, members_tussenvoegsel, members_lastname, members_residence_street, members_residence_streetnr,
    members_residence_zip, members_residence_place, members_residence_country, DATE_FORMAT(members_birthdate, '%d-%m-%Y') AS members_birthdate, members_phonenr, members_phonenr2,
    members_mobnr, members_mobnr2, members_email, members_email2, DATE_FORMAT(members_startdate, '%d-%m-%Y') AS members_startdate, members_types.members_types_id,
    members_stable, members_bank, members_newsletter, members_comment, members_mail, members_gift, members_paid, members_reminder
    FROM members
    INNER JOIN members_residence_info
    ON members.members_id = members_residence_info.members_id
    INNER JOIN members_contact_info
    ON members.members_id = members_contact_info.members_id
    INNER JOIN members_status
    ON members.members_id = members_status.members_id
    INNER JOIN members_titles
    ON members.members_id = members_titles.members_id
    INNER JOIN members_types
    ON members.members_types_id = members_types.members_types_id
    WHERE members.members_id = :id";
    return $dbHandler->handleQuery($sql, array(":id" => $param), false, PDO::FETCH_OBJ);
  }
  // when the members's information is being requested
  if (isset($_POST["requestMembersInfo"]) && $_POST["requestMembersInfo"] != "") {
    $accountsHandling =  new connectionHandler();
    $sql = "SELECT
    members.members_id, members_titles_content, members_name, members_tussenvoegsel, members_lastname, members_residence_street,
    members_residence_zip, members_residence_place, members_residence_country, DATE_FORMAT(members_birthdate, '%d-%m-%Y') AS members_birthdate, members_phonenr, members_phonenr2,
    members_mobnr, members_mobnr2, members_email, members_email2, DATE_FORMAT(members_startdate, '%d-%m-%Y') AS members_startdate, members_types.members_types_id,
    members_stable, members_bank, members_newsletter, members_comment, members_mail, members_gift, members_paid, members_reminder
    FROM members
    INNER JOIN members_residence_info
    ON members.members_id = members_residence_info.members_id
    INNER JOIN members_contact_info
    ON members.members_id = members_contact_info.members_id
    INNER JOIN members_status
    ON members.members_id = members_status.members_id
    INNER JOIN members_titles
    ON members.members_id = members_titles.members_id
    INNER JOIN members_types
    ON members.members_types_id = members_types.members_types_id
    WHERE members.members_id = :id";
    $data = $accountsHandling->processQuery($sql, array(
      ":id" => $_POST["requestMembersInfo"]
    ));

    foreach ($data as $key => $value) {
      if(is_int($key)) {
        unset($data[$key]);
      }
    }
    echo json_encode($data);
  }

  if (isset($_POST["requestMembersUpdate"]) && $_POST["requestMembersUpdate"] != "") {
    $dataArray = json_decode($_POST['requestMembersUpdate']);
    $accountsHandling =  new connectionHandler();
    $sql = "UPDATE members
            INNER JOIN members_contact_info
              ON members.members_id = members_contact_info.members_id
            INNER JOIN members_residence_info
              ON members.members_id = members_residence_info.members_id
            INNER JOIN members_titles
              ON members.members_id = members_titles.members_id
            INNER JOIN members_status
              ON members.members_id = members_status.members_id
            SET    members_titles_content = :members_title,
                   members.members_name = :members_name,
                   members.members_tussenvoegsel = :members_tussenvoegsel,
                   members.members_lastname = :members_lastname,
                   members.members_birthdate = :members_birthdate,
                   members.members_newsletter = :members_newsletter,
                   members.members_bank = :members_bank,
                   members.members_comment = :members_comment,
                   members.members_stable = :members_stable,
                   members.members_types_id = :members_types_id,
                   members.members_mail = :members_sendway,

                   members_contact_info.members_email = :members_email,
                   members_contact_info.members_email2 = :members_email2,
                   members_contact_info.members_phonenr = :members_phonenr,
                   members_contact_info.members_phonenr2 = :members_phonenr2,
                   members_contact_info.members_mobnr = :members_mobnr,

                   members_residence_info.members_residence_street = :members_street,
                   members_residence_info.members_residence_zip = :members_zip,
                   members_residence_info.members_residence_place = :members_place,
                   members_residence_info.members_residence_country = :members_country,

                   members_status.members_gift = :members_gift,
                   members_status.members_paid = :members_paid,
                   members_status.members_reminder = :members_reminder
            WHERE  members.members_id = :user_id";
    $data = $accountsHandling->processQuery($sql, array(
      ":user_id" => $dataArray->members_id,
      ":members_title" => $dataArray->members_title,
      ":members_name" => $dataArray->members_name,
      ":members_tussenvoegsel" => $dataArray->members_tussenvoegsel,
      ":members_lastname" => $dataArray->members_lastname,
      ":members_birthdate" => date_format(new DateTime($dataArray->members_birthdate), 'Y-m-d'),
      ":members_newsletter" => $dataArray->members_newsletter,
      ":members_bank" => $dataArray->members_bank,
      ":members_types_id" => $dataArray->members_types_id,
      ":members_comment" => $dataArray->members_comment,
      ":members_stable" => $dataArray->members_stable,
      ":members_email" => $dataArray->members_email,
      ":members_email2" => $dataArray->members_email2,
      ":members_phonenr" => $dataArray->members_phonenr,
      ":members_phonenr2" => $dataArray->members_phonenr2,
      ":members_mobnr" => $dataArray->members_mobnr,
      ":members_street" => $dataArray->members_residence_street,
      ":members_zip" => $dataArray->members_residence_zip,
      ":members_place" => $dataArray->members_residence_place,
      ":members_country" => $dataArray->members_residence_country,
      ":members_sendway" => $dataArray->members_sendway,
      ":members_gift" => $dataArray->members_gift,
      ":members_paid" => $dataArray->members_paid,
      ":members_reminder" => $dataArray->members_reminder
    ));

    $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
    $spaceEnabled = (empty($dataArray->titles_tussenvoegsel) ? '' : ' ');
    $name = $dataArray->members_name." ".$dataArray->members_tussenvoegsel.$spaceEnabled.$dataArray->members_lastname;
    $data = $accountsHandling->processQuery($sql, array(
      ":message" => "Lid gegevens voor ".$name. " aangepast."
    ));
  }

  if (isset($_POST["requestMemberAdd"]) && $_POST["requestMemberAdd"] != "") {
    require "connection.php";
    $dataArray = json_decode($_POST['requestMemberAdd']);

    $sql = "INSERT INTO members
    (members_name, members_tussenvoegsel, members_lastname,
     members_birthdate, members_newsletter, members_mail,
     members_stable, members_bank, members_comment, members_types_id)
     VALUES
    (:members_name, :members_tussenvoegsel,:members_lastname,
     :members_birthdate, :members_newsletter, :members_sendway,
     :members_stable, :members_bank, :members_comment, :members_types_id)";
     $startQuery = $conn->prepare($sql);
     $result = $startQuery->execute(array(
       ":members_name" => $dataArray->members_name,
       ":members_tussenvoegsel" => $dataArray->members_tussenvoegsel,
       ":members_lastname" => $dataArray->members_lastname,
       ":members_birthdate" => date_format(new DateTime($dataArray->members_birthdate), 'Y-m-d'),
       ":members_newsletter" => $dataArray->members_newsletter,
       ":members_bank" => $dataArray->members_bank,
       ":members_types_id" => $dataArray->members_types_id,
       ":members_comment" => $dataArray->members_comment,
       ":members_stable" => $dataArray->members_stable,
       ":members_sendway" => $dataArray->members_sendway
     ));

     $members_id = $conn->lastInsertId();

     $sql = "INSERT INTO members_residence_info (members_id, members_residence_street, members_residence_zip, members_residence_place, members_residence_country)
     VALUES (:members_id, :members_residence_street, :members_residence_zip, :members_residence_place, :members_residence_country);";
     $query = $conn->prepare($sql);
     $result = $query->execute(array(
       ":members_id" => $members_id,
       ":members_residence_street" => $dataArray->members_residence_street,
       ":members_residence_zip" => $dataArray->members_residence_zip,
       ":members_residence_place" => $dataArray->members_residence_place,
       ":members_residence_country" => $dataArray->members_residence_country
     ));
     $sql = "INSERT INTO members_contact_info
     (members_id, members_email, members_email2, members_phonenr, members_phonenr2, members_mobnr)
     VALUES (:members_id, :members_email, :members_email2, :members_phonenr, :members_phonenr2, :members_mobnr);";
     $query = $conn->prepare($sql);
     $result = $query->execute(array(
       ":members_id" => $members_id,
       ":members_email" => $dataArray->members_email,
       ":members_email2" => $dataArray->members_email2,
       ":members_phonenr" => $dataArray->members_phonenr,
       ":members_phonenr2" => $dataArray->members_phonenr,
       ":members_mobnr" => $dataArray->members_mobnr
     ));
     $sql = "INSERT INTO members_status
     (members_id)
     VALUES (:members_id);";
     $query = $conn->prepare($sql);
     $result = $query->execute(array(
       ":members_id" => $members_id,
     ));
     $sql = "INSERT INTO members_titles
     (members_id, members_titles_content)
     VALUES (:members_id, :members_titles_content);";
     $endQuery = $conn->prepare($sql);
     $result = $endQuery->execute(array(
       ":members_id" => $members_id,
       ":members_titles_content" => $dataArray->members_title
     ));

     $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
     $spaceEnabled = (empty($dataArray->members_tussenvoegsel) ? '' : ' ');
     $name = $dataArray->members_name." ".$dataArray->members_tussenvoegsel.$spaceEnabled.$dataArray->members_lastname;
     $query = $conn->prepare($sql);
     $result = $query->execute(array(
      ":message" => "Lid ".$name. " toegevoegd!"
    ));
  }


  function getMemberPR($dbHandler){

    $sql = "SELECT
    members.members_id, members_mail, members_paid, members_email
    FROM members
    INNER JOIN members_contact_info
    ON members.members_id = members_contact_info.members_id
    INNER JOIN members_status
    ON members.members_id = members_status.members_id
    WHERE members_mail = 1 AND members_paid = 0";

    $data = $dbHandler->handleQuery($sql, false, true);

    foreach($data as $row){
      // the message
      $msg = "Pay mate";
      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);
      // send email
      mail($row->members_mail,"Andalusier Vereniging Betalingsverzoek", $msg);
    }

  }

?>
