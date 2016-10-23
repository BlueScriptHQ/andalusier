$(document).ready(function(){

  window.loadAccounts = function(){

    callHandler.addCall("getAccounts", function(result){
      $(".accounts-tableHead").nextAll().remove();
      $(result).insertAfter(".accounts-tableHead");
    });

  };

  window.editAccount = function(id){
    $("#addAccountPopup").fadeIn(400);
    $("#page-overlay").fadeIn(400);
  };

});
