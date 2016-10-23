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

?>
