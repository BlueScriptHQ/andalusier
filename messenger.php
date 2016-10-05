<?php

  session_start();
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Andalusier | BerichtenCentrum</title>
    <link rel="stylesheet" href="css/chatbox.min.css">


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
            <div id="chatbox">
             <div id="graybar"></div>
             <div id="usersmenu">
                <ul>
                  <li>Algemene groep</li>
                  <li>dummyuser1</li>
                  <li>dummyuser2</li>
                  <li>dummyuser3</li>
                  <li>dummyuser4</li>
                  <li>dummyuser5</li>
                  <li>dummyuser6</li>
                  <li>dummyuser7</li>
                  <li>dummyuser8</li>
                  <li>dummyuser9</li>
                  <li>dummyuser10</li>
                  <li>dummyuser11</li>
                  <li>dummyuser12</li>
                  <li>dummyuser13</li>
                  <li>dummyuser14</li>
                </ul>
             </div>
             <div id="messagebox">
               <div id="chat">

               </div>

                <textarea id="message" placeholder="Uw bericht..."></textarea>
                <button id="send"><img src="img/chat/send-button.png" alt="Send" /></button>

             </div>
           </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="js/chat/controls.js" charset="utf-8"></script>
    <script src="js/chat/ajax.js" charset="utf-8"></script>
  </body>
</html>
