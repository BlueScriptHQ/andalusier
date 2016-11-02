$(document).ready(function() {

    /*
      Laat een popup zien, als er op de lid toevoeg knop wordt geklikt.
    */
    $("#openMemberPopup-btn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addMemberPopup").fadeIn(500);
    });

    $("#addMember-submit").on("click", function() {
        alert();
        var memberData = getPopupData("#addMemberPopup");
        addMemberInfo(memberData);
    });

    $("#editMember-submit").on("click", function() {
        var memberData = getPopupData("#editPopup");
        addMemberInfo(memberData);
    });

    window.openMember = function(userID) {
        getMemberInfo(userID);
    };

    $("#memberPaymentRequestPopup-btn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#memberPaymentRequest").fadeIn(500);
        getMemberPaymentRequestSend();
    });

    $("#sendPR").on("click", function() {
        getMemberPaymentRequest();
    });

    $("#cancelPR").on("click", function() {
      $("#page-overlay").fadeOut(500);
      $("#memberPaymentRequest").fadeOut(500);
    });

});
