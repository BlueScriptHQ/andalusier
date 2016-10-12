$("#send").on("click", function(){
  var inputtext = $("#message").val();
  if(inputtext.length > 0){
  sendMsg(inputtext);
  }
  else {
    var text = "Uw bericht kan niet leeg zijn!";
    $("#status").append(text);
  }
});
