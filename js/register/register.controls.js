$(document).ready(function(){

  window.isValidEmail = function(s){
    var atCount = s.split("@").length -1;
    var dotCount = s.split(".").length -1;

    if(atCount > 1 || atCount <= 0){
      return false;
    }

    var atIndex = s.indexOf("@");
    var strLength = s.length;
    var trimmed = s.substring("atIndex, strLength");
    var dotCountTrim = trimmed.split(".").length -1;

    if(dotCountTrim > 1){
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

      if(/^[a-zA-Z0-9-+ ]*$/.test($values) === false){
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
          $(this).css({"background-color": "white", "color": "black"});
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

  $("#btn_register").on("click", function(){
      $name = $("#register_name").val();
      $address = $("#register_address").val();
      $city = $("#register_city").val();
      $tel = $("#register_tel").val();
      $email = $("#register_mail").val();
      $date = $("#register_dateofbirth").val();
      $register_as = $("#register-as-form input[type='radio']:checked").val();
      $horsename = $("#register_horse_name").val();
      $activities = $("#register_activities").val();
      $introduction = $("#register_introduction").val();
      $promoting = $("#register_promoting").val();
      $ideas = $("#register_ideas").val();

      $obj = {
        name : $name,
        address : $address,
        city : $city,
        tel : $tel,
        email : $email,
        date : $date,
        register_as : $register_as,
        horsename : $horsename,
        activities : $activities,
        introduction : $introduction,
        promoting : $promoting,
        ideas : $ideas
      };

      registerUser($obj);
  });
});
