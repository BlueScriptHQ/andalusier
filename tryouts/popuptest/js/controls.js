$(document).ready(function(){
  $("#buttonPopUp").on("click", function(){
    $("#overlay").fadeIn(500);
    $("#popup").fadeIn(500);
  });
  $("#overlay").on("click", function(){
    $("#overlay").fadeOut(500);
    $("#popup").fadeOut(500);
  });
  $("#popupsluiten").on("click", function(){
    $("#overlay").fadeOut(500);
    $("#popup").fadeOut(500);
  });
});
