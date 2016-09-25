# Andalusier Website

Dit is de GitHub pagina voor de Andalusier website.

## De site structuur

### Andalusier
##### css                 
###### Hierin staan alle stylesheets in die het basis framework nodig heeft. (exclusief de component stylesheets)
##### doc                
###### Hierin staan alle belangrijke berichten en opmerkingen voor de ontwikkelaars van het project

    DONE.txt          Hierin staan alle dingen die al zijn gedaan (deze komen uit TODO.txt)
                      (liever niet verwijderen, hieraan kunnen we soms zien waar iets misging)
    TODO.txt          Hierin staan alle dingen die nog moeten worden gedaan.
    VARIABLES.txt     Hierin staan alle belangrijke variabelen uitgeschreven
                      (als dit niet compleet is, vul dit dan alstublieft aan)

##### documents           
###### In dit mapje staan alle bestanden van de Andalusier Vereniging (ook geüploade bestanden via de bestandsbrowser)
##### elements
###### In dit mapje staan alle externe HTML elementen (zoals popups) en de componenten die niet op elke pagina benodigd zijn.
##### img
###### Hier staan alle plaatjes in voor de Andalusier Website. Let echter wel op, dit heeft zijn eigen structuur (!)
##### js
###### Dit is een van de belangrijkste map samen het met PHP mapje. Hierin staat bijna alle client-side functionaliteit in opgeslagen.

    assets            In deze map staan alle bestanden die de kern van Andalusier (client-side)
                      nodig heeft om de rest aan te sturen
    ajax              In deze map staan alle bestanden die de AJAX calls regelen
                      en de functionaliteit die daarom heen zit
                      (bestanden hebben hier een logische naam, zoals: dashboard.ajax.js en documents.ajax.js )
    controls          Hierin staan alle functies die events regelen van bijvoorbeeld knoppen.
                      (bestanden hebben hier een logische naam, zoals: dashboard.controls.js en documents.controls.js )
    layout            Hierin staan alle bestanden die de layout van de Andalusier website regelen,
                      wanneer dit met CSS niet lukt.
    optional          In dit mapje leven scripts die bij de live-gang worden verwijderd.
                      Denk hierbij aan onze toekomstige todolijst editor
    start.js          Een erg belangrijk bestand dat vereiste scripts uitvoert bij het laden van de pagina

##### login
###### In deze map leeft het inlogscherm. Als men uitlogt worden ze ook naar dit mapje omgeleid.
##### optional
######  In dit mapje leven componenten die bij de live-gang worden verwijderd.
##### php
######  In deze map leven alle PHP bestanden. Dit is de core van Andalusier.

    assets
                      Hierin staan alle vereiste bestanden om de kern van Andalusier (server-side) aan te sturen
    functions
                      Hierin staan alle functies voor de pagina's van Andalusier
                      (ophalen van accountnaam, menu gegeneren, etc.)
    core.php
                      Belangrijkste bestand van de server kant van Andalusier.
                      Hier worden alle functionaliteiten gebundelt.
                      Dit is dan ook de enige ingang voor operaties met de server kant
                      Door deze methode is alle inkomende data makkelijk te onderscheppen en te ontleden (valideren)

##### tryouts
######  Dit is een map waarin alle nog niet geimplementeerde functies in leven.
######  Dit wordt veel gebruikt voor het uitwerken van een bedachte functie,
######  en kan later in de kern worden geimplementeerd als alles goed is getest en uitgewerkt

##### index.php
######  Dit is pagina van Andalusier. Dit is het beginpunt van de website na het inloggen.
######  Dingen die hier onder andere worden gedaan:
        * Weergeven van account informatie
        * Veranderen van account informatie
        * Account gerichte notificaties inzien

  documents.php
  leden.php
  log.php
  register.php



Om dit project zo goed mogelijk te laten verlopen, zijn er een aantal regels opgesteld.

### Regels
