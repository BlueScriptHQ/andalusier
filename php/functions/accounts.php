<?php

  function getAccounts($dbHandler){

    $sql = "SELECT accounts.accounts_id, accounts_username,
            accounts_name, ranks_name, ranks.ranks_id
            FROM accounts
            INNER JOIN acc_ranks
            ON accounts.accounts_id = acc_ranks.accounts_id
            INNER JOIN ranks
            ON acc_ranks.ranks_id = ranks.ranks_id
            ORDER BY ranks.ranks_id
            ";
    $data = $dbHandler->handleQuery($sql, false, true);

    $html = "";
    foreach($data as $row){
      $html.= "<tr>
        <td>".$row->accounts_id."</td>
        <td>".$row->accounts_username."</td>
        <td>".$row->accounts_name."</td>
        <td>".$row->ranks_name."</td>
        <td style='width: 70px;'><input type='button' onclick='editAccount(".$row->accounts_id.");'/></td>
      </tr>";
    }

    return $html;

  }

  function getAccountInfo($dbHandler, $id){
    $sql = "SELECT * FROM accounts
            INNER JOIN acc_ranks
            ON accounts.accounts_id = acc_ranks.accounts_id
            INNER JOIN ranks
            ON acc_ranks.ranks_id = ranks.ranks_id
            WHERE accounts.accounts_id = :id
            ORDER BY ranks.ranks_id";
    $data = $dbHandler->handleQuery($sql, array(":id" => $id), false);

    return json_encode($data);

  }

  function getAccountTypes($dbHandler){
    $sql = "SELECT ranks_id, ranks_name FROM ranks";
    $data = $dbHandler->handleQuery($sql, false, true);

    $html = "";
    foreach($data as $row){
      $html.= "<option value='".$row->ranks_id."'>".$row->ranks_name."</option>";
    }
    return $html;
  }

  function saveAccountPassword($dbHandler, $object){
    $sql = "UPDATE accounts SET accounts_password = :password WHERE accounts.accounts_id = :id";
    $password = password_hash($object->newPassword, PASSWORD_DEFAULT);
    $data = $dbHandler->handleQuery($sql, array(":password" => $password, ":id" => $object->id), false);
  }

  function saveEditAccountData($dbHandler, $object){
    $sql = "UPDATE accounts
            INNER JOIN acc_ranks
            ON accounts.accounts_id = acc_ranks.accounts_id
            INNER JOIN ranks
            ON acc_ranks.ranks_id = ranks.ranks_id
            SET
            accounts.accounts_username = :username,
            ranks.ranks_id = :ranks_id
            WHERE accounts.accounts_id = :id";

    $data = $dbHandler->handleQuery($sql, array(
      ":username" => $object->accounts_username,
      ":ranks_id" => intval($object->ranks_id),
      ":id" => $object->accounts_id
    ), false);

  }

?>
