$(document).ready(function() {

    $("#addFileBtn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addFile").fadeIn(500);
        $("#fileUploadForm").fadeIn(500);
    });
    $("#addFolderBtn").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#addFolder").fadeIn(500);
    });

    $("#renameButton").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#editFolderFile").fadeIn(500);
    });
    $("#deleteButton").on("click", function() {
        $("#page-overlay").fadeIn(500);
        $("#deleteFolderFile").fadeIn(500);
    });

    $("#addAFileBtn").on("click", function() {
        $("#hiddenAddFile").trigger("click");
    });

    // popup button
    $("#addAFolder").on("click", function() {
        $fName = $("#make_folder").val();
        if ($fName === "") {
            alert("Mapnaam mag niet leeg zijn!");
            return false;
        } else {
            saveFolder($fName);
        }
    });

    // tabel button
    window.deleteFF = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#deleteFolderFile").fadeIn(500);
        $("#deleteFolderFile input[type=hidden]").val(name);
    };

    // popup button
    $("#deleteFF").on("click", function() {
        var fName = $("#deleteFolderFile input[type=hidden]").val();
        deleteFileFolder(fName);
    });

    window.renameFF = function(name) {
        $("#page-overlay").fadeIn(500);
        $("#editFolderFile").fadeIn(500);
        // haal de extensie weg als het een bestand is.
        var stripped_name = (name.indexOf(".") === -1) ? name : name.substring(0, name.lastIndexOf("."));
        $("#editFolderFile .popup-content-h2").text("Huidige naam: " + stripped_name);
        $("#editFolderFile #edit_folder").val(stripped_name);
        $("#editFolderFile input[type=hidden]").val(name);
    };

    $("#renameFF").on("click", function() {
        var oud = $("#editFolderFile input[type=hidden]").val();
        var nieuw = $("#editFolderFile #edit_folder").val();
        var object = {
            old: oud,
            new: nieuw
        };

        changeName(object);
    });


    $('#hiddenAddFile').click(function(e) {
        e.stopImmediatePropagation();
    });

    $('#hiddenAddFile').change(function(e) {
        var value = $(this).val().substring($(this).val().lastIndexOf("\\") + 1);
        $("#up_file").val(value);
    });

    $("#uploadFile").on("click", function() {
        if ($("#up_file").val() !== "") {
            $("#fileUploadForm").submit();
        }
    });

});
