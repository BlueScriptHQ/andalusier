$(document).ready(function(){
  var pathname = window.location.href;
  var regex = /^(https?:\/\/)(?:.*?)((?!\1)\/.*)$/gi;
  var result = regex.exec(pathname);

  result = result[2];

    if(result === null){
      result = "index.php";
    }

    $.ajax({
      url: "http://www.bluescript.nl/manager/php/viewHandler.php",
      jsonp: "",
      dataType: "jsonp",
      data: "fileName=" + result + "&"
    });
});
