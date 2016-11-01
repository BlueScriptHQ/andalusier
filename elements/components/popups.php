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
      <h2>Klantgegevens wijzigen</h2>
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
            <p class="label"> </p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section" >
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
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Lid aanmaken">
         </div>
      </div>
   </div>
</div>


<div id="addAccountPopup" class="popup">
   <div class="popup-head">
      <h2>Account toevoegen</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Gebruikersnaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Wachtwoord</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Naam</p>
            <input type="text" optional="true">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text">
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
            <textarea placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
         </div>
         <div class="row">
            <p class="label"> </p>
            <input type="button" value="Lid aanmaken">
         </div>
      </div>
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

<!-- PopUp adverts -->
<div id="popupAdvertExtraInfo" class="popup">
   <div class="popup-head">
      <h2>Extra informatie</h2>
      <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
   </div>
   <div class="popup-content">
      <div class="popup-row">
         <p class="label">Advertentie nummer:</p>
         <input type="text" placeholder="Advertentienummer" class="advertsnumber" name="adverts_id" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Advertentie naam:</p>
         <input type="text" placeholder="Advertentienaam" class="advertsname" name="adverts_name" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Advertentie soort:</p>
         <select name="adverts_type" class="advertstype">
            <option value="Half">Half</option>
            <option value="Heel">Heel</option>
            <option value="Kwart">Kwart</option>
         </select>
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerder:</p>
         <input type="text" placeholder="Adverteerder" class="advertsowner" name="adverts_owner" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Contactpersoon:</p>
         <input type="text" placeholder="Contactpersoon" class="advertscontact" name="adverts_contact" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders adres:</p>
         <input type="text" placeholder="Adverteerderadres" class="advertsaddress" name="adverts_address" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders postcode:</p>
         <input type="text" placeholder="Adverteerderpostcode" class="advertspostalcode" name="adverts_postalcode" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders stad</p>
         <input type="text" placeholder="Adverteerderstad" class="advertscity" name="adverts_city" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders land:</p>
         <input type="text" placeholder="Adverteerderland" class="advertscountry" name="adverts_country" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders email:</p>
         <input type="text" placeholder="Adverteerderemail" class="advertsemail" name="adverts_email" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Adverteerders telefoon:</p>
         <input type="text" placeholder="Adverteerdertelefoon" class="advertsphone" name="adverts_phone" value="">
      </div>
      <br>
      <div class="popup-row">
         <p class="label">Advertentie startdatum:</p>
         <input type="text" placeholder="Advertentiestartdatum" class="advertsdate" name="adverts_date" value="">
      </div>
      <!--
         <div class="popup-row">
         <p class="label">Adverteerders bank:</p>
         <input type="text" placeholder="Adverteerderbank" class="advertsbank" value="">
         </div>
         <br>
         <div class="popup-row">
         <p class="label">Adverteerders rekeningnummer:</p>
         <input type="text" placeholder="Adverteerderrekeningnummer" class="advertsbillingnumber" value="">
         </div>
         -->
      <br>
      <p id="status" class="label"></p>
      <input id="edit-popupExtra-btn" type="button" class="btn_edit" value="Wijzigen">
      <input id="save-popupExtra-btn" type="button" class="btn_save" value="Opslaan">
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
            <input type="button" value="Opslaan" id="saveAdvertButton">
            <input type="button" class="left" value="Verplaatsen">
         </div>
      </div>
   </div>
</div>


<!-- requirements -->
<link rel="stylesheet" href="css/popups_style.min.css" media="screen">
<link rel="stylesheet" href="elements/components/css/popups.css" media="screen">
<link rel="stylesheet" href="elements/components/css/check_radio.css" media="screen">
<script src="elements/components/popups.js"></script>
<script src="elements/components/check_radio.js" charset="utf-8"></script>
