<?php

    /*
       NOTE: This is the core of Andalusier.
       This file is used for routing the data to the the HTML , database and inbetween.
    */

    /*
      Requirements
    */
    session_start();

    //require "assets/verifications.php";
    require "assets/defaults.php";
    require "assets/generals.php";

    // Allow ERRORS to be shown.
    //dev_mode(true);

    require "assets/connection.php";
    require "assets/handlers/databaseHandler.php";
    require "assets/handlers/sequelHandler.php";

    /*
      All functions that can be called using the callHandler
    */
      // general functions
      require "functions/generals.php";

      // page functions
      require "functions/login.php";
      require "functions/dashboard.php";
      require "functions/members.php";
      require "functions/documents.php";
      require "functions/events.php";
      require "functions/accounts.php";
      // require functions/register.php <- not being used atm

    /*
      Optional, be sure to delete this later.
    */
      require "functions/optional.php";

    /*
     This is the basic router for the data
    */
    require "assets/handlers/callHandler.php";

    $callHandler->sendResult();


?>
