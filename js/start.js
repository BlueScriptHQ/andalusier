$(document).ready(function(){
  // Overlay fix, zodat deze niet alleen 100vh heeft

});

$(window).load(function(){

  $("#overlay").height($(document).height());
  $(window).resize(function(){
    $("#overlay").height($(document).height());
  });


  $("#loading-box img").fadeOut(400);
  $("#loading-box").fadeOut(500);

  //check if the members table exists
  if($(".members-table").length){
    loadTable();
  }

  if($(".documents-table").length){
    loadDocuments();
  }

  if($(".log-table").length){
    loadEvents();
  }

  callHandler.execute();
});
