$(document).ready(function() {
    // init
    $(".op_con_option:eq(0)").children().css("display", "block").attr("on", true);

    function cop_check() {
        if ($(this).children().attr("on") === "true") {
            $(this).children().attr("on", false);
        } else {
            $(this).children().attr("on", true);
        }
        $(this).children().toggle();
    }


    function cop_option() {
        $(".op_con_option").children().css("display", "none").attr("on", false);
        $(this).children().css("display", "block").attr("on", true);
    }

    //controls
    $(".cop_con_check").on("click", cop_check);
    $(".op_con_option").on("click", cop_option);

});
