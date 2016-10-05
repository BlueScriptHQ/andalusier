<?php

  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | BerichtenCentrum</title>

    <?php
      // Vendor scripts (externe libraries: jQuery etc)
      // Deze moeten bovenaan
      require "elements/vendors.php";
    ?>

    <!-- page required scripts -->
    <script src="js/ajax/dashboard.ajax.js" charset="utf-8"></script>
    <script src="js/controls/dashboard.controls.js" charset="utf-8"></script>

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
        $pageTitle = "Berichten centrum";

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


            <!-- HIER KAN JE WERKEN! -->


          </div>
      </div>
    </div>
  </body>
</html>
