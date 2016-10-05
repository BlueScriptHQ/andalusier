<?php

  function getDocuments(){
    // Adds pretty filesizes
  	function pretty_filesize($file) {
  		$size=filesize($file);
  		if($size<1024){$size=$size." Bytes";}
  		elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
  		elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
  		else{$size=round($size/1073741824, 1)." GB";}
  		return $size;
  	}
    $maindirectory = $_SERVER['DOCUMENT_ROOT']."/andalusier/documents/";
    $directory = $_SESSION["documentsURL"];

    if(!file_exists($directory)){
      return "<tr>
              <td class='alignCenter'>
                <a onclick='backAFolder();' style='cursor:pointer;'>
                  <img src='./img/content-section/documents-list/back.png' alt='' />
                </a>
              </td>
              <td>
                <a onclick='backAFolder();' style='cursor:pointer;'>Een mapje terug..</a>
              </td>
              <td class='alignCenter'></td>
              <td class='alignCenter'></td>
              <td class='alignCenter'></td>
              <td></td>
            </tr>
            <tr>
              <td class='alignCenter'>
                <img src='./img/content-section/documents-list/sad.png' alt='' />
              </td>
              <td>Bekijken van deze map is helaas niet mogelijk door een fout. Probeer het later opnieuw..</td>
              <td class='alignCenter'></td>
              <td class='alignCenter'></td>
              <td class='alignCenter'></td>
              <td></td>
            </tr>";
    }

    $files = scandir($directory);
    $directories = array();
    $exc = array(".", "..");
    $files = array_diff($files, $exc);
    sort($files);

    for ($i=0; $i < count($files); $i++) {
      if(is_dir($directory.$files[$i])){
        $directories[] = $files[$i];
      }
    }
    $files = array_diff($files, $directories);
    sort($files);
    sort($directories);

    $structure = "";

    // check if a back option is required..
    if($directory != $maindirectory){
      $structure.= "<tr><td class='alignCenter'><a onclick='backAFolder();' style='cursor:pointer;'><img src='./img/content-section/documents-list/back.png' alt='' /></a>
                    </td><td><a onclick='backAFolder();' style='cursor:pointer;'>Een mapje terug..</a></td><td class='alignCenter'></td><td class='alignCenter'></td><td class='alignCenter'></td>
                    <td></td>
                    </tr>";
    }

    if(count($files) == 0 && count($directories) == 0){
      $structure.= "<tr><td class='alignCenter'><img src='./img/content-section/documents-list/sad.png' alt='' /></td><td>Er is hier helaas niets te zien..</td><td class='alignCenter'></td><td class='alignCenter'></td><td class='alignCenter'></td>
                    <td></td>
                    </tr>";
    }


    for ($i=0; $i < count($directories); $i++) {
      $structure.= "
        <tr>
          <td class='alignCenter'>
            <img src='./img/content-section/documents-list/folder.png' alt='' />
          </td>
          <td><a onclick='openFolder(\"".$directories[$i]."\");' style='cursor:pointer;'>".$directories[$i]."</a></td>
          <td class='alignCenter'>Map</td>
          <td class='alignCenter'>Onbekend</td>
          <td class='alignCenter'>".date("d-m-y H:i:s",  filemtime($directory.$directories[$i]))."</td>
          <td>
            <img src='./img/content-section/documents-list/rename.png' style='cursor:pointer;' onclick='renameFF(\"".$directories[$i]."\");' id='renameButton' class='img_size' alt='' />
            <img src='./img/content-section/documents-list/delete.png' style='cursor:pointer;' onclick='deleteFF(\"".$directories[$i]."\");' class='img_size' id='deleteButton' alt='' />
          </td>
        </tr>
      ";
    }

    for ($i=0; $i < count($files); $i++) {
      $extension = strtolower(substr(strrchr($files[$i], '.'), 1));
      $size = pretty_filesize($directory.$files[$i]);
      $extn = '';
      switch ($extension){
				case "png": $extn="PNG"; break;
				case "jpg": $extn="JPEG"; break;
				case "jpeg": $extn="JPEG"; break;
				case "svg": $extn="SVG"; break;
				case "gif": $extn="GIF"; break;
				case "ico": $extn="ICOON"; break;

				case "txt": $extn="Text Bestand"; break;
				case "log": $extn="Log Bestand"; break;
				case "htm": $extn="HTML Bestand"; break;
				case "html": $extn="HTML Bestand"; break;
				case "xhtml": $extn="HTML Bestand"; break;
				case "shtml": $extn="HTML Bestand"; break;
				case "php": $extn="PHP Script"; break;
				case "js": $extn="Javascript"; break;
				case "css": $extn="Stylesheet"; break;
        case "mp3": $extn="MP3"; break;

				case "pdf": $extn="PDF"; break;
				case "xls": $extn="Spreadsheet"; break;
				case "xlsx": $extn="Spreadsheet"; break;
				case "doc": $extn="Word Document"; break;
				case "docx": $extn="Word Document"; break;

				case "zip": $extn="ZIP Archief"; break;
        case "rar": $extn="RAR Archief"; break;
				case "htaccess": $extn="Apache"; break;
				case "exe": $extn="Executable"; break;

				default: if($extn!=""){$extn=strtoupper($extn)." bestand";} else{$extn="Onbekend";} break;
			}

      $structure.= "
        <tr>
          <td class='alignCenter'>

          </td>
          <td>".$files[$i]."</td>
          <td class='alignCenter'>".$extn."</td>
          <td class='alignCenter'>".$size."</td>
          <td class='alignCenter'>".date("d-m-y H:i:s",  filemtime($directory.$files[$i]))."</td>
          <td>
            <img src='./img/content-section/documents-list/rename.png' style='cursor:pointer;' onclick='renameFF(\"".$files[$i]."\");' id='renameButton' class='img_size' alt='' />
            <a href='php/documents.php?downloadFile=".$files[$i]."'><img src='./img/content-section/documents-list/download2.png' class='rename img_size' style='cursor:pointer;' id='downloadButton' alt='' /></a>
            <img src='./img/content-section/documents-list/delete.png' style='cursor:pointer;' class='img_size' id='deleteButton'  onclick='deleteFF(\"".$files[$i]."\");' alt='' />
          </td>
        </tr>
      ";
    }

    return $structure;
  }

  if(isset($_POST["requestDocuments"])){


  }

  if(isset($_POST["openFolder"])){
    $_SESSION["documentsURL"] .= $_POST["openFolder"] . "/";
  }

  if(isset($_POST["requestFolderBack"])){
    $_SESSION["documentsURL"] = substr($_SESSION["documentsURL"], 0, strrpos( $_SESSION["documentsURL"], '/'));
    $_SESSION["documentsURL"] = substr($_SESSION["documentsURL"], 0, strrpos( $_SESSION["documentsURL"], '/')) . "/";
  }

  if(isset($_POST["requestFolderAdd"])){
    if(!empty($_POST["requestFolderAdd"])){
      mkdir($_SESSION["documentsURL"].$_POST["requestFolderAdd"], 0700);

      // log
      $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
      $query = $conn->prepare($sql);
      $result = $query->execute(array(
       ":message" => "Nieuwe map \"".$_POST["requestFolderAdd"]. "\" aangemaakt."
     ));
    }
  }

  if(isset($_POST["requestFFDelete"])){
    if(is_dir($_SESSION["documentsURL"].$_POST["requestFFDelete"])){
      function is_dir_empty($dir) {
        if (!is_readable($dir)) return NULL;
        return (count(scandir($dir)) == 2);
      }
      if (is_dir_empty($_SESSION["documentsURL"].$_POST["requestFFDelete"])) {
        rmdir($_SESSION["documentsURL"].$_POST["requestFFDelete"]);
        // log
        $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
        $query = $conn->prepare($sql);
        $result = $query->execute(array(
         ":message" => "Map \"".$_POST["requestFFDelete"]. "\" succesvol verwijderd."
       ));
      }else{
        $dirname = $_SESSION["documentsURL"].$_POST["requestFFDelete"];
        array_map('unlink', glob("$dirname/*.*"));
        rmdir($_SESSION["documentsURL"].$_POST["requestFFDelete"]);

        // log
        $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
        $query = $conn->prepare($sql);
        $result = $query->execute(array(
         ":message" => "Map \"".$_POST["requestFFDelete"]. "\" met inhoud succesvol verwijderd."
       ));
      }

    } else {
      unlink($_SESSION["documentsURL"].$_POST["requestFFDelete"]);
      // log
      $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
      $query = $conn->prepare($sql);
      $result = $query->execute(array(
       ":message" => "Bestand \"".$_POST["requestFFDelete"]. "\" succesvol verwijderd."
     ));
    }
  }

  if(isset($_POST["requestFFRename"])){
    $currName = $_SESSION["documentsURL"].$_POST["requestFFRename"];
    $preferedName = $_SESSION["documentsURL"].$_POST["newFileName"];

    if(is_dir($currName)){
      $folder = true;
    } else { $folder = false; }

    rename($currName, $preferedName);
    touch($preferedName);

    // log
    $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
    $query = $conn->prepare($sql);

    if($folder){
      $result = $query->execute(array(
       ":message" => "Map \"".$_POST["requestFFRename"]. "\" hernoemd naar \"".$_POST["newFileName"]."\"."
      ));
   } else {
     $result = $query->execute(array(
      ":message" => "Bestand \"".$_POST["requestFFRename"]. "\" hernoemd naar \"".$_POST["newFileName"]."\"."
     ));
   }

  }

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

  if(isset($_GET["downloadFile"])){


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
    }
  }
?>
