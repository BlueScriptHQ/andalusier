<?php

class connectionHandler {

  // this function will handle all queries.
  function processQuery($query, $queryObject = false, $multiple = false, $interrupt = false){
    if($interrupt != false){
      sleep($interrupt);
    }
    require "connection.php";
    if($queryObject != false){
      if($multiple != false){
        // multiple results reqeusted
        $results = $conn->prepare($query);
        $results->execute($queryObject);
        $count = $results->rowCount();
        if ($count > 0) {
          return $results->fetchAll(PDO::FETCH_OBJ);
        } else {
          $conn = null;
          return false;
        }
        $conn = null;
      } else {
        // no multiple results reqeusted
        $results = $conn->prepare($query);
        $results->execute($queryObject);
        $count = $results->rowCount();
        if ($count > 0) {
          return $results->fetch();
        } else {
          $conn = null;
          return false;
        }
        $conn = null;
      }
    } else {
      $results = $conn->query($query);
      $count = $results->rowCount();
      if ($count > 0) {
        $dataArray = $results->fetchAll(PDO::FETCH_OBJ);
        return $dataArray;
      } else {
        $conn = null;
        return false;
      }
      $conn = null;
    }
  }

  // this function is used for killing a current session.
  function killSession(){
    session_destroy();
  }

  // this function will let the server wait for a given amount of time.
  function Interrupt($interruptTime){
    if($interruptTime !== ""){
      if(is_int($interruptTime)){
        sleep($interruptTime);
        return true;
      } else { return false; }
    }
  }

}

?>
