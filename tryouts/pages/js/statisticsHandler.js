$(document).ready(function(){
  var pathname = window.location.href;
  var regex = /^(https?:\/\/)(?:.*?)((?!\1)\/.*)$/gi;
  var regex2 = /\/$/g;
  var result = regex.exec(pathname);

  result = result[2];
  var test = regex2.test(result);

    if(test){
      result += "index.php";
    }

    $.ajax({
      url: "http://www.bluescript.nl/manager/php/viewHandler.php",
      jsonp: "",
      dataType: "jsonp",
      data: "fileName=" + result + "&"
    });
});
