<?php

class inputHandler {

  // this function check whether given variable(s) are empty or not.
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

  // this function compares the length of given elements with the default (!) max length available.
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

  // this function is used to encrypt a string using the password_hash method.
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

  // this function is used to compare a hashed password with a given string.
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
