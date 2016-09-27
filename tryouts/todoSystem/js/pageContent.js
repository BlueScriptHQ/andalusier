$(document).ready(function(){
  function changeContent(){
    var url = $(this).attr("page");
    var concat = "pages/" + url;

    $("iframe").attr("src", concat);
  }
  $("a").on("click", changeContent);
});
