$(document).ready(function(){
  // when a user tries to log in
  $("#lgn-btn").on("click", function(){
      if(validateLoginForm() === true){
        $("#username").prop("disabled", true);
        $("#password").prop("disabled", true);
        $("#lgn-btn").prop("disabled", true);

        if($ajax){
          $("#status img").fadeIn();
          $(".status-text").text("Aan het verwerken..");

          $username = $("#username").val();
          $password = $("#password").val();

          var dataObject = {
            username: $username,
            password: $password
          };

          callHandler.addCall("checkLogin", function(result){
            if(result == "loggedin"){
              location.href = "../index.php";
            } else {
              $("#status img").css("display", "none");
              $(".status-text").text(result);

              clearForm("form");

              $("#username").prop("disabled", false);
              $("#password").prop("disabled", false);
              $("#lgn-btn").prop("disabled", false);

              $("#username").focus();
            }
          }, dataObject, undefined, "../php/core.php");

          callHandler.execute();
      } else {
        $('form').unbind('submit');
      }
    }  else {
      clearForm("form");
      $("form").submit(function(e){
        e.preventDefault();
      });
    }
  });
});
