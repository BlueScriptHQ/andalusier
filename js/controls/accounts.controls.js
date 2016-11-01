$(document).ready(function(){

  $("#editAccountPopup").on("click", "#accountPasswordResetBtn", function(){
    $("#editAccountPasswordPopup").fadeIn(500);
  });

  $("#saveAccountPassword").on("click", function(){
    var newpassword = $("#newAccountPassword").val();
    var id = $("#editAccountPopup input[type=hidden]").val();
    resetAccountPassword(id, newpassword);
  });

  $("#saveEditAccountData").on("click", function(){
    var data = getPopupData("#editAccountPopup");
    saveEditAccountData(data);
  });
});
