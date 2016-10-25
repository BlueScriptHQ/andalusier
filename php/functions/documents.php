<?php

  /*
    Open een map, door achter de sessie "documentsURL" de geselecteerde map naam te plakken.
  */

  function openFolder($dbHandler, $param){
    if(valid($_SESSION["documentsURL"])){
      $_SESSION["documentsURL"] .= $param . "/";
    }
  }

  /*
    Ga een map terug, door van de sessie "documentsURL", de laatste map er af te strippen.
  */

  function backFolder(){
    if(valid($_SESSION["documentsURL"])){
      $_SESSION["documentsURL"] = substr($_SESSION["documentsURL"], 0, strrpos( $_SESSION["documentsURL"], '/'));
      $_SESSION["documentsURL"] = substr($_SESSION["documentsURL"], 0, strrpos( $_SESSION["documentsURL"], '/')) . "/";
    }
  }

  /*
    Haal alle bestanden op in de huidige map (uit documentsURL sessie variabele)
  */

  function getDocuments(){

    /*
      Haal de benodige variabelen op
    */
    $maindirectory = $_SERVER['DOCUMENT_ROOT']."/andalusier/documents/";
    $directory = $_SESSION["documentsURL"];

    /*
      Kijk of de map bestaat. Zo nee, laat een melding aan de gebruiker zien.
    */

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

    /*
      Lees alle bestanden en mappen uit de huidige map. Scheidt daarna alle mappen van bestanden.
    */
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

    $structure = '';

    /*
      Kijk of een terug knop nodig is. Als we op de root map zitten, hoeft dit namelijk niet.
    */
    if($directory !== $maindirectory){
      $structure.= "<tr><td class='alignCenter'><a onclick='backAFolder();' style='cursor:pointer;'><img src='./img/content-section/documents-list/back.png' alt='' /></a>
                    </td><td><a onclick='backAFolder();' style='cursor:pointer;'>Een mapje terug..</a></td><td class='alignCenter'></td><td class='alignCenter'></td><td class='alignCenter'></td>
                    <td></td>
                    </tr>";
    }

    /*
      Kijk of er bestanden of mappen in de huidige map zitten. Zo niet, laat dan een melding aan de gebruiker zien.
    */
    if(count($files) === 0 && count($directories) === 0){
      $structure.= "<tr><td class='alignCenter'><img src='./img/content-section/documents-list/sad.png' alt='' /></td><td>Er is hier helaas niets te zien..</td><td class='alignCenter'></td><td class='alignCenter'></td><td class='alignCenter'></td>
                    <td></td>
                    </tr>";
    }


    /*
      Loop over alle mappen in de huidige map. Deze komen namelijk bovenaan te staan.
    */
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

    /*
      Loop over alle bestanden in de huidige map.
    */

    for ($i=0; $i < count($files); $i++) {
      $extension = strtolower(substr(strrchr($files[$i], '.'), 1));
      $size = pretty_filesize($directory.$files[$i]);
      $extn = '';

      /*
        Laat een duidelijke extensie zien. Dus een die voor de gebruiker duidelijk is.
      */

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

    /*
      Geef als resultaat de genereerde HTML terug.
    */
    return $structure;
  }


  function addFolder($dbHandler, $sequelHandler, $param){
    if(valid($_SESSION["documentsURL"])){

      // voordat hij wordt aangemaakt, de slashes verwijderen!
      $stripped = str_replace('\\', '', str_replace('/', '', $param));

      mkdir($_SESSION["documentsURL"].$stripped, 0700);

      // log
      $sql = "INSERT INTO logs (logs_content) VALUES (:message);";
      $query = $conn->prepare($sql);
      $result = $query->execute(array(
       ":message" => "Nieuwe map \"".$_POST["requestFolderAdd"]. "\" aangemaakt."
     ));
    }
  }



?>
