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

    return json_encode($data);
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
    $adverts_comment = $object->adverts_comment;

    $sql = "INSERT INTO adverts(adverts_name, adverts_type, adverts_owner, adverts_enddate, adverts_contact, adverts_address, adverts_postalcode, adverts_city, adverts_country, adverts_email, adverts_email2, adverts_telephone, adverts_telephone2, adverts_mobile, adverts_old)
    VALUES
    (:name, :type, :owner, :date, :contact, :address, :postalcode, :city, :country, :email, :email2, :telephone, :telephone2, :mobile, 0)";

    $data = $dbHandler->handleQuery($sql,
      array(":name"=> $adverts_name, ":type"=> $adverts_type, ":owner"=> $adverts_owner,
            ":date"=> $adverts_date, ":contact"=> $adverts_contact, ":address"=> $adverts_address,
            ":postalcode"=> $adverts_postalcode, "city"=> $adverts_city,":country"=> $adverts_country,
            ":email"=> $adverts_email, ":email2"=> $adverts_email2, ":telephone"=>
            $adverts_telephone, ":telephone2"=> $adverts_telephone2, ":mobile"=> $adverts_mobile));
  }

  function advertsExtraInfoHandlerNew($dbHandler, $object){
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
    $adverts_date = $object->adverts_date;
    $adverts_bank = $object->adverts_bank;
    $adverts_billingnumber = $object->adverts_billingnumber;
    $adverts_comment = $object->adverts_comment;

    $sql = "UPDATE INTO adverts(adverts_id, adverts_name, adverts_type, adverts_owner, adverts_date, adverts_contact, adverts_address, adverts_postalcode, adverts_city, adverts_country, adverts_email, adverts_telephone, adverts_old)
    VALUES
    (:id, :name, :type, :owner, :date, :contact, :address, :postalcode, :city, :country, :email, :telephone, 0)";

    $data = $dbHandler->handleQuery($sql, array(":id"=> $adverts_id, ":name"=> $adverts_name, ":type"=> $adverts_type, ":owner"=> $adverts_owner, ":date"=> $adverts_date, ":contact"=> $adverts_contact, ":address"=> $adverts_address, ":postalcode"=> $adverts_postalcode, "city"=> $adverts_city,":country"=> $adverts_country, ":email"=> $adverts_email, ":telephone"=> $adverts_phone));
  }

?>
