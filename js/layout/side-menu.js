$(document).ready(function() {

    // menu aligning
    window.alignMenu = function alignMenu() {
        $windowHeight = $(window).height();
        $headerHeight = $("#header").height();
        $contentHeight = $("#content").height();

        if (($contentHeight + $headerHeight) > $windowHeight) {
            $menuHeight = $contentHeight + "px";
        } else {
            $menuHeight = ($windowHeight - $headerHeight) + "px";
        }
        $("#side-menu").css("height", $menuHeight);
    };

    alignMenu();

    $(window).resize(function() {
        alignMenu();
    });

});
