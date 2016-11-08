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
  };

  window.checkInput = function(){
    $("#register-form-content input[type='text'], input[type='radio']:checked, input[type='date']").each(function(){
      $values = $(this).val();
      if(/^[a-zA-Z0-9- ]*$/.test($values) === false){
        $(this).css({"background-color": "#990909"});

          if($(this).hasClass("register_mail")){
            $(this).css({"background-color": "white"});
            $mail = $(this).val();
            if(/^[a-zA-Z0-9-@._ ]*$/.test($mail) === false){
              $(this).css({"background-color": "#990909"});
              $atPos = $mail.indexOf("@");

            }
          }
      }
      else {
        $(this).css({"background-color": "white"});
      }
    });
  };

  $("#register-form-content input[type='text'], input[type='radio']:checked, input[type='date']").on("keyup", function(){
    checkInput();
  });
});
