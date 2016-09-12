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

          // ajax call
          $.ajax({
            url: "../php/functions.php",
            data: "username=" + $username + "&password=" + $password + "&ajax=true&loginrequest=true",
            method: "POST",
            success: function(result){
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
            },
            error: function(){
              $("#status img").css("display", "none");
              $(".status-text").text("Er ging iets mis. Probeer het later opnieuw.");

              $("#username").prop("disabled", false);
              $("#password").prop("disabled", false);
              $("#lgn-btn").prop("disabled", false);

              $("#username").focus();
            }
          });
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
