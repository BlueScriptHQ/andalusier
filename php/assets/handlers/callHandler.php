<?php

  class callHandler {

    public $results = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        global $dbHandler;
        global $logHandler;
        if(function_exists($callArray[$i]->call)){
          if(property_exists($callArray[$i], 'callParameters')){
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler, $callArray[$i]->callParameters, $logHandler)];
          } else {
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler, $logHandler)];
          }
        } else {
          $this->results[$callArray[$i]->call] = (object) ['result' => null];
        }
      }
    }

    public function sendResult(){
      $UTF8ConvertedResults = makeUTF8($this->results);
      echo json_encode($UTF8ConvertedResults);
    }

  }

  $callHandler = new callHandler();

  if(isset($_POST["callArray"])){
    $callsArray = json_decode($_POST["callArray"]);
    $callHandler->parseCalls($callsArray);
  }

?>
