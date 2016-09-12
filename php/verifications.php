<?php
  // live mode
  error_reporting(0);
  
  if(isset($_SESSION["verified"])){
    if($_SESSION["verified"] == true){}
    else { header("Location: login/"); exit();
    }} else { header("Location: login/"); exit(); }

?>
