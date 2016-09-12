$(document).ready(function(){

  window.loadEvents = function(){
      $.ajax({
        url: "php/events.php",
        data: "requestEvents=true",
        method: "POST",
        success: function(result){
          $(".log-tableHead").nextAll().remove();
          $(result).insertAfter(".log-tableHead");
          alignMenu();
        }
      });
  }

  $("#downloadLogBtn").on("click", function(){
    window.location.href = "php/events.php?requestEventsDownload=true";
  });
  
});
