$(document).ready(function() {

    window.loadNewsletters = function (invoked) {

        if (typeof invoked === "undefined") {
            callHandler.addCall("getNewsletters", function(r) {
                $(".newsletters-tableHead").nextAll().remove();
                $(r).insertAfter(".newsletters-tableHead");
                alignMenu();
            });
        } else {
            callHandler.addInvoked("getNewsletters", function(r) {
                $(".newsletters-tableHead").nextAll().remove();
                $(r).insertAfter(".newsletters-tableHead");
                alignMenu();
            });
        }
    };
    loadNewsletters();

    window.openFolder = function(fName) {

        callHandler.addInvoked("openFolderNews", function() {
            loadNewsletters(true);
        }, fName);

    };

    window.backAFolder = function() {

        callHandler.addInvoked("backFolderNews", function() {
            loadNewsletters(true);
        });

    };


    window.saveFolder = function(fName) {

        callHandler.addInvoked("addFolderNews", function(r) {
            if (r === "exists") {
                $(".popup-content-h2").text("Deze mapnaam bestaat al");
                return false;
            }
            loadNewsletters(true);
            $("#page-overlay").fadeOut(500);
            $("#addFolder").fadeOut(500);
        }, fName);

    };

    window.changeName = function(object) {

        callHandler.addInvoked("changeNameFFNews", function(r) {

          loadNewsletters(true);
          $("#page-overlay").fadeOut(500);
          $("#editFolderFile").fadeOut(500);

        }, object);

    };

    window.deleteFileFolder = function(fName) {
       callHandler.addInvoked("deleteFileFolderNews", function(r) {
         if(r === "not_empty"){
           $("#deleteFolderFile").fadeOut(500);
           $("#deleteFolderPerm").show();
           return false;
         }
         loadNewsletters(true);
         $("#page-overlay").fadeOut(500);
         $("#deleteFolderFile").fadeOut(500);
       }, fName);
   };

   window.deletePerm = function(fName){
     callHandler.addInvoked("deletePermNews", function(){
       loadNewsletters(true);
       $("#page-overlay").fadeOut(500);
       $("#deleteFolderPerm").fadeOut(500);
       $("#deleteFolderFile").fadeOut(500);
     }, fName);
   };

});
