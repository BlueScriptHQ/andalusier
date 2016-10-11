$(document).ready(function() {

    /*
      Laat een popup zien, als er op de lid toevoeg knop wordt geklikt.
    */
    $("#addMemberBtn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#infoPopup").fadeIn(500);
    });


});
