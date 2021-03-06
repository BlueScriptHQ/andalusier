<?php
  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | Accounts</title>

    <?php
      // Vendor scripts (externe libraries: jQuery etc)
      // Deze moeten bovenaan
      require "elements/vendors.php";
    ?>
    <!-- page required scripts -->
    <script src="js/ajax/accounts.ajax.js" charset="utf-8"></script>
    <script src="js/controls/accounts.controls.js" charset="utf-8"></script>

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
        $pageTitle = "Accounts";
      </script>
      <!-- header section -->
      <?php
        require_once "elements/header.php";
      ?>

      <!-- content section -->

      <div id="content-wrapper">
        <div id="side-menu">
          <ul>
              <!-- Hier komt het menu, ingeladen met AJAX -->
          </ul>
        </div>
        <div id="content">

          <div class="tableHead">

            <div class="button-box">
              <input type="button" class="btn" value="Account toevoegen" id="addAccountPopupBtn">
            </div>

          </div>

          <div id="members-table" class="accounts-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="accounts-tableHead">
                      <th>#</th>
                      <th>Gebruikersnaam</th>
                      <th>Naam</th>
                      <th>Type</th>
                      <th></th>
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
