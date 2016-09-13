<?php

  require "assets/classes/parser.php";

  function getName() {
    return "test";
  } $parser->addFunc("getName");

  function getAge($params){
    return $params->age;
  } $parser->addFunc("getAge");

  if(isset($_POST["callArray"])){
    $callsArray = json_decode($_POST["callArray"]);
    $parser->parseCalls($callsArray);
  }

  // Aan het einde van de pagina
  $parser->sendResult();

?>
