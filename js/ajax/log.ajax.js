$(document).ready(function() {

    window.loadEvents = function(invoked) {

      if(invoked){
        callHandler.addInvoked("getEvents", function(result) {
            $(".log-tableHead").nextAll().remove();
            $(result).insertAfter(".log-tableHead");
            alignMenu();
        });
      } else {
        callHandler.addCall("getEvents", function(result) {
            $(".log-tableHead").nextAll().remove();
            $(result).insertAfter(".log-tableHead");
            alignMenu();
        });
      }
    };

    $("#downloadLogBtn").on("click", function() {
        window.location.href = "php/core.php?requestEventsDownload=true";
    });

    window.confirmEmptyLog = function(){
      callHandler.addInvoked("emptyLog", function(result){
        loadEvents(true);
        $("#confirmDeleteLog").fadeOut(500);
        $("#page-overlay").fadeOut(500);
  		});
    };

});
