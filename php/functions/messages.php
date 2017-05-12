<?php

function getList($dbHandler)
{
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