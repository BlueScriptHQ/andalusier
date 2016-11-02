$(document).ready(function(){
window.loadTable = function(){
  $.ajax({
    url: "php/index.fieldHandler.php",
    data: "read=true",
    method: "POST",
    success: function(result){
      $("#table_headtext").nextAll().remove();
      $(result).insertAfter("#table_headtext");
    }
  });
};
loadTable();
});
