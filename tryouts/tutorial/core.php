<?php

  require "callHandler.php";

  function getAge($dbHandler, $sequelHandler, $param){
    return $param->age + 20;
  }

  function addUser(){
    return "New user has been added.";
  }


  // uiteindelijk resultaat versturen!
  $callHandler->sendResult();

?>
