function handlePopups(element, index) {


    $(element).find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-right.png");

    // reset
    $(element + " .popup-section-content").height(0);

    var contentHeight = $(element).height() - $(element).find(".popup-head").height();
    var sectionheadCount = $(element).find(".popup-section").length;
    var headerHeight = $(element).find(".popup-section-head").height();
    var height = contentHeight - (sectionheadCount * headerHeight);

    var elem = $(element).find(".popup-section-content:eq(" + index + ")");
    elem.height(height);
    elem.parent().find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
}

$(".popup").each(function() {
    if ($(this).find(".popup-section-content").length) {
        var id = "#" + $(this).attr("id");
        handlePopups(id, 0);
    }
});

$(".popup-section-head").on("click", function() {
    var id = "#" + $(this).parent().parent().attr("id");
    var index = $(this).parent().index() - 1;
    handlePopups(id, index);
});

$(".popup-section").on("click", ".openNext", function() {
    var id = "#" + $(this).parent().parent().parent().parent().attr("id");
    var index = $(this).parent().parent().parent().index();
    handlePopups(id, index);
});

$(".popup").find("input[type=text], textarea").each(function() {
    var that = $(this);
    if (typeof that.attr("optional") !== "undefined") {
        that.parent().append("<div class='optional'>*</div>");
    }
});


$(".popup_close").on("click", function() {
    $("#page-overlay").fadeOut(500);
    $(this).parent().parent().fadeOut(500);
    $("#addFile").fadeOut(500);
});

$("#page-overlay").on("click", function() {
    $(this).fadeOut(500);
    $(".popup").fadeOut(500);
});
