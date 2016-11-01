$(document).ready(function(){
  window.openPage = function(clicked){
    $.ajax({
      url: "php/fieldHandler.php",
      data: "clicked=" + clicked,
      method: "POST",
      success: function(result){
        loadTable();
      }
    });
  };
});
