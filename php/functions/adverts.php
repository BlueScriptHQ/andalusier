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

?>
