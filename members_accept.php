<?php
  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | Leden Accepteren</title>

    <?php
      // Vendor scripts (externe libraries: jQuery etc)
      // Deze moeten bovenaan
      require "elements/vendors.php";
    ?>
    <!-- page required scripts -->
    <script src="js/ajax/membersAccept.ajax.js" charset="utf-8"></script>
    <script src="js/controls/membersAccept.controls.js" charset="utf-8"></script>

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
        $pageTitle = "Leden accepteren";
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
            <div class="search-bar">
              <input type="text" value="" placeholder="Zoeken... (Werkt nog niet)" autocomplete="off" spellcheck="off">
              <input type="button">
            </div>
          </div>

          <div id="members-table" class="membersAccept-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="membersAccept-tableHead">
                      <th>#</th>
                      <th>Naam</th>
                      <th>Type</th>
                      <th>Email</th>
                      <th class="status">Status</th>
                      <th class="controls"></th>
                    </tr>
                    <!--DUMMY INFO, NEEDS TO BE REPLACED!!!-->
                    <tr>
                      <td>23</td>
                      <td>(Mevr) Karin Kreeft</td>
                      <td>Lid</td>
                      <td>karinkreeft8@hotmail.com</td>
                      <td>Img 1 t/m 3</td>
                      <td>INFO</td>
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
