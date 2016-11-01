$(document).ready(function(){

  window.loadAccounts = function(invoked){

    if(invoked){
      callHandler.addInvoked("getAccounts", function(result){
        $(".accounts-tableHead").nextAll().remove();
        $(result).insertAfter(".accounts-tableHead");
      });
    } else {
      callHandler.addCall("getAccounts", function(result){
        $(".accounts-tableHead").nextAll().remove();
        $(result).insertAfter(".accounts-tableHead");
      });
    }

  };

  window.editAccount = function(id){
    callHandler.addInvoked("getAccountInfo", function(result){
      var data = JSON.parse(result);
      callHandler.addInvoked("getAccountTypes", function(r){
        $("#editAccountPopup .password-row").html("<p class='label'>Wachtwoord</p><input type='button' class='btn' value='Reset' id='accountPasswordResetBtn'>");
        $("#editAccountPopup input[type=hidden]").val(id);
        $("#editAccountPopup select[name=ranks_id]").html(r);
        insertPopupData("#editAccountPopup", data);
        $("#editAccountPopup").fadeIn(500);
        $("#page-overlay").fadeIn(500);
      });

    }, id);
  };

  window.resetAccountPassword = function(id, newPassword){
    var object = {
      id: id,
      newPassword: newPassword
    };
    callHandler.addInvoked("saveAccountPassword", function(result){
      $("#editAccountPopup .password-row").html("<p class='label'>Wachtwoord</p><p class='label' style='color: #990909; font-weight: bold;'>Wachtwoord gereset.</p>");
      $("#editAccountPasswordPopup").fadeOut(500);
    }, object);
  };

  window.saveEditAccountData = function(object){
    callHandler.addInvoked("saveEditAccountData", function(result){
      loadAccounts(true);
      $("#editAccountPopup").fadeOut(500);
      $("#page-overlay").fadeOut(500);
    }, object);
  };

});
