<!-- standard overlay -->
<div id="page-overlay"></div>
<div id="addMemberPopup" class="popup">
   <div class="popup-head">
      <h2>Klant toevoegen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="members_titles_content">
               <option value="dhr">De heer</option>
               <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text" name="members_name">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true" name="members_tussenvoegsel">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text" name="members_lastname">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')" name="members_birthdate">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_residence_street">
         </div>
         <div class="row">
            <p class="label">Huisnummer</p>
            <input type="text" name="members_residence_street_nr">
         </div>
         <div class="row">
            <p class="label">Woonplaats</p>
            <input type="text" name="members_residence_place">
         </div>
         <div class="row">
            <p class="label">Postcode</p>
            <input type="text" name="members_residence_zip">
         </div>
         <div class="row">
            <p class="label">Land van herkomst</p>
            <select name="members_residence_country">
               <option value="nederland">Nederland</option>
               <option value="belgie">België</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_email">
         </div>
         <div class="row">
            <p class="label">Extra e-mailadres</p>
            <input type="text" optional="true" name="members_email2">
         </div>
         <div class="row">
            <p class="label">Telefoonnummer</p>
            <input type="text" name="members_phonenr">
         </div>
         <div class="row">
            <p class="label">Extra telefoonnummer</p>
            <input type="text" optional="true" name="members_phonenr2">
         </div>
         <div class="row">
            <p class="label">Mobielnummer</p>
            <input type="text" optional="true" name="members_mobnr">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <select name="members_types_id">
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
                  <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <p class="label">Stalnaam</p>
            <input type="text" name="members_stable">
         </div>
         <div class="row">
            <p class="label">Bankrekening</p>
            <input type="text" name="members_bank">
         </div>
         <div class="row">
            <p class="label">Ontvangen via</p>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="1" name="members_receive_type"></div>
               </div>
               <p class="tag">E-mail</p>
            </div>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="0" name="members_receive_type"></div>
               </div>
               <p class="tag">Post</p>
            </div>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <p class="label">Opmerking</p>
            <p class="label"> </p>
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht." name="members_comment"></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Lid aanmaken" id="addMember-submit">
         </div>
      </div>
   </div>
</div>


<div id="editPopup" class="popup">
   <div class="popup-head">
      <h2>Klant toevoegen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="members_titles_content">
               <option value="dhr">De heer</option>
               <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text" name="members_name">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true" name="members_tussenvoegsel">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text" name="members_lastname">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')" name="members_birthdate">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_residence_street">
         </div>
         <div class="row">
            <p class="label">Huisnummer</p>
            <input type="text" name="members_residence_streetnr">
         </div>
         <div class="row">
            <p class="label">Woonplaats</p>
            <input type="text" name="members_residence_place">
         </div>
         <div class="row">
            <p class="label">Postcode</p>
            <input type="text" name="members_residence_zip">
         </div>
         <div class="row">
            <p class="label">Land van herkomst</p>
            <select name="members_residence_country">
               <option value="nederland">Nederland</option>
               <option value="belgie">België</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_email">
         </div>
         <div class="row">
            <p class="label">Extra e-mailadres</p>
            <input type="text" optional="true" name="members_email2">
         </div>
         <div class="row">
            <p class="label">Telefoonnummer</p>
            <input type="text" name="members_phonenr">
         </div>
         <div class="row">
            <p class="label">Extra telefoonnummer</p>
            <input type="text" optional="true" name="members_phonenr2">
         </div>
         <div class="row">
            <p class="label">Mobielnummer</p>
            <input type="text" optional="true" name="members_mobnr">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <select name="members_types_id">
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
                  <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <p class="label">Stalnaam</p>
            <input type="text" name="members_stable">
         </div>
         <div class="row">
            <p class="label">Bankrekening</p>
            <input type="text" name="members_bank">
         </div>
         <div class="row">
            <p class="label">Ontvangen via</p>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="1" name="members_receive_type"></div>
               </div>
               <p class="tag">E-mail</p>
            </div>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="0" name="members_receive_type"></div>
               </div>
               <p class="tag">Post</p>
            </div>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <p class="label">Opmerking</p>
            <p class="label"> </p>
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht." name="members_comment"></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Lid aanmaken" id="editMember-submit">
         </div>
      </div>
   </div>
</div>


<div id="editAccountPopup" class="popup">
   <div class="popup-head">
      <h2>Account toevoegen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Inloggegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <input type="hidden" name="accounts_id">
            <p class="label">Gebruikersnaam</p>
            <input type="text" name="accounts_username">
         </div>
         <div class="row flexible-height">
           <p class="desc">Om veiligheidsredenen is het niet mogelijk het wachtwoord in te zien.</p>
         </div>
         <div class="row password-row">
            <p class="label">Wachtwoord</p>
            <input type="button" class="btn" value="Reset" id="accountPasswordResetBtn">
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Account type</h2>
      </div>
      <div class="popup-section-content">
        <div class="row flexible-height">
           <p class="desc">Hieronder kunt u een account type selecteren. Elk type heeft verschillende rechten. Deze kunt u inzien en muteren op de accounts pagina. Hier kunt u ook nieuwe account typen aanmaken.</p>
        </div>
        <div class="row">
           <p class="label">Account type</p>
           <select name="ranks_id">
              <option value="1">Lid</option>
              <option value="2">Jeugdlid</option>
              <option value="3">Gezinslid</option>
              <option value="4">Lid Buitenland</option>
           </select>
        </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Opslaan" id="saveEditAccountData">
         </div>
      </div>
   </div>
</div>

<div class="documents-popup-FolderFile" id="editAccountPasswordPopup">
   <div class="popup-head">
      <h2>Wachtwoord resetten</h2>
      <a href="#" class="overlay_popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <h2 class="popup-content-h2">Geef hier het nieuwe gewenste wachtwoord op</h2>
   </div>
   <div class="popup-row">
      <input type="hidden" id="accountPasswordID">
      <input type="password" placeholder="Nieuwe wachtwoord" autocomplete="off" id="newAccountPassword">
   </div>
   <div class="popup-row">
      <input type="button" class="btn" value="Reset" id="saveAccountPassword">
   </div>
</div>



<div id="critical-error" class="popup">
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


<div class="documents-popup-FolderFile popup" id="addFolder">
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


<div class="documents-popup-FolderFile popup" id="addFile">
   <form id="fileUploadForm" action="php/files.php" enctype="multipart/form-data" method="post">
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

<div class="documents-popup-FolderFile popup" id="editFolderFile" class="popup">
   <input type="hidden" value="">
   <div class="popup-head">
      <h2>Naam veranderen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <h2 class="popup-content-h2">Huidige naam: </h2>
   </div>
   <div class="popup-row">
      <input type="text" class="folder_file_btn" id="edit_folder" placeholder="Geef hier de nieuwe naam op..." value="">
   </div>
   <div class="popup-row">
      <input type="button" class="folder_file_btn" id="renameFF" value="Wijzigen">
   </div>
</div>

<div class="documents-popup-FolderFile popup" id="deleteFolderFile">
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

<div class="documents-popup-FolderFile popup" id="deleteFolderPerm">
   <input type="hidden" value="">
   <div class="popup-head">
      <h2>Verwijderen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <h2 class="popup-content-h2">Deze map bevat bestanden, alsnog verwijderen?</h2>
   </div>
   <div class="popup-row">
      <input type="button" class="folder_file_btn delete" id="deleteFP" value="Verwijderen">
   </div>
</div>

<div id="acceptMemberPopup" class="popup">
   <div class="popup-head">
      <h2>Lid accepteren</h2>
      <input type="hidden" name="id" value="">
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="members_titles_content">
               <option value="dhr">De heer</option>
               <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text" name="members_name">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true" name="members_tussenvoegsel">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text" name="members_lastname">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')" name="members_birthdate">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_residence_street">
         </div>
         <div class="row">
            <p class="label">Huisnummer</p>
            <input type="text" name="members_residence_street_nr">
         </div>
         <div class="row">
            <p class="label">Woonplaats</p>
            <input type="text" name="members_residence_place">
         </div>
         <div class="row">
            <p class="label">Postcode</p>
            <input type="text" name="members_residence_zip">
         </div>
         <div class="row">
            <p class="label">Land van herkomst</p>
            <select name="members_residence_country">
               <option value="nederland">Nederland</option>
               <option value="belgie">België</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="members_email">
         </div>
         <div class="row">
            <p class="label">Extra e-mailadres</p>
            <input type="text" optional="true" name="members_email2">
         </div>
         <div class="row">
            <p class="label">Telefoonnummer</p>
            <input type="text" name="members_phonenr">
         </div>
         <div class="row">
            <p class="label">Extra telefoonnummer</p>
            <input type="text" optional="true" name="members_phonenr2">
         </div>
         <div class="row">
            <p class="label">Mobielnummer</p>
            <input type="text" optional="true" name="members_mobnr">
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <select name="members_types_id">
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
                  <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <p class="label">Stalnaam</p>
            <input type="text" name="members_stable">
         </div>
         <div class="row">
            <p class="label">Bankrekening</p>
            <input type="text" name="members_bank">
         </div>
         <div class="row">
            <p class="label">Ontvangen via</p>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="1" name="members_receive_type"></div>
               </div>
               <p class="tag">E-mail</p>
            </div>
            <div class="op_option_wrapper">
               <div class="cop_container op_con_option">
                  <div class="cop_inner op_in_option control" value="0" name="members_receive_type"></div>
               </div>
               <p class="tag">Post</p>
            </div>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <p class="label">Opmerking</p>
            <p class="label"> </p>
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht." name="members_comment"></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Accepteren" id="acceptMemberBtn">
            <input type="button" value="Weigeren" id="declineMemberBtn">
         </div>
      </div>
   </div>
</div>


<!--

    Nieuwe adverts popup : Toevoegen

-->
<div id="newAdvertsAdd" class="popup">
   <div class="popup-head">
      <h2>Nieuwe advertentie toevoegen</h2>
      <input type="hidden" name="id" value="">
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Advertentiegegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Advertentienaam</p>
            <input type="text" name="adverts_name">
         </div>
         <div class="row">
            <p class="label">Advertentiesoort</p>
            <select class="title" id="add-title" required="true" name="adverts_type">
               <option value="Heel">Heel</option>
               <option value="Half">Half</option>
               <option value="Kwart">Kwart</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Adverteerder</p>
            <input type="text" name="adverts_owner">
         </div>
         <div class="row">
            <p class="label">Eind datum</p>
            <input type="text" name="adverts_date">
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>NAW-gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Contactpersoon</p>
            <input type="text" name="adverts_contact">
         </div>
         <div class="row">
            <p class="label">Postcode</p>
            <input type="text" name="adverts_postalcode">
         </div>
         <div class="row">
            <p class="label">Adres</p>
            <input type="text" name="adverts_address">
         </div>
         <div class="row">
            <p class="label">Stad</p>
            <input type="text" name="adverts_city">
         </div>
         <div class="row">
            <p class="label">Land</p>
            <select name="adverts_country">
               <option value="nederland">Nederland</option>
               <option value="belgie">België</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="adverts_email">
         </div>
         <div class="row">
            <p class="label">Extra e-mailadres</p>
            <input type="text" optional="true" name="adverts_email2">
         </div>
         <div class="row">
            <p class="label">Telefoonnummer</p>
            <input type="text" name="adverts_telephone">
         </div>
         <div class="row">
            <p class="label">Extra telefoonnummer</p>
            <input type="text" optional="true" name="adverts_telephone2">
         </div>
         <div class="row">
            <p class="label">Mobielnummer</p>
            <input type="text" optional="true" name="adverts_mobile">
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Bankgegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Bank</p>
            <input type="text" name="adverts_bank">
         </div>
         <div class="row">
            <p class="label">Rekeningnummer</p>
            <input type="text" name="adverts_billingnumber">
         </div>
         <div class="row">
            <p class="label">Status</p>
            <select class="title" id="add-title" required="true" name="adverts_status">
               <option value="1">Betaald</option>
               <option value="0">Niet betaald</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <p class="label">Opmerking</p>
            <p class="label"> </p>
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht." name="adverts_comment"></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Opslaan" id="saveAdvertButton">
         </div>
      </div>
   </div>
</div>

<!--Members payment request-->
<div class="documents-popup-FolderFile popup" id="memberPaymentRequest">
   <input type="hidden" value="">
   <div class="popup-head">
      <h2>Betalingsverzoek</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <h2 class="popup-content-h2">Vorige betalingsverzoek was op: [dummydatum].</h2>
      <h2 class="popup-content-h2">Betalingsverzoek versturen?</h2>
   </div>
   <div class="popup-row">
      <input type="button" class="folder_file_btn delete" id="sendPR" value="Versturen">
      <input type="button" class="folder_file_btn delete" id="cancelPR" value="Annuleren">
   </div>
</div>


<!--

    Nieuwe adverts popup : Edit

-->
<div id="newAdvertsOpen" class="popup">
   <div class="popup-head">
      <h2>Nieuwe advertentie toevoegen</h2>
      <input type="hidden" name="id" value="">
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Advertentiegegevens</h2>
      </div>
      <div class="popup-section-content">
        <input type="hidden" name="adverts_id" value="">
         <div class="row">
            <p class="label">Advertentienaam</p>
            <input type="text" name="adverts_name">
         </div>
         <div class="row">
            <p class="label">Advertentiesoort</p>
            <select class="title" id="add-title" required="true" name="adverts_type">
               <option value="Heel">Heel</option>
               <option value="Half">Half</option>
               <option value="Kwart">Kwart</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Adverteerder</p>
            <input type="text" name="adverts_owner">
         </div>
         <div class="row">
            <p class="label">Eind datum</p>
            <input type="text" name="adverts_enddate">
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>NAW-gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Contactpersoon</p>
            <input type="text" name="adverts_contact">
         </div>
         <div class="row">
            <p class="label">Postcode</p>
            <input type="text" name="adverts_postalcode">
         </div>
         <div class="row">
            <p class="label">Adres</p>
            <input type="text" name="adverts_address">
         </div>
         <div class="row">
            <p class="label">Stad</p>
            <input type="text" name="adverts_city">
         </div>
         <div class="row">
            <p class="label">Land</p>
            <select name="adverts_country">
               <option value="nederland">Nederland</option>
               <option value="belgie">België</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
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
            <input type="text" name="adverts_email">
         </div>
         <div class="row">
            <p class="label">Extra e-mailadres</p>
            <input type="text" optional="true" name="adverts_email2">
         </div>
         <div class="row">
            <p class="label">Telefoonnummer</p>
            <input type="text" name="adverts_telephone">
         </div>
         <div class="row">
            <p class="label">Extra telefoonnummer</p>
            <input type="text" optional="true" name="adverts_telephone2">
         </div>
         <div class="row">
            <p class="label">Mobielnummer</p>
            <input type="text" optional="true" name="adverts_mobile">
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Bankgegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Bank</p>
            <input type="text" name="adverts_bank">
         </div>
         <div class="row">
            <p class="label">Rekeningnummer</p>
            <input type="text" name="adverts_billingnumber">
         </div>
         <div class="row">
            <p class="label">Status</p>
            <select class="title" id="add-title" required="true" name="adverts_status">
               <option value="1">Betaald</option>
               <option value="0">Niet betaald</option>
            </select>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Bijwerken</h2>
      </div>
      <div class="popup-section-content">
         <div class="row flexible-height">
            <p class="label">Opmerking</p>
            <p class="label"> </p>
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht." name="adverts_comment"></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Opslaan" id="updateAdvertButton">
            <input type="button" value="Verplaats naar oud" id="moveAdvertButton">
         </div>
      </div>
   </div>
</div>

<div class="documents-popup-FolderFile popup" id="confirmDeleteLog">
   <input type="hidden" value="">
   <div class="popup-head">
      <h2>Logboek leegmaken</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <h2 class="popup-content-h2">Weet u zeker dat u het logboek wilt leegmaken?</h2>
   </div>
   <div class="popup-row">
      <input type="button" class="folder_file_btn delete" id="deleteLog" value="Leegmaken">
      <input type="button" class="folder_file_btn delete" id="cancelLog" value="Annuleren">
   </div>
</div>

<!-- requirements -->
<link rel="stylesheet" href="css/popups_style.min.css" media="screen">
<link rel="stylesheet" href="elements/components/css/popups.css" media="screen">
<link rel="stylesheet" href="elements/components/css/check_radio.css" media="screen">
<script src="elements/components/popups.js"></script>
<script src="elements/components/check_radio.js" charset="utf-8"></script>
