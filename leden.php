<?php
  // live mode
  error_reporting(0);

  session_start();
  require "php/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Andalusier | Leden</title>

  <link rel="stylesheet" href="css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/style.min.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/popups_style.min.css" media="screen" charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <script src="http://developers.bluescript.nl/libraries/requirements.min.js" charset="utf-8"></script>

  <script src="js/assets/config/variables.js" charset="utf-8"></script>
  <script src="js/assets/classes/input_class.js" charset="utf-8"></script>

  <script src="js/layout/menu_structure.js" charset="utf-8"></script>

  <script src="js/functions.js" charset="utf-8"></script>

  <script src="js/controls/general.controls.js" charset="utf-8"></script>
  <script src="js/controls/members.controls.js" charset="utf-8"></script>

  <script src="js/ajax/general.ajax.js" charset="utf-8"></script>
  <script src="js/ajax/members.ajax.js" charset="utf-8"></script>

  <!-- to be removed later -->
  <script src="js/optional/comment_optional.js" charset="utf-8"></script>

  <!-- and eventually -->
  <script src="js/page_start.js" charset="utf-8"></script>
</head>
<body>

  <div id="loading-box">
    <img src="img/other/loader.gif" alt="" />
  </div>

  <?php
    require "elements/popups.php";
  ?>

  <div id="comment-section">
    <img id="comment-toggler" src="img/other/comment.png" alt="Opmerkingen" />
    <div id="comment-panel">
      <div class="comment-panel-overlay">
        <img src="img/other/heart.png" alt="" />
        <p>
          Bedankt voor uw opmerking!
        </p>
      </div>
      <div class="comment-loader">
        <img id="loader" src="img/other/loader-inverse.gif" alt="" />
      </div>
      <div id="comment-panel-head">
        <h2>Commentaar plaatsen</h2>
      </div>
      <div id="comment-panel-content">
        <form>
          <label for="">Titel</label>
          <input type="text" id="comment-title" name="title" maxlength="60">
          <label for="">Opmerking</label>
          <textarea id="comment-msg" name="msg"></textarea>
          <input type="submit" name="sbmt-comment" id="comment-send-btn" value="Versturen">
        </form>
      </div>
    </div>
  </div>
  <div id="page-wrapper">
    <script type="text/javascript">
      // page config

      $pageTitle = "Leden";
      $membersActive = true;

    </script>
    <!-- header section -->
    <?php
      require "elements/header.php";
    ?>

    <!-- content section -->

    <div id="content-wrapper">
        <div id="side-menu">
            <ul>

            </ul>
        </div>
        <div id="content">
          <div id="members-table-head">
            <div id="members-table-button-section">
              <input type="button" id="addMemberBtn" class="btn" value="Toevoegen">
            </div>
            <div id="members-table-search-bar">
              <input type="text" value="" placeholder="Zoeken... (Werkt nog niet)" autocomplete="off" spellcheck="off">
              <input type="button">
            </div>
          </div>
          <div id="members-table" class="members-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <tr class="members-tableHead">
                      <th>#</th>
                      <th>Naam</th>
                      <th class="contr">Contributie</th>
                      <th>Email</th>
                      <th class="phonenr">Telefoonnummer</th>
                      <th class="status">Status</th>
                      <th class="controls"></th>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
