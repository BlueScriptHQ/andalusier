<?php

  function getAdvertsTable($dbHandler){
    $sql = "SELECT * FROM adverts WHERE adverts_old = 0";
    $data = $dbHandler->handleQuery($sql, false, true);

    $html = "";

    foreach($data as $row){

      $status = 'niet betaald';
      if($row->adverts_status == 1){
        $status = "betaald";
      }
      $html.= "<tr>
        <td>".$row->adverts_id."</td>
        <td>".$row->adverts_name."</td>
        <td>".$row->adverts_type."</td>
        <td>".$row->adverts_owner."</td>
        <td>".$status."</td>
        <td style='width: 70px;'><input type='button' onclick='openAdvert(".$row->adverts_id.");'/></td>
      </tr>";
    }

    return $html;

  }

  function getAdvertsInfo($dbHandler, $id){
    $sql = "SELECT * FROM adverts WHERE adverts_id = :id";
    $data = $dbHandler->handleQuery($sql, array(":id"=> $id));

    return json_encode(makeUTF8($data));
  }

  function addNewAdvert($dbHandler, $object){
    $adverts_name = $object->adverts_name;
    $adverts_type = $object->adverts_type;
    $adverts_owner = $object->adverts_owner;
    $adverts_contact = $object->adverts_contact;
    $adverts_address = $object->adverts_address;
    $adverts_postalcode = $object->adverts_postalcode;
    $adverts_city = $object->adverts_city;
    $adverts_country = $object->adverts_country;
    $adverts_email = $object->adverts_email;
    $adverts_email2 = $object->adverts_email2;
    $adverts_telephone = $object->adverts_telephone;
    $adverts_telephone2 = $object->adverts_telephone2;
    $adverts_mobile = $object->adverts_mobile;
    $adverts_date = $object->adverts_date;
    $adverts_bank = $object->adverts_bank;
    $adverts_billingnumber = $object->adverts_billingnumber;
    $adverts_status = $object->adverts_status;
    $adverts_comment = $object->adverts_comment;

    $sql = "INSERT INTO adverts(adverts_name, adverts_type, adverts_owner, adverts_enddate, adverts_contact, adverts_address, adverts_postalcode, adverts_city, adverts_country, adverts_email, adverts_email2, adverts_telephone, adverts_telephone2, adverts_mobile, adverts_bank, adverts_billingnumber, adverts_status, adverts_comment, adverts_old)
    VALUES
    (:name, :type, :owner, :date, :contact, :address, :postalcode, :city, :country, :email, :email2, :telephone, :telephone2, :mobile, :bank, :billingnumber, :status, :comment, 0)";

    $data = $dbHandler->handleQuery($sql,
      array(":name"=> $adverts_name, ":type"=> $adverts_type, ":owner"=> $adverts_owner,
            ":date"=> $adverts_date, ":contact"=> $adverts_contact, ":address"=> $adverts_address,
            ":postalcode"=> $adverts_postalcode, "city"=> $adverts_city,":country"=> $adverts_country,
            ":email"=> $adverts_email, ":email2"=> $adverts_email2, ":telephone"=>
            $adverts_telephone, ":telephone2"=> $adverts_telephone2, ":mobile"=> $adverts_mobile,
            ":bank"=> $adverts_bank, ":billingnumber"=> $adverts_billingnumber, ":status"=> $adverts_status, ":comment"=> $adverts_comment));
  }

  function saveNewAdvert($dbHandler, $object){
    $adverts_id = $object->adverts_id;
    $adverts_name = $object->adverts_name;
    $adverts_type = $object->adverts_type;
    $adverts_owner = $object->adverts_owner;
    $adverts_contact = $object->adverts_contact;
    $adverts_address = $object->adverts_address;
    $adverts_postalcode = $object->adverts_postalcode;
    $adverts_city = $object->adverts_city;
    $adverts_country = $object->adverts_country;
    $adverts_email = $object->adverts_email;
    $adverts_email2 = $object->adverts_email2;
    $adverts_telephone = $object->adverts_telephone;
    $adverts_telephone2 = $object->adverts_telephone2;
    $adverts_mobile = $object->adverts_mobile;
    $adverts_enddate = $object->adverts_enddate;
    $adverts_bank = $object->adverts_bank;
    $adverts_billingnumber = $object->adverts_billingnumber;
    $adverts_status = $object->adverts_status;
    $adverts_comment = $object->adverts_comment;

    $sql = "UPDATE adverts SET
    adverts_name = :name,
    adverts_type = :type,
    adverts_owner = :owner,
    adverts_enddate = :enddate,
    adverts_contact = :contact,
    adverts_address = :address,
    adverts_postalcode = :postalcode,
    adverts_city = :city,
    adverts_country = :country,
    adverts_email = :email,
    adverts_email2 = :email2,
    adverts_telephone = :telephone,
    adverts_telephone2 = :telephone2,
    adverts_mobile = :mobile,
    adverts_bank = :bank,
    adverts_billingnumber = :billingnumber,
    adverts_status = :status,
    adverts_comment = :comment
    WHERE adverts_id = :id";

    $data = $dbHandler->handleQuery($sql,
      array(":name"=> $adverts_name, ":type"=> $adverts_type, ":owner"=> $adverts_owner,
            ":enddate"=> $adverts_enddate, ":contact"=> $adverts_contact, ":address"=> $adverts_address,
            ":postalcode"=> $adverts_postalcode, "city"=> $adverts_city,":country"=> $adverts_country,
            ":email"=> $adverts_email, ":email2"=> $adverts_email2, ":telephone"=>
            $adverts_telephone, ":telephone2"=> $adverts_telephone2, ":mobile"=> $adverts_mobile,
            ":bank"=> $adverts_bank, ":billingnumber"=> $adverts_billingnumber, ":status"=> $adverts_status,
            ":id"=> $adverts_id, ":comment"=> $adverts_comment));
  }

  function moveNewAdvert($dbHandler, $id){
    $sql = "UPDATE adverts SET adverts_old = 1 WHERE adverts_id = :id";

    $data = $dbHandler->handleQuery($sql,
      array(":id"=> $id));
  }
?>
