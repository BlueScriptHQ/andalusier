<?php
  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | Aanmeldingen</title>

    <?php
      // Vendor scripts (externe libraries: jQuery etc)
      // Deze moeten bovenaan
      require "elements/vendors.php";
    ?>
    <!-- page required scripts -->
    <script src="js/ajax/members_accept.ajax.js" charset="utf-8"></script>
    <script src="js/controls/members_accept.controls.js" charset="utf-8"></script>

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
        $pageTitle = "Aanmeldingen";
        $membersActive = true;
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

          <div class="tableHead"></div>

          <div id="members-table" class="memberAccept-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="membersAccept-tableHead">
                      <th>#</th>
                      <th>Naam</th>
                      <th>Type</th>
                      <th>Email</th>
                      <th class="controls"></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <!--td's worden aangeroepen in functions/members_accept.php-->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
