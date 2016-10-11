$(document).ready(function() {

    window.loadEvents = function() {
        callHandler.addCall("getEvents", function(result) {
            $(".log-tableHead").nextAll().remove();
            $(result).insertAfter(".log-tableHead");
            alignMenu();
        });
    };

    $("#downloadLogBtn").on("click", function() {
        window.location.href = "php/core.php?requestEventsDownload=true";
    });

});
