<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Andalusier | Registreren</title>

  <link rel="stylesheet" href="css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/registerFix.min.css" media="screen" charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="http://developers.bluescript.nl/libraries/requirements.min.js" charset="utf-8"></script>

  <script src="js/register.js" charset="utf-8"></script>
</head>
<body>

  <?php require "elements/components/popups.php"; ?>

<!--
  <div id="loading-box">
    <img src="img/other/loader.gif" alt="" />
  </div>-->
  <div id="wrapper">
      <div id="register-form">
        <div id="header">
          <h2>Vereniging van het spaanse paard</h2>
          <img src="img/header-section/brand.png">
        </div>
        <div id="register-form-content">
          <div id="contact-block">
            <p>Contactgegevens</p>
            <img src="elements/components/img/indicator-image-right.png">
          </div>
          <div id="contact-form">
            <div class="row">
               <p class="label">Naam</p>
               <input type="text" name="register_name">
            </div>
            <div class="row">
               <p class="label">Adres</p>
               <input type="text" name="register_address">
            </div>
            <div class="row">
               <p class="label">Woonplaats</p>
               <input type="text" name="register_city">
            </div>
            <div class="row">
               <p class="label">Telefoon of mobiel</p>
               <input type="text" name="register_tel">
            </div>
            <div class="row">
               <p class="label">Email</p>
               <input type="text" name="register_email">
            </div>
            <div class="row">
               <p class="label">Geboortedatum</p>
               <input type="text" name="register_dateofbirth">
            </div>
          </div>
          <div id="register-as-block">
            <p>Lidsoort</p>
            <img src="elements/components/img/indicator-image-right.png">
          </div>

        <div id="register-as-block-content">
          <div class="row full-width">
             <p class="label">Lidsoort kiezen:</p>
             <fieldset>
             <input type="radio" name="lid" value="Lid">Lid</input>
             <br>
             <input type="radio" name="lid" value="Jeugdlid">Jeugdlid</input>
             <br>
             <input type="radio" name="lid" value="Gezinslid">Gezinslid</input>
             <br>
             <input type="radio" name="lid" value="Lid-buitenland">Lid buitenland</input>
           </fieldset>
          </div>
        </div>
    </div>
    </div>
  </div>

</body>
</html>
