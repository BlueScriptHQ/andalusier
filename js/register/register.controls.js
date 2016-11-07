$(document).ready(function(){

  window.closeAllForms = function(){
    $("#contact-form").slideUp();
    $("#register-as-form").slideUp();
    $("#question-form").slideUp();

    $("#contact-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#register-as-arrow").attr("src", "elements/components/img/indicator-image-right.png");
    $("#question-arrow").attr("src", "elements/components/img/indicator-image-right.png");

    checkFilled();

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

  window.checkFilled = function(){
    var valid = true;
    $("#contact-form input[type='text']").each(function(){
      if($(this).val() === ""){
        valid = false;
      }
    });

    var valid2 = false;
    if($('#register-as-form input[type="radio"]').is(':checked')) {
      valid2 = true;
    }

    var valid3 = true;
    $("#question-form input[type='text']").each(function(){
      if($(this).val() === ""){
        valid3 = false;
      }
    });

    if(valid){
      $("#contact-block").css({"background-color": "#2ecc71"});
    }

    if(valid2){
      $("#register-as-block").css({"background-color": "#2ecc71"});
    }

    if(valid3){
      $("#question-block").css({"background-color": "#2ecc71"});
    }

    if(valid && valid2 && valid3){
      $("#btn_register").fadeIn();
    }
  };

    $("#btn_register").on("click", function(){

    });




























});
