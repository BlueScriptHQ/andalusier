$(document).ready(function(){

  $("#overlay").height($(document).height());
  $(window).resize(function(){
    $("#overlay").height($(document).height());
  });

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


  callHandler.execute(function(){
    $("#loading-box img").fadeOut(900);
    $("#loading-box").fadeOut(1000);
  });
  
});
