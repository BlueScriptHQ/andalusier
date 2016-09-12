<?php

class connectionHandler {

  // this function will handle all Queries
  function processQuery($query, $queryObject, $interrupt = false){
    if($interrupt != false){
      sleep($interrupt);
    }
    require_once "connection.php";
    $results = $conn->prepare($query);
    $results->execute($queryObject);
    $count = $results->rowCount();
    if ($count > 0) {
      $dataArray = $results->fetch();
      return $dataArray;
    } else {
      $conn = null;
      return false;
    }
    $conn = null;
  }
  function killSession(){
    session_destroy();
  }
  function Interrupt($interruptTime){
    if($interruptTime !== ""){
      if(is_int($interruptTime)){
        sleep($interruptTime);
        return true;
      } else { return false; }
    }
  }
}

class userHandler {

  function returnName($users_id) {
    $connectionHandling = new connectionHandler();
    $query = "SELECT accounts_name FROM accounts WHERE accounts_id = :id";
    $queryObject = array(':id' => $users_id);
    $responseArray = $connectionHandling->processQuery($query, $queryObject);
    if($responseArray != false){
      echo $responseArray["accounts_name"];
    } else { return ""; }
  }

}

class inputHandler {

  function emptyCheck($input) {
    if($input !== ""){
      if(is_array($input) || is_object($input)){
        foreach ($input as $key => $value) {
          if(empty($value)){
            return true;
          }
        }
        return false;
      }
    } else { return true; }
  }

  function checkLength($inputLengths, $inputMaxLengths){
    if($inputLengths !== "" && $inputMaxLengths){
      if(is_object($inputLengths) && is_object($inputMaxLengths)){
        foreach ($inputLengths as $key => $value) {
          if(array_key_exists($key, $inputMaxLengths)){
            $maxLength = $inputMaxLengths->$key;
            if(strlen($value) > $maxLength){
              return true;
            } else {
              return false;
            }
          }
        }
        return false;
      } else if (is_array($inputLengths) && is_array($inputMaxLengths)){
        foreach ($inputLengths as $key => $value) {
          if (array_key_exists($key, $inputMaxLengths)){
            if(array_key_exists($key, $inputMaxLengths)){
              $maxLength = $inputMaxLengths->$key;
              if(strlen($value) > $maxLength){
                return true;
              } else {
                return false;
              }
            }
          }
        }
      }
    } else { return false; }
  }

  function hashInput($values, $method, $options = false){
    if(is_array($values) || is_object($values)){
      foreach ($values as $key => $value) {
        if($options !== false){
          $value = password_hash($value, $method, $options);
          return $values;
        } else {
          $value = password_hash($value, $method);
          return $values;
        }
      }
    } else {
      return password_hash($values, $method);
    }
  }

  function compareHash($password, $db_password){
    $password = ''.$password.'';
    $db_password = ''.$db_password.'';
    // extend with objects / array acception
    if(password_verify($password, ''.$db_password.'')){
      return true;
    } else { return false; }
  }
}

?>
