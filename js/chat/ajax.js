function sendMsg(e){
  var inputtext = e;

  $.ajax({
    url: "php/chat/messageHandler.php",
    data: "msg=" + inputtext,
    method: "POST",
    success: function(result){
      alert(result);
    }
  });
}
