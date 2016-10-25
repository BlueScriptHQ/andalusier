$(document).ready(function() {

    window.loadTable = function() {

        callHandler.addCall("getMembersAccept", function(result) {
            $(".membersAccept-tableHead").nextAll().remove();
            $(result).insertAfter(".membersAccept-tableHead");
            alignMenu();
        });

    };

    loadTable();
});
