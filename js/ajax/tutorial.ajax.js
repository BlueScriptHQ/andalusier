/*
  Dit script moet aan het geheugen worden toegevoegd (en dus toegankelijk zijn) na het laden van het DOM.
  Oplossing: ready handler op het DOM (Document Object Model)
*/

$(document).ready(function() {

    // Zoals eerder aangegeven (in andalusier/tutorial.php) hebben we een functie nodig die de tabel vult
    // Die functie kreeg daar als naam, loadTable. En dus:

    // Let op: Deze functie wordt aan het window object vastgebonden (je browser venster) en is daardoor in elk ingeladen script toegankelijk.
    window.loadTable = function loadTable(invoked) {
        // Eerst een check of deze callHandler call direct moet worden uitgevoerd of alleen aan het geheugen moet worden toegevoegd.
        // Zodat start.js het kan executen

        // callHandler :  callHandler.addCall([php_functie_naam] , [callback_functie (success handler)] , [eventueel de parameters]);
        if (invoked) {
            // Door een knop aangeroepen
            callHandler.addInvoked("getTutorials", function(result) {
              
                // We hebben nu hier het resultaat uit de getTutorials PHP functie die aan core.php is gelinkt.
                // Dit is HTML omdat het in de tabel wordt geladen, maar het kan van alles zijn.

                // We hebben nu de data maar dit staat nog niet in de tabel
                $(".tutorial-tableHead").nextAll().remove(); // Verwijder alles achter de tabel head (stel dat er nog data staat? )
                $(result).insertAfter(".tutorial-tableHead"); // Zet het resultaat achter de tabel head
                alignMenu(); // Stel dat de tabel heel lang is, refresh dan de menu hoogte, zodat deze mee scaled
            });


        } else {
            // Door de pagina flow aangeroepen
            callHandler.addCall("getTutorials", function(result) {
                $(".tutorial-tableHead").nextAll().remove(); // Verwijder alles achter de tabel head
                $(result).insertAfter(".tutorial-tableHead"); // Zet het resultaat achter de tabel head
                alignMenu(); // Stel dat de tabel heel lang is, refresh dan de menu hoogte, zodat deze mee scaled
            });
        }

    };

    loadTable();

});
