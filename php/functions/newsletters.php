<?php

  /*
    Open een map, door achter de sessie "documentsURL" de geselecteerde map naam te plakken.
  */

  function openFolderNews($dbHandler, $param){
    if(valid($_SESSION["newsURL"])){
      $_SESSION["newsURL"] .= $param . "/";
    }
  }

  /*
    Ga een map terug, door van de sessie "documentsURL", de laatste map er af te strippen.
  */

  function backFolderNews(){
    if(valid($_SESSION["newsURL"])){
      $_SESSION["newsURL"] = substr($_SESSION["newsURL"], 0, strrpos( $_SESSION["newsURL"], '/'));
      $_SESSION["newsURL"] = substr($_SESSION["newsURL"], 0, strrpos( $_SESSION["newsURL"], '/')) . "/";
    }
  }

  /*
    Haal alle bestanden op in de huidige map (uit documentsURL sessie variabele)
  */

  function getNewsletters(){

    /*
      Haal de benodige variabelen op
    */
    $maindirectory = $_SERVER['DOCUMENT_ROOT']."/andalusier/newsletters/";
    $directory = $_SESSION["newsURL"];

    /*
      Kijk of de map bestaat. Zo nee, laat een melding aan de gebruiker zien.
    */

    if(!file_exists($directory)){
      return "<tr>
              <td class='alignCenter'>
                <a onclick='backAFolderNews();' style='cursor:pointer;'>
                  <img src='./img/content-section/documents-list/back.png' alt='' />
                </a>
              </td>
              <td>
                <a onclick='backAFolderNews();' style='cursor:pointer;'>Een mapje terug..</a>
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
      $structure.= "<tr><td class='alignCenter'><a onclick='backAFolderNews();' style='cursor:pointer;'><img src='./img/content-section/documents-list/back.png' alt='' /></a>
                    </td><td><a onclick='backAFolderNews();' style='cursor:pointer;'>Een mapje terug..</a></td><td class='alignCenter'></td><td class='alignCenter'></td><td class='alignCenter'></td>
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
          <td><a onclick='openFolderNews(\"".$directories[$i]."\");' style='cursor:pointer;'>".$directories[$i]."</a></td>
          <td class='alignCenter'>Map</td>
          <td class='alignCenter'>Onbekend</td>
          <td class='alignCenter'>".date("d-m-y H:i:s",  filemtime($directory.$directories[$i]))."</td>
          <td>
            <img src='./img/content-section/documents-list/rename.png' style='cursor:pointer;' onclick='renameFFNews(\"".$directories[$i]."\");' id='renameButtonNews' class='img_size' alt='' />
            <img src='./img/content-section/documents-list/delete.png' style='cursor:pointer;' onclick='deleteFFNews(\"".$directories[$i]."\");' class='img_size' id='deleteButtonNews' alt='' />
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
            <img src='./img/content-section/documents-list/rename.png' style='cursor:pointer;' onclick='renameFFNews(\"".$files[$i]."\");' id='renameButtonNews' class='img_size'/>
            <a href='php/files.php?downloadFileNews=".$files[$i]."'><img src='./img/content-section/documents-list/download2.png' class='rename img_size' style='cursor:pointer;' id='downloadButtonNews'/></a>
            <img src='./img/content-section/documents-list/delete.png' style='cursor:pointer;' class='img_size' id='deleteButtonNews'  onclick='deleteFFNews(\"".$files[$i]."\");'/>
            <img src='./img/content-section/newsletters-list/mail.png' style='cursor:pointer;' onclick='mailNewsletter(\"".$files[$i]."\");' class='img_size' id='mailButtonNewsletter'/>
          </td>
        </tr>
      ";
    }

    /*
      Geef als resultaat de genereerde HTML terug.
    */
    return $structure;
  }


  /*
    Voeg een nieuw mapje toe
  */

  function addFolderNews($dbHandler, $param, $logHandler){
    if(valid($_SESSION["newsURL"])){

      // voordat hij wordt aangemaakt, de slashes verwijderen!
      $stripped = str_replace('\\', '', str_replace('/', '', $param));

      if(!file_exists($_SESSION["newsURL"].$stripped)){
        mkdir($_SESSION["newsURL"].$stripped, 0700);
      } else {
        return "exists";
      }

      // log
      $logHandler->addMessage("Nieuwe map \"".$stripped. "\" aangemaakt in nieuwsbrieven.");
    }
  }

  /*
    Verwijder een bestand of map
  */


  function deleteFileFolderNews($dbHandler, $param, $logHandler){

    if(valid($_SESSION["newsURL"])){
      /*
        Check eerst of het een bestand is of een map
      */

      // NOTE: for some reason, moet het bestandspad naar kleine letters.. Hier moet nog even naar worden gekeken!

      if(is_dir(strtolower($_SESSION["newsURL"].$param))){

        $param = makeUTF8($param);
        /*
          Zoja, check of het bestand leeg is
        */
        if (is_dir_empty($_SESSION["newsURL"].$param)) {
          /*
            Het mapje is leeg.
          */
          rmdir($_SESSION["newsURL"].$param);

          $logHandler->addMessage("Map \"".$param. "\" succesvol verwijderd in nieuwsbrieven.");

        } else {
          /*
            Het mapje is niet leeg, verwijder alle bestanden.
          */
          return "not_empty";
        }
      } else {
        /*
          Het is een bestand
        */
        if(file_exists(strtolower($_SESSION["newsURL"].$param))){
          unlink($_SESSION["newsURL"].$param);

          // log
          $logHandler->addMessage("Map \"".$param. "\" met inhoud succesvol verwijderd in nieuwsbrieven.");
        } else {
          // Hmm, lijkt erop dat er iets mis gaat.
        }
      }

    }

  }

  function deletePermNews($d, $param, $logHandler){
    $dirname = $_SESSION["newsURL"].$param;
    array_map('unlink', glob("$dirname/*.*"));
    rmdir($_SESSION["newsURL"].$param);

    $logHandler->addMessage("Map \"".$param. "\" met inhoud succesvol verwijderd in nieuwsbrieven.");
  }


  /*
    Verander de naam van een bestand of map
  */
  function changeNameFFNews($d, $data, $logHandler){
    if(valid($_SESSION["newsURL"])){
      $old = $data->old;
      $new = $data->new;

      // Kijk of het een map is, zoja dan heeft dit geen extensie. Is het een bestand, pak dan die extensie.
      $old_extension = (strpos($old, '.') !== false) ? substr($old, strrpos($old, '.')) : '';

      $new_file_name = $new.$old_extension;

      if(file_exists(strtolower($_SESSION["newsURL"].$old))){
        // verander nu de oude bestandsnaam naar de nieuwe bestandsnaam
        rename(strtolower($_SESSION["newsURL"].$old), $_SESSION["newsURL"].$new_file_name);
      }

      $logHandler->addMessage("Bestand \"".$old."\" hernoemd naar \"".$new_file_name."\"");

    }
  }

  //functie om nieuwsbrieven te mailen
  function mailNewsletter($dbHandler, $name, $logHandler){
    //krijg het path + parameter 'name'
    $dirname = $_SESSION["newsURL"].$name;
    //return $dirname;

    //alles selecteren van members en members_contact_info waar newsletter 1 (waar) is
    $sql="SELECT *
          FROM members
          INNER JOIN members_contact_info ON
          members.members_id = members_contact_info.members_id
          WHERE members_newsletter = 1";
    $data = $dbHandler->handleQuery($sql, false, true);

    //emails aanmaken om een waarde te kunnen returnen
    $emails = '';
      //voor elke rij iets doen
      foreach($data as $row){
        //kijken of 1e email leeg is
        if(empty($row->members_email)){//zo ja, check of 2e email ook leeg is
          if(empty($row->members_email)){
            return "geen bekend e-mailadres";
          }
          else{//2e email bestaat wel

          }
        }
        else{//1e email bestaat wel

        }
          $emails.= $row->members_name."\n";
      }

    }

    //$emails.= $row->members_name.$row->members_email.$row->members_email2."\n";
    return $emails;

    //$logHandler->addMessage("nieuwsbrief verstuurd");
  }



?>
