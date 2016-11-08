<?php

/*
  Requirements
*/
session_start();

//require "assets/verifications.php";
require "assets/defaults.php";
require "assets/generals.php";
require "assets/verifications.php";
require "assets/connection.php";

/*
 Bestand downloaden
*/
if(isset($_GET["downloadFile"])){
  if(valid($_SESSION["documentsURL"])){
    $file_name = $_SESSION["documentsURL"].$_GET['downloadFile'];

    if(is_file($file_name)) {
      // required for IE
      if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}

      // get the file mime type using the file extension
      switch(strtolower(substr(strrchr($file_name, '.'), 1))) {
        case 'pdf': $mime = 'application/pdf'; break;
        case 'zip': $mime = 'application/zip'; break;
        case 'jpeg':
        case 'jpg': $mime = 'image/jpg'; break;
        default: $mime = 'application/force-download';
      }
      header('Pragma: public'); 	// required
      header('Expires: 0');		// no cache
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($file_name)).' GMT');
      header('Cache-Control: private',false);
      header('Content-Type: '.$mime);
      header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: '.filesize($file_name));	// provide file size
      header('Connection: close');
      readfile($file_name);		// push it out
      exit();
    } else {
      header("Location: ../documents.php");
      exit();
    }
  }
}

/*
  Upload een bestand
*/

if(isset($_FILES["fileToUpload"])){
  $newName = $_POST["newName"];

  $target_dir = $_SESSION["documentsURL"];
  $target_file = $target_dir . $newName;
  $uploadOk = 1;
  if($_FILES["fileToUpload"]["size"] > 209715200){
    $uploadOk == 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, bestand is niet geupload. Klik <a href='../documents.php'>hier</a> om terug te gaan";
  // if everything is ok, try to upload file;
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          // log
          $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
          $query = $conn->prepare($sql);
          $result = $query->execute(array(
           ":message" => "Bestand \"".$newName. "\" toegevoegd!"
         ));
      } else {
          echo "Sorry, er is een probleem tijdens het uploaden. Klik <a href='../documents.php'>hier</a> om terug te gaan";
      }
  }

  header("Location: ../documents.php");
}

?>
