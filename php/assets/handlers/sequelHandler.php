<?php

    class sequelHandler {

      private $return;

      private $method;
      private $tags;
      private $from;
      private $joins;
      private $optional;
      private $condition;

      public function generateSequel($method, $tags, $from, $joins = false, $condition = false, $optional = false){
        $this->method = $method;
        $this->tags = $tags;
        $this->from = $from;
        $this->condition = $condition;
        $this->joins = $joins;
        $this->optional = $optional;
        return $this->buildSequel();
      }

      private function buildSequel(){
        $this->return .= $this->method.=" ";

        // Build up the basic select tag.
        for($i = 0; $i < count($this->tags); $i++){
         $this->return .= ' '.$this->tags[$i].',';
        }

        $this->return = substr($this->return, 0, -1);

        $this->return .= ' FROM '.$this->from.' ';

        if($this->joins !== false){
          foreach ($this->joins as $key => $value) {
            $this->return .= ' INNER JOIN '.$key.' ON '.$value.' ';
          }
          $this->return = substr($this->return, 0, -1);
        }

        if($this->condition !== false){
          $this->return .= ' WHERE ';
          foreach($this->condition as $key => $value){
            $this->return.= $key.' = '.':'.$value." AND ";  
          }
          for($i = 0; $i < count($this->condition); $i++){

          }
          $this->return = substr($this->return, 0, -4);
        }

        if($this->optional !== false){
          $this->return .= ' '.$this->optional;
        }

        return $this->returnSequel();
      }

      public function returnSequel(){
        return $this->return;
      }
    }

    $sequelHandler = new sequelHandler();

    //$sequelHandler->generateSequel("SELECT", array("build", 'name', 'id'),
    //                               "users", false, array('id', 'name'), "ASC");


?>
