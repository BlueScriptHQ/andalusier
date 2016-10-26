/*$(".popup").each(function(){

  if($(this).find(".popup-section-content").length){
    // 1. Zet de eerste open en geef het een class
    var contentHeight = $(this).height() - $(this).find(".popup-head").height();
    var sectionheadCount = $(this).find(".popup-section").length;
    var headerHeight = $(this).find(".popup-section-head").height();
    var height = contentHeight - (sectionheadCount * headerHeight);
    var first = $(this).find(".popup-section-content").first();
    first.height(height);
    first.parent().find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
  }

});*/


function handlePopups(element, index){


    $(element).find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-right.png");

    // reset
    $(element + " .popup-section-content").height(0);

    var contentHeight = $(element).height() - $(element).find(".popup-head").height();
    var sectionheadCount = $(element).find(".popup-section").length;
    var headerHeight = $(element).find(".popup-section-head").height();
    var height = contentHeight - (sectionheadCount * headerHeight);

    var elem = $(element).find(".popup-section-content:eq("+index+")");
    elem.height(height);
    elem.parent().find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
}

$(".popup").each(function(){
  if($(this).find(".popup-section-content").length){
    var id = "#"+$(this).attr("id");
    handlePopups(id, 0);
  }
});

$(".popup-section-head").on("click", function(){
  var id = "#"+$(this).parent().parent().attr("id");
  var index = $(this).parent().index() - 1;
  handlePopups(id, index);
});

$(".popup-section").on("click", ".openNext", function() {
    var id = "#"+$(this).parent().parent().parent().parent().attr("id");
    var index = $(this).parent().parent().parent().index();
    handlePopups(id, index);
});

$(".popup").find("input[type=text], textarea").each(function() {
    var that = $(this);
    if (typeof that.attr("optional") !== "undefined") {
        that.parent().append("<div class='optional'>*</div>");
    }
});











/*function handlePopups(param) {

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
$(".popup").each(function(){
  $(this).find(".popup-section").first().addClass("open");
});

$(".popup-section .popup-section-content").hide();
$(".popup-section").each(function() {

    var count = $(this).parent().find('.popup-section').length;
    var height = $(".popup-head").height();
    $(this).parent().show();
    var selfHeight = $(this).height();
    $(this).parent().hide();
    if ($(this).hasClass("open")) {
        var thisHeight = $(this).parent().height() - $('.popup-head').height() - (count * selfHeight);
        $(this).find(".popup-section-content").height(thisHeight);
        $(this).find(".popup-section-content").show();
        $(this).find(".popup-section-head img").attr("src", "elements/components/img/indicator-image-down.png");
    }

});

$(".popup-section").on("click", ".openNext", function() {
    var index = $(this).parent().parent().parent().index();
    handlePopups($(".popup-section-content:eq(" + index + ")"));
});



$(".popup-section-head").on("click", function() {
    var param = $(this).parent().find('.popup-section-content');
    handlePopups(param);
});

/*
  Popup functions
*/
/*
$(".popup_close").on("click", function() {
    $("#page-overlay").fadeOut(500);
    $(this).parent().parent().fadeOut(500);
    $("#addFile").fadeOut(500);
});
$("#page-overlay").on("click", function() {
    $(this).fadeOut(500);
    $(".popup").fadeOut(500);
});
*/
