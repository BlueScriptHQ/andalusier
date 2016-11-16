$(document).ready(function(){
  window.registerUser = function(object){
    $obj = object;
    $.ajax({
      url: "php/functions/register.php",
      data: "object2="+JSON.stringify($obj),
      method: "POST",
      success: function(result){
        console.log(result);
      }
    });
  };
});
