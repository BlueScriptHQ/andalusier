<?php

  if(!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
    header('Location: login/'); exit;
  }

?>
