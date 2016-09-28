$(document).ready(function(){
  window.sendFilename = function(e){
    var file = e;

    $.ajax({
      url: "http://www.bluescript.nl/test/test.php",
      dataType: "jsonp",
      success: function(result){
        alert(result);
      },
      error: function(error){
        alert(error);
      }
    });
  };

});
