<?php

  class Parser {

    private $results = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        switch($callArray[$i]->call){
          case 'getName':
            $this->results[$callArray[$i]->call] = (object) ['result' => getName()];
            break;
          case 'getAge':
            $this->results[$callArray[$i]->call] = (object) ['result' => getAge()];
            break;
        }
      }
    }

    public function sendResult(){
      echo json_encode($this->results);
    }

  }


?>
