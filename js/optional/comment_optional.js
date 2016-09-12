$(window).load(function(){


  // comment section
  $("#comment-toggler").on("click", function(){
    if($("#comment-panel").is(":visible")){
      $("#comment-panel").fadeOut(500);
    } else {
      $("#comment-panel").fadeIn(500);
    }
  });


  // sending a comment
  $("#comment-send-btn").on("click", function(){
    $title = $("#comment-title").val();
    $msg = $("#comment-msg").val();
    $(".comment-loader").fadeIn();
    $.ajax({
      url: "php/optional.php",
      data: "cmnttitle=" + $title + "&cmntmsg=" + $msg,
      method: "POST",
      success: function(result){
        $(".comment-panel-overlay").fadeIn();
        setTimeout(function(){
          $(".comment-loader").fadeOut();
        }, 500);


        setTimeout(function () {
          $("#comment-panel").fadeOut(function(){
            $("#comment-title").val("");
            $("#comment-msg").val("");
            $(".comment-panel-overlay").css("display", "none");
          });
        }, 4000);
      },
      error: function(){
        alert("Uh oh! Er ging iets mis, probeer het later opnieuw!");
      }
    });
  });



});
