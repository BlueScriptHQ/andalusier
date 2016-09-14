<?php

  if(isset($_SESSION["verified"])){
    if($_SESSION["verified"] == true){}
    else { header("Location: login/"); exit();
    }} else { header("Location: login/"); exit(); }

?>
