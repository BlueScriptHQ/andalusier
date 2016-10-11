$(document).ready(function() {

    window.loadDocuments = function loadDocuments() {

        callHandler.addCall("getDocuments", function(r) {
            $(".documents-tableHead").nextAll().remove();
            $(r).insertAfter(".documents-tableHead");
            alignMenu();
        });

    };

    window.openFolder = function(fName) {
        $.ajax({
            url: "php/documents.php",
            data: "openFolder=" + fName,
            method: "POST",
            success: function() {
                loadDocuments();
            }
        });
    };

    window.backAFolder = function() {
        $.ajax({
            url: "php/documents.php",
            data: "requestFolderBack=true",
            method: "POST",
            success: function() {
                loadDocuments();
            }
        });
    };

    $("#addAFolder").on("click", function() {
        $fName = $("#make_folder").val();
        if ($fName === "") {
            alert("Mapnaam mag niet leeg zijn!");
            return false;
        } else {
            $("#page-overlay").fadeOut(500);
            $("#addFolder").fadeOut(500);
            saveFolder($fName);
        }
    });

    window.saveFolder = function(fName) {
        $.ajax({
            url: "php/documents.php",
            data: "requestFolderAdd=" + fName,
            method: "POST",
            success: function() {
                loadDocuments();
            }
        });
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

    window.deleteFF = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#deleteFolderFile").fadeIn(500);
        $("#deleteFolderFile input[type=hidden]").val(name);
    };

    $("#deleteFF").on("click", function() {
        var fName = $("#deleteFolderFile input[type=hidden]").val();
        $.ajax({
            url: "php/documents.php",
            data: "requestFFDelete=" + fName,
            method: "POST",
            success: function() {
                $("#page-overlay").fadeOut(500);
                $("#deleteFolderFile").fadeOut(500);
                loadDocuments();
            }
        });
    });

});
