var scriptLoader = (function() {

    var scripts = [];

    // met deze functie kunnen scripts worden toegevoegd die later worden geladen.
    // deze functie accepteert alleen een array met de links naar de scripts toe.
    function addScripts(array) {
        // verwijder eerst de vorige scripts uit het geheugen.
        scripts = [];

        // zet de array in de private variabele scripts.
        scripts = array;
    }

    function loadScripts() {

      var i = 0;
      var length = scripts.length;
      alert(length);
      function loadCurr(index){
        if(index < length){
          var script = document.createElement( 'script' );
          script.type = 'text/javascript';
          script.src = scripts[index];
          document.body.appendChild(script);
          var loadSync = function(){
            state = document.body.lastChild.readyState;
            alert(state);
            if (state === "complete") {
              loadCurr(i + 1);
            } else {
              loadSync();
            }
          }; loadSync();

        }

      }

      loadCurr(i);

    }

    return {
        addScripts: addScripts,
        loadScripts: loadScripts
    };

})();
