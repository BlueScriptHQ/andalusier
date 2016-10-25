$(document).ready(function() {

    window.loadDocuments = function loadDocuments(invoked) {

        if (typeof invoked === "undefined") {
            callHandler.addCall("getDocuments", function(r) {
                $(".documents-tableHead").nextAll().remove();
                $(r).insertAfter(".documents-tableHead");
                alignMenu();
            });
        } else {
            callHandler.addInvoked("getDocuments", function(r) {
                $(".documents-tableHead").nextAll().remove();
                $(r).insertAfter(".documents-tableHead");
                alignMenu();
            });
        }


    };

    window.openFolder = function(fName) {

        callHandler.addInvoked("openFolder", function() {
            loadDocuments(true);
        }, fName);

    };

    window.backAFolder = function() {

        callHandler.addInvoked("backFolder", function() {
            loadDocuments(true);
        });

    };


    window.saveFolder = function(fName) {

        callHandler.addInvoked("addFolder", function(r) {
            if (r === "exists") {
                alert("Deze map bestaat al!");
                return false;
            }
            loadDocuments(true);
            $("#page-overlay").fadeOut(500);
            $("#addFolder").fadeOut(500);
        }, fName);

    };

    window.changeName = function(object) {

        callHandler.addInvoked("changeNameFF", function(r) {

            alert(r);

        }, object);

    };

    window.deleteFileFolder = function(fName) {
        callHandler.addInvoked("deleteFileFolder", function(r) {
            loadDocuments(true);
            $("#page-overlay").fadeOut(500);
            $("#deleteFolderFile").fadeOut(500);
        }, fName);
    };

});
