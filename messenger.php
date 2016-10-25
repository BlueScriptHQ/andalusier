<?php

  session_start();
  require "php/assets/verifications.php";
  require "php/chat/chatConn.php";
  require "php/chat/userHandler.php";
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

    <!-- Scripts -->
    <script src="js/chat/controls.js" charset="utf-8"></script>
    <script src="js/chat/ajax.js" charset="utf-8"></script>

    <?php
      // Algemene resources
      require "elements/resources.php";
    ?>
  </head>
  <body>

    <?php
      require "elements/loader.php";
      //require "optional/comments.php";
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
                  <?php

                    foreach($result as $current){
                      $id = $current["users_id"];
                      $name = $current["users_name"];

                      echo "
                      <li>".$name."<input type='hidden' value=".$id."></li>
                      ";
                    }
                  ?>
                </ul>
             </div>
             <div id="messagebox">
               <div id="chat">

               </div>

                <textarea id="message" placeholder="Uw bericht..."></textarea>
                <button id="send"><img src="img/chat/send-button.png" alt="Send" /></button>
                <p id="status"></p>
             </div>
           </div>
      </div>
    </div>

  </body>
</html>
