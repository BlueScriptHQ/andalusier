$(document).ready(function() {

    window.loadTable = function loadTable() {

        callHandler.addCall("getAdvertsTable", function(result) {
            $(".adverts-tableHead").nextAll().remove();
            $(result).insertAfter(".adverts-tableHead");
            alignMenu();
        }, false);

    };

    loadTable();
});
