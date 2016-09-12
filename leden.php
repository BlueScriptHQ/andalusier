<?php
  // live mode
  error_reporting(0);

  session_start();
  require "php/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Andalusier | Leden</title>

  <?php
    // Algemene resources
    require "elements/resources.php";
  ?>

  <script src="js/ajax/members.ajax.js" charset="utf-8"></script>
  <script src="js/controls/members.controls.js" charset="utf-8"></script>
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

      $pageTitle = "Leden";
      $membersActive = true;

    </script>
    <!-- header section -->
    <?php
      require "elements/header.php";
    ?>

    <!-- content section -->

    <div id="content-wrapper">
        <div id="side-menu">
            <ul>

            </ul>
        </div>
        <div id="content">
          <div id="members-table-head">
            <div id="members-table-button-section">
              <input type="button" id="addMemberBtn" class="btn" value="Toevoegen">
            </div>
            <div id="members-table-search-bar">
              <input type="text" value="" placeholder="Zoeken... (Werkt nog niet)" autocomplete="off" spellcheck="off">
              <input type="button">
            </div>
          </div>
          <div id="members-table" class="members-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="members-tableHead">
                      <th>#</th>
                      <th>Naam</th>
                      <th class="contr">Contributie</th>
                      <th>Email</th>
                      <th class="phonenr">Telefoonnummer</th>
                      <th class="status">Status</th>
                      <th class="controls"></th>
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