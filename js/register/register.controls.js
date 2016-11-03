$(document).ready(function(){

  window.closeAllForms = function(){
    $("#contact-form").slideUp();
    $("#register-as-block-content").slideUp();
    $("#question-form").slideUp();

    $("#contact-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#register-as-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#question-arrow").attr("src", "elements/components/img/indicator-image-right.png");
  };

  var opened = false;
  $("#contact-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#contact-form").slideUp();
      closeAllForms();
      opened = false;
    }
    else {
    $("#contact-arrow").attr("src","elements/components/img/indicator-image-down.png");
    $("#contact-form").slideDown();
     opened = true;
    }
  });

  $("#register-as-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#register-as-block-content").slideUp();
      closeAllForms();
      opened = false;
    }
    else {
    $("#register-as-arrow").attr("src","elements/components/img/indicator-image-down.png");
    $("#register-as-block-content").slideDown();
     opened = true;
    }
  });

  $("#question-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#question-form").slideUp();
      closeAllForms();
      opened = false;
    }
    else {
    $("#question-arrow").attr("src","elements/components/img/indicator-image-down.png");
    $("#question-form").slideDown();
     opened = true;
    }
  });

});
