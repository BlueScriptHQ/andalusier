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
      </tr>";
    }

    return $html;

  }

?>
