<?php

  class callHandler {

    public $results = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        global $dbHandler;
        global $sequelHandler;
        if(function_exists($callArray[$i]->call)){
          if(property_exists($callArray[$i], 'callParameters')){
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler, $sequelHandler, $callArray[$i]->callParameters)];
          } else {
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler, $sequelHandler)];
          }
        } else {
          $this->results[$callArray[$i]->call] = (object) ['result' => null];
        }
      }
    }

    public function sendResult(){
      echo json_encode($this->results);
    }

  }

  $callHandler = new callHandler();

  if(isset($_POST["callArray"])){
    $callsArray = json_decode($_POST["callArray"]);
    $callHandler->parseCalls($callsArray);
  }

?>
