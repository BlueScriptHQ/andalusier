<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Andalusier | Registreren</title>

  <link rel="stylesheet" href="css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/register.min.css" media="screen" charset="utf-8">

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

  <div id="register-form">
    <form action="php/register.php" method="post">
      <div id="form-title">
        <h2>VERENIGING VAN HET SPAANSE PAARD</h2>
        <img src="img/register/brand.png" alt="" />
      </div>
      <div id="form-content">
        <div class="form-row">
          <h3>Inschrijfformulier lidmaatschap</h3>
          <p class="centered">
            Ja, ik meld me aan als lid van de Vereniging van het Spaanse Paard! Mijn gegevens zijn:
          </p>
        </div>
        <div class="form-row">
          <p class="label">Voornaam</p>
          <input type="text" name="name" value="" placeholder="Uw voornaam" required>
        </div>
        <div class="form-row">
          <p class="label">Tussenvoegsel</p>
          <input type="text" name="tussenvoegsel" value="" placeholder="Uw tussenvoegsel">
        </div>
        <div class="form-row">
          <p class="label">Achternaam</p>
          <input type="text" name="lastname" value="" placeholder="Uw achternaam" required>
        </div>
        <div class="form-row">
          <p class="label">Postcode</p>
          <input type="text" name="zip" class="zip" placeholder="1234AB" required>
        </div>
        <div class="form-row">
          <p class="label">Plaatsnaam</p>
          <input type="text" name="place" placeholder="Uw plaatsnaam" required>
        </div>
        <div class="form-row">
          <p class="label">Straatnaam</p>
          <input type="text" name="street" class="street" placeholder="Uw straatnaam" required>
          <input type="text" name="number" class="street_number" placeholder="12A" required>
        </div>
        <div class="form-row contact-begin">
          <p class="label">Telefoonnummer</p>
          <input type="text" name="phonenr" placeholder="Uw telefoonnummer" required>
          <input type="button" id="addPhone" value="">
        </div>
        <div id="extraPhone" class="form-row hidden">
          <p class="label">Telefoonnummer 2</p>
          <input type="text" name="phonenr2" placeholder="Uw tweede telefoonnummer" required>
        </div>
        <div class="form-row">
          <p class="label">Mobielnummer</p>
          <input type="text" name="mobnr" placeholder="Uw mobielnummer" required>
          <input type="button" id="addMob" value="">
        </div>
        <div id="extraMob" class="form-row hidden">
          <p class="label">Mobielnummer 2</p>
          <input type="text" name="mobnr2" placeholder="Uw tweede mobielnummer"  required>
        </div>
        <div class="form-row">
          <p class="label">Emailadres</p>
          <input type="text" name="email" placeholder="Uw emailadres" required>
          <input type="button" id="addEmail" value="">
        </div>
        <div id="extraEmail" class="form-row hidden">
          <p class="label">Emailadres 2</p>
          <input type="text" name="email2" placeholder="Uw tweede emailadres" required>
        </div>
        <div id="extraEmail" class="form-row contact-end">
          <p class="label">Geboortedatum</p>
          <select class="day" name=""></select>
          <script type="text/javascript">
            for (var i = 1; i < 32; i++) {
              $(".day").append($("<option></option>").attr("value",i).text(i));
            }
          </script>
          <select class="month" name="">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maart</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Augustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
          <select class="year" name=""></select>
          <script type="text/javascript">
            $currentYear = (new Date).getFullYear();
            for (var i = $currentYear; i > 1899; i--) {
              $(".year").append($("<option></option>").attr("value",i).text(i));
            }
          </script>
        </div>
        <div id="acceptAge" class="form-row hidden messageDiv">
          <p class="message">Het ziet ernaar uit dat je nog geen 18 bent.
          Om lid te worden heb je toestemming van je ouders nodig.</p>
          <input type="checkbox" name="email2" value="hi!" required>
          <p class="checkboxLabel">
            Ja, Ik heb toestemming van mijn ouders.
          </p>
        </div>
        <div class="form-row">
          <p class="label">Aanmelden als:</p>
          <select class="type" name="">
            <option value="1">Januari</option>

          </select>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
