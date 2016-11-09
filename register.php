<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Andalusier | Registreren</title>

  <link rel="stylesheet" href="css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/registerFix.min.css" media="screen" charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="http://developers.bluescript.nl/libraries/requirements.min.js" charset="utf-8"></script>

  <script src="js/register/register.controls.js" charset="utf-8"></script>
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

        <div class="tab">
          <a class="openBlock-contact"><div id="contact-block" class="block">
            <p>Contactgegevens</p>
            <img id="contact-arrow" src="elements/components/img/indicator-image-down.png">
          </div>
          </a>

          <div id="contact-form">
            <div class="row">
               <p class="label">Naam</p>
               <input type="text" id="register_name">
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
               <input type="text" class="register_tel" name="register_tel" maxlength="15">
            </div>
            <div class="row">
               <p class="label">Email</p>
               <input type="text" class="register_mail" name="register_email">
            </div>
            <div class="row">
               <p class="label">Geboortedatum</p>
               <input type="date" min="1900-01-01" class="dateofbirth-register" name="register_dateofbirth">
            </div>
          </div>
        </div>

        <div class="tab">
          <a class="openBlock-register-as"><div id="register-as-block" class="block">
            <p>Lidsoort</p>
            <img id="register-as-arrow" src="elements/components/img/indicator-image-right.png">
          </div>
          </a>
        <div id="register-as-form">
          <div class="row full-width">
             <p class="label">Lidsoort kiezen:</p>
             <fieldset>
             <input type="radio" name="lid" value="Lid" checked>Lid</input>
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

      <div class="tab">
        <a class="openBlock-question"><div id="question-block" class="block">
          <p>Vragen</p>
          <img id="question-arrow" src="elements/components/img/indicator-image-right.png">
        </div>
      </a>
      <div id="question-form">
        <div class="row-question">
           <p class="label">1. Ben je in het bezit van een Spaans paard Zo ja, wat is de naam?</p>
           <input type="text" name="register_horse_name">
        </div>
        <div class="row-question">
           <p class="label">Welke activiteit / discipline heeft je interesse?</p>
           <input type="text" name="register_activities">
        </div>
        <div class="row-question">
           <p class="label">Zou je jezelf voor willen stellen in ons verenigingsblad?</p>
           <input type="text" name="register_introduction">
        </div>
        <div class="row-question">
           <p class="label">Wil jij je inzetten om de vereniging te promoten d.m.v. standbemanning op beurzen / evenementen?</p>
           <input type="text" name="register_promoting">
        </div>
        <div class="row-question">
           <p class="label">Heb je nog andere ideëen</p>
           <input type="text" name="register_ideas">
        </div>
      </div>
    </div>
    <div id="btn_container">
    <button id="btn_register">Aanmelden</button>
    </div>
      </div>
      </div>

    </div>
  </div>

</body>
</html>
