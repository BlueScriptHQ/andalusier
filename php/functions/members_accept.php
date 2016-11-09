<?php

  function getMembersAccept($dbHandler){
    $sql = "SELECT members.members_id, members_tussenvoegsel, members_lastname, members_name, members_types_content,
                   members_email, members_titles_content
            FROM members
            INNER JOIN members_types ON
            members_types.members_types_id = members.members_types_id
            INNER JOIN members_contact_info ON
            members_contact_info.members_id = members.members_id
            INNER JOIN members_titles ON
            members_titles.members_id = members.members_id
            WHERE members_onhold = 1";
    $data = $dbHandler->handleQuery($sql, false, true);

    if($data === false || count($data) === 0){
      return "<tr>
        <td></td>
        <td>Momenteel zijn er geen nieuwe aanmeldingen</td>
      </tr>";
    }


    $html = "";
    foreach($data as $row){
      $spaceEnabled = (empty($row->members_tussenvoegsel) ? '' : ' ');
      $name = "(".ucfirst($row->members_titles_content).") ".$row->members_name." ".strtolower($row->members_tussenvoegsel).$spaceEnabled.$row->members_lastname;

      $html.= "<tr>
        <td>".$row->members_id."</td>
        <td>".$name."</td>
        <td>".$row->members_types_content."</td>
        <td>".$row->members_email."</td>
        <td style='width: 70px;'><input type='button' onclick='openMember(".$row->members_id.");'/></td>
        <td><a onclick='acceptMember(".$row->members_id.", false)'>weigeren</a></td>
        <td><a onclick='acceptMember(".$row->members_id.", true)'>accepteren</a></td>
      </tr>";
    }

    return $html;

  }

  //Get the info of the clicked member to accept
  function getMemberInfo($dbHandler, $id){
    $sql = "SELECT members.members_id, members_name, members_tussenvoegsel, members_lastname, members_birthdate,
            members_newsletter, members_mail, members_stable, members_bank, members_comment,
            members_email, members_email2, members_phonenr, members_phonenr2, members_mobnr, members_mobnr2,
            members_residence_street, members_residence_zip, members_residence_place, members_residence_country,
            members_titles_content, members_types_content
            FROM members
            INNER JOIN members_contact_info
            ON members_contact_info.members_id = members.members_id
            INNER JOIN members_residence_info
            ON members_residence_info.members_id = members.members_id
            INNER JOIN members_titles
            ON members_titles.members_id = members.members_id
            INNER JOIN members_types
            ON members_types.members_types_id = members.members_types_id
            WHERE members.members_id = :id";
    $data = $dbHandler->handleQuery($sql, array(":id" => $id));
    return json_encode($data);
  }

  function acceptMember($dbHandler, $object){
    $id = $object->id;
    $param = $object->param;

    //if param is false (weigeren) then delete row form db
    if($param == 0){
      $sql = "DELETE FROM members
              WHERE members_id = :id";
      $data = $dbHandler->handleQuery($sql, array(":id"=> $id));
    }
    //if param is true (accpteren) then startdate=currdate and onhold = 0
    else{
      $sql = "UPDATE members SET members_onhold = 0, members_startdate = CURRENT_TIMESTAMP()
              WHERE members_id = :id";
      $data = $dbHandler->handleQuery($sql, array(":id"=> $id));
    }
  }

?>
