<?php

  class logHandler {

    private $message;
    private $dbHandler;
    private $sql = "INSERT INTO logs (logs_content) VALUES (:message);";

    public function __construct($dbHandler){
      $this->dbHandler = $dbHandler;
    }

    public function addMessage($message){

      $this->message = $message;
      $this->execute();

    }

    private function execute(){
      $this->dbHandler->handleQuery($this->sql, array(
       ":message" => $this->message
      ));
    }

  }

  $logHandler = new logHandler($dbHandler);


?>
