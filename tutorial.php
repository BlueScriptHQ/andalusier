<?php

  // $tutorial = ANDALUSIER->removeRocketScience();

  // Zodat we $_SESSION variabelen kunnen gebruiken (verifications.php heeft dit namelijk nodig)
  session_start();

  /*

      Voordat een gebruiker deze pagina mag bekijken, moet eerst worden gekeken of de gebruiker
      uberhaupt wel de rechten heeft om op deze pagina te zijn.
      En dus, is de gebruiker ingelogd...?

      Deze check staat in php/assets/verifications.php

  */
  require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <!-- Titel van de pagina, laatste woord aanpassen dus! -->
    <title>Andalusier | Tutorial</title>

    <?php
      /*
        Om de webpagina goed te laten functioneren zijn er scripts nodig en die scripts hebben weer libraries nodig, zoals jQuery.
        Omdat onze scripts deze nodig hebben, moeten de libraries (ofwel vendors) bovenaan
      */
      require "elements/vendors.php";
    ?>

    <!--
        Hieronder staan de scripts die deze SPECIFIEKE pagina nodig heeft.
        Dus niet scripts die op elke pagina moeten lopen (denk aan de menu scripts, de uitlogknop etc)
    -->
    <script src="js/ajax/tutorial.ajax.js" charset="utf-8"></script>

    <?php

    /*
      Om de webpagina goed te laten functioneren zijn er scripts nodig zoals eerder aangegeven
      Nu hierboven de benodigde libraries al zijn geladen, kunnen nu onze custom (en algemene) scripts worden geladen

      Je zou je misschien afvragen waarom je de pagina specifieke scripts niet al laatst zou laden...
      Dit komt in resources.php het bestand start.js staat, en van de naam af te leiden..
      Dit bestand moet lopen als het DOM klaar is en moet dus als laatste script worden geladen.
    */
      require "elements/resources.php";
    ?>

  </head>
  <body>

    <?php
      /*
       Hier worden de extra algemene HTML geladen, denk aan het laadscherm en de popups.
       Momenteel staat hier ook comments.php bij, deze zal bij de livegang worden verwijderd.
       Daarom staat dit bestand ook in het mapje "optional".
      */
      require "elements/loader.php";
      require "elements/components/popups.php";
      require "optional/comments.php";
    ?>

    <div id="page-wrapper">
      <!--
        Hieronder kan je de paginanaam configureren (de naam die rechtsboven aan in de header staat)
      -->
      <script type="text/javascript">
        $pageTitle = "Tutorial";
      </script>


      <!--
        Hier wordt de header geladen.
        Deze staat hier en niet bij de andere HTML omdat deze in het divje page-wrapper thuis hoort. (CSS technische beslissing)
      -->
      <?php
        require_once "elements/header.php";
      ?>

      <!-- content section -->

      <div id="content-wrapper">

        <!-- Side menu -->
        <div id="side-menu">
          <ul>
              <!-- Hier komt het menu, ingeladen met AJAX -->
          </ul>
        </div>

        <!-- De hele breedte min het zij menu = #content -->
        <div id="content">


         <!--
           De tableHead div, is de balk boven een tabel.
           Dit is de plek waar alle knoppen en de zoekbalken in leven
         -->

          <div class="tableHead">

          <!--
            Knop voorbeeld (van andalusier/log.php ):

            <div class="button-box">
              <input type="button" id="downloadLogBtn" class="btn" value="Logboek downloaden (excel)">
            </div>

          -->

          </div>

          <!--
              De daadwerkelijke tabel...

              Deze tabel-wrapper (#members-tabel) geef je een ID van members-table (dit is design technish) (dit moet je NIET veranderen)

              Verder heeft de tabel-wrapper een class van tutorial-table. Je moet het woord voor -table veranderen naar waar de pagina over gaat.
              Je geeft dit een klas, zodat er een check kan worden gemaakt in start.js, zoals:

              if($(".log-table").is(":visible")){
                loadTable();

                Let op. Deze functie heeft in elk bestand dezelfde naam.
                Dit maakt niet uit, want er wordt telkens een ander specifiek bestand geladen.
              }

              Deze functie doet een AJAX call en zou dus in <bestandsnaam>.ajax.js moeten staan.
          -->

          <div id="members-table" class="tutorial-table">
            <div class="box-content">
              <div class="box-row">
                <table>
                    <!--
                      De table row hieronder is het hoofd van de tabel en heeft een zwarte kleur. Hier geef je alle kolom namen op in tabel headings
                      Deze heeft een class van <pagina_doel>-tableHead.. Waarom? Zodat hierachter het resultaat van de AJAX call kan worden geladen.

                      * simplified *
                      function (result *van ajax call* ){
                        $(".tutorial-tableHead").nextAll().remove(); // verwijder alles wat achter de table head staat
                        $(result).insertAfter(".tutorial-tableHead"); // zet het resultaat in de tabel ACHTER (of onder :P ) de table head
                      }

                    -->
                    <tr class="tutorial-tableHead">
                      <th class="lDateTime">Naam</th>
                      <th>Omschrijving</th>
                    </tr>
                </table>
              </div>
            </div>
          </div>

          <!--

            $($tutorial).insertAfter(".aanwezige_hersen_cellen");

          -->
        </div>
      </div>
    </div>
  </body>
</html>
