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

$(".overlay_popup_close").on("click", function(){
  $(this).parent().parent().fadeOut(500);
  $("#addFile").fadeOut(500);
});

$("#page-overlay").on("click", function() {
    $(this).fadeOut(500);
    $(".popup").fadeOut(500);
});

window.getPopupData = function(element) {
    var object = {};

    $(element).find("input[type=text], input[type=hidden], textarea, select, .control").each(function() {
        // object vullen
        var value = $(this).val();
        var name = $(this).attr("name");

        // fix voor members_newsletter
        if(name === "members_newsletter"){
          if($(this).attr("on") === "true"){
            object[name] = 1;
            return true;
          }
          else {
            object[name] = 0;
            return true;
          }
        }

        // Uitzondering: members_receive_type
        if(name === "members_receive_type" && object.members_receive_type === undefined){
          var val = "";
          $(element).find(".op_in_option").each(function(){
            if($(this).attr("on") === "true"){
              val = $(this).attr("value");
            }
          });
          object.members_receive_type = val;
          return true;
        } else if(name === "members_receive_type" && object.members_receive_type !== undefined){
          return true;
        }

        object[name] = value;

    });

    return object;

};

window.insertPopupData = function(elem, object){

  for (var property in object) {
    if (object.hasOwnProperty(property)) {

      // exceptions
      if(property === "members_newsletter"){

        if(object[property] === "1"){
          $(elem + ' *[name=' + property + ']').attr("on", "true");
          $(elem + ' *[name=' + property + ']').show();
        } else {
          $(elem + ' *[name=' + property + ']').attr("on", "false");
          $(elem + ' *[name=' + property + ']').hide();
        }

        continue;

      }




      $(elem + ' *[name=' + property + ']').val(object[property]);
    }
  }

};
