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
                $(".popup-content-h2").text("Deze mapnaam bestaat al");
                return false;
            }
            loadDocuments(true);
            $("#page-overlay").fadeOut(500);
            $("#addFolder").fadeOut(500);
        }, fName);

    };

    window.changeName = function(object) {

        callHandler.addInvoked("changeNameFF", function(r) {

          loadDocuments(true);
          $("#page-overlay").fadeOut(500);
          $("#editFolderFile").fadeOut(500);

        }, object);

    };

    window.deleteFileFolder = function(fName) {
       callHandler.addInvoked("deleteFileFolder", function(r) {
         if(r === "not_empty"){
           $("#deleteFolderFile").fadeOut(500);
           $("#deleteFolderPerm").show();
           return false;
         }
         loadDocuments(true);
         $("#page-overlay").fadeOut(500);
         $("#deleteFolderFile").fadeOut(500);
       }, fName);
   };

   window.deletePerm = function(fName){
     callHandler.addInvoked("deletePerm", function(){
       loadDocuments(true);
       $("#page-overlay").fadeOut(500);
       $("#deleteFolderPerm").fadeOut(500);
       $("#deleteFolderFile").fadeOut(500);
     }, fName);
   };

});
