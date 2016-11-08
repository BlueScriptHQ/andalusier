$(document).ready(function() {

    $("#addFileBtnNews").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addFileNews").fadeIn(500);
        $("#fileUploadFormNews").fadeIn(500);
    });
    $("#addFolderBtnNews").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addFolderNews").fadeIn(500);
    });

    $("#renameButtonNews").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#editFolderFileNews").fadeIn(500);
    });
    $("#deleteButtonNews").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#deleteFolderFileNews").fadeIn(500);
    });

    $("#addAFileBtnNews").on("click", function() {
        $("#hiddenAddFileNews").trigger("click");
    });

    // popup button
    $("#addAFolderNews").on("click", function() {

        $fName = $("#make_folderNews").val();
        if ($fName === "") {
            alert("Mapnaam mag niet leeg zijn!");
            return false;
        } else {
            saveFolderNews($fName);
        }
    });

    // tabel button
    window.deleteFFNews = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#deleteFolderFileNews").fadeIn(500);
        $("#deleteFolderFileNews input[type=hidden]").val(name);
    };

    // popup button
    $("#deleteFFNews").on("click", function() {
        var fName = $("#deleteFolderFileNews input[type=hidden]").val();
        deleteFileFolderNews(fName);
    });

    window.renameFFNews = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#editFolderFileNews").fadeIn(500);
        // haal de extensie weg als het een bestand is.
        var stripped_name = (name.indexOf(".") === -1) ? name : name.substring(0, name.lastIndexOf("."));
        $("#editFolderFileNews .popup-content-h2").text("Huidige naam: " + stripped_name);
        $("#editFolderFileNews #edit_folderNews").val(stripped_name);
        $("#editFolderFileNews input[type=hidden]").val(name);
    };

    $("#renameFFNews").on("click", function() {
        var oud = $("#editFolderFileNews input[type=hidden]").val();
        var nieuw = $("#editFolderFileNews #edit_folderNews").val();
        var object = {
            old: oud,
            new: nieuw
        };

        changeNameNews(object);
    });


    $('#hiddenAddFileNews').click(function(e) {
        e.stopImmediatePropagation();
    });

    $('#hiddenAddFileNews').change(function(e) {
        var value = $(this).val().substring($(this).val().lastIndexOf("\\") + 1);
        $("#up_fileNews").val(value);
    });

    $("#uploadFileNews").on("click", function() {
        if ($("#up_fileNews").val() !== "") {
            $("#fileUploadFormNews").submit();
        }
    });

    $("#deleteFPNews").on("click", function(){
      var fName = $("#deleteFolderFileNews input[type=hidden]").val();
      deletePermNews(fName);
    });

});
