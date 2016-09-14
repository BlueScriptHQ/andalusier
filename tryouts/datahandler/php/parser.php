<?php

  require "parserClass.php";

  function getName() {
    return "test";
  }

  function getAge($params){
    return $params->age;
  }

  // Aan het einde van de pagina
  echo $parser->sendResult();

?>
