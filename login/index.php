<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Inloggen | Andalusier Vereniging</title>
  <link rel="stylesheet" href="../css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="../css/loginstyle.min.css" media="screen" charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="http://developers.bluescript.nl/libraries/requirements.min.js" charset="utf-8"></script>
  <script src="../js/assets/config/variables.js" charset="utf-8"></script>
  <script src="../js/assets/classes/input_class.js" charset="utf-8"></script>
  <script src="../js/functions.js" charset="utf-8"></script>

  <script src="../js/ajax/login.ajax.js" charset="utf-8"></script>


</head>
  <body>
    <div id="page-wrapper">
      <div id="header">
        <div id="header-row-top"></div>
        <div id="header-inner">
          <div id="brand">
            <img src="../img/header-section/brand.png" alt="Andalusier-Vereniging" />
            <h1>Andalusier Vereniging</h1>
          </div>
          <div id="page-title">
            <h2 class="page-title">Inlogpanel</h2>
          </div>
        </div>
        <div id="header-row-bottom"></div>
      </div>
      <div id="content-wrapper">
        <div id="login-box">
          <div id="login-box-header">
            <h1>Inloggen</h1>
            <hr>
          </div>
          <div id="login-box-content">
            <form class="login-form" action="" method="post">
              <div class="login-form-align">
                <label for="">Gebruikersnaam</label>
                <input type="text" name="username" autocorrect="off" autofocus="true" autocomplete="off" autocapitalize="off" spellcheck="false" id="username" maxlength="32" placeholder="uw gebruikersnaam">
              </div>
              <div class="login-form-align">
                <label for="">Wachtwoord</label>
                <input type="password" name="password" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" id="password" maxlength="48" placeholder="uw wachtwoord">
              </div>
              <div id="status">
                <img src="../img/loginpanel/loading.gif" alt="Aan het verwerken" />
                <p class="status-text">
                  Vul hierboven a.u.b. uw gegevens in.
                </p>
              </div>
              <input type="submit" value="Inloggen" name="login-request" id="lgn-btn">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
