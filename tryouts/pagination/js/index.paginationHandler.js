$(document).ready(function(){
  window.openPage = function(clicked, name){
    $obj = {
      page_number : clicked,
      page_name : name
    };

    console.log($obj);

    $.ajax({
      url: "php/index.fieldHandler.php",
      data: "object=" + JSON.stringify($obj),
      method: "POST",
      success: function(result){
        loadTable();
        alert(result);
      }
    });
  };

});
