<?php

  require "assets/classes/parser.php";
  $parser = new Parser();

  if(isset($_POST["callArray"])){
    $callsArray = json_decode($_POST["callArray"]);
    $parser->parseCalls($callsArray);
  }

  function getName() {
    return "test";
  }

  // Aan het einde van de pagina
  $parser->sendResult();

?>
