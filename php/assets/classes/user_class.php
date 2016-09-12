<?php

class userHandler {

  // this function returns the namefield for the given user id.
  function returnName($users_id) {
    $connectionHandling = new connectionHandler();
    $query = "SELECT accounts_name FROM accounts WHERE accounts_id = :id";
    $queryObject = array(':id' => $users_id);
    $responseArray = $connectionHandling->processQuery($query, $queryObject);
    if($responseArray != false){
      echo $responseArray['accounts_name'];
    } else { return ""; }
  }

}

?>
