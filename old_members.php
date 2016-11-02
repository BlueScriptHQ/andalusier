<?php

  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Andalusier | Oud leden</title>

  <?php
    // Vendor scripts (externe libraries: jQuery etc)
    // Deze moeten bovenaan
    require "elements/vendors.php";
  ?>
  <!-- page required scripts -->
  <script src="js/ajax/old_members.ajax.js" charset="utf-8"></script>
  <script src="js/controls/old_members.controls.js" charset="utf-8"></script>

  <?php
    // Algemene resources
    require "elements/resources.php";
  ?>

</head>
<body>

  <?php
    require "elements/loader.php";
    require "elements/components/popups.php";
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

          <div class="tableHead">

            <div class="button-box">
              <input type="button" id="openMemberPopup-btn" class="btn" value="Toevoegen">
              <input type="button" id="memberPaymentRequestPopup-btn" class="btn" value="Betalingsverzoek">
            </div>

            <div class="search-bar">
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
                      <th>Type</th>
                      <th>Email</th>
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
