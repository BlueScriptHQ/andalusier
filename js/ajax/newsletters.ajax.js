$(document).ready(function() {

    window.loadNewsletters = function loadNewsletters(invoked) {

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

    window.openFolderNews = function(fName) {
        callHandler.addInvoked("openFolderNews", function() {
            loadNewsletters(true);
        }, fName);
    };

    window.backAFolderNews = function() {
        callHandler.addInvoked("backFolderNews", function() {
            loadNewsletters(true);
        });
    };


    window.saveFolderNews = function(fName) {
        callHandler.addInvoked("addFolderNews", function(r) {
            if (r === "exists") {
                $(".popup-content-h2").text("Deze mapnaam bestaat al");
                return false;
            }
            loadNewsletters(true);
            $("#page-overlay").fadeOut(500);
            $("#addFolderNews").fadeOut(500);
        }, fName);
    };

    window.changeNameNews = function(object) {
        callHandler.addInvoked("changeNameFFNews", function(r) {
          loadNewsletters(true);
          $("#page-overlay").fadeOut(500);
          $("#editFolderFileNews").fadeOut(500);
        }, object);
    };

    window.deleteFileFolderNews = function(fName) {
       callHandler.addInvoked("deleteFileFolderNews", function(r) {
         if(r === "not_empty"){
           $("#deleteFolderFileNews").fadeOut(500);
           $("#deleteFolderPermNews").show();
           return false;
         }
         loadNewsletters(true);
         $("#page-overlay").fadeOut(500);
         $("#deleteFolderFileNews").fadeOut(500);
       }, fName);
   };

   window.deletePermNews = function(fName){
     callHandler.addInvoked("deletePermNews", function(){
       loadNewsletters(true);
       $("#page-overlay").fadeOut(500);
       $("#deleteFolderPermNews").fadeOut(500);
       $("#deleteFolderFileNews").fadeOut(500);
     }, fName);
   };

});
