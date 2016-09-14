<?php

  class Parser {

    private $results = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        if(function_exists($callArray[$i]->call)){
          if(property_exists($callArray[$i], 'callParameters')){
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $callArray[$i]->callParameters)];
          } else {
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($this->funcList[$j])];
          }
        } else {
          $this->results[$callArray[$i]->call] = (object) ['result' => null];
        }
      }
    }

    public function sendResult(){
      return json_encode($this->results);
    }

  }

  $parser = new Parser();

  if(isset($_POST["callArray"])){
    $callsArray = json_decode($_POST["callArray"]);
    $parser->parseCalls($callsArray);
  }


?>
