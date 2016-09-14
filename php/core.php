<?php

    session_start();

    // This is the core of Andalusier.
    // This file is used for routing the data to the the HTML , database and inbetween.

    // Requirements
    //require "assets/verifications.php";
    //require "assets/defaults.php";
    //require "assets/generals.php";

    // Allow ERRORS to be shown.
    //dev_mode(true);

    require "assets/connection.php";

    var_dump($conn);

    // All functions that can be used using the router
    require "functions/accounts.php";
    //require "functions/members.php";
    //require "functions/documents.php";
    //require "functions/events.php";

    // Optional, be sure to delete this later.
    //require "functions/optional.php";

    // This is the basic router for the data
    require "assets/callHandler.php";

    $callHandler->sendResult();


?>
