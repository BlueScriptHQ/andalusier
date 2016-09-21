function handlePopups(param) {
    // reset all others
    $(".popup-section-content").hide();
    $(".popup-section-head img").attr("src", "elements/components/img/indicator-image-right.png");

    var self = param;
    var count = self.parent().parent().find(".popup-section").length;
    var thisHeight = (self.parent().parent().height() - $(".popup-head").height() - (count * $(".popup-section-head").height()));
    self.height(thisHeight);
    self.parent().find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
    self.show();
}

// standaard staat de eerste open
$(".popup-section:eq(0)").addClass("open");

$(".popup-section").each(function() {

    var count = $(this).parent().find('.popup-section').length;
    var height = $(".popup-head").height();

    if ($(this).hasClass("open")) {
        $(".popup-section .popup-section-content").hide();
        var thisHeight = $(this).parent().height() - $('.popup-head').height() - (count * $(this).height());
        $(this).find(".popup-section-content").height(thisHeight);
        $(this).find(".popup-section-content").show();
        $(this).find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
    }

    $(this).find("input[type=text]").each(function(){
      var that = $(this);
      if(typeof that.attr("optional") !== "undefined"){
        that.parent().append("<div class='optional'>*</div>");
      }
    });

});

$(".popup-section").on("click", ".openNext", function() {
    var index = $(this).parent().parent().parent().index();
    handlePopups($(".popup-section-content:eq(" + index + ")"));
});



$(".popup-section-head").on("click", function() {
    var param = $(this).parent().find('.popup-section-content');
    handlePopups(param);
});
