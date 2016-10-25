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

      callHandler.addInvoked("addFolder", function(r){
        if(r === "exists"){
          alert("Deze map bestaat al!");
          return false;
        }
        loadDocuments(true);
        $("#page-overlay").fadeOut(500);
        $("#addFolder").fadeOut(500);
      }, fName);

    };

    window.renameFF = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#editFolderFile").fadeIn(500);
        $("#editFolderFile .popup-content-h2").text("Huidige naam: " + name);
        $("#editFolderFile #edit_folder").val(name);
        $("#editFolderFile input[type=hidden]").val(name);
    };

    $("#renameFF").on("click", function() {
        var oud = $("#editFolderFile input[type=hidden]").val();
        var nieuw = $("#editFolderFile #edit_folder").val();
        $.ajax({
            url: "php/documents.php",
            data: "requestFFRename=" + oud + "&newFileName=" + nieuw,
            method: "POST",
            success: function() {
                $("#page-overlay").fadeOut(500);
                $("#editFolderFile").fadeOut(500);
                loadDocuments();
            }
        });
    });

    window.deleteFileFolder = function(fName){
      callHandler.addInvoked("deleteFileFolder", function(){
        loadDocuments(true);
        $("#page-overlay").fadeOut(500);
        $("#deleteFolderFile").fadeOut(500);
      }, fName);
    };

});
