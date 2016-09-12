$(document).ready(function(){

  $("#logout-btn").on("click", function(){
    $("#loading-box img").css("display", "block");
    $("#loading-box").fadeIn(400);
    setTimeout(function(){
      $.ajax({
        url: "php/functions.php",
        data: "logout=true",
        method: "POST"
      }).promise().done(function(){ location.href = "login/"; });
    }, 1000);
  });

  window.loadAccName = function(){
    $.ajax({
      url: "php/accounts.php",
      data: "requestAccName=true",
      method: "POST",
      success: function(result){
        $("#welcome-box h3 span").css("display", "none");
        $("#welcome-box h3 span").text(result);
        $("#welcome-box h3 span").fadeIn();
      }
    });
  };

  window.loadMenu = function(){
    $.ajax({
      url: "php/accounts.php",
      data: "requestMenu=true",
      method: "POST",
      success: function(result){
        $("#side-menu ul").css("display", "none");
        $("#side-menu ul").html(result);
        $("#side-menu ul").fadeIn();
        fixMenuLeden();
        handleActive();
      }
    });
  };
});
