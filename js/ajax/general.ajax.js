$(document).ready(function() {

    $("#logout-btn").on("click", function() {
        $("#loading-box img").css("display", "block");
        $("#loading-box").fadeIn(400);
        setTimeout(function() {
            callHandler.addCall("handleLogout", function() {
                location.href = "login/";
            });
            callHandler.execute();
        }, 1000);
    });

    window.loadAccName = function() {
        if ($("#welcome-box").length) {
            callHandler.addCall("getAccountName", function(e) {
                $("#welcome-box h3 span").css("display", "none");
                $("#welcome-box h3 span").text(e);
                $("#welcome-box h3 span").fadeIn();
            });
        }
    };
    loadAccName();




    window.loadMenu = function(invoked) {
        if ($("#side-menu").length) {
            callHandler.addCall("getMenu", function(e) {
                $("#side-menu ul").css("display", "none");
                $("#side-menu ul").html(e);
                $("#side-menu ul").fadeIn();
                fixMenuLeden();
                handleActive();
            });
        }
    };
    loadMenu();


});
