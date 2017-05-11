<?php

  class dbHandler {

    private $sql;
    private $object;
    private $stmt;
    private $conn;
    private $results;
    private $fetchMode;

    public function setConnection(PDO $conn){
      $this->conn = $conn;
    }

    public function handleQuery($sql, $object = false, $mode = false, $fetchMode = PDO::FETCH_OBJ){
      $this->sql = $sql;
      $this->object = $object;
      $this->mode = $mode;
      $this->fetchMode = $fetchMode;
      return $this->prepareQuery();
    }

    public function lastID(){
      return $this->conn->lastInsertId();
    }

    private function prepareQuery(){
      $this->stmt = $this->conn->prepare($this->sql);
      return $this->executeQuery();
    }

    private function executeQuery(){

      // if useMultiple is set to true and object is given
      if($this->mode === true && $this->object !== false){
        $this->stmt->execute($this->object);
        $this->results = $this->stmt->fetchAll($this->fetchMode);
        return $this->returnResults();
      }

      // if useMultiple is set to true and object is not given
      else if($this->mode === false && $this->object !== false){
        $this->stmt->execute($this->object);
        $this->results = $this->stmt->fetch($this->fetchMode);
        return $this->returnResults();
      }
      // if useMultiple is set to false and object is given
      else if($this->mode === true && $this->object === false){
        $this->stmt->execute();
        $this->results = $this->stmt->fetchAll($this->fetchMode);
        return $this->returnResults();
      }

      // if useMultiple is set to false and object is not given
      else if ($this->mode === false && $this->object === false){
        $this->stmt->execute();
        $this->results = $this->stmt->fetch($this->fetchMode);
        return $this->returnResults();
      }


      else {
        return false;
      }
    }

    private function returnResults(){
      return $this->results;
    }

  }

  $dbHandler = new dbHandler();
  $dbHandler->setConnection($conn);
