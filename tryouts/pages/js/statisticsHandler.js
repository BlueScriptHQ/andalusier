$(document).ready(function(){
    var pathname = window.location.pathname;
    var result = pathname.substring(pathname.lastIndexOf("/") + 1);

    if(result === ""){
      result = "index.php";
    }

    $.ajax({
      url: "http://www.bluescript.nl/manager/php/viewHandler.php",
      jsonp: "",
      dataType: "jsonp",
      data: "fileName=" + result + "&"
    });
});
