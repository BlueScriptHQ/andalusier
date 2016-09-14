<?php

  // comment handler, this will be removed later.
  if (isset($_POST["cmnttitle"])) {
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $to = 'customers@bluescript.nl';
    $subject = 'Nieuwe opmerking :: Andalusier';
    $message = "Er is een nieuwe opmerking geplaats op " . $root . "\n\nOpmerking titel: " . $_POST["cmnttitle"] . "\n\nOpmerking bericht: " . $_POST["cmntmsg"] . "";
    mail($to, $subject, $message);
  }

?>
