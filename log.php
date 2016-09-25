<?php
  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | Logboek</title>

    <?php
      // Vendor scripts (externe libraries: jQuery etc)
      // Deze moeten bovenaan
      require "elements/vendors.php";
    ?>
    <!-- page required scripts -->
    <script src="js/ajax/log.ajax.js" charset="utf-8"></script>

    <?php
      // Algemene resources
      require "elements/resources.php";
    ?>

  </head>
  <body>

    <?php
      require "elements/loader.php";
      //require "elements/popups.php";
      require "optional/comments.php";
    ?>

    <div id="page-wrapper">
      <script type="text/javascript">
        // page config
        $pageTitle = "Logboek";
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
          <div id="members-table-head">

            <div id="members-table-button-section">
              <input type="button" id="downloadLogBtn" class="btn" value="Logboek downloaden (excel)">
            </div>

          </div>

          <div id="members-table" class="log-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="log-tableHead">
                      <th class="lDateTime">Datum en Tijd</th>
                      <th class="lEvent">Gebeurtenis</th>
                    </tr>
                    <tr>
                      <td>16-02-2016 09:53</td>
                      <td>Logboek template gemaakt en hopelijk af.</td>
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
