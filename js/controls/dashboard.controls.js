$(document).ready(function(){

  $("#editAccData").on("click", function(){
    removeDisable("#user-settings");
    $(this).hide();
    $("#saveAccData").show();
  });

  $("#saveAccData").on("click", function(){

    $dataArray = {
      "accounts_name": $("#acc_voornaam").val(),
      "accounts_tussenvoegsel": $("#acc_tussenvoegsel").val(),
      "accounts_lastname": $("#acc_lastname").val(),
      "accounts_birthdate": $("#acc_birthdate").val(),
      "accounts_email": $("#acc_email").val(),
      "accounts_email2": $("#acc_email2").val(),
      "accounts_phonenr": $("#acc_telnr").val(),
      "accounts_phonenr2": $("#acc_telnr2").val(),
      "accounts_mobnr": $("#acc_mobnr").val(),
      "accounts_mobnr2": $("#acc_mobnr2").val()
    };

    saveAccData($dataArray);

    addDisable("#user-settings");
    $("#acc_settings_loader").show();
  });
});
