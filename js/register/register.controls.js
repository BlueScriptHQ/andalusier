$(document).ready(function(){

  window.closeAllForms = function(){
    $("#contact-form").slideUp();
    $("#register-as-form").slideUp();
    $("#question-form").slideUp();

    $("#contact-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#register-as-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#question-arrow").attr("src", "elements/components/img/indicator-image-right.png");
  };

  $("#contact-block").on("click", function(){
    closeAllForms();

    if($("#contact-form").is(":visible")){
      $("#contact-form").slideUp();
    } else {
      $("#contact-form").slideDown();
      $("#contact-arrow").attr("src", "elements/components/img/indicator-image-down.png");
    }

  });


  $("#question-block").on("click", function(){
    closeAllForms();

    if($("#question-form").is(":visible")){
      $("#question-form").slideUp();
    } else {
      $("#question-form").slideDown();
      $("#question-arrow").attr("src", "elements/components/img/indicator-image-down.png");
    }

  });

  $("#register-as-block").on("click", function(){
    closeAllForms();

    if($("#register-as-form").is(":visible")){
      $("#register-as-form").slideUp();
    } else {
      $("#register-as-form").slideDown();
      $("#register-as-arrow").attr("src", "elements/components/img/indicator-image-down.png");
    }

  });
});
