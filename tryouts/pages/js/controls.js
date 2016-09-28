$(document).ready(function(){

  findFileName = function(){
    var pathname = window.location.pathname;
    var result = pathname.substring(pathname.lastIndexOf("/") + 1);
  };

  findFileName();
});
