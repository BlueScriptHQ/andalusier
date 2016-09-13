<?php

  class Parser {

    private $results = [];
    private $funcList = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        for ($j=0; $j < count($this->funcList); $j++) {
          if($this->funcList[$j] === $callArray[$i]->call){
            if(property_exists($callArray[$i], 'callParameters')){
              $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($this->funcList[$j], $callArray[$i]->callParameters)];
            } else {
              $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($this->funcList[$j])];
            }
          }
        }
      }
    }

    public function addFunc($function){
      $this->funcList[] = $function;
    }

    public function sendResult(){
      echo json_encode($this->results);
    }

  }

  $parser = new Parser();

?>
