$(document).ready(function() {

      $("#overlay").height($(document).height());
      $(window).resize(function() {
          $("#overlay").height($(document).height());
      });

      //check if the members table exists
      if ($(".members-table").length) {
          loadTable();
      }

      if ($(".log-table").length) {
          loadEvents();
      }

      if($(".documents-tableHead").length){
        loadDocuments();
      }
      if($(".newsletters-tableHead").length){
        loadNewsletters();
      }

      if($(".accounts-table").length){
        loadAccounts();
      }




      callHandler.execute(function() {
          $("#loading-box img").fadeOut(800);
          $("#loading-box").fadeOut(400);
      });

});
