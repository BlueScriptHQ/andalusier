$(document).ready(function(){
  window.sendFileName = function(e){
    var file = e;
    alert(e);
    $.ajax({
      url: "http://www.bluescript.nl/test/test.php",
      jsonp: "",
      dataType: "jsonp",
      data: "fileName=" + file + "&"
    });
  };

});
