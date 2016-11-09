$(document).ready(function() {
    window.loadTable = function loadTable() {

        callHandler.addCall("getMembersTable", function(result) {
            $(".members-tableHead").nextAll().remove();
            $(result).insertAfter(".members-tableHead");
            alignMenu();
        });

    };


    window.getMemberInfo = function(customerID) {

        callHandler.addInvoked("getMembersInfo", function(r) {
            console.log(r);

            insertPopupData("#editPopup", r);

            $("#editPopup").fadeIn(500);
            $("#page-overlay").fadeIn(500);
        }, customerID);

    };

    window.addMemberInfo = function(memberData) {
        callHandler.addInvoked("insertNewMember", function(r){
          alert(r);
        }, memberData);
    };

    window.getMemberPaymentRequest = function() {
        callHandler.addInvoked("getMemberPR", function(r) {
            console.log(r);
            $("#page-overlay").fadeOut(500);
            $("#memberPaymentRequest").fadeOut(500);
        });

    };

    window.getMemberPaymentRequestSend = function() {
        callHandler.addInvoked("getMemberPRSend", function(r) {
            $(".prSend").text(r);
        });

    };

});
