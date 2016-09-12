<?php
  function dev_mode($param){
    if($param === true){
      if (!ini_get('display_errors')) {
          ini_set('display_errors', '1');
      }
      error_reporting(-1);
    }
  }
?>
