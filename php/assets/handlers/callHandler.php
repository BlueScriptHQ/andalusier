<?php

  // required functions

  function makeUTF8($d) {
    if (is_array($d)){
        foreach ($d as $k => $v)
            $d[$k] = makeUTF8($v);
    }
    else if(is_object($d)){
        foreach ($d as $k => $v)
            $d->$k = makeUTF8($v);
    }
   else {
     return utf8_encode($d);
   }
   return $d;
 }

  class callHandler {

    public $results = [];

    public function parseCalls($callArray){
      for ($i=0; $i < count($callArray); $i++) {
        global $dbHandler;
        if(function_exists($callArray[$i]->call)){
          if(property_exists($callArray[$i], 'callParameters')){
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler, $callArray[$i]->callParameters)];
          } else {
            $this->results[$callArray[$i]->call] = (object) ['result' => call_user_func($callArray[$i]->call, $dbHandler)];
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
