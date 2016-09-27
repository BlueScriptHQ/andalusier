$(document).ready(function(){
  function changeContent(){
    var url = $(this).attr("page");
    alert(url);
  }
  $("a").on("click", changeContent);
});
