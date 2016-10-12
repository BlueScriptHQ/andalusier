<!-- standard overlay -->
<div id="page-overlay"></div>

<div id="infoPopup">
   <div class="popup-head">
      <h2>Klant wijzigen</h2>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="">
              <option value="dhr">De heer</option>
              <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')">
         </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>AW gegevens</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
           <p class="label">Straatnaam</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Huisnummer</p>
           <input type="text" name="accounts_street_nr">
        </div>
        <div class="row">
          <p class="label">Woonplaats</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Postcode</p>
          <input type="text" name="accounts_zip">
        </div>
        <div class="row">
          <p class="label">Land van herkomst</p>
          <select>
            <option value="nederland">Nederland</option>
            <option value="belgie">België</option>
          </select>
        </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Contactgegevens</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
           <p class="label">E-mailadres</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Extra e-mailadres</p>
           <input type="text" optional="true">
        </div>
        <div class="row">
           <p class="label">Telefoonnummer</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Extra telefoonnummer</p>
           <input type="text" optional="true">
        </div>
        <div class="row">
           <p class="label">Mobielnummer</p>
           <input type="text" optional="true">
        </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Verenigingsgerelateerd</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
          <p class="label">Lid type</p>
          <select>
            <option value="1">Lid</option>
            <option value="2">Jeugdlid</option>
            <option value="3">Gezinslid</option>
            <option value="4">Lid Buitenland</option>
          </select>
        </div>
        <div class="row">
          <p class="label">Nieuwsbrief</p>
          <div class="cop_check_wrapper">
            <div class="cop_container cop_con_check">
              <div class="cop_inner cop_in_check"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="label">Stalnaam</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Bankrekening</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Ontvangen via</p>
          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">E-mail</p>
          </div>

          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">Post</p>
          </div>
        </div>
        <div class="row">
           <p class="label">&nbsp;</p>
           <input type="button" value="Volgende stap" class="openNext">
        </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Aanmaken</h2>
      </div>
      <div class="popup-section-content">
        <div class="row flexible-height">
           <p class="label">Opmerking</p><p class="label">&nbsp;</p>
           <textarea placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
        </div>
        <div class="row">
           <p class="label">&nbsp;</p>
           <input type="button" value="Lid aanmaken">
        </div>
      </div>
   </div>
</div>

<div id="editPopup">
   <div class="popup-head">
      <h2>Klantgegevens wijzigen</h2>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="">
              <option value="dhr">De heer</option>
              <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')">
         </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>AW gegevens</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
           <p class="label">Straatnaam</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Huisnummer</p>
           <input type="text" name="accounts_street_nr">
        </div>
        <div class="row">
          <p class="label">Woonplaats</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Postcode</p>
          <input type="text" name="accounts_zip">
        </div>
        <div class="row">
          <p class="label">Land van herkomst</p>
          <select>
            <option value="nederland">Nederland</option>
            <option value="belgie">België</option>
          </select>
        </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Contactgegevens</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
           <p class="label">E-mailadres</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Extra e-mailadres</p>
           <input type="text" optional="true">
        </div>
        <div class="row">
           <p class="label">Telefoonnummer</p>
           <input type="text">
        </div>
        <div class="row">
           <p class="label">Extra telefoonnummer</p>
           <input type="text" optional="true">
        </div>
        <div class="row">
           <p class="label">Mobielnummer</p>
           <input type="text" optional="true">
        </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Verenigingsgerelateerd</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
          <p class="label">Lid type</p>
          <select>
            <option value="1">Lid</option>
            <option value="2">Jeugdlid</option>
            <option value="3">Gezinslid</option>
            <option value="4">Lid Buitenland</option>
          </select>
        </div>
        <div class="row">
          <p class="label">Nieuwsbrief</p>
          <div class="cop_check_wrapper">
            <div class="cop_container cop_con_check">
              <div class="cop_inner cop_in_check"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="label">Stalnaam</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Bankrekening</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Ontvangen via</p>
          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">E-mail</p>
          </div>

          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">Post</p>
          </div>
        </div>
        <div class="row">
           <p class="label">&nbsp;</p>
           <input type="button" value="Volgende stap" class="openNext">
        </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Aanmaken</h2>
      </div>
      <div class="popup-section-content">
        <div class="row flexible-height">
           <p class="label">Opmerking</p><p class="label">&nbsp;</p>
           <textarea placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
        </div>
        <div class="row">
           <p class="label">&nbsp;</p>
           <input type="button" value="Lid aanmaken">
        </div>
      </div>
   </div>
</div>






<div id="critical-error">
  <div class="popup-head">
    <h2>Kritieke fout</h2>
  </div>
  <div class="popup-content">
    <p>
      De webpagina kan niet goed worden geladen door een kritieke fout in de server.
      <br>
      <br>
      Als dit vaker voorkomt, neem dan contact met de systeembeheerder op.
    </p>
    <br>
    <a href="index.php"><input id="add-members-btn" type="button" class="btn save" value="Haal mij hier weg."></a>
  </div>
</div>

<div class="documents-popup-FolderFile" id="addFolder">
  <div class="popup-head">
    <h2>Map aanmaken</h2>
    <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
  </div>
  <div class="popup-content">
    <h2 class="popup-content-h2">Geef de gewenste naam voor de map op</h2>
  </div>
  <div class="popup-row">
      <input type="text" class="folder_file_btn" id="make_folder" placeholder="Mapnaam" value="">
  </div>
  <div class="popup-row">
    <input type="button" class="folder_file_btn" id="addAFolder" value="Aanmaken">
  </div>
</div>

<div class="documents-popup-FolderFile" id="addFile">
  <form id="fileUploadForm" action="php/documents.php" enctype="multipart/form-data" method="post">
    <input type="file" id="hiddenAddFile" name="fileToUpload" style="display: none;" value="">
    <div class="popup-head">
      <h2>Bestand uploaden</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
    </div>
    <div class="popup-content">
      <div class="popup-row">
        <input type="button" value="Kies bestand" id="addAFileBtn">
      </div>
    </div>
    <div class="popup-row">
        <input type="text" name="newName" class="folder_file_btn" id="up_file" placeholder="Bestandsnaam" value="">
    </div>
    <div class="popup-row">
      <input type="button" class="folder_file_btn" id="uploadFile" value="Uploaden">
    </div>
  </form>
</div>

<div class="documents-popup-FolderFile" id="editFolderFile">
  <input type="hidden" value="">
  <div class="popup-head">
    <h2>Naam veranderen</h2>
    <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
  </div>
  <div class="popup-content">
    <h2 class="popup-content-h2">Huidige naam: [DUMMY.txt]</h2>
  </div>
  <div class="popup-row">
      <input type="text" class="folder_file_btn" id="edit_folder" placeholder="Geef hier de nieuwe naam op..." value="">
  </div>
  <div class="popup-row">
    <input type="button" class="folder_file_btn" id="renameFF" value="Wijzigen">
  </div>
</div>

<div class="documents-popup-FolderFile" id="deleteFolderFile">
  <input type="hidden" value="">
  <div class="popup-head">
    <h2>Verwijderen</h2>
    <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
  </div>
  <div class="popup-content">
    <h2 class="popup-content-h2">Weet u zeker dat u dit wilt verwijderen?</h2>
  </div>
  <div class="popup-row">
    <input type="button" class="folder_file_btn delete" id="deleteFF" value="Verwijderen">
  </div>
</div>




<!-- requirements -->
<link rel="stylesheet" href="elements/components/css/popups.css" media="screen">
<link rel="stylesheet" href="elements/components/css/check_radio.css" media="screen">
<script src="elements/components/popups.js"></script>
<script src="elements/components/check_radio.js" charset="utf-8"></script>
