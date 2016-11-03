$(document).ready(function(){

  window.closeAllForms = function(){
    $("#contact-form").slideUp();
    $("#register-as-block-content").slideUp();
    $("#question-form").slideUp();
  };

  var opened = false;
  $("#contact-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#contact-form").slideUp();
      opened = false;
    }
    else {
    $("#contact-form").slideDown();
     opened = true;
    }
  });

  $("#register-as-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#register-as-block-content").slideUp();
      opened = false;
    }
    else {
    $("#register-as-block-content").slideDown();
     opened = true;
    }
  });

  $("#question-block").on("click", function(){
    closeAllForms();

    if(opened === true){
      $("#question-form").slideUp();
      opened = false;
    }
    else {
    $("#question-form").slideDown();
     opened = true;
    }
  });

});
