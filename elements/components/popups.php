<!-- standard overlay -->
 <div id="page-overlay">
 </div>


 <div class="popup" id="addMemberPopup">
    <div class="popup-head">
       <h2>Klant toevoegen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Algemene gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Aanhef</p>
             <select class="title" id="add-title" name="members_titles_content" required="true">
                <option value="dhr">
                   De heer
                </option>

                <option value="mevr">
                   Mevrouw
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Voornaam</p>
             <input name="members_name" type="text">
          </div>


          <div class="row">
             <p class="label">Tussenvoegsel</p>
             <input name="members_tussenvoegsel" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Achternaam</p>
             <input name="members_lastname" type="text">
          </div>


          <div class="row">
             <p class="label">Geboortedatum</p>
             <input name="members_birthdate" type="text" value="DATEPICKER HIER ;')">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>AW gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Straatnaam</p>
             <input name="members_residence_street" type="text">
          </div>


          <div class="row">
             <p class="label">Huisnummer</p>
             <input name="members_residence_street_nr" type="text">
          </div>


          <div class="row">
             <p class="label">Woonplaats</p>
             <input name="members_residence_place" type="text">
          </div>


          <div class="row">
             <p class="label">Postcode</p>
             <input name="members_residence_zip" type="text">
          </div>


          <div class="row">
             <p class="label">Land van herkomst</p>
             <select name="members_residence_country">
                <option value="nederland">
                   Nederland
                </option>

                <option value="belgie">
                   België
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="members_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="members_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="members_phonenr" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="members_phonenr2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="members_mobnr" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Verenigingsgerelateerd</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Lid type</p>
             <select name="members_types_id">
                <option value="1">
                   Lid
                </option>

                <option value="2">
                   Jeugdlid
                </option>

                <option value="3">
                   Gezinslid
                </option>

                <option value="4">
                   Lid Buitenland
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Nieuwsbrief</p>


             <div class="cop_check_wrapper">
                <div class="cop_container cop_con_check">
                   <div class="cop_inner cop_in_check control" name="members_newsletter">
                   </div>
                </div>
             </div>
          </div>


          <div class="row">
             <p class="label">Stalnaam</p>
             <input name="members_stable" type="text">
          </div>


          <div class="row">
             <p class="label">Bankrekening</p>
             <input name="members_bank" type="text">
          </div>


          <div class="row">
             <p class="label">Ontvangen via</p>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="1">
                   </div>
                </div>


                <p class="tag">E-mail</p>
             </div>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="0">
                   </div>
                </div>


                <p class="tag">Post</p>
             </div>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Aanmaken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="label">Opmerking</p>


             <p class="label">
             </p>

             <textarea name="members_comment" placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="addMember-submit" type="button" value="Lid aanmaken">
          </div>
       </div>
    </div>
 </div>


 <div class="popup" id="addNewAccountPopup">
    <div class="popup-head">
       <h2>Account toevoegen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Inloggegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Gebruikersnaam</p>
             <input name="accounts_username" type="text">
          </div>


          <div class="row">
             <p class="label">Wachtwoord</p>
             <input name="accounts_password" class="password" type="password">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Algemene gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Voornaam</p>
             <input name="accounts_name" type="text">
          </div>


          <div class="row">
             <p class="label">Tussenvoegsel</p>
             <input name="accounts_tussenvoegsel" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Achternaam</p>
             <input name="accounts_lastname" type="text">
          </div>


          <div class="row">
             <p class="label">Geboortedatum</p>
             <input name="accounts_birthdate" type="text" value="DATEPICKER HIER ;')">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="accounts_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="accounts_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="accounts_phonenr" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="accounts_phonenr2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="accounts_mobnr" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Aanmaken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">
             </p>
             <input id="addAccount-submit" type="button" value="Lid aanmaken">
          </div>
       </div>
    </div>
 </div>


 <div class="popup" id="editPopup">
    <div class="popup-head">
       <h2>Klant toevoegen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Algemene gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Aanhef</p>
             <select class="title" id="add-title" name="members_titles_content" required="true">
                <option value="dhr">
                   De heer
                </option>

                <option value="mevr">
                   Mevrouw
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Voornaam</p>
             <input name="members_name" type="text">
          </div>


          <div class="row">
             <p class="label">Tussenvoegsel</p>
             <input name="members_tussenvoegsel" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Achternaam</p>
             <input name="members_lastname" type="text">
          </div>


          <div class="row">
             <p class="label">Geboortedatum</p>
             <input name="members_birthdate" type="text" value="DATEPICKER HIER ;')">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>AW gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Straatnaam</p>
             <input name="members_residence_street" type="text">
          </div>


          <div class="row">
             <p class="label">Huisnummer</p>
             <input name="members_residence_streetnr" type="text">
          </div>


          <div class="row">
             <p class="label">Woonplaats</p>
             <input name="members_residence_place" type="text">
          </div>


          <div class="row">
             <p class="label">Postcode</p>
             <input name="members_residence_zip" type="text">
          </div>


          <div class="row">
             <p class="label">Land van herkomst</p>
             <select name="members_residence_country">
                <option value="nederland">
                   Nederland
                </option>

                <option value="belgie">
                   België
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="members_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="members_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="members_phonenr" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="members_phonenr2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="members_mobnr" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Verenigingsgerelateerd</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Lid type</p>
             <select name="members_types_id">
                <option value="1">
                   Lid
                </option>

                <option value="2">
                   Jeugdlid
                </option>

                <option value="3">
                   Gezinslid
                </option>

                <option value="4">
                   Lid Buitenland
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Nieuwsbrief</p>


             <div class="cop_check_wrapper">
                <div class="cop_container cop_con_check">
                   <div class="cop_inner cop_in_check control" name="members_newsletter">
                   </div>
                </div>
             </div>
          </div>


          <div class="row">
             <p class="label">Stalnaam</p>
             <input name="members_stable" type="text">
          </div>


          <div class="row">
             <p class="label">Bankrekening</p>
             <input name="members_bank" type="text">
          </div>


          <div class="row">
             <p class="label">Ontvangen via</p>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="1">
                   </div>
                </div>


                <p class="tag">E-mail</p>
             </div>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="0">
                   </div>
                </div>


                <p class="tag">Post</p>
             </div>
          </div>

          <div class="row">
            <p class="label">Status</p>

            <div class="cop_check_wrapper">
                <div class="cop_container cop_con_check">
                   <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
                </div>
                <img src="img/content-section/members-list/packet_notreceived.png" alt="" />
             </div>

            <div class="cop_check_wrapper">
                 <div class="cop_container cop_con_check">
                    <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
                 </div>
                 <img src="img/content-section/members-list/money_notpayed.png" alt="" />
            </div>

            <div class="cop_check_wrapper">
                  <div class="cop_container cop_con_check">
                     <div class="cop_inner cop_in_check control" name="members_newsletter"></div>
                  </div>
                  <img src="img/content-section/members-list/reminder_notreceived.png" alt="" />
            </div>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Aanmaken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="label">Opmerking</p>


             <p class="label">
             </p>

             <textarea name="members_comment" placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="editMember-submit" type="button" value="Lid aanmaken">
          </div>
       </div>
    </div>
 </div>


 <div class="popup" id="editAccountPopup">
    <div class="popup-head">
       <h2>Account bewerken</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Inloggegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <input name="accounts_id" type="hidden">

             <p class="label">Gebruikersnaam</p>
             <input name="accounts_username" type="text">
          </div>


          <div class="row flexible-height">
             <p class="desc">Om veiligheidsredenen is het niet mogelijk het wachtwoord in te zien.</p>
          </div>


          <div class="row password-row">
             <p class="label">Wachtwoord</p>
             <input class="btn" id="accountPasswordResetBtn" type="button" value="Reset">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Account type</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="desc">Hieronder kunt u een account type selecteren. Elk type heeft verschillende rechten. Deze kunt u inzien en muteren op de accounts pagina. Hier kunt u ook nieuwe account typen aanmaken.</p>
          </div>


          <div class="row">
             <p class="label">Account type</p>
             <select name="ranks_id">
                <option value="1">
                   Lid
                </option>

                <option value="2">
                   Jeugdlid
                </option>

                <option value="3">
                   Gezinslid
                </option>

                <option value="4">
                   Lid Buitenland
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="saveEditAccountData" type="button" value="Opslaan">
          </div>
       </div>
    </div>
 </div>


 <div class="documents-popup-FolderFile" id="editAccountPasswordPopup">
    <div class="popup-head">
       <h2>Wachtwoord resetten</h2>
       <a class="overlay_popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Geef hier het nieuwe gewenste wachtwoord op</h2>
    </div>


    <div class="popup-row">
       <input id="accountPasswordID" type="hidden"> <input autocomplete="off" class="a_password" id="newAccountPassword" placeholder="Nieuwe wachtwoord" type="password">
    </div>


    <div class="popup-row">
       <input class="btn" id="saveAccountPassword" type="button" value="Reset">
    </div>
 </div>


 <div class="popup" id="critical-error">
    <div class="popup-head">
       <h2>Kritieke fout</h2>
    </div>


    <div class="popup-content">
       <p>De webpagina kan niet goed worden geladen door een kritieke fout in de server.<br>
       <br>
       Als dit vaker voorkomt, neem dan contact met de systeembeheerder op.</p>
       <br>
       <a href="index.php"><input class="btn save" id="add-members-btn" type="button" value="Haal mij hier weg."></a>
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="addFolder">
    <div class="popup-head">
       <h2>Map aanmaken</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Geef de gewenste naam voor de map op</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn" id="make_folder" placeholder="Mapnaam" type="text" value="">
    </div>


    <div class="popup-row">
       <input class="folder_file_btn" id="addAFolder" type="button" value="Aanmaken">
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="addFile">
    <form action="php/files.php" enctype="multipart/form-data" id="fileUploadForm" method="post" name="fileUploadForm">
       <input id="hiddenAddFile" name="fileToUpload" style="display: none;" type="file" value="">

       <div class="popup-head">
          <h2>Bestand uploaden</h2>
          <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
       </div>


       <div class="popup-content">
          <div class="popup-row">
             <input id="addAFileBtn" type="button" value="Kies bestand">
          </div>
       </div>


       <div class="popup-row">
          <input class="folder_file_btn" id="up_file" name="newName" placeholder="Bestandsnaam" type="text" value="">
       </div>


       <div class="popup-row">
          <input class="folder_file_btn" id="uploadFile" type="button" value="Uploaden">
       </div>
    </form>
 </div>


 <div class="popup" id="editFolderFile">
    <input type="hidden" value="">

    <div class="popup-head">
       <h2>Naam veranderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Huidige naam:</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn" id="edit_folder" placeholder="Geef hier de nieuwe naam op..." type="text" value="">
    </div>


    <div class="popup-row">
       <input class="folder_file_btn" id="renameFF" type="button" value="Wijzigen">
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="deleteFolderFile">
    <input type="hidden" value="">

    <div class="popup-head">
       <h2>Verwijderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Weet u zeker dat u dit wilt verwijderen?</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn delete" id="deleteFF" type="button" value="Verwijderen">
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="deleteFolderPerm">
    <input type="hidden" value="">

    <div class="popup-head">
       <h2>Verwijderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Deze map bevat bestanden, alsnog verwijderen?</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn delete" id="deleteFP" type="button" value="Verwijderen">
    </div>
 </div>


 <div class="popup" id="acceptMemberPopup">
    <div class="popup-head">
       <h2>Lid accepteren</h2>
       <input name="id" type="hidden" value=""> <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Algemene gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Aanhef</p>
             <select class="title" id="add-title" name="members_titles_content" required="true">
                <option value="dhr">
                   De heer
                </option>

                <option value="mevr">
                   Mevrouw
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Voornaam</p>
             <input name="members_name" type="text">
          </div>


          <div class="row">
             <p class="label">Tussenvoegsel</p>
             <input name="members_tussenvoegsel" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Achternaam</p>
             <input name="members_lastname" type="text">
          </div>


          <div class="row">
             <p class="label">Geboortedatum</p>
             <input name="members_birthdate" type="text" value="DATEPICKER HIER ;')">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>AW gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Straatnaam</p>
             <input name="members_residence_street" type="text">
          </div>


          <div class="row">
             <p class="label">Huisnummer</p>
             <input name="members_residence_street_nr" type="text">
          </div>


          <div class="row">
             <p class="label">Woonplaats</p>
             <input name="members_residence_place" type="text">
          </div>


          <div class="row">
             <p class="label">Postcode</p>
             <input name="members_residence_zip" type="text">
          </div>


          <div class="row">
             <p class="label">Land van herkomst</p>
             <select name="members_residence_country">
                <option value="nederland">
                   Nederland
                </option>

                <option value="belgie">
                   België
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="members_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="members_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="members_phonenr" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="members_phonenr2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="members_mobnr" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Verenigingsgerelateerd</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Lid type</p>
             <select name="members_types_id">
                <option value="1">
                   Lid
                </option>

                <option value="2">
                   Jeugdlid
                </option>

                <option value="3">
                   Gezinslid
                </option>

                <option value="4">
                   Lid Buitenland
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Nieuwsbrief</p>


             <div class="cop_check_wrapper">
                <div class="cop_container cop_con_check">
                   <div class="cop_inner cop_in_check control" name="members_newsletter">
                   </div>
                </div>
             </div>
          </div>


          <div class="row">
             <p class="label">Stalnaam</p>
             <input name="members_stable" type="text">
          </div>


          <div class="row">
             <p class="label">Bankrekening</p>
             <input name="members_bank" type="text">
          </div>


          <div class="row">
             <p class="label">Ontvangen via</p>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="1">
                   </div>
                </div>


                <p class="tag">E-mail</p>
             </div>


             <div class="op_option_wrapper">
                <div class="cop_container op_con_option">
                   <div class="cop_inner op_in_option control" name="members_receive_type" value="0">
                   </div>
                </div>


                <p class="tag">Post</p>
             </div>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Aanmaken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="label">Opmerking</p>


             <p class="label">
             </p>

             <textarea name="members_comment" placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="acceptMemberBtn" type="button" value="Accepteren"> <input id="declineMemberBtn" type="button" value="Weigeren">
          </div>
       </div>
    </div>
 </div>
 <!--

  Nieuwe adverts popup : Toevoegen

-->


 <div class="popup" id="newAdvertsAdd">
    <div class="popup-head">
       <h2>Nieuwe advertentie toevoegen</h2>
       <input name="id" type="hidden" value=""> <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Advertentiegegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Advertentienaam</p>
             <input name="adverts_name" type="text">
          </div>


          <div class="row">
             <p class="label">Advertentiesoort</p>
             <select class="title" id="add-title" name="adverts_type" required="true">
                <option value="Heel">
                   Heel
                </option>

                <option value="Half">
                   Half
                </option>

                <option value="Kwart">
                   Kwart
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Adverteerder</p>
             <input name="adverts_owner" type="text">
          </div>


          <div class="row">
             <p class="label">Eind datum</p>
             <input name="adverts_date" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>NAW-gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Contactpersoon</p>
             <input name="adverts_contact" type="text">
          </div>


          <div class="row">
             <p class="label">Postcode</p>
             <input name="adverts_postalcode" type="text">
          </div>


          <div class="row">
             <p class="label">Adres</p>
             <input name="adverts_address" type="text">
          </div>


          <div class="row">
             <p class="label">Stad</p>
             <input name="adverts_city" type="text">
          </div>


          <div class="row">
             <p class="label">Land</p>
             <select name="adverts_country">
                <option value="nederland">
                   Nederland
                </option>

                <option value="belgie">
                   België
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="adverts_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="adverts_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="adverts_telephone" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="adverts_telephone2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="adverts_mobile" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Bankgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Bank</p>
             <input name="adverts_bank" type="text">
          </div>


          <div class="row">
             <p class="label">Rekeningnummer</p>
             <input name="adverts_billingnumber" type="text">
          </div>


          <div class="row">
             <p class="label">Status</p>
             <select class="title" id="add-title" name="adverts_status" required="true">
                <option value="1">
                   Betaald
                </option>

                <option value="0">
                   Niet betaald
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Aanmaken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="label">Opmerking</p>


             <p class="label">
             </p>

             <textarea name="adverts_comment" placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="saveAdvertButton" type="button" value="Opslaan">
          </div>
       </div>
    </div>
 </div>
 <!--Members payment request-->


 <div class="documents-popup-FolderFile popup" id="memberPaymentRequest">
    <input type="hidden" value="">

    <div class="popup-head">
       <h2>Betalingsverzoek</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Vorige betalingsverzoek was op: <span class="prSend"></span>.</h2>


       <h2 class="popup-content-h2">Betalingsverzoek versturen?</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn delete" id="sendPR" type="button" value="Versturen"> <input class="folder_file_btn delete" id="cancelPR" type="button" value="Annuleren">
    </div>
 </div>
 <!--

  Nieuwe adverts popup : Edit

-->


 <div class="popup" id="newAdvertsOpen">
    <div class="popup-head">
       <h2>Nieuwe advertentie toevoegen</h2>
       <input name="id" type="hidden" value=""> <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Advertentiegegevens</h2>
       </div>


       <div class="popup-section-content">
          <input name="adverts_id" type="hidden" value="">

          <div class="row">
             <p class="label">Advertentienaam</p>
             <input name="adverts_name" type="text">
          </div>


          <div class="row">
             <p class="label">Advertentiesoort</p>
             <select class="title" id="add-title" name="adverts_type" required="true">
                <option value="Heel">
                   Heel
                </option>

                <option value="Half">
                   Half
                </option>

                <option value="Kwart">
                   Kwart
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">Adverteerder</p>
             <input name="adverts_owner" type="text">
          </div>


          <div class="row">
             <p class="label">Eind datum</p>
             <input name="adverts_enddate" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>NAW-gegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Contactpersoon</p>
             <input name="adverts_contact" type="text">
          </div>


          <div class="row">
             <p class="label">Postcode</p>
             <input name="adverts_postalcode" type="text">
          </div>


          <div class="row">
             <p class="label">Adres</p>
             <input name="adverts_address" type="text">
          </div>


          <div class="row">
             <p class="label">Stad</p>
             <input name="adverts_city" type="text">
          </div>


          <div class="row">
             <p class="label">Land</p>
             <select name="adverts_country">
                <option value="nederland">
                   Nederland
                </option>

                <option value="belgie">
                   België
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Contactgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">E-mailadres</p>
             <input name="adverts_email" type="text">
          </div>


          <div class="row">
             <p class="label">Extra e-mailadres</p>
             <input name="adverts_email2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Telefoonnummer</p>
             <input name="adverts_telephone" type="text">
          </div>


          <div class="row">
             <p class="label">Extra telefoonnummer</p>
             <input name="adverts_telephone2" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">Mobielnummer</p>
             <input name="adverts_mobile" optional="true" type="text">
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Bankgegevens</h2>
       </div>


       <div class="popup-section-content">
          <div class="row">
             <p class="label">Bank</p>
             <input name="adverts_bank" type="text">
          </div>


          <div class="row">
             <p class="label">Rekeningnummer</p>
             <input name="adverts_billingnumber" type="text">
          </div>


          <div class="row">
             <p class="label">Status</p>
             <select class="title" id="add-title" name="adverts_status" required="true">
                <option value="1">
                   Betaald
                </option>

                <option value="0">
                   Niet betaald
                </option>
             </select>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input class="openNext" type="button" value="Volgende stap">
          </div>
       </div>
    </div>


    <div class="popup-section">
       <div class="popup-section-head">
          <img alt="" src="elements/components/img/indicator-image-right.png">

          <h2>Bijwerken</h2>
       </div>


       <div class="popup-section-content">
          <div class="row flexible-height">
             <p class="label">Opmerking</p>


             <p class="label">
             </p>

             <textarea name="adverts_comment" placeholder="Dit vult u alleen in, als u het nodig acht."></textarea>
          </div>


          <div class="row">
             <p class="label">
             </p>
             <input id="updateAdvertButton" type="button" value="Opslaan"> <input id="moveAdvertButton" type="button" value="Verplaats naar oud">
          </div>
       </div>
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="confirmDeleteLog">
    <input type="hidden" value="">

    <div class="popup-head">
       <h2>Logboek leegmaken</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>


    <div class="popup-content">
       <h2 class="popup-content-h2">Weet u zeker dat u het logboek wilt leegmaken?</h2>
    </div>


    <div class="popup-row">
       <input class="folder_file_btn delete" id="deleteLog" type="button" value="Leegmaken"> <input class="folder_file_btn delete" id="cancelLog" type="button" value="Annuleren">
    </div>
 </div>



 <div class="documents-popup-FolderFile popup" id="addFolderNews">
    <div class="popup-head">
       <h2>Map aanmaken</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>
    <div class="popup-content">
       <h2 class="popup-content-h2">Geef de gewenste naam voor de map op</h2>
    </div>
    <div class="popup-row">
       <input class="folder_file_btn" id="make_folderNews" placeholder="Mapnaam" type="text" value="">
    </div>
    <div class="popup-row">
       <input class="folder_file_btn" id="addAFolderNews" type="button" value="Aanmaken">
    </div>
 </div>

 <div class="documents-popup-FolderFile popup" id="addFileNews">
    <form action="php/files.php" enctype="multipart/form-data" id="fileUploadFormNews" method="post" name="fileUploadFormNews">
       <input id="hiddenAddFileNews" name="fileToUploadNews" style="display: none;" type="file" value="">

       <div class="popup-head">
          <h2>Bestand uploaden</h2>
          <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
       </div>
       <div class="popup-content">
          <div class="popup-row">
             <input id="addAFileBtnNews" type="button" value="Kies bestand">
          </div>
       </div>
       <div class="popup-row">
          <input class="folder_file_btn" id="up_fileNews" name="newNameNews" placeholder="Bestandsnaam" type="text" value="">
       </div>
       <div class="popup-row">
          <input class="folder_file_btn" id="uploadFileNews" type="button" value="Uploaden">
       </div>
    </form>
 </div>


 <div class="documents-popup-FolderFile popup" id="editFolderFileNews">
    <input type="hidden" value="">
    <div class="popup-head">
       <h2>Naam veranderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>
    <div class="popup-content">
       <h2 class="popup-content-h2">Huidige naam:</h2>
    </div>
    <div class="popup-row">
       <input class="folder_file_btn" id="edit_folderNews" placeholder="Geef hier de nieuwe naam op..." type="text" value="">
    </div>
    <div class="popup-row">
       <input class="folder_file_btn" id="renameFFNews" type="button" value="Wijzigen">
    </div>
 </div>


 <div class="documents-popup-FolderFile popup" id="deleteFolderFileNews">
    <input type="hidden" value="">
    <div class="popup-head">
       <h2>Verwijderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>
    <div class="popup-content">
       <h2 class="popup-content-h2">Weet u zeker dat u dit wilt verwijderen?</h2>
    </div>
    <div class="popup-row">
       <input class="folder_file_btn delete" id="deleteFFNews" type="button" value="Verwijderen">
    </div>
 </div>

 <div class="documents-popup-FolderFile popup" id="deleteFolderPermNews">
    <input type="hidden" value="">
    <div class="popup-head">
       <h2>Verwijderen</h2>
       <a class="popup_close" href="#"><img alt="" src="img/content-section/general/close.png"></a>
    </div>
    <div class="popup-content">
       <h2 class="popup-content-h2">Deze map bevat bestanden, alsnog verwijderen?</h2>
    </div>
    <div class="popup-row">
       <input class="folder_file_btn delete" id="deleteFPNews" type="button" value="Verwijderen">
    </div>
 </div>


 <!-- requirements -->
 <link href="css/popups_style.min.css" media="screen" rel="stylesheet">
 <link href="elements/components/css/popups.css" media="screen" rel="stylesheet">
 <link href="elements/components/css/check_radio.css" media="screen" rel="stylesheet">
 <script src="elements/components/popups.js"></script>
 <script charset="utf-8" src="elements/components/check_radio.js"></script>
