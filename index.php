<?php
  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Andalusier | Dashboard</title>

  <?php
    // Algemene resources
    require "elements/resources.php";
  ?>

  <script src="js/ajax/dashboard.ajax.js" charset="utf-8"></script>
  <script src="js/controls/dashboard.controls.js" charset="utf-8"></script>

</head>
<body>

  <?php
    require "elements/loader.php";
    require "elements/popups.php";
    require "optional/comments.php";
  ?>

  <div id="page-wrapper">
    <script type="text/javascript">
      // page config
      $pageTitle = "Dashboard";

    </script>
    <!-- header section -->
    <?php
      require_once "elements/header.php";
    ?>

    <!-- content section -->

    <div id="content-wrapper">
        <div id="side-menu">
            <ul>

            </ul>
        </div>
        <div id="content">

          <div id="user-settings">
            <div class="box-head">
              <img src="img/content-section/user-settings/person.png" alt="" />
              <h2>Mijn gegevens</h2>
            </div>
            <div class="box-content">
              <div class="box-row prev_loggedin">
                <label>Laatst ingelogd:</label>
                <p id="prev_loggedin"></p>
              </div>
              <div class="box-row">
                <label>Voornaam</label>
                <input id="acc_voornaam" type="text" placeholder="Uw voornaam" disabled>
              </div>
              <div class="box-row">
                <label>Tussenvoegsel</label>
                <input type="text" id="acc_tussenvoegsel" placeholder="Uw tussenvoegsel" disabled>
              </div>
              <div class="box-row">
                <label>Achternaam</label>
                <input type="text" id="acc_lastname" placeholder="Uw achternaam" disabled>
              </div>
              <div class="box-row">
                <label>Geboortedatum</label>
                <input type="text" id="acc_birthdate" placeholder="Uw geboortedatum" disabled>
              </div>
              <div class="box-row">
                <label>Email</label>
                <input type="text" id="acc_email" placeholder="Uw email" disabled>
              </div>
              <div class="box-row">
                <label>Tweede email</label>
                <input type="text" id="acc_email2" placeholder="Uw tweede email" disabled>
              </div>
              <div class="box-row">
                <label>Telefoonnummer</label>
                <input type="text" id="acc_telnr" placeholder="Uw telefoonnummer" disabled>
              </div>
              <div class="box-row">
                <label>Tweede telefoonnummer</label>
                <input type="text" id="acc_telnr2" placeholder="Uw telefoonnummer" disabled>
              </div>
              <div class="box-row">
                <label>Mobielnummer</label>
                <input type="text" id="acc_mobnr" placeholder="Uw mobielnummer" disabled>
              </div>
              <div class="box-row">
                <label>Tweede mobielnummer</label>
                <input type="text" id="acc_mobnr2" placeholder="Uw mobielnummer" disabled>
              </div>
              <div class="box-row">
                <img id="acc_settings_loader" src="img/other/loader.gif" alt="" />
                <input type="button" id="editAccData" class="btn right" value="Wijzigen">
                <input type="button" id="saveAccData" class="btn right" value="Opslaan">
              </div>
            </div>
          </div>

          <div id="notifications">
            <div class="box-head">
              <img src="img/content-section/notifications/notification.png" alt="" />
              <h2>Meldingen</h2>
            </div>
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="accounts-tableHead">
                      <th>Tijd</th>
                      <th>Gebeurtenis</th>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
