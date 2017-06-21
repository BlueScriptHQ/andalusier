<?php

function getList($dbHandler)
{
    /*
     * Grab all of the chats, linked to the signedIn user
     * Loop over them and push the name of the chat into a array
     */

    $sql = "
        SELECT 
            Chats.chats_id, Chats.chats_name, is_group, 
            accounts_name, messages_content, messages_created_at
        FROM Chats 
        INNER JOIN accounts_chats ON chats.chats_id = accounts_chats.chats_id
        INNER JOIN accounts ON accounts.accounts_id = accounts_chats.accounts_id 
        INNER JOIN messages ON Chats.Chats_id = messages.chats_id
        
        WHERE EXISTS (SELECT * FROM messages WHERE messages.accounts_id = 1)";

    $chats = [];
    $data = $dbHandler->handleQuery($sql, [':id' => $_SESSION['loggeduserid']], true);

    foreach($data as $row){
        $chats[$row->chats_name] = [
            $row->chats_id
        ];
    }

    var_dump($chats); exit;

    $queryGroups = "SELECT Chats_id ,Chats_name FROM Chats WHERE is_group = 1";
    $groups = $dbHandler->handleQuery($queryGroups, false, true);
    $html = "";

    foreach($groups as $group){
        $html .= "<li data-group-id='{$group->Chats_id}' class='group'>{$group->Chats_name}</li>";
    }

    $queryUsers = "SELECT * FROM accounts WHERE accounts.accounts_id != :id";
    $users = $dbHandler->handleQuery($queryUsers, [':id' => $_SESSION['loggeduserid']], true);

    foreach($users as $user){
        $html .= "<li data-user-id='{$user->accounts_id}' class='user'>{$user->accounts_name}</li>";
    }

    return json_encode($html);
}

function getChat($dbHandler, $params){
    $query = "";
    return $params;
}