<?php
    // live mode
    error_reporting(0);

    session_start();

    require "assets/config/defaults.php";

    require "assets/classes/connection_class.php";
    require "assets/classes/user_class.php";
    require "assets/classes/input_class.php";

    // load account name
    if(isset($_POST["requestAccName"]) && $_POST["requestAccName"] == true) {
    	if(isset($_SESSION["loggeduserid"]) && $_SESSION["loggeduserid"] != "") {
    		$userHandling = new userHandler();
    		echo $userHandling->returnName($_SESSION["loggeduserid"]);
    	} else { echo "Gebruiker"; exit(); }
    }

    // load the menu
    if(isset($_POST["requestMenu"]) && $_POST["requestMenu"] == true) {
      if(isset($_SESSION["loggeduserid"]) && $_SESSION["loggeduserid"] != "") {
        require_once("connection.php");
        $sql = "SELECT pages.pages_id, pages_name, pages_parentid, pages_iscontroller, pages_url FROM acc_ranks
        INNER JOIN ranks
        ON acc_ranks.ranks_id = ranks.ranks_id
        INNER JOIN ranks_pages
        ON ranks.ranks_id = ranks_pages.ranks_id
        INNER JOIN pages
        ON ranks_pages.pages_id = pages.pages_id
        WHERE acc_ranks.accounts_id = :id
        ";
        $results = $conn->prepare($sql);
        $results->execute(array(
          "id" => $_SESSION["loggeduserid"]
        ));
        $fetchedResults = $results->fetchAll(PDO::FETCH_OBJ);
        $hierarchy = array();
        $indexes = array();
        foreach($fetchedResults as $row){
            if (array_key_exists($row->pages_parentid, $indexes)) {
              for ($i= 0; $i < count($hierarchy); $i++) {
                $check = $hierarchy[$i]['pages_id'];
                if($check == $row->pages_parentid){
                  $hierarchy[$i][] = array(
                    "pages_parentid" => $row->pages_parentid,
                    "pages_id" => $row->pages_id,
                    "pages_iscontroller" => $row->pages_iscontroller,
                    "pages_url" => $row->pages_url,
                    "pages_name" => $row->pages_name
                  );
                }
              }
            } else {
                $hierarchy[] = array(
                  "pages_id" => $row->pages_id,
                  "pages_url" => $row->pages_url,
                  "pages_iscontroller" => $row->pages_iscontroller,
                  "pages_name" => $row->pages_name
                );
                $indexes[$row->pages_id] = "SomeCoolValue, ThisIsJustAPlaceholderAnyway";
            }
        }
        foreach ($hierarchy as $parentKey => $parentValue) {
          if($hierarchy[$parentKey]["pages_iscontroller"] != 0){
            echo "<li id='".strtolower($hierarchy[$parentKey]["pages_name"])."-toggler' onclick='openMenu".$hierarchy[$parentKey]["pages_name"]."()'>
                  <img src='img/side-menu/".strtolower($hierarchy[$parentKey]["pages_name"]).".png'>
                  <a href='#'>".$hierarchy[$parentKey]["pages_name"]."</a>
                  <img id='".strtolower($hierarchy[$parentKey]["pages_name"])."-dropdown-indicator' src='img/side-menu/arrow-down.png'>
                  </li>";
          } else {
            echo "<li><img src='img/side-menu/".strtolower($hierarchy[$parentKey]["pages_name"]).".png'><a href='".$hierarchy[$parentKey]["pages_url"]."'>".$hierarchy[$parentKey]["pages_name"]."</a></li>";
          }
          echo " <div id='".strtolower($hierarchy[$parentKey]["pages_name"])."-sub-menu'>";
          foreach ($hierarchy[$parentKey] as $key => $value) {
            if(is_array($value)){
             echo "<li class='ischild'><a href='".strtolower($value['pages_url'])."'>".$value['pages_name']."</a></li>";
            }
          }
          echo "</div>";
        }
      } else { echo "Interne fout. Probeer het later opnieuw."; exit(); }
    }
    // load account data
    if(isset($_POST["requestAccData"]) && $_POST["requestAccData"] == true) {
    	if(isset($_SESSION["loggeduserid"]) && $_SESSION["loggeduserid"] != "") {
        $accountsHandling =  new connectionHandler();
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
        $data = $accountsHandling->processQuery($sql, array(
          ":id" => $_SESSION["loggeduserid"]
        ));
        echo json_encode($data);
    	} else { exit(); }
    }

    // save account data
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

    // load account notifications
   if(isset($_POST["requestAccNotif"]) && $_POST["requestAccNotif"] == true) {
     $userHandling =  new connectionHandler();
     $sql = "SELECT
     notifications_content, notifications_time
     FROM acc_notif
     INNER JOIN notifications
     ON acc_notif.notifications_id = notifications.notifications_id
     WHERE acc_notif.accounts_id = :id ORDER BY notifications_time DESC";
     $data = $userHandling->processQuery($sql, array(
       ":id" => $_SESSION["loggeduserid"]
     ), true);
     if($data != false){
       foreach ($data as $key => $value) {
         echo "<tr>
                 <td>".$value->notifications_time."</td>
                 <td>".$value->notifications_content."</td>
               </tr>";
       }
     } else {
       echo "<tr>
                 <td>".date("Y-m-d H:i:s")."</td>
                 <td>Momenteel geen meldingen.</td>
             </tr>";
    }
   }

?>