$(document).ready(function() {

    window.loadTable = function loadTable() {

        callHandler.addCall("getOldAdvertsTable", function(result) {
            $(".old-adverts-tableHead").nextAll().remove();
            $(result).insertAfter(".old-adverts-tableHead");
            alignMenu();
        });

    };

    loadTable();
});
