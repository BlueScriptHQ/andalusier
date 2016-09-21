<div id="page-overlay"></div>

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

<div id="members-popup-add">
  <div class="popup-head">
    <h2>Nieuw lid toevoegen</h2>
    <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
  </div>
  <div class="popup-content">
    <div class="popup-row">
        <label for="">Naam</label>
        <select class="title" id="add-title" required="true" name="">
          <option value="dhr">De heer</option>
          <option value="mevr">Mevrouw</option>
        </select>
        <input id="add-name" required="true" type="text" class="name" placeholder="Klantnaam" value="">
        <input id="add-prefix" type="text" class="prefix" placeholder="TV" value="">
        <input id="add-lastname" required="true" type="text" class="lastname" placeholder="Achternaam" value="">
    </div>
    <div class="popup-row">
        <label for="">Straatnaam</label>
        <input id="add-street" required="true" type="text" class="street" placeholder="Straatnaam" value="">
        <input id="add-streetnr" required="true" type="text" class="streetnr" placeholder="NR" value="">
        <input id="add-zip" required="true" type="text" class="zip" placeholder="Postcode" value="">
    </div>
    <div class="popup-row">
        <label for="">Woonplaats</label>
        <input id="add-place" required="true" type="text" class="street" value="" placeholder="Plaatsnaam">
        <select id="add-country" required="true" class="country" name="">
          <option value="nederland">Nederland</option>
          <option value="belgie">België</option>
        </select>
    </div>
    <div class="popup-row">
        <label for="">Geboortedatum</label>
        <select id="add-day" class="day" name=""></select>
        <script type="text/javascript">
          for (var i = 1; i < 32; i++) {
            $(".day").append($("<option></option>").attr("value", i).text(i));
          }
        </script>
        <select id="add-month" class="month" name="">
          <option value="1">Januari</option>
          <option value="2">Februari</option>
          <option value="3">Maart</option>
          <option value="4">April</option>
          <option value="5">Mei</option>
          <option value="6">Juni</option>
          <option value="7">Juli</option>
          <option value="8">Augustus</option>
          <option value="9">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <select id="add-year" class="year" name=""></select>
        <script type="text/javascript">
          $currentYear = (new Date).getFullYear();
          for (var i = $currentYear; i > 1900; i--) {
            $(".year").append($("<option></option>").attr("value",i).text(i));
          }
        </script>
    </div>
    <div class="popup-row">
        <label for="">Telefoon(s)</label>
        <input id="add-phonenr" type="text" class="phone" value="" placeholder="Eerste telefoonnummer">
        <input id="add-phonenr2" type="text" class="phone" value="" placeholder="Tweede telefoonnummer">
        <input id="add-mobnr" type="text" class="phone" value="" placeholder="Mobiel nummer">
    </div>
    <div class="popup-row">
        <label for="">E-mails</label>
        <input id="add-email" type="text" class="email" value="" placeholder="Eerste email">
        <input id="add-email2" type="text" class="email" value="" placeholder="Tweede email">
    </div>
    <div class="popup-row">
        <label for="">Type lid</label>
         <select id="add-mem-type" required="true" class="month" name="">
           <option value="1">Lid</option>
           <option value="2">Jeugdlid</option>
           <option value="3">Gezinslid</option>
           <option value="4">Lid Buitenland</option>
         </select>
    </div>
    <div class="popup-row">
        <label for="">Stalnaam</label>
         <input id="add-stable" type="text" placeholder="Stalnaam" value="">
    </div>
    <div class="popup-row">
        <label for="">Bankrekening</label>
         <input id="add-bank" required="true" type="text" placeholder="Bankrekening" class="bank" value="">
    </div>
    <div class="popup-row">
        <label for=""></label>
         <input id="add-newsletter" required="true" type="checkbox" value="">
         <p>
           Nieuwsbrief
         </p>
    </div>

    <div class="popup-row">
        <label for="">Ontvangen via</label>
         <form class="" action="" method="post">
             <div class="sendway">
               <input id="sendway_post_add" name="sendway" type="radio" value="">
               <h3 class="sendway_option">Post</h3>
             </div>
             <div class="sendway">
               <input id="sendway_email_add" checked="true" name="sendway" type="radio" value="">
               <h3 class="sendway_option">E-mail</h3>
             </div>
         </form>
    </div>

    <div class="popup-row opmerking">
        <label for="">Opmerkingen</label>
         <textarea id="add-comment">Over dit lid geen opmerkingen.</textarea>
    </div>
    <div class="popup-row opmerking">
      <input id="add-members-btn" type="button" class="btn save" value="Opslaan">
    </div>
  </div>
</div>

<div id="members-popup-edit">
  <div class="popup-head">
    <h2>Lid informatie bewerken</h2>
    <a href="#" class="popup_close"><img src="img/content-section/general/close.png" alt="" /></a>
  </div>
  <div class="popup-content">
    <input id="edit-members-id" type="hidden" value="">
    <div class="popup-row">
        <label for="">Naam</label>
        <select id="edit-title" class="title" name="">
          <option value="dhr">Dhr</option>
          <option value="mevr">Mevr</option>
        </select>
        <input type="text" id="edit-name" class="name" placeholder="Klantnaam" value="">
        <input type="text" id="edit-prefix" class="prefix" placeholder="TV" value="">
        <input type="text" id="edit-lastname" class="lastname" placeholder="Achternaam" value="">
    </div>
    <div class="popup-row">
        <label for="">Straatnaam</label>
        <input type="text" id="edit-street" class="street" placeholder="Straatnaam" value="">
        <input type="text" id="edit-streetnr" class="streetnr" placeholder="NR" value="">
        <input type="text" id="edit-zip" class="zip" placeholder="Postcode" value="">
    </div>
    <div class="popup-row">
        <label for="">Woonplaats</label>
        <input type="text" id="edit-place" class="street" value="" placeholder="Plaatsnaam">
        <select id="edit-country" class="country" name="">
          <option value="nederland">Nederland</option>
          <option value="belgie">Belgie</option>
        </select>
    </div>
    <div class="popup-row">
        <label for="">Geboortedatum</label>
        <input type="text" id="edit-birthdate" class="phone" placeholder="Geboortedatum" value="">
    </div>
    <div class="popup-row">
        <label for="">Telefoon(s)</label>
        <input type="text" id="edit-phonenr" class="phone" value="" placeholder="Eerste telefoonnummer">
        <input type="text" id="edit-phonenr2" class="phone" value="" placeholder="Tweede telefoonnummer">
        <input type="text" id="edit-mobnr" class="phone" value="" placeholder="Mobiel nummer">
    </div>
    <div class="popup-row">
        <label for="">E-mails</label>
        <input type="text" id="edit-email" class="email" value="" placeholder="Eerste email">
        <input type="text" id="edit-email2" class="email" value="" placeholder="Tweede email">
    </div>
    <div class="popup-row">
        <label for="">Lidgegevens</label>
         <p id="edit-startdate">11 Januari 2016</p>
         <select id="edit-mem-type" class="month" name="">
           <option value="1">Lid</option>
           <option value="2">Jeugdlid</option>
           <option value="3">Gezinslid</option>
           <option value="4">Lid Buitenland</option>
         </select>
    </div>
    <div class="popup-row">
        <label for="">Stalnaam</label>
         <input type="text" id="edit-stable" placeholder="Stalnaam" value="">
    </div>
    <div class="popup-row">
        <label for="">Bankrekening</label>
         <input type="text" id="edit-bank" placeholder="Bankrekening" class="bank" value="">
    </div>
    <div class="popup-row">
        <label for=""></label>
         <input id="edit-newsletter" type="checkbox" value="">
         <p>
           Nieuwsbrief
         </p>
    </div>
    <div class="popup-row">
        <label for="">Status</label>
         <div class="status_container">
           <input id="status_gift" type="checkbox" value="">
           <img src="img/content-section/members-list/packet_received.png" alt="packet" />
         </div>
         <div class="status_container">
           <input id="status_paid" type="checkbox" value="">
           <img src="img/content-section/members-list/money_payed.png" alt="paid" />
         </div>
         <div class="status_container">
           <input id="status_reminder" type="checkbox" value="">
           <img src="img/content-section/members-list/reminder_received.png" alt="packet" />
         </div>
    </div>

    <div class="popup-row">
        <label for="">Ontvangen via</label>
         <form class="" action="" method="post">
             <div class="sendway">
               <input id="sendway_post" name="sendway" type="radio">
               <h3 class="sendway_option">Post</h3>
             </div>
             <div class="sendway">
               <input id="sendway_email" name="sendway" type="radio">
               <h3 class="sendway_option">E-mail</h3>
             </div>
         </form>
    </div>


    <div class="popup-row opmerking">
        <label for="">Opmerkingen</label>
         <textarea id="edit-comment">Over dit lid geen opmerkingen.</textarea>
    </div>
    <div class="popup-row">
      <!-- <input type="button" class="btn" value="Verplaatsen">-->
      <input type="button" id="edit-members-btn" class="btn save" value="Opslaan">
    </div>
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
