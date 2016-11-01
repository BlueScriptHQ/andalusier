$(document).ready(function() {

    /*
      Laat een popup zien, als er op de lid toevoeg knop wordt geklikt.
    */
    $("#openMemberPopup-btn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addMemberPopup").fadeIn(500);
    });

    $("#addMember-submit").on("click", function() {
        var memberData = getPopupData("#addMemberPopup");
        addMemberInfo(memberData);
    });

    window.openMember = function(userID) {
        getMemberInfo(userID);
    };

});
