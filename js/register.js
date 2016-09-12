$(document).ready(function(){
  $("#addPhone").on("click", function(){
    $(this).hide();
    $("#extraPhone").fadeIn();
  });
  $("#addMob").on("click", function(){
    $(this).hide();
    $("#extraMob").fadeIn();
  });
  $("#addEmail").on("click", function(){
    $(this).hide();
    $("#extraEmail").fadeIn();
  });

  $(".day, .month, .year").change(function(){
    if(checkAge(18) == false){
      $("#acceptAge").fadeIn();
    } else { $("#acceptAge").fadeOut(); }
  });

  function checkAge(allowedAge){
    $day = $(".day").val();
    $month = $(".month").val();
    $year = $(".year").val();
    $age = allowedAge;
    $mydate = new Date();
    $mydate.setFullYear($year, $month-1, $day);
    $currdate = new Date();
    $setDate = new Date();
    $setDate.setFullYear($mydate.getFullYear() + $age, $month-1, $day);
    if (($currdate - $setDate) > 0){
        // above age
        return true;
    } else { return false; }
  }
});

$(window).load(function(){
  $("#loading-box img").fadeOut(400);
  $("#loading-box").fadeOut(500);
});
