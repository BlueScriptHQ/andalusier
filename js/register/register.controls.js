$(document).ready(function(){

  window.isValidEmail = function(s){
    var atCount = s.split("@").length -1;
    var dotCount = s.split(".").length -1;

    if(atCount > 1){
      return false;
    }

    if(dotCount === 0){
      return false;
    }

    var atIndex = s.indexOf("@");
    var dotIndex = s.indexOf(".");

    if(dotIndex > atIndex){
      return false;
    }

    if(/^[a-zA-Z0-9-@._+ ]*$/.test(s) === false){
      return false;
    }
    else {
      return true;
    }

  };

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

  window.checkInput = function(){
    $fail = false;
    $("#register-form-content input[type='text'], input[type='radio']:checked, input[type='date']").each(function(){
      $values = $(this).val();
      if(/^[a-zA-Z0-9-+]*$/.test($values) === false){
        $(this).css({"background-color": "#990909", "color": "white"});
        $fail = true;
      }
      else if($values === "") {
        $fail = true;
      }

      else {
        $(this).css({"background-color": "white", "color": "black"});
      }

      if($(this).hasClass("register_mail")){
        $(this).css({"background-color": "white", "color": "black"});

        if(isValidEmail($(this).val())){
          $fail = false;
        } else {
          $fail = true;
          $(this).css({"background-color": "#990909", "color": "white"});
        }
      }
    });

    if($fail === true){
      $("#btn_register").hide();
    }

    else if($fail === false) {
      $("#btn_register").show();

    }
  };

  $("#register-form-content input[type='text'], input[type='radio']:checked, input[type='date']").on("keyup", function(){
    checkInput();
  });

  $('.register_tel').keyup(function () {
    if (this.value != this.value.replace(/[^0-9\.+]/g, '')) {
       this.value = this.value.replace(/[^0-9\.+]/g, '');
    }
});
});
