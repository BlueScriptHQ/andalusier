<?php

  /*
    Dit is het bestand die de server functionaliteit voor de tutorial pagina verzorgd.
    Je hoeft hier verder niks te includen, dit is al voor je gedaan ;) (dus ook geen session_start() !!)
  */

  /*
    In het tutorial.ajax.js bestand staat een callHandler call met als PHP functie naam "getTutorials"
    Laten we deze eens maken...

    De parameter volgorde voor functies aangeroepen met callHandler =
    1: databaseHandler
    2: De eventuele parameters (object of single value)
    3: logHandler

    Ook als je databaseHandler niet nodig hebt, maar je hebt wel je parameters nodig. Moet je de databaseHandler opslaan in een parameter variabele
    Dan: function naam($d, $parameters){ }

    Als je de logHandler wilt gebruiken, maar geen parameters.. Dan is de tweede parameter logHandler
    Dan: function naam($d, $logHandler){ }

  */

  function getTutorials($dbHandler){
    // Omdat we geen parameters hebben meegegeven hoeven we deze niet op te geven
    // Omdat we niks in het logboek willen schrijven, hoeven we deze niet op te geven
    // Er blijft nu alleen $dbHandler over

    // databaseHandler : $dbHandler->handleQuery(<sql>, <koppel_array of false>, <meerdere regels of false)
    // databaseHandler geeft het object met de database informatie terug of false als er iets mis ging.

    $sql = "SELECT * FROM tutorials";

    $data = $dbHandler->handleQuery($sql, false, true);


    // Omdat callHandler alleen return value mag hebben en dus geen visuele presentaties (echo, var_dump, print etc...) accepteert,
    // Moeten we een variabele maken, daar alle informatie in laden en dan deze uiteindelijk retourneren.

    $html = '';
    foreach($data as $row){
      $html.= "<tr>
        <td>".$row->tutorials_name."</td>
        <td>".$row->tutorials_desc."</td>
      </tr>";
    }

    // Uiteindelijk
    return $html;
  }

?>
