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


    // Als er op een sub menu toggler wordt geklikt, open dan het juiste sub menu
    $("#side-menu").on("click", ".sub-menu-toggler", function() {
        // Sla de pagina naam op, zodat er geen externe variabele nodig is.
        var pagename = $(this).find("a").text().toLowerCase();
        // Kijk of er een sub menu bestaat..
        var submenu = $(this).parent().find("#" + pagename + "-sub-menu");
        var dropdownIndicator = $(this).find(".dropdown-indicator");
        var toggler = $(this);

        if (submenu.length > 0) {
            // het sub menu bestaat
            if (submenu.is(":visible")) {

                dropdownIndicator.attr("src", "img/side-menu/arrow-down.png");
                toggler.css("background-color", "#222222");
                submenu.animate({
                    height: 0
                }, 500, function() {
                    $('#leden-sub-menu').css("display", "none");
                });

            } else {
                submenu.css({
                    "display": "block",
                    "height": "auto"
                });

                var curHeight = submenu.height();
                submenu.css("height", "0px");

                toggler.css("background-color", "#840505");

                submenu.css("display", "block");
                submenu.animate({
                    height: curHeight
                }, 500);
                dropdownIndicator.attr("src", "img/side-menu/arrow-up.png");

            }

        }

    });





    //  Dit is een tweede noodzakelijke fix voor de "scroll" animatie op de controller van Leden
    // Opent alvast de menu item bij de pagina
    window.fixMenuLeden = function fixMenuLeden() {
        if (typeof $membersActive !== 'undefined') {
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

    window.fixMenuAccounts = function fixMenuLeden() {
        if (typeof $membersActive !== 'undefined') {
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

});
