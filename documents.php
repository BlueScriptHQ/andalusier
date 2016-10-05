<?php

  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Andalusier | Documenten</title>

  <?php
    // Vendor scripts (externe libraries: jQuery etc)
    // Deze moeten bovenaan
    require "elements/vendors.php";
  ?>
  <!-- page required scripts -->
  <script src="js/ajax/documents.ajax.js" charset="utf-8"></script>
  <script src="js/controls/documents.controls.js" charset="utf-8"></script>

  <?php
    // Algemene resources
    require "elements/resources.php";
  ?>

</head>
<body>

  <?php
  require "elements/loader.php";
  require "optional/comments.php";
  // require "elements/components/popups.php";
  ?>

  <div id="page-wrapper">
    <script type="text/javascript">
      // page config
      $pageTitle = "Documenten";
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
            <div id="members-table-head">
              <div id="members-table-button-section">
                <input type="button" id="addFileBtn" class="btn" value="Uploaden">
              </div>
              <div id="members-table-button-section">
                <input type="button" id="addFolderBtn" class="btn" value="Aanmaken">
              </div>

            </div>
            <div id="members-table" class="documents-table">
              <div class="box-content">
                <div class="box-row">
                  <table>
                      <tr class="documents-tableHead">
                        <th class="fImg"></th>
                        <th class="fName">Naam</th>
                        <th class="fType">Type</th>
                        <th class="fSize">Bestandsgrootte</th>
                        <th class="fEdited">Laatst gewijzigd</th>
                        <th class="fOptions">Opties</th>
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
