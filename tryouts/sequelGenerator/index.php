<?php

    class sequelHandler {

      private $return;

      private $method;
      private $tags;
      private $from;
      private $joins;
      private $optional;

      public function generateSequel($method, $tags, $from, $joins = false, $optional = false){
        $this->method = $method;
        $this->tags = $tags;
        $this->from = $from;
        $this->joins = $joins;
        $this->optional = $optional;
        return $this->buildSequel();
      }

      private function buildSequel(){
        $this->return .= $this->method." ";

        for($i = 0; $i < count($this->tags); $i++){
         $this->return .= ' '.$this->tags[$i];
        }
        $this->return.=" ";
        return $this->returnSequel();
      }

      public function returnSequel(){
        return $this->return;
      }
    }

    $sequelHandler = new sequelHandler();

    $sequelHandler->generateSequel("SELECT", array("*". 'name', 'id'), "users", array('ranks' => 'acc_ranks.ranks_id = ranks.ranks_id'), "ASC");
    echo $sequelHandler->returnSequel();


?>
