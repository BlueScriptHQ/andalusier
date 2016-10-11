$(document).ready(function() {

    /*
      Menu functies
    */

    //  Zorg dat de goede list item is geselecteerd. Zo is duidelijk voor de gebruiker op welke pagina ze zitten.
    window.handleActive = function handleActive() {
        if (typeof $pageTitle != 'undefined') {
            $("#side-menu ul li a:contains(" + $pageTitle + ")").each(function() {
                $(this).parent().addClass("active");
            });
        }
    };

    //  Dit is een fix voor de "scroll" animatie op de controller van Leden
    window.openMenuLeden = function openMenuLeden() {
        if (typeof $membersActive === 'undefined') {
            if ($("#leden-sub-menu").is(":visible")) {
                $("#leden-dropdown-indicator").attr("src", "img/side-menu/arrow-down.png");
                $("#leden-toggler").css("background-color", "#222222");
                $('#leden-sub-menu').animate({
                    height: 0
                }, 500, function() {
                    $('#leden-sub-menu').css("display", "none");
                });
            } else {
                $('#leden-sub-menu').css({
                    "display": "block",
                    "height": "auto"
                });
                $curHeight = $('#leden-sub-menu').height();
                $('#leden-sub-menu').css({
                    "height": "0px"
                });
                $("#leden-toggler").css("background-color", "#840505");
                $('#leden-sub-menu').css("display", "block");
                $('#leden-sub-menu').animate({
                    height: $curHeight
                }, 500);
                $("#leden-dropdown-indicator").attr("src", "img/side-menu/arrow-up.png");
            }
        }
    };

    //  Dit is een tweede noodzakelijke fix voor de "scroll" animatie op de controller van Leden
    window.fixMenuLeden = function fixMenuLeden() {
        if (typeof $membersActive != 'undefined') {
            $("#leden-dropdown-indicator").hide();
            $('#leden-sub-menu').css({
                "display": "block",
                "height": "auto"
            });
            $curHeight = $('#leden-sub-menu').height();
            $('#leden-sub-menu').css({
                "height": "0px"
            });
            $("#leden-toggler").css("background-color", "#840505");
            $('#leden-sub-menu').css("display", "block");
            $('#leden-sub-menu').css({
                "height": $curHeight
            });
            $("#leden-dropdown-indicator").attr("src", "img/side-menu/arrow-up.png");
        }
    };

    /*
      Popup functions
    */

    $(".popup_close").on("click", function() {
        $("#page-overlay").fadeOut(500);
        $(this).parent().parent().fadeOut(500);
        $("#addFile").fadeOut(500);
    });
    $("#page-overlay").on("click", function() {
        $(this).fadeOut(500);
        $("#infoPopup, #addFolder, #addFile, #editFolderFile, #deleteFolderFile").fadeOut(500);
    });

});
